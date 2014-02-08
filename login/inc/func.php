<?php 
	function alerts(){
		if(isset($_SESSION['err'])):
			$msg = $_SESSION['err'];
			unset($_SESSION['err']);
			echo '<div class="alert alert-error center">'.$msg.'</div>';

		elseif(isset($_SESSION['msg'])):
			$msg = $_SESSION['msg'];
			unset($_SESSION['msg']);
			echo '<div class="alert alert-success center">'.$msg.'</div>';
			
		endif;
	}

	function test_empty($reqs, $data){
		foreach($reqs as $req):
			$v = trim($data[$req]);
			if(empty($v)):
				return $req.' field must not be empty!';
				break;
			endif;
		endforeach;

		return false;
	}


	function redirect($url = 'index.php'){
		header("location: $url"); die();
	}

	function form_open($action = '', $method = 'POST'){
		return '<form method="'.$method.'" action="'.$action.'">';
	}

	function form_multipart($action = '', $method= 'POST'){
		return '<form method="'.$method.'" action="'.$action.'" enctype="multipart/form-data">';
	}

	function form_close(){
		return '</form>';
	}

	function get_user($field = false, $id){
		$db_qry = db_select('users', '*', " WHERE  id = $id ");
		$row = mysql_fetch_array($db_qry);
		if($field) return $row[$field];
		else return $row;
	}

	function acc_type($ref){
		$acc_type = array('empl'=>'Employee', 'mngr'=>'Manager', 'tl'=>'Team Leader', 'adm'=>'Admin');
		return $acc_type[$ref];
	}

	function create_sidebar($sidebar, $title = 'Menus'){
		?>
		<ul class="nav nav-list">
		<li class="nav-header center"><?=$title?></li>

		<?php 
		foreach($sidebar as $name=>$link): 
			$active = ''; $ref = '?p='.$_GET['p'];
			if($link == $ref) $active = 'active'; 
		?> 
		<li class="<?=$active?>"><a href="<?=$link?>"> <i class="icon-chevron-right"></i> <?=$name?></a></li>
		<?php endforeach; ?>
		</ul>
		<?php
	}