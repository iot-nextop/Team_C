#include <ESP8266WiFi/src/ESP8266WiFi.h>
#include <esp8266Wifi/src/WiFiClientSecure.h>

#define SSID "wifi-name"
#define PASSWORD "wifi-password"


const char* host = "web url no need to http";
const int httpsPort = 443; //https = 443  http = 80 

//https 페이지를 접속하기 떄문에 SHA1 암호화를 해제시켜야 한다.
const char fingerprint[] PROGMEM = "5F F1 60 31 09 04 3E F2 90 D2 B0 8A 50 38 04 E8 37 9F BC 76";

// 아두이노 실행후 한번만 실행됨
void setup() {

#pragma region SeviceStart
	Serial.begin(9600);
	Serial.println("\nSerivce Start");
	Serial.print("Connecting WIFI : ");
	Serial.println(SSID);

	WiFi.mode(WIFI_STA);
	WiFi.begin(SSID, PASSWORD);

	while (WiFi.status() != WL_CONNECTED)
	{
		delay(500);
		Serial.print(".");
	}
	Serial.println("");
	Serial.println("WiFi connected!!!");
	Serial.println("Local IP address: ");
	Serial.println(WiFi.localIP());

	WiFiClientSecure client;
	Serial.print("Connecting Host : ");
	Serial.println(host);


	Serial.printf("Using fingerprint '%s'\n", fingerprint);
	client.setFingerprint(fingerprint);
	if (!client.connect(host, httpsPort)) {
		Serial.println("Connection failed");
		return;
	}

#pragma endregion

#pragma region WebRequest
	
	String URL = " weather API ";

#pragma endregion
}

// setup 함수 실행 후 무한loop가 실행됨.
void loop() {


}
