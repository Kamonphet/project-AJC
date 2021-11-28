-- Delete Table If Exists
DROP TABLE IF Exists homework;

-- Create Table
Create Table homework(
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, --ไม่ติบลบ  รันเลขอัติโนมัติ คีย์หลัก
    info VARCHAR(255) NOT NULL,
    dates DATE NOT NULL,
    remember_token VARCHAR(255),
    Created_at DATETIME Default current_timestamp,
    update_at DATETIME
);

--Insert into persons
Insert into homework(
   
) values(
    
);