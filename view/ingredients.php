<div class="main">
    <header id="fruit">
        <div class="mask">
            <div class="content">
                <h1>Danie losowe!</h1>
                <p>Prezentujemy danie losowo wybrane z naszej oferty!</p>
                <p>Zamów je u nas lub zrób według udostępnionego przepisu!</p>
                <div style="display: flex; justify-content: space-evenly; ">
                    <button type="button" class="btn btn-primary" onclick="addToOrders()">Zamów</button>
                    <button type="button" class="btn btn-primary" onclick="showFruit()">Losuj!</button>
                </div>
            </div>
        </div>
    </header>
    <img src onerror='showFruit();'>
    <div id="fruit-main">
        <div id="recipe">
            <img id="thumb" src="" alt="">
            <div id="recipe-text">
                <h3 id="recipe-name"></h3>
                <div id="recipe-ingredients"></div>
                <div id="recipe-instructions"></div>
            </div>
        </div>
    </div>

</div>