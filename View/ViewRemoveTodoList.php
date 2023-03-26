<?php
require_once __DIR__ . "/../Model/ToDoList.php";
require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveToDoList.php";
function viewremovetodolist()
{
    echo "Menghapus Todo" . PHP_EOL;
    $pilihan = input("Pilih Nomor (x untuk batalkan)");
    if ($pilihan == "x" || $pilihan == "X") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        $success = removetodolist($pilihan);
        if ($success) {
            echo "Data Todo Berhasil Di Hapus" . PHP_EOL;
        } else {
            echo "Data Todo Gagal di Hapus" . PHP_EOL;
        }
    }
}
