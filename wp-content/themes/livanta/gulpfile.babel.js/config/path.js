const pathSrc   = './src'
const pathDest  = './static'

/**
 * ! IMPORTANT - Change pathRoot value to your local domain name.
 */
const pathRoot = 'livanta.test/'

export default {
	root		: pathRoot,

	php			: { src: '**/*.php' },

	scss		: {
		src		: pathSrc + '/scss/main.scss',
		watch	: pathSrc + '/scss/**/*.scss',
		dest	: pathDest + '/css'
	},

	scssAcf		: {
		src		: './acf-flexible-content/**/*.scss',
		watch	: './acf-flexible-content/**/*.scss',
		dest	: pathDest + '/css'
	},

	scssDual361	: {
		src		: './acf-dual361/**/*.scss',
		watch	: './acf-dual361/**/*.scss',
		dest	: pathDest + '/css'
	},

	scssPages	: {
		src		: pathSrc + '/scss/pages/**/*.scss',
		watch	: pathSrc + '/scss/pages/**/*.scss',
		dest	: pathDest + '/css/pages'
	},

	js			: {
		src		: [
			pathSrc + '/js/main.js',
			pathSrc + '/js/pages/**/*.js',
			'./acf-flexible-content/**/*.js',
			'./acf-dual361/**/*.js'
		],
		watch	: [pathSrc + '/js/**/*.js', './acf-flexible-content/**/*.js', './acf-dual361/**/*.js'],
		dest	: pathDest + '/js'
	},

	img			: {
		src		: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		watch	: pathSrc + '/img/**/*.{png,jpg,jpeg,gif,svg}',
		dest	: pathDest + '/img'
	},

	fonts		: {
		src		: pathSrc + '/fonts/**/*',
		watch	: pathSrc + '/fonts/**/*',
		dest	: pathDest + '/fonts'
	},

	del			: {
		clean: [
			`${pathDest}/js/**/*`,
			`${pathDest}/scss/**/*`,
			`${pathDest}/img/**/*`,
			`${pathDest}/fonts/**/*`
		]
	}
}