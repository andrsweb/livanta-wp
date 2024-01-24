document.addEventListener( 'DOMContentLoaded', () => {
    'use strict'

	openDropdownAfterPageLoad()
	openDropdownsByClickingOnMenuItem()
	tabs()
} )

const openDropdownAfterPageLoad = () => {
	const hash = window.location.hash

	if( ! hash ) return

	const dropdown = document.querySelector( hash )

	console.log(dropdown)

	if(
		dropdown && dropdown.className &&
		( dropdown.classList.contains( 'dropdown' ) || dropdown.classList.contains( 'techTab' ) )
	) setTimeout( () => dropdown.click(), 100 )
}

const openDropdownsByClickingOnMenuItem = () => {
	const menuLinks = document.querySelectorAll( '.menu-item a' )

	if( ! menuLinks.length ) return

	menuLinks.forEach( link => {
		link.addEventListener( 'click', () => {
			const
				urlParts	= link.href.split( '#' ),
				anchor		= urlParts[1],
				dropdown	= document.querySelector( `#${ anchor }` )

			console.log( dropdown )

			if(
				dropdown && dropdown.className &&
				( dropdown.classList.contains( 'dropdown' ) || dropdown.classList.contains( 'techTab' ) )
			) dropdown.click()
		} )
	} )
}

const tabs = () => {
	const wraps = document.querySelectorAll( '.software__wrapper' )

	if( ! wraps.length ) return

	wraps.forEach( wrap => {
		const
			tabs		= wrap.querySelectorAll( '.techTab' ),
			contents	= wrap.querySelectorAll( '.software__item.tab-content' )

		if( ! tabs.length || ! contents.length ) return

		tabs.forEach( tab => {
			tab.addEventListener( 'click', () => {
				if( tab.classList.contains( 'active' ) ) return

				const
					activeTab		= wrap.querySelector( '.techTab.active' ),
					activeContent	= wrap.querySelector( '.software__item.tab-content.active' )

				if( activeTab ) activeTab.classList.remove( 'active' )
				if( activeContent ) activeContent.classList.remove( 'active' )

				tab.classList.add( 'active' )
				wrap.querySelector( `.tab-content[data-id="${ tab.dataset.id }"]` ).classList.add( 'active' )
			} )
		} )
	} )
}