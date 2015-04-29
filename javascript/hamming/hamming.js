module.exports.compute = function(a, b) {

	if (a.length != b.length) {
		throw new Error('DNA strands must be of equal length.');
	}

	return a.split('').reduce(function(result, aval, i) {
		return result + (aval != b[i]);
	}, 0);

};