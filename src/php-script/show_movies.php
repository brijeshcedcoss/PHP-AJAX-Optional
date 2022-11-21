<?php
session_start();

// send data json format
echo json_encode($_SESSION["Movie"]);
