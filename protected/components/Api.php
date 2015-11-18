<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api
 *
 * @author Administrator
 */
class Api {

	//put your code here
	//调淘宝IP地址接口
	static public function taobaoip() {

		$ip = $_SERVER['REMOTE_ADDR'];

		/* post方式 */
		$post_data = array(
			"ip" => $ip,
		);

		$ch = curl_init();
		$url = 'http://ip.taobao.com//service/getIpInfo.php';
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		// post数据
		curl_setopt($ch, CURLOPT_POST, 1);
		// post的变量
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

		$return = curl_exec($ch);
		$return = json_decode($return);
		curl_close($ch);

		return $return;
	}

}
