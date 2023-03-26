<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

addtodolist("Belajar PHP Dasar");
addtodolist("Belajar PHP OOP");
addtodolist("Belajar PHP Database");

var_dump($todolist);
