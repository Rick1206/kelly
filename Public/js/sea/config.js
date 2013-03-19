seajs.config({
    alias: {
        'jquery': '/kelly/Public/js/jquery.min.js',
        'carouFredSel':'/kelly/Public/js/jquery.carouFredSel-6.2.0-packed.js',
        'jscrollpane':'/kelly/Public/js/jquery.jscrollpane.js',
        'jscrollpaneCss':'/kelly/Public/js/jquery.jscrollpane.css',
        'mousewheel':'/kelly/Public/js/jquery.mousewheel.js',
        'lightbox':'/kelly/Public/js/jquery.lightbox.js'
    },
    vars: {
       js:"/kelly/Public/js/"
    },
    preload:[
        this.JSON ? '' : 'json',
        Function.prototype.bind ? '' : 'es5-safe',
        'jquery'],
    plugins:['text']
});

