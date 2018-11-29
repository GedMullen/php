-- This scripts sets up your database
-- Always start from scratch - teardown first and then setup
-- 
-- Modify yourdatabase name to your first name
-- Drop the database if it exists
DROP DATABASE IF EXISTS yourdatabasename;
CREATE DATABASE yourdatabasename;
USE yourdatabasename;

-- create a users database table
CREATE TABLE users (
    name VARCHAR(100)
);

-- insert data into the table
INSERT INTO users (name) VALUES ("ged");
INSERT INTO users (name) VALUES ("admin");

-- check that it worked
SHOW TABLES;
SELECT * FROM users;
