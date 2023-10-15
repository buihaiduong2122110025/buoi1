<?php

use App\Models\Menu;
use App\Libaries\MyClass;
use App\Libraries\MyClass as LibrariesMyClass;

if (isset($_POST['THEM'])) {
    $menu = new Menu();
    $menu->name = $_POST['name'];
    $menu->link = $_POST['link'];
    $menu->type = $_POST['type'];
    $menu->parent_id = $_POST['parent_id'];
    $menu->level = 1;
    $menu->status = $_POST['status'];

    // Upload file

    $menu->created_at = date('Y-m-d H:i:s');
    $menu->created_by = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1;
    $menu->status = $_POST['status'];
    $menu->save();

  
}