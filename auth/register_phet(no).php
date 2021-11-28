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
<body class="vh-100 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-header bd-blue-200 text-white">
            <h4>สมัครใช้งาน</h4>
        </div>
        <div class="card-body">
            <form action="saveregister.php" class="mb-3" method="POST">
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">นามสกุล</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">วิชาเอก</label>
                    <input type="text" name="major" id="major" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">กลุ่มผู้เรียน</label>
                    <input type="text" name="grouplearn" id="grouplearn" class="form-control" required>
                </div><br>
                <button type="submit" class="btn bd-blue-200 text-white">Register</button>
            </form>
            <a href="login.php">เข้าสู่ระบบ</a>
        </div>
    </div>
</body>
</html>