<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/body.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/short-product.css" />
    <link rel="stylesheet" type="text/css" href="css/card-product.css" />
    <link rel="stylesheet" type="text/css" href="css/delivery.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/cart.css" />
    <title>Train Eat Adaptive</title>
</head>

<body>
    <?php
    require "header.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="cart__title col-12 d-flex">Корзина</div>
        </div>
        <div class="row cart-delimeter"></div>
        <div class="cart-items">
            <div class="cart-item">
                <div class="row">
                    <div class="col-6 col-md-2 col-xl-1 cart-item__image d-flex justify-content-center align-items-center">
                        <img src="img/cart/pizza-cart.png" alt="">
                    </div>
                    <div class="col-6 col-md-5 col-xl-7">
                        <div class="cart-item__title">Маргарита</div>
                        <div class="cart-item__sostav">Средняя 30 см, традиционное тесто</div>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-center justify-content-sm-start align-items-center mt-3 mt-sm-0">
                        <div class="cart-item__count input-group">
                            <div class="count__modify input-group-prepend d-flex">
                                <button class="count__modify_minus btn">
                                    -
                                </button>
                            </div>
                            <input class="form-control count__value" min="1" name="count" value="1" step="1" type="number">
                            <div class="count__modify input-group-append d-flex">
                                <button class="count__modify_plus btn">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 col-xl-1 cart-item__price d-flex justify-content-start justify-content-sm-center align-items-center mt-3 mt-sm-0">
                        329 ₽
                    </div>
                    <div class="col-2 col-md-1 d-flex justify-content-center justify-content-sm-end align-items-center mt-3 mt-sm-0">
                        <img src="img/cart/delete-button.png" alt="">
                    </div>
                </div>
                <div class="row cart-delimeter"></div>
            </div>
            <div class="cart-item">
                <div class="row">
                    <div class="col-6 col-md-2 col-xl-1 cart-item__image d-flex justify-content-center align-items-center">
                        <img src="img/cart/pott-cart.png" alt="">
                    </div>
                    <div class="col-6 col-md-5 col-xl-7">
                        <div class="cart-item__title">Картофель</div>
                        <div class="cart-item__sostav">Прост картофель</div>
                    </div>
                    <div class="col-6 col-md-2 d-flex justify-content-center justify-content-sm-start align-items-center mt-3 mt-sm-0">
                        <div class="cart-item__count input-group">
                            <div class="count__modify input-group-prepend d-flex">
                                <button class="count__modify_minus btn">
                                    -
                                </button>
                            </div>
                            <input class="form-control count__value" min="1" name="count" value="1" step="1" type="number">
                            <div class="count__modify input-group-append d-flex">
                                <button class="count__modify_plus btn">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-2 col-xl-1 cart-item__price d-flex justify-content-start justify-content-sm-center align-items-center mt-3 mt-sm-0">
                        666 ₽
                    </div>
                    <div class="col-2 col-md-1 d-flex justify-content-center justify-content-sm-end align-items-center mt-3 mt-sm-0">
                        <img src="img/cart/delete-button.png" alt="">
                    </div>
                </div>
                <div class="row cart-delimeter"></div>
            </div>
        </div>
        <div class="cart-items-info">
            <div class="row">
                <div class="items-info__total col-12 col-md-3">
                    Всего в продукте:
                </div>
                <div class="items-info__energy col-12 col-md-5 col-lg-3 d-flex">
                    Эн. ценность:
                    <div class="items-info__value">250 ккал</div>
                </div>
                <div class="items-info__prot col-12 col-md-4 col-lg-2 d-flex">
                    Белки:
                    <div class="items-info__value">30 г</div>
                </div>
                <div class="items-info__fat col-12 col-md-5 offset-0 offset-md-3 offset-lg-0 col-lg-2 d-flex">
                    Жиры:
                    <div class="items-info__value">10 г</div>
                </div>
                <div class="items-info__carbo col-12 col-md-4 col-lg-2 d-flex">
                    Углеводы:
                    <div class="items-info__value">15 г</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 promo-title d-flex justify-content-center justify-content-sm-start">
                Промокод
            </div>
        </div>
        <div class="row mt-3">
            <div class="mt-2 promo-block input-group col-12 col-sm-6 d-flex justify-content-center justify-content-md-start">
                <input type="text" class="form-control promo-value" placeholder="XXxXXxXXxXX">
                <div class="input-group-append">
                    <button class="btn promo-btn" type="button">Применить</button>
                </div>
            </div>
            <div class="mt-2 cart-sum-block col-12 col-sm-6 d-flex justify-content-center justify-content-md-end">
                <div class="cart-sum">
                    Сумма заказа:
                </div>
                <div class="cart-sum__value">
                    658 ₽
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row cart-navigation mt-3">
            <div class="mt-2 col-12 col-sm-6 d-flex justify-content-center justify-content-sm-start">
                <button class="btn return-btn" type="button">← | Вернуться назад</button>            
            </div>
            <div class="mt-2 col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end">
                <button class="btn complete-order-btn" type="button">Оформить заказ | →</button>
            </div>
        </div>
    </div>


    <?php
    require "footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        $('.count__modify').on('click', function(e) {
            const isNegative = $(e.target).closest('.count__modify_minus').is('.count__modify_minus');
            const input = $(e.target).closest('.input-group').find('input');
            if (input.is('input')) {
                input[0][isNegative ? 'stepDown' : 'stepUp']()
            }
        });
    </script>
</body>

</html>