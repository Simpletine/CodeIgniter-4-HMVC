<?php
// result as an array ,we need to convert to string using foreach

foreach ($result as $key => $value) {
    echo '<br>';
    echo 'title->' . ($value['title'] ?? '') . '<br>';
    echo 'description->' . ($value['description'] ?? '') . '<br>';
    echo 'status->' . ($value['status'] ?? '') . '<br>';
}


// if you want to be an object type, can using getresultarray();
