/**
 * Service worker file
 */

const workBoxUrl =
	'https://storage.googleapis.com/workbox-cdn/releases/6.4.1/workbox-sw.js';

importScripts(workBoxUrl);

/**
 * Precache slot name
 */
const preCacheName = `pure-pre-cache`;

/**
 * Precache function
 * @param data url list
 */
const preCache = async (data = []) => {
	caches
		.open(preCacheName)
		.then((cache) => {
			console.log('caching files');
			cache.addAll(data);
		})
		.catch((error) => {
			console.log(`Error on precache files:\n${error}`);
		});
};

/**
 * Precache files
 */
preCache(['/favicon.ico']);
