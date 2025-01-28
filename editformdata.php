<?php
require('dbconnect.php');

$emp_id = $_GET["emp_id"];

$sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>แก้ไขข้อมูลพนักงาน</title>

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

    h2 {
      color: #4caf50; /* สีเขียวอ่อน */
      font-weight: bold;
    }

    .form-control {
      border: 1px solid #4caf50; /* ขอบของฟอร์มเป็นสีเขียวอ่อน */
    }

    .btn-success {
      background-color: #4caf50; /* ปุ่มสีเขียวอ่อน */
      border-color: #4caf50;
    }

    .btn-success:hover {
      background-color: #66bb6a; /* ปุ่มสีเขียวเข้มเมื่อ hover */
      border-color: #66bb6a;
    }

    .btn-danger {
      background-color: #f44336; /* ปุ่มสีแดง */
      border-color: #f44336;
    }

    .btn-danger:hover {
      background-color: #e53935; /* ปุ่มสีแดงเข้มเมื่อ hover */
      border-color: #e53935;
    }

    .btn-primary {
      background-color: #007bff; /* ปุ่มสีน้ำเงิน */
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3; /* ปุ่มสีน้ำเงินเข้มเมื่อ hover */
      border-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container my-3">
    <h2 class="text-left">แก้ไขข้อมูลพนักงาน</h2>
    <hr>
    <form action="updatedata.php" method="POST">
      <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id">
      <div class="form-group col-6">
        <label for="emp_title">คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย" <?php if ($row["emp_title"] == "นาย") {
                                echo "SELECTED";
                              } ?>>นาย</option>
          <option value="นาง" <?php if ($row["emp_title"] == "นาง") {
                                echo "SELECTED";
                              } ?>>นาง</option>
          <option value="นางสาว" <?php if ($row["emp_title"] == "นางสาว") {
                                    echo "SELECTED";
                                  } ?>>นางสาว</option>
        </select>
      </div>
      <div class="form-group">
        <label for="emp_name">ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"]; ?>">
      </div>
      <div class="form-group">
        <label for="emp_surname">นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control" value="<?php echo $row["emp_surname"]; ?>">
      </div>
      <div class="form-group">
        <label for="emp_birthday">วันเดือนปีเกิด :</label>
        <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row["emp_birthday"]; ?>">
      </div>
      <div class="form-group">
        <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
        <textarea name="emp_adr" class="form-control"><?php echo $row["emp_adr"]; ?></textarea>
      </div>
      <div class="form-group">
        <label for="emp_skill">ทักษะความสามารถ :</label>
        <textarea name="emp_skill" class="form-control"><?php echo $row["emp_skill"]; ?></textarea>
      </div>
      <div class="form-group">
        <label for="emp_tel">เบอร์โทรศัพท์ :</label>
        <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"]; ?>">
      </div>
      <div class="my-3">
        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>
