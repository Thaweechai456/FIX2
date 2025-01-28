<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee"; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); //รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); //เก็บผลที่ได้จากคำสั่ง $result เก็บไว้ในตัวแปร $count
$order = 1; //ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <style>
    body {
      background-color: #a8e6cf; /* พื้นหลังเป็นสีเขียวอ่อน */
      font-family: Arial, sans-serif;
    }

    .container {
      background-color: #ffffff; /* พื้นหลังของฟอร์มเป็นสีขาว */
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #4caf50; /* สีเขียวอ่อน */
      font-weight: bold;
    }

    .btn-info {
      background-color: #81C784; /* สีเขียวอ่อน */
      border-color: #81C784;
      color: white;
    }

    .btn-info:hover {
      background-color: #66BB6A; /* สีเขียวเข้มเมื่อ hover */
      border-color: #66BB6A;
    }

    .btn-success {
      background-color: #66BB6A; /* สีเขียวกลาง */
      border-color: #66BB6A;
    }

    .btn-success:hover {
      background-color: #81C784; /* สีเขียวอ่อนเมื่อ hover */
      border-color: #81C784;
    }

    .table-dark {
      background-color: #4caf50; /* สีเขียวอ่อนสำหรับหัวตาราง */
      color: white;
    }

    .table-bordered {
      border: 2px solid #66BB6A; /* ขอบตารางเป็นสีเขียวกลาง */
    }

    .form-control {
      border: 1px solid #66BB6A; /* ขอบฟอร์มเป็นสีเขียวกลาง */
    }

    .row .col-8 {
      margin-bottom: 10px;
    }
  </style>

  <title>รายชื่อพนักงานทั้งหมด</title>
</head>

<body>
  <div class="container my-5">
    <?php
    require("nav.php");
    ?>
    <h1 class="text-center mb-4">รายชื่อพนักงานทั้งหมด</h1>
    <form action="searchdata.php" class="form-group my-4" method="POST">
      <div class="row">
        <div class="col-8">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
        </div>
        <div class="col-4">
          <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info w-100">
        </div>
      </div>
    </form>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>คำนำหน้า</th>
          <th>ชื่อ</th>
          <th>สกุล</th>
          <th>วันเกิด</th>
          <th>ที่อยู่ปัจจุบัน</th>
          <th>ทักษะความสามารถ</th>
          <th>เบอร์โทรศัพท์</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $order++; ?></td>
            <td><?php echo $row["emp_title"]; ?></td>
            <td><?php echo $row["emp_name"]; ?></td>
            <td><?php echo $row["emp_surname"]; ?></td>
            <td><?php echo $row["emp_birthday"]; ?></td>
            <td><?php echo $row["emp_adr"]; ?></td>
            <td><?php echo $row["emp_skill"]; ?></td>
            <td><?php echo $row["emp_tel"]; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="text-center">
      <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
