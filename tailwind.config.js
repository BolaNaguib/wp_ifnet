module.exports = {
	purge: {
		enabled: true,
		content: ["./**/*.php"],
	},
	theme: {
		extend: {
			colors: {
				main: "#303030",
				secondary: "#106eaa",
				orange: "#f1543a",
			},
			fontFamily: {
				body: ["Rubik", "sans-serif"],
				display: ["Lobster Two", "cursive"],
				number: ["sans-serif"],
			},
		},
	},
	variants: {},
	plugins: [],
};
