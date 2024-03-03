
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลบุคลากร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesBG.css">

</head>

<style>
    .form-login {
      width: 50%;
      max-width: 1000px;
      padding: px;
      margin: auto;
    }
    .body{
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    
  </style>
<body class="form-login,body">
<div class="header">
<div class="container">
<div class="container my-2"> <!-- ปรับขนาด container คลุมด้วย <div> -->
<form action="addupdateform.php" method="POST">
    <h2>บันทึกข้อมูลของบุคลากร</h2>
    <hr>
    <div class="form-group col-4"> <!-- ปรับขนาด col ภายใต้ form-group -->
    <label for="p_prefix">คำนำหน้าชื่อ:</label>
<select name="p_prefix" class="form-control" required>

        <option value="นาย">นาย</option>

        <option value="นาง">นาง</option>

        <option value="นางสาว">นางสาว</option>

</select>


<div class = "form-group">
        <label for="p_name">ชื่อ</label>
        <input type="text" name="p_name" class="form-control" required>
</div>


<div class = "form-group">
    <label for="p_surname">นามสกุล</label>
        <input type="text" name="p_surname" class="form-control" required >
</div>

    <div class = "form-group">
        <label for="p_birthday">วันเดือนปีเกิด</label>
        <input type="date" name="p_birthday" class="form-control" required ><br>
    </div>
        
    <div class = "form-group">
        <label for="p_address">ที่อยู่</label>
        <textarea name="p_address" class="form-control"></textarea>
    </div>

    <div class = "form-group">
        <label for="p_skill">ทักษะ</label>
        <textarea name="p_skill" class="form-control"></textarea>
    </div>

    <div class = "form-group">
        <label for="p_tel">เบอร์โทรศัพท์</label>
        <input type="tel" name="p_tel" class="form-control"></textarea>
    </div>

    <div class = "form-group">
        <label for="p_user">ชื่อเข้าสู่ระบบ</label>
        <input type="tel" name="p_user" class="form-control" required ><br>
    </div>

    <div class = "form-group">
        <label for="p_pass">รหัสผ่าน</label>
        <input type="password" name="p_pass" class="form-control" required ><br>
    </div>


<div class = "form-group">
    <label for="p_level">ระดับผู้ใช้งาน:</label>
<select name="p_level" class="form-control" required>

        <option value="">--เลือกระดับผู้ใช้งาน--</option>

        <!--<option value="a">ผู้ดูแลระบบ</option> -->

        <option value="u">ผู้ใช้งาน</option>

        
</select><br>
</div>
<div class="my-2">
            <input type="submit" value="แก้ไข" class="btn btn-success">
            <input type="reset" value="ลบข้อมูล" class="btn btn-danger"onclick="return confirm('ยืนยันการลบข้อมูล')">
            <a href="index.php" class="btn btn-primary">กลับ</a>
          </div>
    </div>
</div>

</form>

</body>

</html>