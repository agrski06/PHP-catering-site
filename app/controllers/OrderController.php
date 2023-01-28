<?php
include_once("../app/models/Cart.php");

class OrderController {
    function show() {
        if (!isset($_SESSION["userId"])) {
            require_once("../view/login.php");
            return;
        }
        $cart = new Cart();
        $userId = $_SESSION["userId"];
        $cart->setUserId($userId);
        $cartId = $cart->getMysqli()->query("select * from cart where userId='$userId'")->fetch_object()->id;
        $cart->setId($cartId);
        $products = $cart->getProducts();

        if ($products == -1) {
            $error = "Błąd wyświetlania koszyka!";
            require_once("../view/customError.php");
            return;
        }

        require_once("../view/orders.php");
    }
}

// function showOrder() {
//     let counter = localStorage.getItem('counter');
//     let btn = document.getElementById('btn');
//     let orders = document.getElementById('orders');
//     if (counter != 0) {
//         btn.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleteButton();">Wyczyść koszyk</button>'
//             + '<button type="button" class="btn btn-primary" onclick="window.location.href=\'#address\'">Zamów</button>'
//         const counts = {};
//         orders.innerHTML = ''

//         let arr = []
//         for (key in localStorage) {
//             if (key != 'counter')
//                 arr.push(localStorage.getItem(key))
//         }
//         arr.forEach(function (x) { counts[x] = (counts[x] || 0) + 1; });
//         console.log(counts)
//         for (key in counts) {
//             let item = JSON.parse(key);
//             if (item != null) 
//                 orders.innerHTML += '<div id="order">' 
//                     + '<img src="' + item['thumbnailLink'] + '">'
//                     + '<h4>' + item['name'] + '</h4>'
//                     + '<div id="t"> Ilość: <br>' + counts[key] + '</div>'
//                     + '</div>'
//         }
//     } else {
//         btn.innerHTML = ''
//         orders.innerHTML = '<h1 style="display: flex; justify-content: center;" >Pusto!</h1>'
//     }
// }
