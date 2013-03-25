<?php
// 本类由系统自动生成，仅供测试用途
class BannerAction extends Action {
	public function index() {
		if ($this -> checkLogin()) {
			$this -> getData();
			$this -> display("index");
		} else {
			$this -> redirect("index/login");
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
		$Data = D('banners');
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
		$list = $Data -> where($map) -> order('UPDATE_DATE') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		// 进行分页数据查询
		$this -> assign('list', $list);
		// 赋值数据集
		$this -> assign('page', $show);
	}

	public function addbanners() {
		$this -> display();
	}

	public function add() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		//$upload -> maxSize = 3145728;
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/Banners/';
		if (!$upload -> upload()) {
			$this -> error($upload -> getErrorMsg());
		} else {
			$info = $upload -> getUploadFileInfo();
		}
		$Banner = M("banners");
		$Banner -> create();
		$Banner -> title_cn = $_POST['title_cn'];
		$Banner -> title_en = $_POST['title_en'];
		$Banner -> update_date = $_POST['update_data'];
		$Banner -> orderby = $_POST['orderby'];
		$Banner -> photo = $info[0]['savename'];
		$Banner -> add();
		// 写入用户数据到数据库
		$this -> success('数据保存成功！');
	}

	public function edit() {
		$Form = D('banners');
		$map["bid"] = $_POST['bid'];
		$data["title_cn"] = $_POST['title_cn'];
		$data["title_en"] = $_POST['title_en'];
		$data["update_date"] = $_POST['update_date'];
		$result = $Form -> where($map) -> save($data);
		if ($result) {
			$this -> success('操作成功');
		} else {
			$this -> error('写入错误');
		}
	}
	public function editbanners() {
		$Form = D('banners');
		$map["bid"] = $this -> _param("bid");
		$result = $Form -> where($map) -> select();
		$this -> assign('data', $result);
		$this -> display();
	}

	public function refresh() {
		$banners = D('banners');
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
			$this -> success('删除成功', 'index');
		} else {
			$this -> error('删除失败');
		}

	}

}
