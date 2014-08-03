<?php

require_once('workflows.php');

class getMsg{

	private $url = "http://www.ihurray.com/app/getBaike.php?msg=";

	public function getWeather($query){
		$workflows = new Workflows();
		$api = $this->url.$query;
		$res = $workflows->request($api);
		//$res = json_decode( $res );
		if ($res) {

			$workflows->result( $key,
								$query,
								$query." 百度百科",
								$res,
								"");

		}else{
			$workflows->result(	'',
		  						'',
					  			'没查到呀', 
					  			'没找到'.$query."这个词条",
					  			'unknown.png' );
		}

		echo $workflows->toxml();
	}
}