var Bob = function() {};

Bob.prototype.hey = function(input) {

	// check for empty input
	if (!input.trim().length) {
		return 'Fine. Be that way!'
	}

	// check for uppercase alpha only input
	if (input.toUpperCase() == input && input.toLowerCase() != input) {
		return 'Whoa, chill out!'
	}

	// check for questions
	if (input.trim().slice(-1) == '?') {
		return 'Sure.'
	}

	// default
	return 'Whatever.'

};

module.exports = Bob;