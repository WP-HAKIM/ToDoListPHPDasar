<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../View/ViewAddToDoList.php";
require_once __DIR__ . "/../View/ViewRemoveToDoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowToDoList.php";

function viewshowtodolist()
{
    while (true) {
        showtodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $input = input("Pilih Menu");
        if ($input == "1") {
            viewaddtodolist();
        } elseif ($input == "2") {
            viewremovetodolist();
        } elseif ($input == "x") {
            break;
        } else {
            echo "Mohon Maaf Pilihan Tidak Valid" . PHP_EOL;
        }
    }
    echo "Sampai Jumpa lagi" . PHP_EOL;
}
