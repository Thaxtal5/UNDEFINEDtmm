<?php

include "loginTpl.php";

if ($_SERVER['REQUEST_METHOD'] === 'post') {
  # code...
  var_dump($_POST['user']);
  var_dump($_POST['password']);

}
