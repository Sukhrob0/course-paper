<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>

        <nav class="navbar navbar-expand-lg " >
            <div class="container" style="padding-left: 250px;"   >
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto ms-2-auto " >
                  <li class="nav-item">
      
                    <a class="nav-link active" aria-current="page" href="../index.html">Zoole</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Мужчины
                    </a>
                    <ul class="dropdown-menu" >
                      <li><a class="dropdown-item" href="#">Одежда</a></li>
                      <li><a class="dropdown-item" href="#">Обувь</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Женшины
                    </a>
                    <ul class="dropdown-menu" >
                      <li><a class="dropdown-item" href="#">Одежда</a></li>
                      <li><a class="dropdown-item" href="#">Обувь</a></li>
                    </ul>
                  </li>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                  </form>
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 " ></ul>
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
    


    <h1 class='text'>Регистрация</h1>
  <div class="wrapper">
    
    <form action="registr.php" method="post">
      <div class="input-box">
        
        <input type="text" placeholder="Введите логин" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Введите email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Введите пароль" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Введите пароль повторно" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>Я согласен со всеми условиями </h3>
      </div>
      <div class="input-box button">

      <input type="Submit" value="Зарегестрироваться">
      </div>
      <div class="input-box button">
        <input type="Submit" value="У меня кесть аккаунт" href="../php/registr.php">
      </div>
      
    </form>
  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="script.js"></script>

</body>
</html>