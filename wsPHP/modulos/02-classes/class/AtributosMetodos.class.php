<?php

/**
 * AtributosMetodos.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, SamuelShmyt SHMYT SYSTEM ENTRETERIMENTS
 */
class AtributosMetodos {

    var $Nome, $idade, $profissao;

    function setUsuario($Nome, $idade, $profissao) {//armazena valores
        $this->Nome = $Nome;
        //$this->idade = $idade;
        $this->setIdade($idade);
        $this->profissao = $profissao;
    }

    function getUsuario() {
        return "{$this->Nome} tem {$this->idade} anos de idade, e trabalha como {$this->profissao}";
    }

    function getClass() {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

    function setIdade($idade) {
        if (!is_int($idade)):
            die('Idade informada é Incorreta!');
        else:
            $this->idade = $idade;

        endif;
    }
    function Envelhecer(){
        $this->idade +=1;
    }

}
