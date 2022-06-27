<?php
    //POLIMORFISMO

    //AQUI ESTOU CRIANDO A CLASSE ANIMAL
    class Animal{
        public function getNome(){
            echo "getNome da classe Animal";
        }
    }
    class Cachorro extends Animal{
        public function getNome(){
            echo "getNome da classe Cachorro";
        }
    }
    $cachorro = new Cachorro();
    $cachorro->getNome();
    ?>