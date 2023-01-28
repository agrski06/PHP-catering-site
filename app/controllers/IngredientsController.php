<?php
include_once("Controller.php");

class IngredientsController extends Controller
{
    function __construct()
    {
        Controller::__construct("../view/ingredients.php");
    }

    function show()
    {
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => "https://www.themealdb.com/api/json/v1/1/random.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache"
                ),
            )
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response, true);
        $response = $response["meals"][0];

        $thumbnailLink = $response['strMealThumb'];
        $name = $response['strMeal'];
        $recipe = $response['strInstructions'];
        $ingredients = array();

        for ($i = 1; $i <= 20; $i++) {
            if ($response['strIngredient' . strval($i)] != '' && $response['strIngredient' . strval($i)] != null)
                array_push($ingredients, $response['strIngredient' . strval($i)] . ': ' . $response['strMeasure' . strval($i)]);
        }

        $_SESSION["apiId"] = $response['idMeal'];
        $_SESSION["thumbnailLink"] = $thumbnailLink;
        $_SESSION["name"] = $name;

        require_once("../view/ingredients.php");
        
        return;
    }
}