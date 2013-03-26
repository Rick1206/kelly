<?php
// 本类由系统自动生成，仅供测试用途
class WorkAction extends Action {
	public function index() {
		if ($this -> checkLogin()) {
			$this -> getData();
			
			$this -> display("index");
		} else {
			$this -> display("index/login");
		}
	}

	public function checkLogin() {
		if (!isset($_SESSION["islogin"]) && !isset($_SESSION["adname"])) {
			return false;
		} else {
			return true;
		}
	}

	public function getData() {
		
		$Data = D('Work');
		import('ORG.Util.Page');
		
		$map = "";
		$count = $Data->Relation(true) -> where($map) -> count();
		$Page = new Page($count);
		$show = $Page -> show();
		$list = $Data -> Relation(true) -> where($map) -> order('dateline') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		$this -> assign('list', $list);
		
		//dump($list);
		
		$this -> assign('page', $show);
	}

	public function addworks() {
		$this->getcategory();
		$this -> display();
	}
	
	public function addw() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		//$upload -> maxSize = 3145728;
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		
		$upload -> savePath = 'Public/Uploads/Works/';
		$upload->thumb = true;
		$upload->imageClassPath = 'ORG.Util.Image';
		$upload->thumbMaxWidth = '50,162';
		$upload->thumbMaxHeight = '50,108';
		$upload->thumbPrefix = 's_';
		
		if (!$upload -> upload()) {
			$this -> error($upload -> getErrorMsg());
		} else {
			$info = $upload -> getUploadFileInfo();
		}
		
		$work = D("work");
		
		$work -> create();
		$work -> cid = $_POST["cid"];
		$work -> title_cn = $_POST['title_cn'];
		$work -> title_en = $_POST['title_en'];
		$work -> description_en =  $_POST['description_en'];
		$work -> description_cn =  $_POST['description_cn'];
		$work -> dateline = $_POST['dateline'];
		$work -> orderby = $_POST['orderby'];
		$work -> photo = $info[0]['savename'];
		
		$work -> add();
		// 写入用户数据到数据库
		$this -> success('数据保存成功！');
		
	}
	
	
	public function editbanners() {
		$this -> display();
	}

	public function wrefresh() {
		$banners = D('work');
		$res = FALSE;
		if (isset($_POST['cho'])) {
			$nid = $_POST['cho'];
		}
		foreach ($nid as $key => $value) {
			if ($banners -> delete($value)) {
				$res = TRUE;
			} else {
				$res = FALSE;
			}
		}
		if ($res) {
			    $this->success('删除成功', 'index');
		} else {
			$this -> error('删除失败');
		}

	}
	
	public function crefresh() {
		$banners = D('work_category');
		$res = FALSE;
		if (isset($_POST['cho'])) {
			$nid = $_POST['cho'];
		}
		foreach ($nid as $key => $value) {
			if ($banners -> delete($value)) {
				$res = TRUE;
			} else {
				$res = FALSE;
			}
		}
		if ($res) {
			    $this->success('删除成功', 'index');
		} else {
			$this -> error('删除失败');
		}

	}
	
	
	
	public function category(){
		
		$Data = D('work_category');
		import('ORG.Util.Page');
		$map = "";
		$count = $Data -> where($map) -> count();
		$Page = new Page($count);
		$show = $Page -> show();
		$list = $Data -> where($map) -> order('dateline') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		$this -> assign('list', $list);
		$this -> assign('page', $show);

		$this->display();
	}
	
	public function getcategory(){
		$category = D('work_category');
		$map = "";
		$list = $category -> where($map) -> order('orderby,dateline desc') -> select();
		$this -> assign('clist', $list);
	}
	
	public function addcategory(){
		$this->display();
	}
	
	public function addc(){
		
		$work = D("work_catgory");
		
		$work -> create();
		
		//$work -> cid = $_POST["cid"];
		$work -> title_cn = $_POST['title_cn'];
		$work -> title_en = $_POST['title_en'];
		$work -> description_en =  $_POST['description_en'];
		$work -> description_cn =  $_POST['description_cn'];
		$work -> dateline = $_POST['dateline'];
		$work -> orderby = $_POST['orderby'];
		$work -> photo = $info[0]['savename'];
		
		$work -> add();
		// 写入用户数据到数据库
		$this -> success('数据保存成功！');
		
		
	}
	
	
	
	

}
