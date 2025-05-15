<<<<<<< HEAD
-- Create database
CREATE DATABASE IF NOT EXISTS car_tradein_system;
USE car_tradein_system;

-- Admin table
CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL
);

-- Insert default admin
INSERT INTO admins (username, password, email) VALUES
('admin', SHA2('admin123', 256), 'admin@tradein.com');

-- Users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cars table
CREATE TABLE IF NOT EXISTS cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  make VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  year YEAR NOT NULL,
  condition ENUM('Excellent', 'Good', 'Fair', 'Poor') NOT NULL,
  price DECIMAL(10,2),
  status ENUM('Available', 'Sold') DEFAULT 'Available',
  added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Trade-In Requests table
CREATE TABLE IF NOT EXISTS tradein_requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  car_make VARCHAR(50),
  car_model VARCHAR(50),
  car_year YEAR,
  car_condition ENUM('Excellent', 'Good', 'Fair', 'Poor'),
  estimated_value DECIMAL(10,2),
  status ENUM('Pending', 'Accepted', 'Rejected') DEFAULT 'Pending',
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Admin Responses table
CREATE TABLE IF NOT EXISTS responses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  request_id INT,
  admin_id INT,
  response TEXT,
  responded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (request_id) REFERENCES tradein_requests(id) ON DELETE CASCADE,
  FOREIGN KEY (admin_id) REFERENCES admins(id) ON DELETE CASCADE
);

-- Reports table (optional)
CREATE TABLE IF NOT EXISTS reports (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  content TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
=======
-- Create database
CREATE DATABASE IF NOT EXISTS car_tradein_system;
USE car_tradein_system;

-- Admin table
CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(100) NOT NULL
);

-- Insert default admin
INSERT INTO admins (username, password, email) VALUES
('admin', SHA2('admin123', 256), 'admin@tradein.com');

-- Users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Cars table
CREATE TABLE IF NOT EXISTS cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  make VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  year YEAR NOT NULL,
  condition ENUM('Excellent', 'Good', 'Fair', 'Poor') NOT NULL,
  price DECIMAL(10,2),
  status ENUM('Available', 'Sold') DEFAULT 'Available',
  added_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Trade-In Requests table
CREATE TABLE IF NOT EXISTS tradein_requests (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  car_make VARCHAR(50),
  car_model VARCHAR(50),
  car_year YEAR,
  car_condition ENUM('Excellent', 'Good', 'Fair', 'Poor'),
  estimated_value DECIMAL(10,2),
  status ENUM('Pending', 'Accepted', 'Rejected') DEFAULT 'Pending',
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Admin Responses table
CREATE TABLE IF NOT EXISTS responses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  request_id INT,
  admin_id INT,
  response TEXT,
  responded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (request_id) REFERENCES tradein_requests(id) ON DELETE CASCADE,
  FOREIGN KEY (admin_id) REFERENCES admins(id) ON DELETE CASCADE
);

-- Reports table (optional)
CREATE TABLE IF NOT EXISTS reports (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100),
  content TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
>>>>>>> 695ec649f6cb704dbe507123c57235ec51436e6f
