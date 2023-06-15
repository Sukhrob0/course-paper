<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Одежда</title>
</head>

<body>

  <style>
    .texts {
      display: flex;
      text-align: left;
      margin-left: 20%;

    }

    .components {
      font-size: 30px;
      margin: 20px;

    }

    .components {
      position: relative;

      cursor: pointer;
      line-height: 1;
      /*задаём высоту строки*/
      text-decoration: none;
      /*убираем подчёркивание*/

    }

    .components:after {
      display: block;
      position: absolute;
      left: 0;
      /*изменить на right:0;, чтобы изменить направление подчёркивания */
      width: 0;
      /*задаём длинну линии до наведения курсора*/
      height: 2px;
      /*задаём ширину линии*/
      background-color: #00a650;
      /*задаём цвет линии*/
      content: "";
      transition: width 0.3s ease-out;
      /*задаём время анимации*/
    }

    .components:hover:after,
    .components:focus:after {
      width: 100%;
      /*устанавливаем значение 100% чтобы ссылка подчёркивалась полностью*/
    }
























    .product-card {
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06);
      transition: all .3s;
    }

    .product-card:hover {
      box-shadow: 0 14px 30px -15px rgba(0, 0, 0, 0.75);
    }

    .product-thumb a {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 200px;
      padding: 20px;
    }

    .product-thumb img {
      max-width: 100%;
      max-height: 100%;
    }

    .product-details {
      padding: 20px;
    }

    .product-details h4 a {
      font-weight: 500;
      display: block;
      height: 60px;
      overflow: hidden;
      text-decoration: none;
    }

    .product-details p {
      font-size: 15px;
      margin-bottom: 20px;
      color: #999;
      height: 44px;
      overflow: hidden;
    }

    .product-bottom-details {
      overflow: hidden;
      border-top: 1px solid #eee;
      padding-top: 20px;
    }

    .product-price {
      font-size: 18px;
      color: #ee6e73;
      font-weight: 600;
    }

    .product-price small {
      color: #ccc;
      font-weight: 400;
      text-decoration: line-through;
      margin-right: 5px;
    }

    .product-links a {
      font-size: 20px;
      margin-left: 10px;
    }
  </style>

  <header>
    <nav class="navbar navbar-expand-lg ">
      <div class="container" style="padding-left: 250px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto ms-2-auto ">
            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="C:\Users\admin\Desktop\OSPanel — копия\domains\progekt2\course_web_site\index.html">Zoole</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Мужчины
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Одежда</a></li>
                <li><a class="dropdown-item" href="#">Обувь</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Женшины
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Одежда</a></li>
                <li><a class="dropdown-item" href="#">Обувь</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Дети
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Одежда</a></li>
                <li><a class="dropdown-item" href="#">Обувь</a></li>
              </ul>
            </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 "></ul>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="texts">

    <div class="components">
      <p><a href="#"></a>Одеждa</p>
    </div>

    <div class="components">
      <p><a href="#"></a>Обувь</p>
    </div>

  </div>

z







  <section class="main-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="https://assets.teenvogue.com/photos/5d9f4e7cbce9d10008f48ea6/4:3/w_3000" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">iPhone</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <small>$230.99</small> $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="https://assets.teenvogue.com/photos/5d9f4e7cbce9d10008f48ea6/4:3/w_3000" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">Apple Cinema 30"</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="https://assets.teenvogue.com/photos/5d9f4e7cbce9d10008f48ea6/4:3/w_3000" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">Canon EOS 5D</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <small>$230.99</small> $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="https://assets.teenvogue.com/photos/5d9f4e7cbce9d10008f48ea6/4:3/w_3000" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">HP</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <small>$230.99</small> $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="https://assets.teenvogue.com/photos/5d9f4e7cbce9d10008f48ea6/4:3/w_3000" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">iMac</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <small>$230.99</small> $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-3">
          <div class="product-card">
            <div class="product-thumb">
              <a href="#"><img src="images\image 15.png" alt=""></a>
            </div>
            <div class="product-details">
              <h4><a href="#">skldfsdkljfhsdkjlfhsdjklfhsdkljf</a></h4>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium, repudiandae?</p>
              <div class="product-bottom-details d-flex justify-content-between">
                <div class="product-price">
                  <small>$230.99</small> $99
                </div>
                <div class="product-links">
                  <a href="#"><i class="fas fa-shopping-cart"></i></a>
                  <a href="#"><i class="far fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>