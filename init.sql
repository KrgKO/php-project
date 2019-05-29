CREATE DATABASE demo;

USE demo;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    name varchar(100),
    PRIMARY KEY (id)
);

-- INSERT INTO users (username, password, name) VALUES ('admin', 'password', 'Administrator');

-- SELECT * FROM users;