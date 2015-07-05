<?php
class Autoload
{
	public $app_path = "application";
	public $view_path = "view"; 
	public function loadview($link)
	{
		require "application/view/".$link.".php";
	}
	public function loadcontroller($link)
	{
		require "application/controller/".$link.".class.php";
	}
	public function loadmodel($link)
	{
		require "application/model/".$link.".class.php";
	}
}
$autoload = new Autoload;
$autoload->loadcontroller("data");
$autoload->loadview("template02");
?>