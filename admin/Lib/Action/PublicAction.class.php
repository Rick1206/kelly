<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
	public function index() {
		//echo 'hello,world!';
		$Data = M('banners');
		$this->name = 'test'; 
		  
		// 实例化Data数据模型
		$this -> data = $Data -> select();
		$this -> display();
		//$this -> display();
		//$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
	}
	
	public function Login(){
		//echo "1";
		$this -> display();
	}

}
