const ajaxUrl = window.wpData.ajaxUrl
let targetElement

export const getTargetElement = () => targetElement
export const setTargetElement = element => targetElement = element

let windowHeight = window.innerHeight
export const getWindowHeight = () => windowHeight

export const isInScope = ( elementSelector, st, offset = 0 ) => {
	const element  = document.querySelector( elementSelector )
	if ( ! element) return
	let bodyRect  = document.body.getBoundingClientRect(),
		elemRect  = element.getBoundingClientRect(),
		elemTop    = elemRect.top - bodyRect.top

	if( ! element ) return

	if(
		st >= ( elemTop - getWindowHeight() + offset ) &&
		st <= ( elemTop + element.clientHeight - offset )
	) return true

    return false
}

export const WINDOW_WIDTH_LG = 992

/**
 * Custom AJAX request.
 *
 * @param	{Object}	formData	Data for fetch body.
 * @returns	{Array}					Response data array.
 */
export const customAjaxRequest = async formData => {
	let response = await fetch( ajaxUrl, {
		method	: 'post',
		body	: formData
	} )

	return await response.json()
}

/**
 * Process AJAX pagination.
 *
 * @param {Number} page
 * @param {HTMLElement} paginationWrap
 * @param {HTMLElement} postsWrap
 */
export const paginate = ( page, paginationWrap, postsWrap ) => {
	if( ! postsWrap || ! paginationWrap ) return

	const
		formData	= new FormData(),
		postType	= paginationWrap.dataset.type || 'post',
		term		= paginationWrap.dataset.term || '',
		perPage		= paginationWrap.dataset.perPage || ''

	formData.append( 'action', 'liv_ajax_pagination' )
	formData.append( 'post-type', postType )
	formData.append( 'term', term )
	formData.append( 'page', page || 1 )
	formData.append( 'per-page', perPage )
	customAjaxRequest( formData ).then( res => {
		if( res ){
			switch( res.success ){
				case true:
					const pagination = document.querySelector( '.pagination-wrapper' )

					postsWrap.innerHTML = res.data.posts

					if( pagination && res.data.pagination ){
						pagination.insertAdjacentHTML( 'afterend', res.data.pagination )
						pagination.remove()
					}

					scrollToElem( postsWrap )
					break

				case false:
					console.error( res.data.msg )
					break
			}
		}
	} )
}

/**
 * Scroll document to specific element.
 *
 * @param {String|Object}	elementSelector		DOM element selector to scroll to.
 * @param {Boolean}			ignoreHeaderHeight	Ignore site header height or not.
 * @param {Boolean}			scrollTop			Scroll to the top of the document.
 */
export const scrollToElem = ( elementSelector, ignoreHeaderHeight = false, scrollTop = false ) => {
	let element, offset

	switch( typeof elementSelector ){
		case 'string':
			element = document.querySelector( elementSelector )

			if( element )
				offset = scrollTop ? element.getBoundingClientRect().top : element.getBoundingClientRect().top + window.scrollY
			break

		case 'object':
			if( elementSelector )
				offset = scrollTop ? elementSelector.getBoundingClientRect().top : elementSelector.getBoundingClientRect().top + window.scrollY
			break

		default:
			offset = elementSelector
			break
	}

	if( ! offset ) return

	// If we need to check for header height.
	if( ! ignoreHeaderHeight )
		offset -= document.querySelector( '.header' ).clientHeight

	window.scroll( {
		top		: offset,
		behavior: 'smooth'
	} )
}