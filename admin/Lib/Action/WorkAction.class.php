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
<<<<<<< HEAD
=======
		
		//dump($list);
		
>>>>>>> 898570b10a4be6ddd3f8912b386dc2afa2c2b491
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
<<<<<<< HEAD
		$work -> add();
		
=======
		
		$work -> add();
		// 写入用户数据到数据库
>>>>>>> 898570b10a4be6ddd3f8912b386dc2afa2c2b491
		$this -> success('数据保存成功！');
		
	}
	
	
<<<<<<< HEAD
	public function editworks() {
	
		$Form = D('work');
		
	
		
		$map["wid"] = $this->_param("wid");
		
		$result = $Form -> where($map) -> select();
		
		$this -> assign('data', $result);
		
			$this->getcategory();
		$this -> display();

	}
	
	public function editw(){
		$Form = D('work');
		$map["wid"] = $_POST['wid'];

		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/Works/';
		$upload -> thumb = true;
		$upload -> imageClassPath = 'ORG.Util.Image';
		$upload -> thumbMaxWidth = '50,162';
		$upload -> thumbMaxHeight = '50,108';
		$upload -> thumbPrefix = 's_';

		if (!$upload -> upload()) {
			if ($upload -> getErrorMsg() == "没有选择上传文件") {
				$data['photo'] = $_POST['photo'];
			} else {
				$this -> error($upload -> getErrorMsg());
			}
		} else {
			$info = $upload -> getUploadFileInfo();
			$data['photo'] = $info[0]['savename'];
			@unlink('Public/Uploads/Works/s_' . $imgurl["photo"]);
			@unlink('Public/Uploads/Works/' . $imgurl["photo"]);
		}
		
		$data["cid"] = $_POST['cid'];
		$data["title_cn"] = $_POST['title_cn'];
		$data["title_en"] = $_POST['title_en'];
		$data["dateline"] = $_POST['dateline'];
		$data["description_cn"] = $_POST['description_cn'];
		$data["description_en"] = $_POST['description_en'];
		$data["dateline"] = $_POST['dateline'];
		$data["orderby"] = $_POST['orderby'];
		
		
		$result = $Form -> where($map) -> save($data);

		if ($result) {
			$this -> success('操作成功');
		} else {
			$this -> error('写入错误');
		}

	}
	
	
=======
	public function editbanners() {
		$this -> display();
	}
>>>>>>> 898570b10a4be6ddd3f8912b386dc2afa2c2b491

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
		
<<<<<<< HEAD
		$work = D("work_category");
		
		$work -> create();
		
		$work -> category_name = $_POST['category_name'];
		$work -> description = $_POST['description'];
		$work -> dateline = $_POST['dateline'];
		$work -> orderby = $_POST['orderby'];
		
		if($work -> add()){
			$this -> success('数据保存成功！');
		}else{
			$this -> error('数据保存失败！');
		}
	}

=======
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
	
	
	
	
>>>>>>> 898570b10a4be6ddd3f8912b386dc2afa2c2b491

}
