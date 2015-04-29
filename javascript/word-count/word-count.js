module.exports = function(input) {

	// normalize spaces and split string at spaces
	var index = {},
		words = input.split(/\s+/);

	// loop through words and count each
	words.forEach(function(word) {
		index.hasOwnProperty(word) ? index[word] ++ : index[word] = 1;
	});

	return index;

};