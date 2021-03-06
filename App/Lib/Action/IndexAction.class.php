<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        $this->nav = 1;
	    $this->display('index');
    }
    public function about(){
        $this->nav = 2;
        $this->subNav=1;
        $this->title='Information';
        $this->bgUrl='__PUBLIC__/images/banner/05.jpg';
        $this->display('about');
    }
    public function portfolo(){
        $this->nav = 2;
        $this->subNav=2;
        $this->title='Portfolio';
        $this->bgUrl='__PUBLIC__/images/banner/05.jpg';
        $this->art = "艺术家、设计师、演员、创作人、制片人，看似并不相关的几个身份，在阚诗淇身上却实现了统一。 她毕业于伦敦市中心著名的中央圣马丁艺术与设计学院，学习创意艺术、视觉艺术和时装设计。7月3日-26日，在上海红坊艺术园区内的圣菱画廊举行的“无住无相——诗淇的艺术”展览，是对诗淇艺术成就的第一次全面展示。更为重要的是，诗淇为所有热爱生活、执着追求美的人们，在影视、设计与艺术之间搭建了一座桥梁。 “但离一切相，是无相，但能离相，性体清净，此是无相为体。” “无住者，为人本性。念念不住，前念今念后念，念念相续，无有断绝。” 在佛教禅宗典籍《六祖坛经》中，有这样的句子。 而在星云法师《金刚经语录》中也提到：“刹那的善心是永恒的福报， 刹那的净心是永恒的功德； 刹那的觉心是永恒的觉悟， 刹那的无心是永恒的寂灭。” 在佛教经典熟稔于心的诗淇看来，生活就是佛行。她把自己首个艺术展览的主题定为“无住无相”，希冀通过艺术之力，集佛教之大义，融合现代艺术手法，凝聚心灵迸发之美。 抽象的心和佛像是诗淇绘画作品中的主要元素。日本艺术大师草间弥生因不断重复的圆点闻名。诗淇则在一直演绎由“心”形勾绘的画面。";
        $this->display('photo');
    }
    public function work(){
        $this->nav = 3;
        $this->title='Work';
        $this->bgUrl='__PUBLIC__/images/banner/06.jpg';
        $this->display('photo');
    }
    public function downloads(){
        $this->nav = 4;
        $this->title='Downloads';
        $this->bgUrl='__PUBLIC__/images/banner/07.jpg';
        $this->display('photo');
    }
    public function contact(){
        $this->nav = 5;
        $this->title='Contact';
        $this->bgUrl='__PUBLIC__/images/banner/08.jpg';
        $this->display('contact');
    }
    public function guestbook(){
        $this->nav = 6;
        $this->title='Guestbook';
        $this->bgUrl='__PUBLIC__/images/banner/09.jpg';
        $this->display('guestbook');
    }
    public function news(){
        $this->nav = 7;
        $this->title='News';
        $this->bgUrl='__PUBLIC__/images/banner/10.jpg';
        if($_GET['id']){
            $this->display('news_detail');
        }else{
            $this->display('news');
        }
    }
}