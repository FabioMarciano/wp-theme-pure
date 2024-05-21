const fs = require('fs');
const pack = require('./package.json');
const sass = require('sass');

console.log('Theme assembly init');

const buildDirRoot = `./dist`;

const sourceDirPath = `./src`;

const buildDirName = `${pack.name}-${pack.version}`;
const buildDirPath = [buildDirRoot, buildDirName].join('/');

const clean = () => {
	console.log(`Cleaning ${buildDirPath}`);
	const list = fs
		.readdirSync(buildDirPath, { recursive: true })
		.forEach((inode) =>
			fs.rmSync(`${[buildDirPath, inode].join('/')}`, {
				force: true,
				recursive: true,
			})
		);
};

const create = () => {
	console.log(`Creating empty ${buildDirPath}`);
	fs.mkdirSync(buildDirPath, { recursive: true });
};

const copy = () => {
	console.log(`Copying files from ${sourceDirPath}`);

	const exclude = ['scss', 'ts'];
	const list = fs
		.readdirSync(sourceDirPath, { recursive: true })
		.filter((path) => {
			return fs.lstatSync([sourceDirPath, path].join('/')).isFile();
		})
		.filter((file) => {
			const regExp = new RegExp(`\.(${exclude.join('|')}$)`, `i`);
			return !regExp.test(`${file}`);
		});

	list.forEach((origin) => {
		fs.cpSync(
			[sourceDirPath, origin].join('/'),
			[buildDirPath, origin].join('/')
		);
	});
};

const css = () => {
	const output = sass.compile(`${[sourceDirPath, 'style.scss'].join('/')}`);
	fs.writeFileSync(`${[buildDirPath, 'style.css'].join('/')}`, output.css, {
		encoding: 'utf-8',
	});
};

(() => {
	clean();
	create();
	copy();
	css();
})();
