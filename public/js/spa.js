// async function fetchHtmlAsText(url) {
//     return await (await fetch(url)).text();
// }

// function getContent(fragmentId, callback) {

//     var pages = {
//         home: 'data/home.html',
//         about: 'data/about.html',
//         ingredients: 'data/ingredients.html',
//         orders: 'data/orders.html',
//         address: 'data/address.html'
//     };

//     callback(pages[fragmentId]);
// }

// function loadContent() {

//     let contentDiv = document.getElementById('app'),
//         fragmentId = location.hash.substring(1);

//     getContent(fragmentId, async function (content) {
//         contentDiv.innerHTML = await fetchHtmlAsText(content);
//     });

// }

// // BEGIN
// // END

// if (!location.hash) {
//     location.hash = "#home";
// }

// $(document).ready(function() {
//     loadContent();
// })

// window.addEventListener("hashchange", loadContent)