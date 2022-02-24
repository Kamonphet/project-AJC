-- Create Database
Create Database tschedule Default Character set utf8mb4 Collate utf8mb4_unicode_ci;

--Create user
CREATE USER 'phet'@'localhost' IDENTIFIED BY 'Pfyk/RDXKsM(s5rx';
-- kamonphet.345


-- set privilege
Grant all privileges on tschedule.* to 'phet'@'localhost';