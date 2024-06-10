/**
 * Throttle script file
 */

'use strict';

import ifcThrottle from '../interface/ifc-throttle';

export default (event: Function, { delay = 500 }: ifcThrottle) => {
	let time = Date.now();

	return (...args: Array<any>) => {
		if (time + delay - Date.now() <= 0) {
			event.apply(this, args);
			time = Date.now();
		}
	};
};
