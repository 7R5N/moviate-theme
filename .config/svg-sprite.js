// Common svg-sprite config options and their default values
const config = {
	dest: './img', // Main output directory
	log: debug, // Logging verbosity (default: no logging)
	mode: {
	//	inline: true, // Prepare for inline embedding
		symbol: true, // Create a «symbol» sprite
		dest: "./",
		sprite: "octicons.svg"
	}
}
