-- Delete Table If Exists
DROP TABLE IF Exists persons;

-- Create Table
Create Table persons (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, --ไม่ติบลบ  รันเลขอัติโนมัติ คีย์หลัก
    firstname VARCHAR(255) NOT NULL,
    lastname  VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    major VARCHAR(255) NOT NULL,
    grouplearn VARCHAR(255) NOT NULL,
    role VARCHAR(255) Default 'member',
    remember_token VARCHAR(255),
    Created_at DATETIME Default current_timestamp,
    update_at DATETIME
);

--Insert into persons
Insert into persons(
    firstname,
    lastname,
    password,
    major,
    grouplearn,
    role
) values(
    'phet',
    'kamonphet',
    '987654321',
    'computer education',
    'ED2ED67',
    'admin'
);

--admin
--firstname phett
--password 123456789

--member
--firstname phet
--password 123456