import { paginate } from './common/global'

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	blogPagination()
} )

const blogPagination = () => {
	const wrap = document.querySelector( '.pagination-wrapper' )

	if( ! wrap ) return

	const buttons = wrap.querySelectorAll( '.page-numbers' )

	if( ! buttons.length ) return

	let newPage

	document.addEventListener( 'click', e => {
		const
			target      = e.target,
			currentPage = parseInt( document.querySelector( '.page-numbers.current' ).innerHTML ) || 1

		if( target.tagName !== 'A' || ! target.className || ! target.classList.contains( 'page-numbers' ) ) return

		e.preventDefault()

		if( target.classList.contains( 'prev' ) ) newPage = currentPage - 1
		else if( target.classList.contains( 'next' ) ) newPage = currentPage + 1
		else newPage = parseInt( target.innerHTML )

		paginate( newPage, wrap, document.querySelector( '.news-filters .news-cards' ) )

		if( document.querySelector( '.blog-dual-cards' ) ){
			paginate( newPage, wrap, document.querySelector( '.blog-dual-cards' ) )
		}
	} )
}