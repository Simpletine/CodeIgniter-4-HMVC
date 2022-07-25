<?php
// result as an array ,we need to convert to string using foreach

foreach ($result as $key => $value) {
    // it's depend, we normally use std class
    echo anchor('/admin/blog/' . $value->id, ucfirst($value->title)) . '<br/>';
}


// if you want to be an object type, can using getresultarray();
