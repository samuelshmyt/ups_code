<?php


/**
 * ClassesObjeto.class.php [ TIPO ]
 * Descricao
 * @copyright (c) year, SamuelShmyt SHMYT SYSTEM ENTRETERIMENTS
 */
class ClassesObjeto {
    
    var $Classe, $Funcao;//atributos que são caracteristicas
    
    //metodos dar auxilio aos atributos
    
    function getClass($Classe,$Funcao)//metodos com paramentros
    {
        echo "<p> A Classe {$Classe} e serve para {$Funcao}";
        
    }
    function verClass(){
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
    
    
}
