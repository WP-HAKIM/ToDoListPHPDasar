<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";

addtodolist("Belajar PHP Dasar");
addtodolist("Belajar PHP OOP");
addtodolist("Belajar PHP Database");

showtodolist();

removetodolist(2);

showtodolist();
