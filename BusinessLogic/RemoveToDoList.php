<?php

function removetodolist(int $number): bool
{
    global $todolist;

    // Cek Apakah data numbernya ada
    if ($number <= 0 || $number > sizeof($todolist)) {
        return false;
    } else {
        // Jika Data Numbernya Ada Maka Data Di Geser
        for ($i = $number; $i < sizeof($todolist); $i++) {
            $todolist[$i] = $todolist[$i + 1];
        }
        // Hapus Data Numbernya
        unset($todolist[sizeof($todolist)]);
        return true;
    }
}
