-- Delete Table If Exists
DROP TABLE IF Exists talanglearn2;

-- Create Table
Create Table talanglearn2 (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, --ไม่ติดลบ  รันเลขอัติโนมัติ คีย์หลัก
    days VARCHAR(255) NOT NULL,
    learn_time TIME NOT NULL,
    subject_id VARCHAR(255) NOT NULL,
    subject_name VARCHAR(255) NOT NULL,
    teacher_name VARCHAR(255) NOT NULL,
    learn_link VARCHAR(255) NOT NULL,
    homework_id INT NOT NULL,
    remember_token VARCHAR(255),
    Created_at DATETIME Default current_timestamp,
    update_at DATETIME
);

--Insert into talanglearn
Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'จันทร์',
    '08:30:00',
    'SWU133',
    'การวิ่งเหยาะเพื่อสุขภาพ',
    'อ.ศรัณย์ เจียระนัย',
    '',
    '1'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'จันทร์',
    '13:30:00',
    'CED113',
    'มัลติมีเดียและแอนิเมชันเพื่อการศึกษา',
    'อ.นิพาดา ไตรรัตน์',
    '',
    '2'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'อังคาร',
    '08:30:00',
    'SWU161',
    'มนุษย์ในสังคมแห่งการเรียนรู้',
    'อ.อรรคพล วณิกสัมบัน',
    '',
    '3'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'อังคาร',
    '13:30:00',
    'SWU141',
    'ชีวิตในโลกดิจิทัล',
    'อ.ภานุวัฒน์ บุตรเรียง',
    '',
    '4'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'พุธ',
    '08:30:00',
    'CED111',
    'คณิตศาสตร์คอมพิวเตอร์',
    'อ.แจ่มจันทร์ ศรีอรุณรัศมี',
    '',
    '5'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'พุธ',
    '13:30:00',
    'CED112',
    'ระบบปฏิบัติการและโปรแกรมประยุกต์เพื่อการศึกษา',
    'อ.แจ่มจันทร์ ศรีอรุณรัศมี',
    '',
    '6'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'พฤหัสบดี',
    '09:30:00',
    'ED141',
    'จิตวิทยาสำหรับครู',
    'อ.อสมา คัมภิรานนท์',
    '',
    '7'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'พฤหัสบดี',
    '13:30:00',
    'ED112',
    'พันธกิจสัมพันธ์ระหว่างสถานศึกษาและชุมชน',
    'อ.ปริชัย ดาวอุดม',
    '',
    '8'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'ศุกร์',
    '08:30:00',
    'ED191',
    'การปฎิบัติการสอน 1',
    'อ.พิชญานิน ศิริหล้า, อ.ฐานมาศ มงคล, อ.วิชญ์วิสิฐ รักษาพัชรวงศ์, อ.กรวิชญ์ โสภา',
    '',
    '9'
);

Insert into talanglearn2(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'ศุกร์',
    '13:30:00',
    'SWU122',
    'ภาษาอังกฤษเพื่อประสิทธิภาพการสื่อสาร 2',
    'อ.เสาวลักษณ์ น่วมสำราญ',
    '',
    '10'
);

--ฝากไว้ก่อน
-- $sql ="
--             SELECT
--                 talanglearn.days,
--                 talanglearn.learn_time,
--                 talanglearn.subject_id,
--                 talanglearn.subject_name,
--                 talanglearn.teacher_name,
--                 talanglearn.learn_link,
--                 // homework.info as homework
--             FROM
--                 talanglearn
--                 // LEFT JOIN homework ON talanglearn.subject_id = homework.work_subject_id
        
--         ";