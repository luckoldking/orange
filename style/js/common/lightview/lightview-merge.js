/*
* @lightview plugin engined by jQuery http://projects.nickstakenburg.com/lightview/documentation
* @author xin.jingx
* @date   2012-10-25
*/
/*merge start*/
(function() {
    ImportJavascript = {
        url: function(url) {
            document.write("<script type=\"text/javascript\" src=\"" + url + "\"></scr" + "ipt>");
        }
    }
})();
/*merge end*/
ImportJavascript.url("/wordpress/wp-content/themes/orange/style/js/common/lightview/swfobject.js");
ImportJavascript.url("/wordpress/wp-content/themes/orange/style/js/common/lightview/excanvas.js");
ImportJavascript.url("/wordpress/wp-content/themes/orange/style/js/common/lightview/spinners.min.js");
ImportJavascript.url("/wordpress/wp-content/themes/orange/style/js/common/lightview/lightview.js");



