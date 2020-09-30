<?php

$route = $_GET['route'];

$myVar = explode('/', $route);

echo json_encode($myVar);