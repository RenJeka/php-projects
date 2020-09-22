<?php
$myLogin = "rockStar33";

if (strlen($myLogin) > 0) {
    echo "length: ".strlen($myLogin)."</br>";
    echo substr($myLogin, 0, 3);
} else {
    echo "login is empty";
}
