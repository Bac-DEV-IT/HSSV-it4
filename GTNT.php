<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>

    <style>
      .img-container {
        text-align: center;
      }
      .img-container img{
        max-width: 100%;
        height: auto;
        margin: 0 auto;
      }
      .nav-item{
        font-size: 20px;
        border: 20px;
        margin: 0;
        float: left;
      }
      .row-1 {
            font-size: 15px;
            background-color: lightgoldenrodyellow;
            border: 5px solid #ccc;
            margin-bottom: 15px;
            padding: 10px;
            float: left;
            width: 220px;
        }

        .row-1 img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .row-1 button {
            width: 100%;
            margin-top: 10px;
            background-color: paleturquoise;
            border: 1px solid #ccc;
            padding: 5px;
            cursor: pointer;
        }

        .row-1 button i {
            margin-right: 5px;
        }
     i{
        border: 1px;
        margin: 5px 5px 5px 5px ;
      }
      
      a:hover{
        color: red;
      }
      .table-bordered {
      display: flex;
      flex-direction: column;
      width: auto;
      margin: 50px auto;
    }

    .table-row {
        width: auto;
      display: flex;
      justify-content: space-between;
      border-bottom: 1px solid #ccc;
      padding: 10px;
    }

    .table-header {
      font-weight: bold;
      width: auto;
      background-color: #A9A9A9;
      justify-content: center; 
    }

    .column-1{
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .column-3{
        flex: 3;
        display: flex;
        margin-right: 100px;
    }

    .checkbox-column {
    flex: 1;
      display: flex;
      align-items: center;
    }

    input[type="checkbox"] {
      margin-right: 5px;
    }
    </style>
</head>
<body>

   <div class="img-container" >
      <img src="https://eaut.edu.vn/wp-content/uploads/2016/11/logo-vector-5-2.png" >
   </div>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav col-md-12 bg-primary " data-bs-theme="dark">
          <li class="nav-item  " >
            <a class="nav-link active text-white " aria-current="page" href="UserDN.php"><i class="bi bi-house"></i>Trang chủ</a>
          </li>
          <li class="nav-item c ">
            <a class="nav-link active text-white" href="#"><i class="bi bi-question-circle"></i>Hướng dẫn đăng ký</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active text-white"  href="#"></i><i class="bi bi-exclamation-lg"></i>Diễn đàn</a>
          </li>
        </ul>
    </div>
  </nav>
  <div class="row-1 col-md-4">
  <img src="https://cdn.shopify.com/s/files/1/0161/4702/files/images.jpg?v=1656671567" height="200px" width="220px">
  <a href="TTSV.php"  style= "text-decoration: none; ">
    <button type="button" ><i class="bi bi-person-circle"></i>Thông tin sinh viên</button>
  </a>
  <a href="GTNT.php"  style= "text-decoration: none; ">
    <button type="button" ><i class="bi bi-card-text"></i>Giấy tờ nhập trường</button>
  </a>
  <a href="QuanheGD.php"  style= "text-decoration: none; ">
    <button type="button"><i class="bi bi-exclamation-circle"></i>Quan hệ gia đình</button>
  </a>
  <a href="Lienhe.php"  style= "text-decoration: none; ">
    <button type="button"><i class="bi bi-headset"></i>Liên hệ hỗ trợ</button>
  </a>
    </div>  
    <div class=" col-md-6 table-bordered border-primary ">
    <div class="table-row table-header">
      <div class="column-1">STT</div>
      <div class="column-3">Loại giấy tờ</div>
      <div class="checkbox-column">Đã nộp</div>
      <div class="checkbox-column">Còn thiếu</div>
    </div>

    <!-- Example data rows -->
    <div class="table-row">
      <div class="column-1">1</div>
      <div class="column-3">Chứng chỉ quốc phòng</div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
    </div>

    <div class="table-row">
      <div class="column-1">2</div>
      <div class="column-3">Chứng Chỉ tiếng anh</div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
    </div>
    <div class="table-row">
      <div class="column-1">3</div>
      <div class="column-3">Chứng Chỉ giáo dục thể chất</div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
    </div>

    <div class="table-row">
      <div class="column-1">4</div>
      <div class="column-3">Chứng Chỉ tiếng anh</div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
      <div class="checkbox-column"><id="admin-checkbox-column"></div>
    </div>
    </div>
    <script>
    // Check if the user is an admin (replace this condition with your own logic)
    var isAdmin = true;

    if (isAdmin) {
      // If the user is an admin, create and append the checkbox
      var checkboxContainer = document.getElementById('admin-checkbox-column');
      var checkbox = document.createElement('input');
      checkbox.type = 'checkbox';
      checkboxContainer.appendChild(checkbox);
    }
  </script>

</body>
</html>