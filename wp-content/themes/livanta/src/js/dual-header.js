import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'
import { setTargetElement, getTargetElement } from './common/global'
import { WINDOW_WIDTH_LG } from "./common/global"

document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	headerScroll()
	toggleSubMenu()
	toggleBurgerMenu()
})

const toggleSubMenu = () => {
    const menuLinks = document.querySelectorAll('.menu-item-has-children > a')
    const headerBox = document.querySelector('.header-dual-box')
	const subMenus = document.querySelectorAll('.sub-menu-wrapper')

	if(!menuLinks.length || !headerBox) return

    menuLinks.forEach(menuLink => {
		if(!menuLink) return

        menuLink.addEventListener('click', e => {
			if (window.innerWidth < WINDOW_WIDTH_LG) return

            e.preventDefault()
            const subMenu = menuLink.nextElementSibling

            subMenus.forEach(otherSubMenu => {
                if (otherSubMenu !== subMenu) {
                    otherSubMenu.classList.remove('showed')
                }
            })

			menuLinks.forEach(prevMenuLink => {
				if (prevMenuLink !== menuLink) {
					prevMenuLink.classList.remove('clicked')
				}
			});

			if(!subMenu.classList.contains('showed')) {
				subMenu.classList.add('showed')
				menuLink.classList.add('clicked')
			}
			else {
				subMenu.classList.remove('showed')
				menuLink.classList.remove('clicked')
			} 

            if (headerBox.classList.contains('showed')) {
                headerBox.classList.remove('showed')
            }
        })
    })

    document.addEventListener('click', e => {
        if (!e.target.closest('.menu-item-has-children')) {
           subMenus.forEach(subMenu => {
                subMenu.classList.remove('showed')
				menuLinks.forEach(link => link.classList.remove('clicked'))
            })
        }
    })

	window.addEventListener('resize', () => {
		if(window.innerWidth >= WINDOW_WIDTH_LG) menuLinks.forEach(link => link.classList.remove('clicked'))
	})
}

const toggleBurgerMenu = () => {
    const burgerButton = document.querySelector('.burger-button-dual')
    const headerBox = document.querySelector('.header-dual-box')
	const menuLinks = document.querySelectorAll('.menu-item-has-children > a')

    burgerButton.addEventListener('click', () => {
		setTargetElement(document.querySelector('#header-box'))
		if(!headerBox.classList.contains('showed')) {
			headerBox.classList.add('showed')
			menuLinks.forEach(link => link.classList.remove('clicked'))
			disableBodyScroll(getTargetElement(), { reserveScrollBarGap: true })
		} else {
			headerBox.classList.remove('showed') 
			enableBodyScroll(getTargetElement())
		}

        document.querySelectorAll('.sub-menu-wrapper').forEach(subMenu => {
            subMenu.classList.remove('showed')
        })
    })

    document.addEventListener('click', e => {
        if (!e.target.closest('.header-dual-box') && !e.target.closest('.burger-button-dual')) {
            headerBox.classList.remove('showed')
        }
    })

	window.addEventListener('resize', () => {
		if(window.innerWidth >= WINDOW_WIDTH_LG) headerBox.classList.remove('showed')
	})
}

const headerScroll = () => {
	window.addEventListener('scroll', () => {
		const scrollTop = window.scrollY
		const header = document.querySelector('.header-dual')

		if (!header) return

		if (scrollTop > 0) {
			if (!header.classList.contains('scrolled'))
				header.classList.add('scrolled')
		} else {
			header.classList.remove('scrolled')
		}
	})
}