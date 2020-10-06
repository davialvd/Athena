<?php
    $pass = password_hash ('prueba1',PASSWORD_DEFAULT,['cost'=>12]);

    echo $pass;

?>