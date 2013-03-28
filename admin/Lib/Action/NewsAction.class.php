<?php
// 本类由系统自动生成，仅供测试用途
class NewsAction extends Action {
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
		$Data = D('news');
		import('ORG.Util.Page');
		$map = "";
		$count = $Data -> where($map) -> count();
		$Page = new Page($count);
		$show = $Page -> show();
		$list = $Data -> where($map) -> order('dateline') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		$this -> assign('list', $list);
		$this -> assign('page', $show);
	}

	public function addnews() {
		$this -> display();
	}

	public function add() {
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		//$upload -> maxSize = 3145728;
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/News/';

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

		$news = D("news");
		$news -> create();
		$news -> title_cn = $_POST['title_cn'];
		$news -> title_en = $_POST['title_en'];
		$news -> dateline = $_POST['dateline'];
		$news -> orderby = $_POST['orderby'];
		$news -> photo = $info[0]['savename'];
		$news -> add();
		// 写入用户数据到数据库
		$this -> success('数据保存成功！');
	}

	public function editnews() {
		$Form = D('news');

		$map["nid"] = $this -> _param("nid");

		$result = $Form -> where($map) -> select();

		$this -> assign('data', $result);

		$this -> display();
	}

	public function edit() {
		$Form = D('news');

		$map["nid"] = $_POST['nid'];

		import('ORG.Net.UploadFile');
		$upload = new UploadFile();
		$upload -> allowExts = array('jpg', 'gif', 'png', 'jpeg');
		$upload -> savePath = 'Public/Uploads/News/';
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
			@unlink('Public/Uploads/News/s_' . $imgurl["photo"]);
			@unlink('Public/Uploads/News/' . $imgurl["photo"]);
		}

		$data["title_cn"] = $_POST['title_cn'];
		$data["title_en"] = $_POST['title_en'];
		$data["dateline"] = $_POST['dateline'];
		$data["description_cn"] = $_POST['description_cn'];
		$data["description_en"] = $_POST['description_en'];

		$result = $Form -> where($map) -> save($data);

		if ($result) {
			$this -> success('操作成功');
		} else {
			$this -> error('写入错误');
		}

	}

	public function refresh() {
		$news = D('news');
		$res = FALSE;
		if (isset($_POST['cho'])) {
			$nid = $_POST['cho'];
		}
		foreach ($nid as $key => $value) {
			if ($news -> delete($value)) {
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
