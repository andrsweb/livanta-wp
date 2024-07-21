document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	toggleDropdown()
})

const reCalculateDropdownHeight = dropdown => {
    const dropdownOpen  = dropdown.querySelector( '.dual-dropdown-open' ),
        dropdownInner   = dropdown.querySelector( '.dual-dropdown-inner' )

    if (! dropdownOpen || ! dropdownInner) return

    dropdownOpen.style.height = `${ dropdownInner.getBoundingClientRect().height }px`
}

const toggleDropdown = () => {
	const dropdownButtons = document.querySelectorAll('.dual-dropdown-button')

	if (!dropdownButtons.length) return

	dropdownButtons.forEach(button => {
		button.addEventListener('click', () => {
			const dropdown = button.closest('.dual-dropdown')
			const dropdownOpen = dropdown.querySelector('.dual-dropdown-open')
			if (!dropdownOpen) return

			if (!dropdown.classList.contains('opened')) {
				dropdown.classList.add('opened')
				reCalculateDropdownHeight(dropdown)
			} else {
				dropdown.classList.remove('opened')
				dropdownOpen.style.height = '0'
			}
		})
	})
}

window.addEventListener('resize', () => {
	const dropdowns = document.querySelectorAll('.dropdown.opened')

	if (!dropdowns.length) return

	dropdowns.forEach(dropdown => reCalculateDropdownHeight(dropdown))
})