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
    <link rel="stylesheet" type="text/css" href="css/checkout.css" />
    <title>Train Eat Adaptive</title>
</head>

<body>
    <?php
    require "header.php";
    ?>

    <div class="container">
        <div class="row" id="customer_details">
            <div class="col-12 col-md-6">
                <div class="woocommerce-billing-fields">
                    <div class="title">
                        <h3>Детали оплаты</h3>
                    </div>
                </div>
                <div class="validate-required">
                    <label for="billing_first_name">
                        Имя
                        <abbr class="required" title="обязательно">*</abbr>
                    </label>
                    <div class="woocommerce-input-wrapper">
                        <input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="" autocomplete="given-name">
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <h3>Детали</h3>
                <div class="woocommerce-additional-fields__field-wrapper">
                    <div class="validate-required">
                        <label for="order_comments" class="">Примечание к заказу&nbsp;
                            <span class="optional">(необязательно)</span>
                        </label>
                        <div class="woocommerce-input-wrapper">
                            <textarea name="order_comments" class="input-text detail-text" id="order_comments" placeholder="Примечания к вашему заказу, например, особые пожелания отделу доставки." rows="2" cols="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <table class="shop_table woocommerce-checkout-review-order-table">
            <thead>
                <tr>
                    <th class="product-name">Товар</th>
                    <th class="product-total">Подытог</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart_item">
                    <td class="product-name">
                        Пепперони&nbsp; <strong class="product-quantity">×&nbsp;2</strong> </td>
                    <td class="product-total">
                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₽</span> 666</bdi></span>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="cart-subtotal">
                    <th>Подытог</th>
                    <td><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₽</span> 666</bdi></span></td>
                </tr>

                <tr class="order-total">
                    <th>Итого</th>
                    <td><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₽</span> 666</bdi></span></strong> </td>
                </tr>
            </tfoot>
        </table>

        <button type="submit" class="button alt checkout-submit" name="woocommerce_checkout_place_order" id="place_order" value="Подтвердить заказ" data-value="Подтвердить заказ">Подтвердить заказ</button>

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

</body>

</html>