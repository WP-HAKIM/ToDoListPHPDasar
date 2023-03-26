<?php
require_once "Model/ToDoList.php";
require_once "BusinessLogic/ShowToDoList.php";
require_once "BusinessLogic/AddToDoList.php";
require_once "BusinessLogic/RemoveToDoList.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";
require_once "Helper/input.php";

echo "Studi Kasus PHP Dasar ToDoList";

viewshowtodolist();
