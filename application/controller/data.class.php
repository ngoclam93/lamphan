<?php
class Controller
{
	public $result = "";
	public function base_url()
	{
		return $this->result = $_SERVER["HTTP_HOST"];
	}
	public function meta_charset($code)
	{
		return $this->result = '<meta charset="'.$code.'">';		
	}
	public function meta_viewport()
	{
		return $this->result = '<meta name="viewport" content="width=device-width, initial-scale=1">';
	}
	public function meta_robots($index,$follow)
	{
		return $this->result = '<meta name="robots" content="'.$index.','.$follow.'">';
	}
	public function meta_description($text)
	{
		return $this->result = '<meta name="description" content="'.$text.'">';
	}
	public function meta_keywords($key)
	{
		return $this->result = '<meta name="keywords" content="'.$key.'">';
	}
	public function stylesheet($url)
	{
		return $this->result = '<link rel="stylesheet" type="text/css" href="'.$url.'">';
	}
	public function javascript($url)
	{
		return $this->result = '<script type="text/javascript" src="'.$url.'"></script>';
	}
	public function analytics($code)
	{
		return $this->result = "<script>
								  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
								  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
								  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
								  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

								  ga('create', '".$code."', 'auto');
								  ga('send', 'pageview');

								</script>";
	}
	public function title($title)
	{
		return $this->result = "<title>".$title."</title>";
	}
	public function logo($url,$class,$alt,$title)
	{
		return $this->result = '<img src="'.$url.'" class="'.$class.'" alt="'.$alt.'" title="'.$title.'">';
	}
	public function menu()
	{
		$array = array("Home","About","Product","Services","Pricing","Contact");
		return $array;
	}
}
?>