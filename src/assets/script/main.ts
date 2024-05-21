/**
 * Main script file
 */

'use strict';

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
	return [btnNavigationPrefix, btnNavigationSuffix].join();
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

	btnNavButtonElement.addEventListener('click', (): void => {
		toggleAttribute(document.body, bodyDataAttributeId);
		btnNavButtonElement.innerHTML = setButtonText();
	});

	parent.appendChild(btnNavButtonElement);

	documentBodyElement.addEventListener('click', (event: any): void => {
		event.target.removeAttribute(bodyDataAttributeId, null);
	});
})(
	document.querySelector('#body-nav'),
	document.querySelector('#body-header > div'),
	'body-header'
);
