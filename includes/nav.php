<?php
include(__DIR__.'/arrays.php');
    for($i = 0; $i < count($nav_items['name']); $i++) {
        echo(
            "<ul>
                <li><a href=".$nav_items['links'][$i].">".$nav_items['name'][$i]."</a></li>
            </ul>"
        );
}

?>