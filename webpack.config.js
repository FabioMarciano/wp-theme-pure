/**
 * Webpack Config file
 */

'use strict';

const path = require('path');
const pack = require('./package.json');
const TerserPlugin = require('terser-webpack-plugin');

const entryFileRoot = `./src`;
const entryFilePath = `assets/script`;
const entryFilename = `main.ts`;

const buildDirRoot = `./dist`;
const buildDirName = `${pack.name}-${pack.version}`;

const buildDirPath = [buildDirRoot, buildDirName, entryFilePath].join('/');
const sourceDirPath = [entryFileRoot, entryFilePath, entryFilename].join('/');

module.exports = {
	mode: 'development',
	devtool: 'inline-source-map',
	entry: {
		main: sourceDirPath,
	},
	output: {
		path: path.resolve(__dirname, buildDirPath),
		filename: '[name].js',
	},
	optimization: {
		minimize: true,
		minimizer: [new TerserPlugin({ minify: TerserPlugin.uglifyJsMinify })],
	},
	resolve: {
		extensions: ['.ts', '.tsx', '.js'],
	},
	module: {
		rules: [
			{
				test: /\.tsx?$/,
				loader: 'ts-loader',
			},
		],
	},
};
