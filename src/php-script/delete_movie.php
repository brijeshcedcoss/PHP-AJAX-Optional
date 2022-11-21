<?php
session_start();
$movie_id = $_POST["movie_id"];
// delete movie
array_splice($_SESSION["Movie"], $movie_id, 1);
echo 1;
