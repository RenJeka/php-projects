<?php
$markup = " <div class='refnamediv'> 
                <h1>htmlspecialchars</h1> 
                <p> (PHP 4, PHP 5, PHP 7)</p>
                <p class='refpurpose'>
                    <span class='refname'>htmlspecialchars</span> — 
                    <span class='dc-title'>Любой текст</span>
                </p> 
            </div>";

print(htmlspecialchars($markup));
echo "<hr/>";
echo strip_tags($markup);
echo "<hr/>";
echo strip_tags($markup, "<p>");

echo "<hr/>";
echo "<br/>";
echo md5($markup);
echo "<br/>";
echo "<br/>";

echo intval($markup);
