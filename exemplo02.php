<?php
   $nome = "Daniel";

function getNome(){
    global $nome;
    echo $nome; 
} 
getNome();

?>