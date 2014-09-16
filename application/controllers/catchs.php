<?php 
class Catchs extends CI_Controller {
	public function index($maxn = 338)
	{
		$baseurl = "http://junxun.dongyueweb.com/index.php/jxmd?jxlist_ban=";
		$url = $baseurl."1#";
		$contents = file_get_contents($url);
		echo substr($contents,0,strpos($contents,'<tbody>'));

		for ($i=1;$i<=$maxn;$i++){
			$url = $baseurl.$i."#";
			$contents = file_get_contents($url);
			echo substr($contents,strpos($contents,'<tbody>'),strpos($contents,'</tbody>')-strpos($contents,'<tbody>'));
		}
		
		$url = "http://junxun.dongyueweb.com/index.php/jxmd?jxlist_ban=1#";
		$contents = file_get_contents($url);		
		echo substr($contents,strpos($contents,'</tbody>'));
	}
}
