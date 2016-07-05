$(document).foundation();


//FACEBOOK
window.fbAsyncInit = function() {
    FB.init({
        appId: "144429712647002",
        xfbml: true,
        version: 'v2.6'
    });
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


//TWITTER
window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
    if (d.getElementById(id))
        return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
        t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));


//ANSWER
function refresh() {
    $.ajax({type: "GET", dataType: "json", url: "https://auliawillmarry.me/kapannikah/getAnswer.php", processData: false, contentType: "application/json", data: "", beforeSend: function() {
        }, complete: function() {
        }, success: function(e) {
            console.log(e);
            $("#answer").hide().html(e).fadeIn('fast');
            $("#twitter-share").html("");
            twttr.ready(function(twttr) {
                twttr.widgets.createShareButton(
                        'http://kapannikah.in',
                        document.getElementById('twitter-share'),
                        function(el) {
                            console.log("Button created!!!11.");
                        }, {
                    text: e,
                    hashtags: "KapanNikah"
                });
            });
        }});
}

//JSON
//var json = (function() {
//    var json = null;
//    $.ajax({
//        'async': false,
//        'global': false,
//        'url': "jawaban.json",
//        'dataType': "json",
//        'success': function(data) {
//            json = data;
//        }
//    });
//    return json;
//})();
//
//var nextWord = (function() {
//    var wordArray = json.jawaban;
//    var copy;
//    return function() {
//        if (!copy || !copy.length)
//            copy = wordArray.slice();
//        return copy.splice(Math.random() * copy.length | 0, 1);
//    };
//}());