<?php
use App\Controllers\TaskController;
require "../vendor/autoload.php";

if (isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
  $new_task = new TaskController;     
  $new_task-> create([
                "name"=>$_POST["name"],
                "description"=>$_POST["description"]
                ]);
    header("Location: todo.php");
}

?>


