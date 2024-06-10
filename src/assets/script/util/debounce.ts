/**
 * Debounce script file
 */

'use strict';

import ifcDebounce from '../interface/ifc-debounce';

export default (
	event: Function,
	{ timeout = 500, wait = false }: ifcDebounce
) => {
	let timer: NodeJS.Timeout | undefined;

	return (...args: Array<any>) => {
		if (!wait && !timer) {
			event.apply(this, args);
		}

		clearTimeout(timer);

		timer = setTimeout(() => {
			wait && event.apply(this, args);
			wait = true;
		}, timeout);
	};
};
