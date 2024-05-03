import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'
import { setTargetElement, getTargetElement } from './common/global'


document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	showPopup('.popup-wrapper.video-wrapper', '.play__button', '#video-popup')
	showLeadershipPopup()
	showWorkPopup()
} )

const showPopup = ( selector, btn, lock) => {
	const popupWrapper    = document.querySelector( selector )
	const popButtons       = document.querySelectorAll( btn )
	const closeButtons     = document.querySelectorAll('.popup-close')
	setTargetElement( document.querySelector( lock ) )

	if( ! popupWrapper ) return
	popButtons.forEach( button => {
		button.addEventListener('click', () => {
			if(!popupWrapper.classList.contains('showed')) {
				popupWrapper.classList.add('showed')
				popupWrapper.classList.remove('closed')
				disableBodyScroll(getTargetElement(), { reserveScrollBarGap: true })
			}
		})
	})

	closeButtons.forEach( closeBtn => {
		closeBtn.addEventListener( 'click', () => {
				popupWrapper.classList.add('closed')
				setTimeout(() => popupWrapper.classList.remove('showed'), 350)
				setTimeout(() => popupWrapper.classList.remove('closed'), 350)
				enableBodyScroll(getTargetElement())
		} )
	})

	popupWrapper.addEventListener( 'click', e => {
		e.stopPropagation()

		const target = e.target

		if ( target.className && target.classList.contains( 'popup-wrapper' ) ) {
			const video = document.querySelector('.video')

			if(!video) return

			popupWrapper.classList.add('closed')
				setTimeout(() => popupWrapper.classList.remove('showed'), 350)
				setTimeout(() => popupWrapper.classList.remove('closed'), 350)
				video.pause()
				enableBodyScroll( getTargetElement() )
		}
	} )
}

const showLeadershipPopup = () => {
    const links = document.querySelectorAll('.leadership__link')
    const popups = document.querySelectorAll('.leadership__popup')

    if (!links.length || !popups.length) return

    links.forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault()
            const id = link.classList[1].split('-')[2]
            const popup = document.getElementById(`leadership-popup-${id}`)

            if (!popup) return

            setTargetElement(popup)
            popup.classList.add('showed')
            popup.classList.remove('closed')
            disableBodyScroll(getTargetElement(), { reserveScrollBarGap: true })
        })
    })

    popups.forEach(popup => {
        const closeBtn = popup.querySelector('.popup-close')

        closeBtn.addEventListener('click', () => {
            popup.classList.add('closed')
            setTimeout(() => popup.classList.remove('showed', 'closed'), 350)
            enableBodyScroll(getTargetElement())
        })

        popup.addEventListener('click', e => {
            const target = e.target

            if (target.className && target.classList.contains('popup-wrapper')) {
                popup.classList.add('closed')
                setTimeout(() => popup.classList.remove('showed', 'closed'), 350)
                enableBodyScroll(getTargetElement())
            }
        })
    })
}


const showWorkPopup = () => {
	const links = document.querySelectorAll( '.work__link' )

	if( ! links.length ) return

	const onPopupClose = popupWrapper => {
		popupWrapper.classList.add('closed')
		setTimeout(() => popupWrapper.classList.remove('showed'), 350)
		setTimeout(() => popupWrapper.classList.remove('closed'), 350)
		enableBodyScroll(getTargetElement())
	}

	links.forEach( link => {
		const popupWrapper = link.closest( '.work__link_wrapper' ).querySelector( '.popup-wrapper' )

		if( ! popupWrapper ) return

		link.addEventListener( 'click', () => {
			setTargetElement( popupWrapper )

			if( ! popupWrapper.classList.contains( 'showed' ) ){
				popupWrapper.classList.add( 'showed' )
				popupWrapper.classList.remove( 'closed' )
				disableBodyScroll( getTargetElement(), { reserveScrollBarGap: true } )
			}
		} )

		const closeBtn = popupWrapper.querySelector( '.popup-close' )

		if( closeBtn )
			closeBtn.addEventListener( 'click', () => onPopupClose( popupWrapper ) )

		popupWrapper.addEventListener( 'click', e => {
			e.stopPropagation()

			const target = e.target

			if ( target.className && target.classList.contains( 'popup-wrapper' ) ) onPopupClose( popupWrapper )
		} )
	} )
}