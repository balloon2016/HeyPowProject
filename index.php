<?php

	/* 정식 출시에서는 미사용 */

	function fileCheck($url) {

		if(!file_exists($url))

			mkdir($url, 0755, true);

		return false;

	}



	function saveFile($url, $data) {

		$ch=fopen($url, "w");

		fwrite($ch, $data);

		fclose($ch);

		return false;

	}

	

	$ip = $_SERVER["REMOTE_ADDR"];

	$time = date("Ymd");



	fileCheck("./day_ip_rec");

	fileCheck("./day_ip_rec/".$time);

    fileCheck("./day_ip_rec/".$time."/all");



	saveFile("./day_ip_rec/".$time."/all/".$ip, time());

    saveFile("./day_ip_rec/".$time."/".date("h")."/".$ip, time());

	

?>

<script type="text/javascript">



	window.onload=function() {



		const url="https://goo.gl/forms/Vb1OXnxm2sZ2H2Y52";



		alert("글귀 저장소의 설문 페이지로 이동합니다.");



		location.href=url;



	}



</script>