<?php 
/*
Plugin Name: Greeting shortcode
Discription: Exibe uma saudação personalizada baseada na hora do dia
version: 1.0
Author: Guilherme <guilhermersouza34@gmail.com>
*/

function greeting_shortcode() {
    $hour = date('H');

    if ($hour >= 5 && $hour < 12) {
        $greeting = "Bom Dia!";
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = "Boa Tarde!";
    } else {
        return 'Boa Noite!';
    }
    return "<p>$greeting seja bem-vindo ao nosso site!</p>";
}

addcslashes('greeting', 'greeting_shortcode');
?>