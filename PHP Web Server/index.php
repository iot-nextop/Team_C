<?php

//웹 페이지 파싱 URL 구간 : 파싱된 HTML 코드를 str에 저장한다.
$url="https://search.naver.com/search.naver?sm=tab_hty.top&where=nexearch&query=%EC%86%A1%ED%8C%8C%EA%B5%AC%EB%82%A0%EC%94%A8&oquery=%EC%84%9C%EC%9A%B8+%EB%82%A0%EC%94%A8&tqi=UiEKSsprvhGssacXhn4ssssstJs-329667"; //파싱할 URL 주소를 $url의 정의

include_once 'simple_html_dom.php'; // simple_html_dom이란 파싱 라이브러리 사용
$html = file_get_html($url); // $html이란 변수에 $url 주소의 html을 가져온다.

//$html 내 데이터 중 div class="wrap_weather_info_jibang2_1" 이란 div내 span의 속성과 내용을 $weather에 저장한다.
$weather = $html->find('p[class="cast_txt"]',0);

$todayWeather = explode(',',$weather); //가져온 문자열을 ,을 기준으로 자른다. (배열로 저장됨.)

echo (string)$todayWeather[0]; //$weather 변수를 웹페이지에 출력한다.

?>