<?php
class DownloadsAction extends Action {
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
		$Data = D('downloads');
		import('ORG.Util.Page');
		$map = "";
		$count = $Data -> where($map) -> count();
		$Page = new Page($count);
		$show = $Page -> show();
		$list = $Data -> where($map) -> order('dateline') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		$this -> assign('list', $list);
		$this -> assign('page', $show);
	}

	public function add() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		//$upload -> maxSize = 3145728;
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/Downloads/';

		$upload -> thumb = true;
		$upload -> imageClassPath = 'ORG.Util.Image';
		$upload -> thumbMaxWidth = '50,162';
		$upload -> thumbMaxHeight = '50,108';
		$upload -> thumbPrefix = 's_';

		if (!$upload -> upload()) {
			$this -> error($upload -> getErrorMsg());
		} else {
			$info = $upload -> getUploadFileInfo();
		}
		$down = D("downloads");
		$down -> create();
		$down -> title_cn = $_POST['title_cn'];
		$down -> title_en = $_POST['title_en'];
		$down -> dateline = $_POST['dateline'];
		$down -> orderby = $_POST['orderby'];
		$down -> photo = $info[0]['savename'];

		if ($down -> add()) {
			$this -> success('数据保存成功！');
		} else {
			$this -> error('数据保存失败！');
		}

	}

	public function editdownloads() {

		$Form = D('downloads');

		$map["did"] = $this -> _param("did");

		$result = $Form -> where($map) -> select();

		$this -> assign('data', $result);

		$this -> display();

	}
	
	public function edit() {
		
		$map["did"] = $_POST['did'];
		$Form = D('downloads');
		$imgurl =  $Form ->field("photo")-> where($map) ->find();

		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/Downloads/';
		$upload -> thumb = true;
		$upload -> imageClassPath = 'ORG.Util.Image';
		$upload -> thumbMaxWidth = '50,162';
		$upload -> thumbMaxHeight = '50,108';
		$upload -> thumbPrefix = 's_';

		if (!$upload -> upload()) {
			if($upload -> getErrorMsg()=="没有选择上传文件"){
				$data['photo'] = $_POST['photo'];
			}else{
				$this -> error($upload -> getErrorMsg());
			}
		} else {
			
			$info = $upload -> getUploadFileInfo();
				$data['photo'] = $info[0]['savename'];
				@unlink('Public/Uploads/Downloads/s_'.$imgurl["photo"]);
				@unlink('Public/Uploads/Downloads/'.$imgurl["photo"]);
			}
		
		$data["title_cn"] = $_POST['title_cn'];
		$data["title_en"] = $_POST['title_en'];
		$data["dateline"] = $_POST['dateline'];
	
		$result = $Form -> where($map) -> save($data);
		
		if ($result) {
			$this -> success('操作成功');
		} else {
			$this -> error('操作失败');
		}
		
		

	}

}
