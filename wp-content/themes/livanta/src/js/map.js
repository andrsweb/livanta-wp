import { isInScope } from "./common/global"

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	showMap()
} )

const showMap = () => {

	const map = document.querySelector( '.iframe-map' )

	if( ! map ) return

	const src = map.dataset.src

	if( ! src ) return

	document.addEventListener( 'scroll', () => {
		if ( isInScope( '.map', window.scrollY ) ) {
			if( ! map.classList.contains( 'loaded' ) ) {
				map.src = src
				map.classList.add( 'loaded' )
			}
		}
	} )
}