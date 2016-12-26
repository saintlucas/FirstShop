<?php
?>

/*

CREATE DATABASE FirstShop

CREATE TABLE Products (
id INT PRIMARY KEY AUTO_INCREMENT,
category INT NOT NULL,
name VARCHAR (200) NOT NULL,
description TEXT,
price DECIMAL(8,2),
stock INT
)


CREATE TABLE Users (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(200) NOT NULL,         
surname VARCHAR (200) NOT NULL,
email VARCHAR (200) NOT NULL UNIQUE,
hashed_password VARCHAR (255) NOT NULL,
address VARCHAR (255) NOT NULL
)


CREATE TABLE Picture2s (
picture_id INT AUTO_INCREMENT,
picture VARCHAR(255) NOT NULL, 
product_id INT,
PRIMARY KEY(picture_id),
FOREIGN KEY(product_id)
REFERENCES Products(id)
ON DELETE CASCADE
)




CREATE TABLE Massages (
massage_id INT AUTO_INCREMENT,
massage VARCHAR(255) NOT NULL,
user_id INT,
user_name VARCHAR(255) NOT NULL,
PRIMARY KEY(massage_id),
FOREIGN KEY (user_id)
REFERENCES Users(id)
)


CREATE TABLE Pictures (
id INT AUTO_INCREMENT,
picture_link text NOT NULL,
product_id INT,
PRIMARY KEY(id)
)



CREATE TABLE Orders (
id INT AUTO_INCREMENT,
order_id INT,
user_id INT NOT NULL,
order_status INT,
product_quantity INT,
PRIMARY KEY (id),
FOREIGN KEY (user_id)
REFERENCES Users(id)
ON DELETE CASCADE
)

CREATE TABLE Orders_products (
id int AUTO_INCREMENT,
product_id int NOT NULL,
order_id int  NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(product_id) REFERENCES Products(id),
FOREIGN KEY (order_id) REFERENCES Orders(order_id)


)

CREATE TABLE Categories(
category_id INT AUTO_INCREMENT,
category_name VARCHAR (200) NOT NULL UNIQUE,
PRIMARY KEY (category_id),
FOREIGN KEY (id)
REFERENCES Products(id)
);


CREATE TABLE Admin (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email varchar(200) UNIQUE,
    hasshed_password varchar(200)
    
)
    









*/