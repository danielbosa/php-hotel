<?php
session_start();

include __DIR__ . '/../Models/user.php';

if(!empty($_POST['email']) && !empty($_POST['password'])) {

//aggiungi controlli su sintassi: mail ha "@" e "."? 

//dichiaro variabili per comodità di scrittura
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    var_dump($email);
//filtra array e mi ritorna l'elemento che rispetta le condizioni: è un array, e contiene tutto elemento! Solo uno perché esiste, in teoria, un solo user con email e pwd inserite
    $authenticated = array_filter($users, function ($user) use ($email, $pwd){
        return $user['email'] == $email && $user['password'] == $pwd;
    });

//essendo un array, devo verificare che ci sia un elemento (login andato a buon fine) oppure no
    if(count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
    };
}