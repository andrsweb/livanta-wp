import Swiper from 'swiper'
import {Navigation} from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	initSwiper('.blog-articles-wrapper', '.blog-articles-swiper', 3)
})

const initSwiper = (parentSelector, swiperClass, view) => {
    const swiperElements = document.querySelectorAll(parentSelector)

    swiperElements.forEach((swiperItem) => {
        const prevButton = swiperItem.querySelector('.swiper-prev')
        const nextButton = swiperItem.querySelector('.swiper-next')
        const swiperContainer = swiperItem.querySelector(`.swiper${swiperClass}`)

        const swiper = new Swiper(swiperContainer, {
            spaceBetween: 20,
            breakpoints: {
                320: {
                    slidesPerView: 1,
					spaceBetween: 24
                },

				480: {
                    slidesPerView: 2,
					spaceBetween: 20
                },

                992: {
                    slidesPerView: view
                }
            },
            modules: [Navigation],
            navigation: {
                nextEl: nextButton,
                prevEl: prevButton,
            }
        })
    })
}
