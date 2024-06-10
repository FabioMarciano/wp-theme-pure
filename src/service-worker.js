/**
 * Service worker file
 */

const workBoxUrl =
	'https://storage.googleapis.com/workbox-cdn/releases/6.4.1/workbox-sw.js';

importScripts(workBoxUrl);

/**
 * Precache slot name
 */
const preCacheSlotName = `pure-pre-cache`;

/**
 * Precache item list
 */
const preCacheItemList = ['/favicon.ico'];

/**
 * Precache function
 * @param data url list
 */
(async (data = []) => {
	caches
		.open(preCacheSlotName)
		.then((cache) => {
			console.log(`Caching files on ${preCacheSlotName}`);
			cache.addAll(data);
		})
		.catch((error) => {
			console.log(`Error on precaching files:\n${error}`);
		});
})(preCacheItemList);
