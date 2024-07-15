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
		Number(document.body.hasAttribute('data-body-navigation'))
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
	button: HTMLElement | null
): void => {
	if (!(target && parent && button)) {
		return;
	}

	const documentBodyElement: HTMLElement = document.body;
	const bodyDataAttributeId: string = ['data', target.getAttribute('id')].join(
		'-'
	);

	button.addEventListener(
		'click',
		Debounce(
			(): void => {
				target.scrollTop = 0;
				toggleAttribute(document.body, bodyDataAttributeId);
				button.textContent = setButtonText();
			},
			{ timeout: 200, wait: false }
		)
	);

	documentBodyElement.addEventListener(
		'click',
		Debounce(
			(event: any): void => {
				event.target.removeAttribute(bodyDataAttributeId, null);
			},
			{ timeout: 200, wait: false }
		)
	);
})(
	document.querySelector('#body-navigation'),
	document.querySelector('#body-header > div'),
	document.querySelector('#body-header-toggle-nav-button')
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
			{ delay: 200 }
		)
	);
	window.addEventListener('scrollend', () => {
		setScrollPositionAttribute();
	});
})();
