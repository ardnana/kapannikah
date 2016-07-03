$(document).foundation();

var json = (function() {
    var json = null;
    $.ajax({
        'async': false,
        'global': false,
        'url': "jawaban.json",
        'dataType': "json",
        'success': function(data) {
            json = data;
        }
    });
    return json;
})();

var nextWord = (function() {
    var wordArray = json.jawaban;
    var copy;
    return function() {
        if (!copy || !copy.length)
            copy = wordArray.slice();
        return copy.splice(Math.random() * copy.length | 0, 1);
    };
}());