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
      .d-flex{
      background-color:  paleturquoise;
      }
      .row{
        display: inline;
        margin: 0;
        border: 0;
      }
      .box1 {
            font-size: 15px;
            background-color: lightgoldenrodyellow;
            border: 5px solid #ccc;
            margin-bottom: 15px;
            padding: 10px;
            float: left;
            width: 220px;
        }

        .box1 img {
            width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .box1 button {
            width: 100%;
            margin-top: 10px;
            background-color: paleturquoise;
            border: 1px solid #ccc;
            padding: 5px;
            cursor: pointer;
        }

        .box1 button i {
            margin-right: 5px;
        }
        a:hover{
        color: red;
      }
      i{
        border: 1px;
        margin: 5px 5px 5px 5px ;
      }
      .table-container {
            display: flex;
            flex-direction: column;
            margin: 20px;
        }

        .table-container table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 50px;
        }

        .table-container th, .table-container td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;

        }

        .table-container th {
            background-color: #f2f2f2;
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
  <nav class="row col-md-auto">
    <div class="box1 col-md-3 ">
      <img src="https://cdn.shopify.com/s/files/1/0161/4702/files/images.jpg?v=1656671567" height="200px" width="220px">
      <a href="TTSV.php" style= "text-decoration: none;" >
        <button type="button" ><i class="bi bi-person-circle"></i>Thông tin sinh viên</button>
      </a> 
      <a href="GTNT.php"  style= "text-decoration: none;">
        <button type="button" ><i class="bi bi-card-text"></i>Giấy tờ nhập trường</button>
      </a>
      <a href="QuanheGD.php"  style= "text-decoration: none;">
        <button type="button"><i class="bi bi-exclamation-circle"></i>Quan hệ gia đình</button>
      </a>
      <a href="Lienhe.php"  style= "text-decoration: none;">
        <button type="button"><i class="bi bi-headset"></i>Liên hệ hỗ trợ</button>
      </a>
    </div>
    <div class="table-container col-md-9" >
        <table class="custom-table">
            <thead>
                <tr>
                  <th>Mã SV</th>
                  <th>Tên SV</th>
                  <th>Năm Sinh</th>
                  <th>Giới tính</th>
                </tr>
                <tr>
                  <td>Anh DB</td>
                </tr>
            </thead>
            <!-- Add table body and rows here if needed -->
        </table>

        <table class="custom-table">
            <thead>
                <tr>
                <th>Số điện thoại</th>
                <th>Quốc tịch</th>
                <th>Dân tộc</th>
                <th>Tôn giáo</th>
                </tr>
                <tr>
                  <td>Anh DB</td>
                  <td>Bac dz</td>
                  <td>027r9832fuhv</td>
                  <td>dsvsdljvmfdvlfdkbkeljqeruoibfbjgk</td>
                </tr>
                
            </thead>
            <!-- Add table body and rows here if needed -->
        </table>

        <table class="custom-table">
            <thead>
                <tr>
                <th>Quê quán</th>
                <th>Lớp</th>
                </tr>
            </thead>
            <!-- Add table body and rows here if needed -->
        </table>
    </div>
  </nav>
</body>
</html>