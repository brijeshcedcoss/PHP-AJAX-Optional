<?php
session_start();
$movie_name = $_POST["movie_name"];
$movie_rating = $_POST["movie_rating"];
// add data in session
$_SESSION["Movie"][] = ["movie_name" => $movie_name, "movie_rating" => $movie_rating];
echo 1;
