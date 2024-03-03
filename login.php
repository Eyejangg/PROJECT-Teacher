<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="stylesBG.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    .form-login {
      width: 100%;
      max-width: 500px;
      padding: 15px;
      margin: auto;
    }
  </style>
  <title>เข้าสู่ระบบ</title>
</head>
<body class="form-login">
  
<div class="p-1 mb-2 bg-dark text-white">
  <div class="container">
    <h2> <i class='bx bxs-user' style='color:#620dd2' ></i> เข้าสู่ระบบของบุคลากรในมหาลัย</h2>

    <!-- ทำการส่งไฟล์โดยประกาศ POST ส่งไปใน check.php  -->
    <form method="POST" action="check.php">
        <!-- นำมาจาก From / Overview  -->
        
  <div class="mb-3">
    <label for="username" class="form-label">เข้าสู่ระบบ</label>
                                                            <!-- ตั้งชื่อให้กับ username > เพื่อจะให้ อ้างอิงมาได้  -->
    <input type="text" class="form-control" id="username" name="username"required>
    <div id="user" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">รหัสผ่าน</label>
                                                            <!-- ตั้งชื่อให้กับ password > เพื่อจะให้ อ้างอิงมาได้  -->
    <input type="password" class="form-control" id="password" name="password" required>

  </div>
  <button type="submit" class="btn btn-danger">Login</button>
  <a href="index.php" <button type="submit" class="btn btn-danger"></button>กลับสู่หน้าหลัก</a>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </div>


  </body>
</html>