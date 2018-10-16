<?php

include_once 'helpers.php';
include_once 'loader.php';      

if (!$_GET) {
    redirect('dogo.php?pagina=perfil');
}

if ($auth->check() == false)
{
    redirect('login.php');
} else 
{
    if($_SESSION)

    {
        $usuario = $db->dbEmailSearch($_SESSION['logged']);
        $id = $usuario->getId();
        $avatarPath = $db->retrieveAvatar($id);      
        
    }
}
   

    



?>      
<div class="avatar">
<img src="<?=$avatarPath?>">
</div>
