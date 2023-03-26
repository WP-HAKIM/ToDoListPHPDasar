<?php

function showtodolist()
{
    global $todolist;
    echo "APP TO DO LIST" . PHP_EOL;
    foreach ($todolist as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}
