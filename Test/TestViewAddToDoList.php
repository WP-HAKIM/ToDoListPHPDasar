<?php
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";

addtodolist("Belajar PHP Dasar");
addtodolist("Belajar PHP OOP");
addtodolist("Belajar PHP Database");
addtodolist("Belajar PHP Web");
addtodolist("Belajar PHP Composer");

showtodolist();

viewaddtodolist();

showtodolist();
