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
		// 实例化Data数据对象"
		import('ORG.Util.Page');
		// 导入分页类
		$map = "";
		$count = $Data -> where($map) -> count();
		// 查询满足要求的总记录数 $map表示查询条件
		$Page = new Page($count);
		// 实例化分页类 传入总记录数
		$show = $Page -> show();
		// 分页显示输出
		$list = $Data -> where($map) -> order('dateline') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		// 进行分页数据查询
		$this -> assign('list', $list);
		// 赋值数据集
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
		
		if($down -> add()){
			$this -> success('数据保存成功！');
		}else{
			$this -> error('数据保存失败！');
		}
		
	}

}
