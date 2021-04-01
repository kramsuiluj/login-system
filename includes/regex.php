<?php 

$patterns = [
    'username' => "/^[\w_?]{5,20}$/",
    'contact' => "/^([\d]{11})|([+63\d]{13})$/",
    'password' => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"
];

?>