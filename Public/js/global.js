/**
 * Created with JetBrains PhpStorm.
 * User: u
 * Date: 13-3-29
 * Time: 下午12:57
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module){
    var __window = $(window);
    var __body = $('body');
    var __document = $(document);
    var footer = $('.footer');
    function footerbfix(){
        if(__document.height()==__window.height()){
           footer.css({
               position:'relative',
               bottom:'auto'
           });
        }
    }

    __document.ready(function(){

    });
    __window.resize(function(){
        footerbfix();
    })
})