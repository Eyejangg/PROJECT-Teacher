<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
</body>
</html>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php"><img src="Npru-logo.png" alt="" width="60"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ข้อมูลรายชื่อบุคลากรในมหาลัย
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="rank.php">รายชื่อบุคลากร</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form action="search.php" class="form-gruop my- 3" method="POST">
        <div class="row">
            <div class="col-6">
                <input type="text" placeholder="ค้นหาชื่อหรือนามสกุล" class="form-control"name="p_data" Required>
             </div>
                <div class="col-6">
                    <input type="submit" value="ค้นหาข้อรายชื่อของบุคลากร" class="btn btn-light">
        </div>
    </form>
        
      </form>
    </div>
  </div>
</nav>