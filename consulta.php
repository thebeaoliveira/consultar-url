<?php

	function curl_info($url){
		$ch = curl_init();
		curl_setopt( $ch, CURLOPT_URL, $url );
		curl_setopt( $ch, CURLOPT_HEADER, 1);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1 );
        
		$content = curl_exec( $ch );
		$info = curl_getinfo( $ch );

		return $info;
	}

	$site = 'https://google.com';
	$info = curl_info( $site );
	if( $info['http_code']==200 ) {
		echo '<u>'.$site . '</u> - <strong>está funcionando</strong><br />';
	} else {
		echo '<u>'.$site . '</u> - não está funcionando<br />';
	}


