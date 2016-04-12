#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include "Configuraciones.h"

#define USE_SERIAL Serial

ESP8266WiFiMulti WiFiMulti;
int PinSensor = 0;

void setup() {

  pinMode(LED_BUILTIN, OUTPUT);
  pinMode(PinSensor, INPUT);
  digitalWrite(LED_BUILTIN, HIGH);
  USE_SERIAL.begin(115200);
  USE_SERIAL.setDebugOutput(true);

  USE_SERIAL.println();
  USE_SERIAL.println();
  USE_SERIAL.println();

  WiFiMulti.addAP(ssid, password);
  digitalWrite(LED_BUILTIN, LOW);

}

void loop() {
  USE_SERIAL.println(digitalRead(PinSensor));
  if (digitalRead(PinSensor)) {
    digitalWrite(LED_BUILTIN, HIGH);
  }
  else {
    digitalWrite(LED_BUILTIN, LOW);
  }
  delay(500);
}
