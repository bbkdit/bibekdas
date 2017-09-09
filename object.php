<?php 
class Tv{
	$volume=1;
	$model="salora";
	function volumeup(){
		$this->volume++;
	}
}
$tv_one=new Tv();
$echo '$tv_one.volumeup()';
?>