module.exports = function Anagram(subject) {
	subject = subject.toLowerCase();

	// check if word is anagram of subject by comparing normalized strings
	function isAnagram(word) {
		word = word.toLowerCase();
		return (subject !== word && normalize(subject) === normalize(word));
	}

	// return array of matching anagrams
	return {
		matches: function(input) {
			if (typeof input === 'string') {
				input = [].slice.apply(arguments);
			}
			return input.filter(isAnagram);
		}
	};
}

// normalize input by sorting all characters in a string
function normalize(input) {
	return input.split('').sort().join('');
}