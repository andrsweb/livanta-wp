document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	changeTab()
} )

const changeTab = () => {
	const
		tabsHeaders		= document.querySelectorAll( '.work-popup-button' ),
		tabsContents	= document.querySelectorAll( '.work-popup-content' )

	if( ! tabsHeaders.length || ! tabsContents.length ) return

	tabsHeaders.forEach( tab => {
		tab.addEventListener( 'click', () => {
			const id = tab.dataset.id

			if( ! id || tab.classList.contains( 'active' ) ) return

			tab.closest( '.popup-wrapper' ).querySelectorAll( '.work-popup-button' ).forEach( tabsItem => tabsItem.classList.remove( 'active' ) )
			tab.classList.add( 'active' )
			tab.closest( '.popup-wrapper' ).querySelectorAll( '.work-popup-content' ).forEach( content => content.classList.remove( 'active' ) )
			tab.closest( '.popup-wrapper' ).querySelector( `.work-popup-content[data-id="${ id }"]` ).classList.add( 'active' )
		} )
	} )
}