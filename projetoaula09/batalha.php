<?php 
include "home.php";

class pokemon {
    var $hp = 100;
    var $level = 5;

    function bater($adversario){
        echo "atacou $adversario->nome causando 5 de dano. <br/>";
        $adversario->hp-=5;
    }

    function hp(){
        return $this->hp;
    }

}
class planta extends pokemon {
    var $tipo = "planta";
    var $dano = 15;
    var $nome;

    function especial($adversario){
        if($adversario->tipo == "agua"){
            echo "$this->nome atacou $adversario->nome causando " .$this->dano*2 ."de dano <br/>";

            $adversario->hp-= $this->danos*2;
        } else if ($adversario->tipo == "fogo"){
            echo "$this->nome atacou $adversario->nome causando ". $this->dano*0.5 . "de dano. <br/>";

            $adversario->hp-= $this->dano*0.5;
        } else {
            echo "$this->nome atacou $adversario-nome causando". $this->dano ." de dano. <br/>";

            $adversario->hp-= $this->dano;
        }
    }
    function atacar($adversario){
        if(rand(1,100)%2==0){
            echo "$this->nome ";

            $this->nome;
        } else {
            $this->especial($adversario);
        }
    }
}

class agua extends pokemon {
    var $tipo = "agua";
    var $dano = 15;
    var $nome;

    function especial($adversario){
        if($adversario->tipo=="fogo"){
            echo "$this->nome atacou $adversario->nome causando ". $this->dano*2 ." de dano. <br/>";

            $adversario->hp-=$this->dano*2;
        } elseif ($adversario->tipo == "planta"){
            echo "$this->nome atacou $adversario->nome causando ". $this->dano*0.5 . " de dano. <br/>";

            $adversario->hp-=$this->dano*0.5;
        } else {
            echo "$this->nome atacou $adversario->nome causando ". $this->dano . " de dano. <br/>"; 

            $adversario->hp-=$this->dano;
        }
    }

    function atacar($adversario){
        if(rand(1,100)%2==0){
            echo "$this->nome";
            $this->bater($adversario);
        } else {
            $this->especial($adversario);
        }
    }
}

class fogo extends pokemon {
    var $tipo = "fogo";
    var $dano = 15;
    var $nome; 

    function especial($adversario){
        if($adversario->tipo == "planta"){
            echo "$this->nome atacou $adversario->nome causando ". $this->dano*2 . " de dano. <br/>";

            $adversario->hp-=$this->dano*2;
        } else if($adversario->tipo == "agua"){
            echo "$this->nome atacou $adversario->nome causando ". $this->dano*0.5 . " de dano. <br/>";

            $adversario->hp-=$this->dano*0.5;
        } else {
            echo "$this->nome atacou $adversario->nome causando ". $this->dano . " de dano. <br/>";

            $adversario->hp-=$this->dano;
        }
    }

    function atacar($adversario){
        if(rand(1,100)%2==0){
            echo "$this->nome";
            $this->bater($adversario);
        } else {
            $this->especial($adversario);
        }
    }
}

function batalha($lutador1, $lutador2){
    while(true){
        echo "$lutador1->nome: $lutador1->hp<br/>$lutador2->nome: $lutador2->hp<br/>";

        if($lutador1->hp()>=0 and $lutador2->hp()>=0){
            $lutador1->atacar($lutador2);
            $lutador2->atacar($lutador1);
        } else {
            if($lutador1->hp<=0){
                echo "$lutador2->nome Venceu!";
            } else {
                echo "$lutador1->nome Venceu!";
            }
            break;
        }
    }
}

$bulbasaur = new planta;
$charmander = new fogo;
$squirtle = new agua;
$bulbasaur->nome = "bulbasaur";
$charmander->nome = "charmander";
$squirtle->nome = "squirtle";
batalha($squirtle, $charmander);
