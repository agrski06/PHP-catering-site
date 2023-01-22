<div class="main">
    <header id="fruit">
        <div class="mask">
            <div class="content">
                <h1>Danie losowe!</h1>
                <p>Prezentujemy danie losowo wybrane z naszej oferty!</p>
                <p>Zamów je u nas lub zrób według udostępnionego przepisu!</p>
                <div style="display: flex; justify-content: space-evenly; ">
                    <form action="index.php?content_id=addToCart" method="post">
                        <button type="submit" class="btn btn-primary">Zamów</button>
                    </form>
                    <form action="index.php?content_id=ingredients" method="post">
                        <button type="submit" class="btn btn-primary">Losuj!</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <img src onerror='showFruit();'>
    <div id="fruit-main">
        <div id="recipe">
            <img id="thumb" src="<?php echo $thumbnailLink; ?>" alt="">
            <div id="recipe-text">
                <h3 id="recipe-name">
                    <?php echo $name; ?>
                </h3>
                <div id="recipe-ingredients">
                    <?php foreach ($ingredients as $key) {
                        echo $key . "<br>";
                    }
                    ;
                    ?>
                </div>
                <div id="recipe-instructions">
                    <?php echo $recipe; ?>
                </div>
            </div>
        </div>
    </div>

</div>