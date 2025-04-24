CREATE DATABASE IF NOT EXISTS trend_tied;

USE trend_tied;

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL, -- Ensure email is unique
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Feedback Table
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message TEXT NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Collaborations Table
CREATE TABLE collaborations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    work TEXT NOT NULL,
    brand VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
