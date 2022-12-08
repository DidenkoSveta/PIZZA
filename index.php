<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/body.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/short-product.css" />
    <link rel="stylesheet" type="text/css" href="css/card-product.css" />
    <link rel="stylesheet" type="text/css" href="css/delivery.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <title>Train Eat Adaptive</title>
</head>

<body>
    <!-- header -->
    <?php
    require "header.php";
    ?>

    <!-- carusel promotion -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/carusel/1.jpg" alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carusel/2.jpg" alt="Второй слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/carusel/3.jpg" alt="Третий слайд">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- carusel short card products -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                <img src="img/subtitle-line.png" alt="subtitleline">
                <h2 class="subtitle">Новое и популярное</h2>
                <img src="img/subtitle-line.png" alt="subtitleline">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-sm-6 col-xl-3 mb-3">
                <a class="short-product-link" href="#">
                    <div class="short-product d-flex flex-row align-items-center">
                        <div>
                            <img src="img/short-product/pizza.png" alt="">
                        </div>
                        <div class="short-text d-flex flex-column medium__bold">
                            <div>
                                Пепперони
                            </div>
                            <div class="sp__price mt-2">
                                от 329 ₽
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mb-3">
                <a class="short-product-link" href="#">
                    <div class="short-product d-flex flex-row align-items-center">
                        <div>
                            <img src="img/short-product/burger.png" alt="">
                        </div>
                        <div class="short-text d-flex flex-column medium__bold">
                            <div>
                                Бургер
                            </div>
                            <div class="sp__price mt-2">
                                от 329 ₽
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mb-3">
                <a class="short-product-link" href="#">
                    <div class="short-product d-flex flex-row align-items-center">
                        <div>
                            <img src="img/short-product/desert.png" alt="">
                        </div>
                        <div class="short-text d-flex flex-column medium__bold">
                            <div>
                                Десерт
                            </div>
                            <div class="sp__price mt-2">
                                от 329 ₽
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mb-3">
                <a class="short-product-link" href="#">
                    <div class="short-product d-flex flex-row align-items-center">
                        <div>
                            <img src="img/short-product/pizza.png" alt="">
                        </div>
                        <div class="short-text d-flex flex-column medium__bold">
                            <div>
                                Маргарита
                            </div>
                            <div class="sp__price mt-2">
                                от 329 ₽
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- regular product cards pizza -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                <img src="img/subtitle-line.png" alt="subtitleline">
                <h2 class="subtitle">Пицца</h2>
                <img src="img/subtitle-line.png" alt="subtitleline">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 d-flex justify-content-center">
                <div class="product-card">
                    <img class="product-card__image img-fluid" src="img/product-card/pizza.png"></img>
                    <div class="product-card__body d-flex flex-column justify-content-between">
                        <div class="big_bold product-card__title">
                            Пепперони фреш
                        </div>
                        <div class="normal product-card__text">
                            Описание продукта перейти на него.
                        </div>
                        <div class="d-flex justify-content-between align-items-center product-card__price-select">
                            <div class="big">
                                от 329р
                            </div>
                            <div>
                                <a class="btn product-card__select-button medium" href="#" role="button">Выбрать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 d-flex justify-content-center">
                <div class="product-card">
                    <img class="product-card__image img-fluid" src="img/product-card/pizza.png"></img>
                    <div class="product-card__body">
                        <div class="big_bold product-card__title">
                            Пепперони фреш
                        </div>
                        <div class="normal product-card__text">
                            Описание продукта или краткая характеристика, которая вкратце описывает сам продукт и
                            предлагает
                            клиенту перейти на него.
                        </div>
                        <div class="d-flex justify-content-between align-items-center product-card__price-select">
                            <div class="big">
                                от 329р
                            </div>
                            <div>
                                <a class="btn product-card__select-button medium disabled" href="#" role="button">Товара
                                    нет</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 d-flex justify-content-center">
                <div class="product-card">
                    <div class="new_flag d-flex justify-content-center align-items-center">
                        NEW
                    </div>
                    <img class="product-card__image img-fluid" src="img/product-card/pizza.png"></img>
                    <div class="product-card__body">
                        <div class="big_bold product-card__title">
                            Пепперони фреш
                        </div>
                        <div class="normal product-card__text">
                            Описание продукта или краткая характеристика, которая вкратце описывает сам продукт и
                            предлагает
                            клиенту перейти на него.
                        </div>
                        <div class="d-flex justify-content-between align-items-center product-card__price-select">
                            <div class="big">
                                от 329р
                            </div>
                            <div>
                                <a class="btn product-card__select-button medium " href="#" role="button">Выбрать</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-3 d-flex justify-content-center">
                <div class="product-card">
                    <div class="new_flag d-flex justify-content-center align-items-center">
                        NEW
                    </div>
                    <img class="product-card__image img-fluid" src="img/product-card/pizza.png"></img>
                    <div class="product-card__body">
                        <div class="big_bold product-card__title">
                            Пепперони фреш
                        </div>
                        <div class="normal product-card__text">
                            Описание продукта или краткая характеристика, которая вкратце описывает сам продукт и
                            предлагает
                            клиенту перейти на него.
                        </div>
                        <div class="d-flex justify-content-between align-items-center product-card__price-select">
                            <div class="big">
                                от 329р
                            </div>
                            <div>
                                <a class="btn product-card__select-button medium " href="#" role="button">Выбрать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- combo -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                <img src="img/subtitle-line.png" alt="subtitleline">
                <h2 class="subtitle">Комбо</h2>
                <img src="img/subtitle-line.png" alt="subtitleline">
            </div>
        </div>
    </div>

    <!-- delivery -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="big_bold">
                    ИНФОРМАЦИЯ О ДОСТАВКЕ
                </div>
                <div class="delivery-block">
                    <div class="normal delivery-text dilivery-price">
                        900 ₽
                    </div>
                    <div class="normal delivery-text">
                        Минимальная сумма заказа для бесплатной доставки
                    </div>
                </div>
                <div class="delivery-block">
                    <div class="normal delivery-text dilivery-price">
                        С 11:00 до 22:30
                    </div>
                    <div class="normal delivery-text">
                        Время доставки по Хабаровску
                    </div>
                </div>
                <div class="delivery-block">
                    <div class="normal delivery-text dilivery-price">
                        Оплата при получении
                    </div>
                    <div class="normal delivery-text">
                        Как наличными, так и по карте через терминал
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="d-md-none mt-3"></div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d71188.98357191011!2d135.07993057571323!3d48.464656019471306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1610020950962!5m2!1sru!2sru"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    require "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>