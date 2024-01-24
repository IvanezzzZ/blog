<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">

    <!--Line Awesome (icons)-->
    <link rel= "stylesheet"
          href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!--Custom Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>
<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="/">IvaneZ</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#"><i class="las la-user"></i>Кабинет</a>
                        <ul>
                            <li><a href="#">Админ-панель</a></li>
                            <li><a href="#">Выход</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!--Slider START-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Топ публикации</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Метка первого слайда</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Метка второго слайда</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="#">Метка третьего слайда</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>
<!--Slider END-->

<!--Main block START-->
<div class="container">
    <div class="content row">
        <!--Main content START-->
        <div class="main-content col-md-9 col-12">
            <h2>Последние публикации</h2>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/code.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Статья на тему backend-рзработки</a>
                    </h3>
                    <i class="las la-user">Author Name</i>
                    <i class="las la-calendar">Date of publication</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="images/code.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Статья на тему backend-рзработки</a>
                    </h3>
                    <i class="las la-user">Author Name</i>
                    <i class="las la-calendar">Date of publication</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
        <!--Main content END-->

        <!--Sidebar START-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Poems</a></li>
                    <li><a href="#">Quotes</a></li>
                    <li><a href="#">Fiction</a></li>
                    <li><a href="#">Biography</a></li>
                    <li><a href="#">Motivation</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">Life Lessons</a></li>
                </ul>

            </div>
        </div>
        <!--Sidebar END-->
    </div>
</div>

<!--Footer START-->
<div class="footer container-fluid">
    <div class="footer-content container">
        <div class="row">
            <div class="footer-section about col-md-4 col-12">
                <h3 class="logo-text">Blog by IvaneZ</h3>
                <p>
                    Этот блог является моим первым учебным проектом. В ходе его разработки главной
                    целью ставлю научиться использовать php в полноценном проекте.
                </p>
                <div class="contact">
                    <span><i class="las la-phone"></i>&nbsp; 8-982-829-88-09</span>
                    <span><i class="las la-envelope-open"></i>&nbsp; zhuikov.ivan@mail.ru</span>
                </div>
                <div class="socials">
                    <a href="#"><i class="lab la-vk"></i></a>
                    <a href="#"><i class="lab la-facebook"></i></a>
                    <a href="#"><i class="lab la-instagram"></i></a>
                    <a href="#"><i class="lab la-twitter"></i></a>
                </div>
            </div>

            <div class="footer-section links col-md-4 col-12">
                <h3>Quick links</h3><br>
                <ul>
                    <a href="#">
                        <li>События</li>
                    </a>
                    <a href="#">
                        <li>Команда</li>
                    </a>
                    <a href="#">
                        <li>Галерея</li>
                    </a>
                    <a href="#">
                        <li>Упражнения</li>
                    </a>
                    <a href="#">
                        <li>Что-то ещё</li>
                    </a>
                </ul>
            </div>

            <div class="footer-section contact-form col-md-4 col-12">
                <h3>Контакты</h3><br>
                <form action="index.php" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Введиет ваш email">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Введите ваше сообщение"></textarea>
                    <button type="submit" class="btn btn-big contact-btn">
                        <i class="lar la-envelope"></i>
                        Отправить
                    </button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; ivanez.com | Designed bu Ivanez
        </div>
    </div>
</div>
<!--Footer END-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>