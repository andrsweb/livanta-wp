import Swiper from 'swiper'
import {Navigation, Scrollbar} from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	initSwiper('.dual-quotes-wrapper', '.blog-quotes-swiper')
})

const initSwiper = (parentSelector, swiperClass) => {
    const swiperElements = document.querySelectorAll(parentSelector)

    swiperElements.forEach((swiperItem) => {
        const prevButton = swiperItem.querySelector('.swiper-prev')
        const nextButton = swiperItem.querySelector('.swiper-next')
        const swiperContainer = swiperItem.querySelector(`.swiper${swiperClass}`)

        const swiper = new Swiper(swiperContainer, {
            spaceBetween: 20,
			slidesPerView: 1,
            modules: [Navigation, Scrollbar],
            navigation: {
                nextEl: nextButton,
                prevEl: prevButton,
            },

			scrollbar: {
				el: '.swiper-scrollbar',
				dragSize: 'auto'
			  }
        })
    })
}
