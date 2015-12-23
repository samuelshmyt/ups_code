<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //shift + alt + f = identa o codigo.
        if (phpversion() >= 5.4):
            echo phpversion() . ' Olá Mundo!';

        else:
            echo phpversion() . ' Preciso atualizar meu php!';
        endif;
        echo '<hr>';
        //echo phpinfo();
       //ctrl+/ = comenta
//        echo '<pre>';
//        print_r(ini_get_all());
//        echo '</pre>';
        
        echo ini_get('date.timezone')."<br>";
        echo date('d/m/Y H:i:s');
        
        
        ?>
    </body>
</html>
