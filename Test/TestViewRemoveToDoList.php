<?php
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";

addtodolist("Belajar PHP Dasar");
addtodolist("Belajar PHP OOP");
addtodolist("Belajar PHP Database");
addtodolist("Belajar PHP Web");
addtodolist("Belajar PHP Composer");

showtodolist();

viewremovetodolist();

showtodolist();
