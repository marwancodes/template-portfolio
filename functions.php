<?php
function connexion()
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=portfolio", "root", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function ajouter($name, $email, $phone, $subject, $message)
{
    try {
        $cnx = connexion();
        $r = $cnx->prepare("insert into clients(name,email,phone,subject,message) values(?,?,?,?,?)");
        $r->execute([$name, $email, $phone, $subject, $message]);
    } catch (PDOException $e) {
        echo "Ajouter failed: " . $e->getMessage();
    }
}
