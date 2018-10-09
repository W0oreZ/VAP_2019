<?php
	function btn_edit($uri){
		return anchor($uri,'<i class="fa fa-edit  style="color:blue""></i>');
	}
	function btn_delete($uri){
		return anchor($uri,'<i class="fa fa-minus red" style="color:red"></i>',array('onclick' => "return confirm('are you sure you want to delete this item ?');"));
	}
?>