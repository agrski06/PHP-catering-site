<div class="main">
    <header id="tlo">
        <div class="mask">
            <div class="content">
                <h1>Oto twoje zamówienie</h1>
            </div>
        </div>
    </header>

    <div id="orders">
        <?php
        if (count($products) == 0) {
            echo '<h1 style="display: flex; justify-content: center;" >Pusto!</h1>';
        } else {
            foreach ($products as $obj) {
                echo '<div id="order">'
                    . '<img src="' . $obj["productImage"] . '">'
                    . '<h4>' . $obj["productName"] . '</h4>'
                    . '<div id="t"> Ilość: <br>' . $obj["quantity"] . '</div>'
                    . '</div>';
            }
        }
        ?>
    </div>

    <div id="btn" style="display: flex; justify-content: center; gap: 1rem;">
        <?php
        if (count($products) != 0) {
            echo '<form action="index.php?content_id=clearCart" method="post">';
            echo '<button type="submit" class="btn btn-danger">Wyczyść koszyk</button>';
            echo '</form>';

            echo '<form action="index.php?content_id=makeOrder" method="post">';
            echo '<button type="submit" class="btn btn-primary">Zamów</button>';
            echo '</form>';
        }
        ?>
    </div>
</div>