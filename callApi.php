<?php

/* Conectarse a la api de apipokemon */

/* Inicializamos una peticion http */
$idPokemon= rand(1, 2);
$session = curl_init();
curl_setopt($session, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/{$idPokemon}/"); /* indico el lugar de la peticion */
curl_setopt($session, CURLOPT_RETURNTRANSFER, TRUE  ); /* indico que quiero capturar una respuesta */
$data = curl_exec($session); /* capturo la respuesta en una variable */

curl_close($session);

/* codificamos el json a php */

$json_data = json_decode($data, true); 

echo $json_data["height"];
echo "El pokemon numero " . $json_data["id"] . "<br> Su nombre es: " .  $json_data["name"] ;
// echo " <br> Imagen del pokemon <img src='" . $json_data['sprites']['front_default'] . "' alt=''>";
echo "<img src='". $json_data['sprites']['versions']['generation-i']['yellow']['front_default'] ."'   alt=''>";
