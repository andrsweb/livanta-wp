document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	copyLink()
} )

const copyLink = () => {
	const links = document.querySelectorAll( '.copy-to-clipboard' )

	if( ! links.length ) return

	links.forEach( link => {
		link.addEventListener( 'click', e => {
			e.preventDefault()
			let data = link.href

			copyToClipboard( data )
				.then( () => {
					link.classList.add( 'copied' )
					showNote( link )
					setTimeout( () => link.classList.remove( 'copied' ), 1000 )
				} )
				.catch( () => console.error( 'Error. Link not copied.' ) )
		} )
	} )
}

/**
 * Copy smth to clipboard.
 *
 * @param {String}	textToCopy	Specific text to copy.
 */
const copyToClipboard = textToCopy => {
	// Navigator clipboard api needs a secure context (https).
	if( navigator.clipboard && window.isSecureContext ){
		return navigator.clipboard.writeText( textToCopy )
	}	else {
		// text area method
		let textArea = document.createElement( 'textarea' )
		textArea.value = textToCopy;
		// Make the textarea out of viewport.
		textArea.style.position = 'absolute'
		textArea.style.left = '200%'
		textArea.style.top = '200%'
		textArea.style.opacity = 0
		document.body.appendChild( textArea )
		textArea.select()

		return new Promise( ( res, rej ) => {
			document.execCommand( 'copy' ) ? res() : rej()
			textArea.remove()
		} )
	}
}

const showNote = el => {
	if( ! el ) return

	setTimeout( () => el.insertAdjacentHTML( 'beforeend', '<span class="note">Copied!</span>' ), 1000 )
	setTimeout( () => el.querySelector( 'span.note' ).remove(), 2000 )
}