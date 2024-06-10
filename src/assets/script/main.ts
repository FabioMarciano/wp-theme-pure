/**
 * Main script file
 */

'use strict';

import Throttle from './util/throttle';
import Debounce from './util/debounce';

console.log('Main script file loaded');

/**
 * Gets the propper text for the navigation button
 * @returns string the selected text
 */
const setButtonText = (): string => {
	const btnNavigationPrefix = [`Abrir`, `Fechar`][
		Number(document.body.hasAttribute('data-body-nav'))
	];
	const btnNavigationSuffix = `menu de navegação`;
	return [btnNavigationPrefix, btnNavigationSuffix].join(' ');
};

/**
 * Sets or removes an attribute (and value) on a given element
 * @param HTMLElement the element to toggle the attribute
 * @param string the attribute key
 * @param any the attribute value
 * @returns void
 */
const toggleAttribute = (element: HTMLElement, attribute: string): void => {
	element && element.toggleAttribute(attribute);
};

/**
 * Checks the scroll Y position and updates body's data-scroll attribute
 * @returns void
 */
const setScrollPositionAttribute = () => {
	const scrollPositionY = window.scrollY;
	document.body.setAttribute('data-scroll', `${scrollPositionY > 0}`);
};

/**
 * Sets and configures the main menu button
 * @param HTMLElement the target element to be controled by the button
 * @param HTMLElement the parent element to set the button
 * @returns void
 */
((
	target: HTMLElement | null,
	parent: HTMLElement | null,
	prefix: string = ''
): void => {
	if (!(target && parent)) {
		return;
	}

	const btnNavButtonElement: HTMLElement = document.createElement('button');
	const documentBodyElement: HTMLElement = document.body;
	const bodyDataAttributeId: string = ['data', target.getAttribute('id')].join(
		'-'
	);

	btnNavButtonElement.setAttribute('type', 'button');
	btnNavButtonElement.setAttribute(
		'id',
		[prefix, 'toggle', 'nav', 'button'].join('-')
	);
	btnNavButtonElement.textContent = setButtonText();

	btnNavButtonElement.addEventListener(
		'click',
		Debounce(
			(): void => {
				toggleAttribute(document.body, bodyDataAttributeId);
				btnNavButtonElement.textContent = setButtonText();
			},
			{ timeout: 200, wait: false }
		)
	);

	parent.appendChild(btnNavButtonElement);

	documentBodyElement.addEventListener('click', (event: any): void => {
		event.target.removeAttribute(bodyDataAttributeId, null);
	});
})(
	document.querySelector('#body-nav'),
	document.querySelector('#body-header > div'),
	'body-header'
);

/**
 * Sets window's scroll and scroll end events
 * @returns void
 */
(() => {
	window.addEventListener(
		'scroll',
		Throttle(
			() => {
				setScrollPositionAttribute();
			},
			{ delay: 300 }
		)
	);
	window.addEventListener('scrollend', () => {
		setScrollPositionAttribute();
	});
})();
