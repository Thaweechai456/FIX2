<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      background-color: #e9f8f1; /* สีพื้นหลังสีเขียวอ่อน */
    }

    .form-login {
      width: 100%;
      max-width: 450px;
      padding: 30px;
      margin: auto;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
    }

    .form-login h2 {
      color: #50e7d4;
      font-size: 1.75rem;
      margin-bottom: 25px;
      text-align: center;
    }

    .form-control {
      border-color: #50e7d4;
    }

    .btn-success {
      background-color: #50e7d4;
      border-color: #50e7d4;
    }

    .btn-success:hover {
      background-color: #4ac8b2;
      border-color: #4ac8b2;
    }

    .btn-warning {
      background-color: #f7c13e;
      border-color: #f7c13e;
    }

    .btn-warning:hover {
      background-color: #e7b232;
      border-color: #e7b232;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-info:hover {
      background-color: #138496;
      border-color: #138496;
    }

    .form-label {
      color: #4d4d4d;
    }

    .mb-2 {
      margin-bottom: 12px;
    }
  </style>
  <title>เข้าสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="form-login">
      <h2><i class='bx bxs-user-pin' style='color:#50e7d4'></i> เข้าสู่ระบบจัดการข้อมูลพนักงาน</h2>
      <form method="POST" action="chk.php">
        <div class="mb-3">
          <label for="username" class="form-label">ชื่อเข้าระบบ</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">รหัสผ่าน</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-2">เข้าสู่ระบบ</button>
        <button type="reset" class="btn btn-warning w-100 mb-2">ล้างข้อมูล</button>
        <a href="index.php" class="btn btn-info w-100">กลับหน้าหลัก</a>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
