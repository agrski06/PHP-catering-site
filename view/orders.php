<div class="main">
    <header id="tlo">
        <div class="mask">
            <div class="content">
                <h1>Oto twoje zamówienie</h1>
            </div>
        </div>
    </header>
    <img src onerror="showOrder()">

    <!-- 
    function showOrder() {
        let counter = localStorage.getItem('counter');
        let btn = document.getElementById('btn');
        let orders = document.getElementById('orders');
        if (counter != 0) {
            btn.innerHTML = '<button type="button" class="btn btn-danger" onclick="deleteButton();">Wyczyść koszyk</button>'
                + '<button type="button" class="btn btn-primary" onclick="window.location.href=\'#address\'">Zamów</button>'
            const counts = {};
            orders.innerHTML = ''

            let arr = []
            for (key in localStorage) {
                if (key != 'counter')
                    arr.push(localStorage.getItem(key))
            }
            arr.forEach(function (x) { counts[x] = (counts[x] || 0) + 1; });
            console.log(counts)
            for (key in counts) {
                let item = JSON.parse(key);
                if (item != null) 
                    orders.innerHTML += '<div id="order">' 
                        + '<img src="' + item['thumbnailLink'] + '">'
                        + '<h4>' + item['name'] + '</h4>'
                        + '<div id="t"> Ilość: <br>' + counts[key] + '</div>'
                        + '</div>'
            }
        } else {
            btn.innerHTML = ''
            orders.innerHTML = '<h1 style="display: flex; justify-content: center;" >Pusto!</h1>'
        }
    }
    -->

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
            echo '<button type="button" class="btn btn-danger">Wyczyść koszyk</button>';
            echo '<button type="button" class="btn btn-primary">Zamów</button>';
        }
        ?>
    </div>
</div>