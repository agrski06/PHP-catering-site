// 'https://www.themealdb.com/api/json/v1/1/random.php'
// api/fruit/all
// api/fruit/banana
async function getRecipies() {
    const response = await fetch('https://www.themealdb.com/api/json/v1/1/random.php')
        .then(response => response.json())
        .then(data => {
            return data;
        })
    return response
}

async function showFruit() {
    const response = await getRecipies();

    const meal = response['meals']['0']

    const thumbnailLink = meal['strMealThumb']
    const name = meal['strMeal']
    console.log(name)
    const recipe = meal['strInstructions'];

    let ingredients = []

    for (let i = 1; i <= 20; i++) {
        if (meal['strIngredient' + i] != '' && meal['strIngredient' + i] != null)
            ingredients.push(meal['strIngredient' + i] + ': ' + meal['strMeasure' + i])
    }

    const image = document.getElementById('thumb')
    const recipeName = document.getElementById('recipe-name')
    const recipeIng = document.getElementById('recipe-ingredients')
    const recipeInst = document.getElementById('recipe-instructions')

    image.setAttribute('src', thumbnailLink)
    recipeIng.innerHTML = ingredients.join('<br>');
    recipeName.innerHTML = name
    recipeInst.innerHTML = recipe

    let obj = new Object();
    obj.thumbnailLink = thumbnailLink;
    obj.name = name;
    obj.recipe = recipe;
    obj.ingredients = ingredients;
    let jsonString = JSON.stringify(obj);

    sessionStorage.setItem('currentItem', jsonString)

    console.log(ingredients)
}

