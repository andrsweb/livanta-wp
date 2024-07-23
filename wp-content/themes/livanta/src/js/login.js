document.addEventListener('DOMContentLoaded', () => {
	'use strict'

	togglePasswordVisibility()
})

const togglePasswordVisibility = () => {
	const toggleVisibilityButton = document.querySelector('.toggle-visibility')
	const passwordInput = document.getElementById('pass')

	if (toggleVisibilityButton && passwordInput) {
		toggleVisibilityButton.addEventListener('click', () => {
			const currentType = passwordInput.getAttribute('type')
			const newType = currentType === 'password' ? 'text' : 'password'
			passwordInput.setAttribute('type', newType)
		})
	}
}
