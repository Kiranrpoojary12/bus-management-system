-- Create database
CREATE DATABASE IF NOT EXISTS bus_management;
USE bus_management;

-- Create buses table
CREATE TABLE IF NOT EXISTS buses (
    bus_id INT AUTO_INCREMENT PRIMARY KEY,
    bus_no VARCHAR(20) NOT NULL,
    route VARCHAR(50) NOT NULL,
    driver_name VARCHAR(50) NOT NULL,
    driver_phone VARCHAR(20) NOT NULL
);


