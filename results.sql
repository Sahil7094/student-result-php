
 
CREATE TABLE IF NOT EXISTS results ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100), 
    roll_no VARCHAR(20), 
    marks INT 
);

INSERT INTO results (name, roll_no, marks) VALUES
('Sahil Raj', '31',96),
('Aditi kumari', '25',99),
('Roushan kumar', '38',85);
