function addToOrders() {
    if(localStorage.getItem('counter') == null) {
        localStorage.setItem('counter', 0); // dodaj licznik jezeli nie istnieje
    }
    let c = parseInt(localStorage.getItem('counter'));
    localStorage.setItem(c, sessionStorage.getItem('currentItem'))
    localStorage.setItem('counter', c+1)
}

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

function deleteButton(btn) {
    localStorage.clear();
    localStorage.setItem('counter', 0);
    showOrder();
}

function zupa() {
    let c = parseInt(localStorage.getItem('counter'));
    localStorage.setItem(c, '{"thumbnailLink": "img/zupa.jpg", "name": "Zupa"}')
    localStorage.setItem('counter', c+1);
}

function obiad1() {
    let c = parseInt(localStorage.getItem('counter'));
    localStorage.setItem(c, '{"thumbnailLink": "img/obiad1.jpg", "name": "Obiad 1"}')
    localStorage.setItem('counter', c+1);
}

function obiad2() {
    let c = parseInt(localStorage.getItem('counter'));
    localStorage.setItem(c, '{"thumbnailLink": "img/obiad2.jpg", "name": "Obiad 2"}')
    localStorage.setItem('counter', c+1);
}
