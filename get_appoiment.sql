-- Use your database
--USE u695223803_shiv;

-- Create a table to store party reservations
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    partyType VARCHAR(50) NOT NULL,
    termsAccepted TINYINT(1) NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
