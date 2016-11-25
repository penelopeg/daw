## ADD COUNTRY TO CLIENT, ADD CREDIT CARD NUMBER ????

CREATE TABLE user_type (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
type VARCHAR(30) NOT NULL
);

CREATE TABLE product_category (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30) NOT NULL
);

CREATE TABLE order_status (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
status VARCHAR(30) NOT NULL
);

CREATE TABLE country(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
country_name VARCHAR(30) NOT NULL
);

CREATE TABLE city(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
city_name VARCHAR(30) NOT NULL
);

CREATE TABLE user (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
user_type_id INT(6) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(32) NOT NULL,
FOREIGN KEY (user_type_id) REFERENCES user_type(id)
);


CREATE TABLE client (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(50) NOT NULL,
lastname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP,
password VARCHAR(32) NOT NULL,
address VARCHAR(100),
city_id INT(6),
country_id INT(6),
payment_info VARCHAR(100),
FOREIGN KEY (city_id) REFERENCES city(id),
FOREIGN KEY (country_id) REFERENCES country(id)
);

CREATE TABLE product (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
description VARCHAR(100),
price DECIMAL(10, 2) NOT NULL,
image_url VARCHAR(100)
);

CREATE TABLE product_2_categories (
product_id INT(6) NOT NULL,
category_id INT(6) NOT NULL,
FOREIGN KEY (category_id) REFERENCES product_category(id),
FOREIGN KEY (product_id) REFERENCES product(id)
);


CREATE TABLE orders (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
client_id INT(6),
order_date TIMESTAMP,
status_id INT(6),
total DECIMAL(10, 2),
FOREIGN KEY (status_id) REFERENCES order_status(id),
FOREIGN KEY (client_id) REFERENCES client(id)
);

CREATE TABLE product_2_orders (
order_id INT(6) NOT NULL,
product_id INT(6) NOT NULL,
quantity INT(100),
price_total DECIMAL(10, 2),
FOREIGN KEY (order_id) REFERENCES orders(id),
FOREIGN KEY (product_id) REFERENCES product(id)
);

INSERT INTO user_type (type) VALUES ('admin');
INSERT INTO user_type (type) VALUES ('editor');

INSERT INTO product_category (category) VALUES ('Tv Shows');
INSERT INTO product_category (category) VALUES ('Movies');
INSERT INTO product_category (category) VALUES ('Christmas');
INSERT INTO product_category (category) VALUES ('Easter');
INSERT INTO product_category (category) VALUES ('Halloween');
INSERT INTO product_category (category) VALUES ('Harry Potter');
INSERT INTO product_category (category) VALUES ('Star Wars');
INSERT INTO product_category (category) VALUES ('Star Trek');

INSERT INTO order_status (status) VALUES ('Preparing');
INSERT INTO order_status (status) VALUES ('Shipping');
INSERT INTO order_status (status) VALUES ('Shipped');
INSERT INTO order_status (status) VALUES ('Delivered');

INSERT INTO country (country_name) VALUES ('Portugal');
INSERT INTO country (country_name) VALUES ('EUA');

INSERT INTO city (city_name) VALUES ('Lisbon');
INSERT INTO city (city_name) VALUES ('New York');

INSERT INTO user (user_type_id, firstname, lastname, email, password) VALUES (1, "admin", "admin", "admin@admin.com", "21232f297a57a5a743894a0e4a801fc3");
INSERT INTO user (user_type_id, firstname, lastname, email, password) VALUES (2, "editor", "editor", "editor@editor.com", "5aee9dbd2a188839105073571bee1b1f");

INSERT INTO client (firstname, lastname, email, reg_date, password, address,city_id, country_id, payment_info) VALUES ("John", "Doe", "johndoe@gmail.com", NOW(), "6579e96f76baa00787a28653876c6127", "Rua das flores", 1, 1, "credit card");
INSERT INTO client (firstname, lastname, email, reg_date, password, address,city_id, country_id, payment_info) VALUES ("Joao", "Do", "jodo@gmail.com", NOW(), "3b46bc68e71b92634a97ab3a0b01dbe4", "Rua das Pedras", 2, 2, "paypal");

INSERT INTO product (name, description, price, image_url) VALUES ("Darth Vader Mug", "If you like your coffee on the dark side! Tea, Coffee & Hot Chocolate never looked so good!", 20, 'Darth-Vader-figural-mug.jpg');
insert into product (name, description, price, image_url) values ('Harry Potter Triwizard Cup Lamp', 'For the victorious!', 29.99, 'triwizarcup.jpg');
insert into product (name, description, price, image_url) values ('Star Wars R2-D2 Coffee Press', 'Beep bean bloop brew!', 39.99, 'r2d2_coffeepress.jpg');
insert into product (name, description, price, image_url) values ('Marvel Groot USB Car Charger', "Groot dances while plugged in and turned on - he's sound activated!", 40.99, 'usbcharger_groot.jpg');
insert into product (name, description, price, image_url) values ('Star Trek Delta Enamel Stud Earrings', "Made of sterling silver and hard enamel! Choose science blue, engineering red, or command gold", 94.95, 'startrek_earrings.jpg');


INSERT INTO product_2_categories (product_id, category_id) VALUES (1, 7);
INSERT INTO product_2_categories (product_id, category_id) VALUES (1, 4);

INSERT INTO orders (client_id, order_date, status_id) VALUES (1, NOW(), 2);
INSERT INTO product_2_orders (order_id, product_id, quantity, price_total) VALUES (1, 1, 2, 40);
