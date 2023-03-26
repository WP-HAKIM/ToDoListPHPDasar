<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

function viewaddtodolist()
{
    echo "Menambah Todo" . PHP_EOL;
    $todo = input("Todo (x Jika batal)");

    if ($todo == "x" || $todo == "X") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        addtodolist($todo);
    }
}
