# IoT Weather Reporting System

Group: Graceful Griffin

Members:
- Muhammad Abdul Salam Bin Razak
- Muhammad Arif Iskandar Bin Abd Wahadi
- Muhammad Asy-Syakirin Bin Norhisham

<br>

## Table of Contents

 [STAGE 2: Proposal](#stage-2-proposal)

+ [1.0 Problem Statement](#10-problem-statement)
+ [2.0 System Architecture](#20-system-architecture)
+ [3.0 Sensors](#30-sensors)
+ [4.0 Cloud Platform](#40-cloud-platform)
+ [5.0 Dashboard](#50-dashboard)

 [STAGE 3: Send Realtime Data to Server](#stage-3-send-realtime-data)

 [STAGE 4: Send Sensor Data to Database](#stage-4)

 [STAGE 5: Update Live Data in Grafana Dashboard](#stage-5)
***
<br>

## STAGE 2: Proposal

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

<br>

## STAGE 3 : Send Realtime Data to Server

The ESP8266 device transmits temperature and humidity data from the DHT11 sensor to the Django web server using HTTP POST requests. The Django web application then updates the temperature and humidity readings dynamically, with a delay of approximately 5 seconds, without requiring the user to manually refresh the page. This ensures that the displayed status of temperature and humidity remains up-to-date without any user intervention.

To create visually appealing representations of weather data, it is necessary to develop HTML templates that effectively display temperature and humidity trends in a user-friendly manner. Django, a web framework, offers a robust templating engine that facilitates the creation of reusable HTML templates featuring dynamic content. These templates can incorporate Python code to generate weather data and pass it to the HTML for presentation. By leveraging Django's built-in support for forms and models, interactive dashboards and panels can be developed, enabling users to filter and manipulate the weather data as desired.

![](dashboard.png)

<br>

## STAGE 4 : Send Sensor Data to Database

The ESP8266 device utilizes HTTP POST requests to transmit temperature and humidity data from the DHT11 sensor to a Django web server. The Django server has a designated URL that accepts and parses these POST requests, subsequently storing the received data into a connected MySQL database.

The provided PHP code establishes a connection to a MySQL database using the mysqli_connect() function and stores the resulting connection object in the $conn variable. The code then verifies if the "temperature" and "humidity" variables are set in the $_POST superglobal array using the isset() function. If these variables are set, their values are retrieved and stored in the $t and $h variables respectively.

Next, the code constructs an SQL INSERT statement using the retrieved temperature and humidity values, and inserts them into the "dht11" table of the database using the mysqli_query() function. If the query is successful, the code outputs the message "New record created successfully". However, if an error occurs, it outputs an error message along with the SQL query and the error message returned by mysqli_error().

To utilize this PHP file for receiving data from an ESP8266 device via the HTTP protocol, the ESP8266 needs to send an HTTP POST request to the URL of this PHP file. The request should include the temperature and humidity values as key-value pairs within the request body. The ESP8266 can utilize the HTTPClient library to make the HTTP request and include the temperature and humidity values in the request body. Upon receiving the data, the PHP file inserts it into the MySQL database. Consequently, the Django web application dynamically updates the user interface by retrieving the necessary data from the database and processing it within the application to be presented in the server.

![](database.png)

<br>

## STAGE 5 : Update Live Data in Grafana Dashboard

Grafana is an exceptional data visualization tool known for its robust features and user-friendly interface. It empowers users to create visually captivating and informative dashboards and graphs effortlessly. By leveraging Grafana, the process of analyzing and monitoring data becomes simplified, as it offers a wide range of customizable and interactive visual representations. Whether you need to track temperature and humidity trends or any other metrics, Grafana provides a seamless experience for gaining valuable insights and making data-driven decisions.

One of the key advantages of Grafana is its flexibility and intuitiveness. It allows users to easily configure and customize visualizations to meet their specific requirements. With Grafana, you have the freedom to tailor the dashboards and graphs according to your unique needs and preferences. This flexibility makes it an invaluable tool for individuals and organizations alike, as it enables effective data analysis and presentation in a visually compelling and easily comprehensible manner.

In summary, Grafana stands out as a powerful and user-friendly data visualization tool that simplifies the process of analyzing and monitoring data. Its customizable and interactive nature empowers users to create visually captivating dashboards and graphs, facilitating valuable insights and informed decision-making. By utilizing Grafana, individuals and organizations can effectively analyze and present data in a visually appealing and easily understandable format, enhancing their overall data visualization capabilities.

![](grafana.png)

<br>
