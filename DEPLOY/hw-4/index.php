<?php

include_once "model/articles.php";
$articles = getAllArticles();

include "views/v_index.php";