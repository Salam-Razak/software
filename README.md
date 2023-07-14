# IoT Weather Reporting System

Group: Graceful Griffin

Members:
- Muhammad Abdul Salam Bin Razak
- Muhammad Arif Iskandar Bin Abd Wahadi
- Muhammad Asy-Syakirin Bin Norhisham

<br>

## Table of Contents

[1.0 Problem Statement](#10-problem-statement)

      [6.0 Statement](#60-statement)
      
[2.0 System Architecture](#20-system-architecture)

[3.0 Sensors](#30-sensors)

[4.0 Cloud Platform](#40-cloud-platform)

[5.0 Dashboard](#50-dashboard)

<br>

## 1.0 Problem Statement

The current weather reporting systems are either limited in their coverage or provide delayed information, which makes it difficult for individuals to make informed decisions regarding outdoor activities, crop management, transportation, and emergency response. The system should be able to collect and analyze weather data from multiple sensors and sources, and present it in an easily understandable format. 

<br>

## 2.0 System Architecture

In order to overcome these issues, we develop a weather reporting system using IoT. This system uses two types of sensors which are DHT11 sensor for temperature and humidity and rain drop sensor where it will send the data to the dashboard for the user to get the current reading.

![](SYSTEM.jpeg)

Figure 2.1: System Architecture

<br>

## 3.0 Sensors

Sensors and devices used in this project:
- NodeMCU ESP8266
- DHT11 
- Rain Drop sensor

Proposed data transmission protocol: HTTP

![](sensors.png)

Figure 3.1: Wiring connections

<br>

## 4.0 Cloud Platform

Link to How to deploy Flask app to PythonAnywhere [here](https://youtu.be/yZY-izd_qI4).

<br>

## 5.0 Dashboard

![dashboard](https://github.com/Asy-Syakirin/stage2/assets/129646759/ff1203ab-e28f-46bd-b701-fbdd6a86baac)

Figure 5.1: Sketching of dashboard appearance

