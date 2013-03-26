<?php
// 本类由系统自动生成，仅供测试用途
class CommentsAction extends Action {
	public function index() {
		if ($this -> checkLogin()) {
			$this->getData();
			$this -> display("index");
		} else {
			$this -> display("login");
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
		$Data = D('comments');
		import('ORG.Util.Page');
		$map = "";
		$count = $Data -> where($map) -> count();
		$Page = new Page($count);
		$show = $Page -> show();
		$list = $Data -> where($map) -> order('orderby,dateline desc') -> limit($Page -> firstRow . ',' . $Page -> listRows) -> select();
		$this -> assign('list', $list);
		$this -> assign('page', $show);
	}
	
	public function refresh() {
		$news = D('comments');
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
			    $this->success('删除成功', 'index');
		} else {
			$this -> error('删除失败');
		}

	}
	

}
