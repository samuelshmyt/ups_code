<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/AtributosMetodos.class.php';
        
        $pessoa = new AtributosMetodos();
       $pessoa->setUsuario('Samuel', 27, 'web master');
       $usuario = $pessoa->getUsuario();
       echo $usuario;
       
       echo '<hr>';
       $pessoa->getClass();
       echo '<hr>';
       //$pessoa->idade = '';
          echo '<hr>';
       $pessoa->getClass();
       echo '<hr>';
      // $pessoa->setUsuario('Samuel', 'maca', 'web master');
      $pessoa->Envelhecer();
       $pessoa->getClass();
        ?>
    </body>
</html>
