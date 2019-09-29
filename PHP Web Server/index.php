<?php

//웹 페이지 파싱 URL 구간 : 파싱된 HTML 코드를 str에 저장한다.
$url="http://web.kma.go.kr/aboutkma/intro/metropolitan/index.jsp"; //파싱할 URL 주소를 $url의 정의

include_once 'simple_html_dom.php'; // simple_html_dom이란 파싱 라이브러리 사용
$html = file_get_html($url); // $html이란 변수에 $url 주소의 html을 가져온다.

//$html 내 데이터 중 div class="wrap_weather_info_jibang2_1" 이란 div내 span의 속성과 내용을 $weather에 저장한다.
$weather = $html->find('div[class="wrap_weather_info_jibang2_1"]',0)->find('span',0)->__toString();


echo (string)$weather; //$weather 변수를 웹페이지에 출력한다.


?>