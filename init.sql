CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO users (name, email) VALUES
('Anna', 'anna@test.ch'),
('Max', 'max@test.ch'),
('Luca', 'luca@test.ch');