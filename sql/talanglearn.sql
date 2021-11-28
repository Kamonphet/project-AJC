-- Delete Table If Exists
DROP TABLE IF Exists talanglearn;

-- Create Table
Create Table talanglearn (
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
Insert into talanglearn(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'จันทร์',
    '10:00:00',
    'EDT212',
    'การเขียนเพื่อการสื่อสารการศึกษา',
    'อ.นฤมล ศิระวงษ์',
    'https://us02web.zoom.us/j/5817427974?pwd=dnAxbDZkUWNwdXpuQmM0clI4aWx4UT09',
    '1'
);

Insert into talanglearn(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'จันทร์',
    '13:00:00',
    'CED213',
    'การเขียนโปรแกรมคอมพิวเตอร์',
    'อ.สุภโชค เรืองศรี',
    'https://zoom.us/j/7983121132',
    '2'
);

Insert into talanglearn(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'อังคาร',
    '09:00:00',
    'CED211',
    'ระบบเครือข่ายคอมพิวเตอร์และการสื่อสารข้อมูล',
    'อ.สุภโชค เรืองศรี',
    'https://zoom.us/j/7983121132',
    '3'
);

Insert into talanglearn(
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
    'EDT211',
    'เทคโนโลยีการถ่ายภาพดิจิทัล',
    'ผศ.รัฐพล ประดับเวทย์',
    'https://us02web.zoom.us/j/3662347001',
    '4'
);

Insert into talanglearn(
    days,
    learn_time,
    subject_id,
    subject_name,
    teacher_name,
    learn_link,
    homework_id
) values(
    'พุธ',
    '09:00:00',
    'ED231',
    'การพัฒนาหลักสูตร',
    'ผศ.กิตติชัย สุธาสิโนบล',
    'https://us02web.zoom.us/j/2661547370?pwd=VGtMM29BR01mOXNyZUNDWWVXSVE4Zz09',
    '5'
);

Insert into talanglearn(
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
    'ED201',
    'ภาษาไทยเพื่อการสื่อสาร',
    'อ.ชิษณุพงศ์ อินทรเกษม',
    'https://us02web.zoom.us/j/7668094642?pwd=anlQcWNEeGM0ZGl2R0t1WU4zRUtkZz09',
    '6'
);

Insert into talanglearn(
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
    'SWU244',
    'วิทยาศาสตร์เพื่อชีวิตและสิ่งแวดล้อมที่ดี',
    'อ.ศักดิพงศ์ พันธ์ไผ่',
    'https://teams.microsoft.com/l/team/19%3aJNITn1cBfhO9h5SSdz9ZuyoRJNabsZ226zs7SqyeOyQ1%40thread.tacv2/conversations?groupId=64b9e275-b84b-463f-aa06-ae9acb43b202&tenantId=f90c4647-886f-4b4c-b2eb-555df9ec4e81',
    '7'
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