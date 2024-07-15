import smoothscroll from 'smoothscroll-polyfill'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	smoothscroll.polyfill()
	smoothScrollForAnchors()
} )

const smoothScrollForAnchors = () => {
	const anchors = document.querySelectorAll( '.menu-item a[href*="#"]' )

	if ( ! anchors.length ) return

	anchors.forEach( link => {
		link.addEventListener( 'click', e => {

			if(!anchor) return
			
			const
				urlParts	= link.href.split( '#' ),
				pageUrl		= urlParts[0],
				anchor		= urlParts[1],
				windowHref	= window.location.href.split( '#' )[0],
				el			= document.querySelector( `#${ anchor }` )

			if( el && pageUrl === windowHref ){
				e.preventDefault()
				el.scrollIntoView( {
					behavior: 'smooth',
					block: 'start'
				} )
			}
		} )
	} )
}