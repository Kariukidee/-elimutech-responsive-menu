-- elimutech.sql

CREATE DATABASE IF NOT EXISTS elimutech;
USE elimutech;

CREATE TABLE IF NOT EXISTS courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL
);

INSERT INTO courses (title) VALUES
  ('Web Development'),
  ('AI in Education'),
  ('Data Science');
