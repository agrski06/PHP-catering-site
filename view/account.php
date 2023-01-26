<script>
    function validate() {
        let nameRegex = /^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ ]+$/;
        let usernameRegex = /^[a-zA-Z0-9]+$/;
        let passwordRegex = /^[a-zA-Z0-9*#@!.,/;:-_=+]+$/;
        let emailRegex = /^\S+@\S+\.\S+$/

        let login = document.getElementById("login").value
        let passwd = document.getElementById("password").value
        let firstname = document.getElementById("firstname").value
        let lastname = document.getElementById("lastname").value
        let email = document.getElementById("email").value
        let error = document.getElementById("err")
        error.style = 'color: red'

        if (login != '' && !usernameRegex.test(login)) {
            error.innerHTML = 'Podaj właściwy login!'
            return false
        } 
        if (passwd != '' && !passwordRegex.test(passwd)) {
            error.innerHTML = 'Podaj właściwe hasło!'
            return false
        } 
        if (firstname != '' && !nameRegex.test(firstname)) {
            error.innerHTML = 'Podaj właściwe imię!'
            return false
        } 
        if (lastname != '' && !nameRegex.test(lastname)) {
            error.innerHTML = 'Podaj właściwe nazwisko!'
            return false
        } 
        if (email != '' && !emailRegex.test(email)) {
            error.innerHTML = 'Podaj właściwy email!'
            return false
        } 

        return true;
    }
    var x = document.querySelector("[method='post']");
    x.addEventListener("submit",function() {
        return validate();
    });
</script>
<div class="main">
    <header>
        <div class="mask">
            <div class="content">
                <h1>
                    <?php echo $user->getUserName(); ?>
                </h1>
                <p>
                    <?php echo $user->getEmail() . "<br>";
                    echo $user->getFirstName() . " " . $user->getLastName();
                    ?>
                </p>
            </div>
        </div>
    </header>

    <form style="
        display: flex;
        width: 100%;
        justify-content: space-evenly;
        align-items: center;
        padding: 1rem;
        flex-direction: row;
        "
        onsubmit="return validate();"
        action="index.php?content_id=updateUser"
        method="post">

        <div>
        <label for="login">Login:</label> <br>
        <input type="text" name="login" id="login">
        </div>
        
        <div>
        <label for="password">Hasło:</label>
        <br>
        <input type="password" name="password" id="password">
        </div>

        <div>
        <label for="firstname">Imię:</label>
        <br>
        <input type="text" name="firstname" id="firstname">
        </div>

        <div>
        <label for="lastname">Nazwisko:</label>
        <br>
        <input type="text" name="lastname" id="lastname">
        </div>

        <div>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" id="email">
        </div>

        <div id="err"></div>

        <div style="padding: 1rem;">
        <input type="submit" value="Aktualizuj">
        </div>
    </form>

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
                    print("Suma: " . $total . " PLN");
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