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
			if (window.innerWidth < WINDOW_WIDTH_LG) {
                return
            }

            e.preventDefault()
            const subMenu = menuLink.nextElementSibling

            subMenus.forEach(otherSubMenu => {
                if (otherSubMenu !== subMenu) {
                    otherSubMenu.classList.remove('showed')
                }
            })

			if(!subMenu.classList.contains('showed')) subMenu.classList.add('showed')
			else subMenu.classList.remove('showed')

            if (headerBox.classList.contains('showed')) {
                headerBox.classList.remove('showed')
            }
        })
    })

    document.addEventListener('click', e => {
        if (!e.target.closest('.menu-item-has-children')) {
           subMenus.forEach(subMenu => {
                subMenu.classList.remove('showed')
            })
        }
    })
}

const toggleBurgerMenu = () => {
    const burgerButton = document.querySelector('.burger-button-dual')
    const headerBox = document.querySelector('.header-dual-box')

    burgerButton.addEventListener('click', () => {
        headerBox.classList.toggle('showed')

        document.querySelectorAll('.sub-menu-wrapper').forEach(subMenu => {
            subMenu.classList.remove('showed')
        })
    })

    document.addEventListener('click', e => {
        if (!e.target.closest('.header-dual-box') && !e.target.closest('.burger-button-dual')) {
            headerBox.classList.remove('showed')
        }
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