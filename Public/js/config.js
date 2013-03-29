seajs.config({
    alias: {
        'jquery': 'jquery.min.js',
        'carouFredSel':'jquery.carouFredSel-6.2.0-packed.js',
        'jscrollpane':'jquery.jscrollpane.js',
        'jscrollpaneCss':'jquery.jscrollpane.css',
        'mousewheel':'jquery.mousewheel.js',
        'lightbox':'jquery.lightbox.js'
    },
    preload:[
        this.JSON ? '' : 'json',
        Function.prototype.bind ? '' : 'es5-safe',
        'jquery'],
    plugins:['text'],
    base:'/Public/js/'
});

