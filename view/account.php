<div class="main">
    <header>
        <div class="mask">
            <div class="content">
                <h1>
                    <?php echo $user->getUserName(); ?>
                </h1>
            </div>
        </div>
    </header>

    <div style="display: flex;
    justify-content: center;">
        <div style="margin-top: 1rem;
            display: flex;
            flex-direction: row;
            width: 80%;
            justify-content: space-evenly;
            flex-wrap: wrap;
            gap: 1rem;">
            <?php 
            $i = 1;
            if (count($orders) > 0) {
                foreach ($orders as $order) { ?>
                <div style="outline: 2px;
                outline-width: 2px;
                outline-color: grey;
                outline-style: solid;
                padding: 1rem;">
                    <?php
                    $total = 0;
                    echo "Zamówienie " . $i . ": <br>";
                    foreach ($order as $products) {
                        foreach ($products as $product) {
                            print($product["productName"] . "   ");
                            print('<img style="max-width: 3rem;" src="' . $product["productImage"] . '">    ');
                            print($product["productPrice"] . " PLN");
                            if ($product["quantity"] > 1) {
                                print(" x" . $product["quantity"]);
                            }
                            $total += $product["productPrice"] * $product["quantity"];
                            print("<br>");
                        }

                    }
                    print("Suma: " . $total);
                    $i++;
                    if ($i % 2 == 0) {
                        print("<br>");
                    }
                    ?>
                </div>
                <?php
                }
            }
            else {
                echo "<h1>Brak zamówień!</h1>";
            }
            ?>
        </div>
    </div>


    <div style="
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        flex-direction: row;
        ">
        <?php if (count($orders) > 0) { ?>
        <form action="index.php?content_id=clearOrders" method="post">

            <div style="padding: 1rem;">
                <input class="btn btn-danger" type="submit" value="Usuń zamówienia">
            </div>
        </form>
        <?php }?>

        <form action="index.php?content_id=logout" method="post">

            <div style="padding: 1rem;">
                <input class="btn btn-primary" type="submit" value="Wyloguj">
            </div>
        </form>
    </div>

</div>