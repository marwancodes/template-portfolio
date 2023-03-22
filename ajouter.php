<?php
require 'functions.php';


extract($_POST);
ajouter($name, $email, $phone, $subject, $message);


header("location: index.php");
