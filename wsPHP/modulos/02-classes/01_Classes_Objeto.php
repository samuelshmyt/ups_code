<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require ('../02-classes/class/ClassesObjeto.class.php');
        $teste = new ClassesObjeto();
        $teste->getClass('de Introdução', 'mostrar uma classe');
        $teste->verClass();
        
        $teste->Classe='Classe 2';
        $teste->Funcao='Ver os atributos';
        $teste->verClass();
        ?>
    </body>
</html>
