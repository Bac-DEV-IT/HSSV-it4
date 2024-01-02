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
            <a class="nav-link active text-white " aria-current="page" href="#"><i class="bi bi-house"></i>Trang chủ</a>
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
  <div class="row-1 col-md-2">
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

</body>
</html>