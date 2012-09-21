var http = require('http');
var jsdom = require('jsdom').jsdom;

jsdom.env("http://timecube.com/", [
  'http://code.jquery.com/jquery-1.8.1.min.js'
],
function(errors, window) {
    var ps = window.$('p');
    for (var i=0; i<ps.length; i++) {
        var screed = ps.eq(i);
        if (screed.find('span').length > 1) {
            var text = screed.text();
            text = text.replace(/[\s\r\n\*\uFFFD]+/g, ' ');
            text = text.replace(/[\-X\*=]{2,}/g, ' ');
            text = text.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
            console.log(text);
        }
    }
});