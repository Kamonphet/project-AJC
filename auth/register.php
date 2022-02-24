<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/colors_bt5.css" rel="stylesheet">
</head>
<body class="  d-flex justify-content-center align-items-center mt-4 mb-3 bd-purple-100" >
    
        <div class="card btn-bd-light" style="width: 25%;">
            <div class="card-head bd-indigo-400 rounded-top p-3">
                <h3 class="text-center text-light">ลงทะเบียน</h3>
                <h1 class="text-center text-light">Boonraksa System</h1>
            </div>
            <div class="class-body rounded-bottom">
                <div class="">
                    <img src="../IMG/jaikere.jpg" style="width: 70%" class="rounded mx-auto d-block mt-3" alt="">
                </div>
                <form action="saveregister.php" class="p-3" method="POST">
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="ใส่ชื่อ" required>
                </div>
                <div class="form-group">
                    <label for="name">นามสกุล</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="ใส่นามสกุล" required>
                </div>
                <div class="form-group">
                    <label for="name">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="ใส่รหัสผ่าน เอาแบบยาก ๆ เลย" required>
                </div>
                    <div class="form-group mt-3 mb-2">
                        <label">เอก สาขาที่เรียน : 
                            <select name="major" id="major">
                                <option value="">------------------</option>
                                <option value="การจัดการเรียนรู้ภาษาไทย">การจัดการเรียนรู้ภาษาไทย</option>
                                <option value="การจัดการเรียนรู้สังคมศึกษา">การจัดการเรียนรู้สังคมศึกษา</option>
                                <option value="การจัดการเรียนรู้คณิตศาสตร์">การจัดการเรียนรู้คณิตศาสตร์</option>
                                <option value="การจัดการเรียนรู้วิทยาศาสตร์">การจัดการเรียนรู้วิทยาศาสตร์</option>
                                <option value="การจัดการเรียนรู้ถาษาอังกฤษ">การจัดการเรียนรู้ถาษาอังกฤษ</option>
                                <option value="คอมพิวเตอร์ศึกษา">คอมพิวเตอร์ศึกษา</option>
                                <option value="การศึกษาปฐมวัย">การศึกษาปฐมวัย</option>
                            </select>
                        </label><br>
                    </div>
                    <div class="form-group">
                        <label for="name">กลุ่มผู้เรียน</label>
                        <input type="text" name="grouplearn" id="grouplearn" class="form-control" placeholder="ใส่กลุ่มผู้เรียน"  required>
                    </div><br>
                    <div class="d-grid">
                        <button type="submit" class="btn bd-indigo-400 rounded-pill text-white">ลงทะเบียน</button>
                    </div>
                </form>
                <div class="text-center mb-3">
                    <a href="login.php">หากเคยลงทะเบียนแล้ว</a>
                </div>
            </div>
        </div>
</body>
</html>