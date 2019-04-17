<?php
function make_list_items($array) {
    foreach ($array as $item) {
        echo "<li>$item</li>";
    }
}