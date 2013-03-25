seajs.config({
    alias: {
        'jquery': '/Public/js/jquery.min.js',
        'carouFredSel':'/Public/js/jquery.carouFredSel-6.2.0-packed.js',
        'jscrollpane':'/Public/js/jquery.jscrollpane.js',
        'jscrollpaneCss':'/Public/js/jquery.jscrollpane.css',
        'mousewheel':'/Public/js/jquery.mousewheel.js',
        'lightbox':'/Public/js/jquery.lightbox.js'
    },
    vars: {
       js:"/Public/js/"
    },
    preload:[
        this.JSON ? '' : 'json',
        Function.prototype.bind ? '' : 'es5-safe',
        'jquery'],
    plugins:['text']
});

