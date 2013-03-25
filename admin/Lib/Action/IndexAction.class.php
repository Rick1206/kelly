<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	public function index() {
		if ($this -> checkLogin()) {
			$this -> display("index");
		} else {
			$this -> display("login");
		}
	}

	public function islogin() {
		if ($_POST['adname'] != '' && $_POST['adpassword'] != '') {
			$user = D('admin');
			$u = $user -> field('adid,adname,ademail,lastlogin,lastip') -> where(array('adname' => $_POST['adname'], 'adpassword' => md5($_POST['adpassword']))) -> find();

			if ($u) {
				$_SESSION = $u;
				$_SESSION['isLogin'] = 1;
				$arr = array();
				$arr['lastlogin'] = time();
				$arr['lastip'] = get_client_ip();
				$user -> where(array('adid' => $_SESSION['adid'])) -> save($arr);
				$this -> success('欢迎登陆', "index");
			} else {
				$this -> error('用户名或者密码错误');
			}

		} else {
			$this -> error('请输入用户名和密码');
		}
	}

	public function checkLogin() {
		if (!isset($_SESSION["islogin"]) && !isset($_SESSION["adname"])) {
			return false;
		} else {
			return true;
		}
	}

	public function logout() {
		
		$user = D("admin");
		
		$_POST = array("lslogintime" => time(), "lastip" => get_client_ip());

		$user -> save($_POST);
		$_SESSION = array();

		if ($_COOKIE[session_name()]) {
			setcookie(session_name(), "", time() - 1000, '/');
		}

		session_destroy();
		$this -> success("成功退出","login");
	}

}
