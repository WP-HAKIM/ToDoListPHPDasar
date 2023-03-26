<?php

require_once __DIR__ . "/../View/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddToDoList.php";

addtodolist("Belajar PHP Dasar");
addtodolist("Belajar PHP OOP");
addtodolist("Belajar PHP Database");
addtodolist("Belajar PHP Web");
addtodolist("Belajar PHP Composer");

viewshowtodolist();
