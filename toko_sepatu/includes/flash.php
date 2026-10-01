<?php

function setFlash($pesan){

    $_SESSION['flash'] = $pesan;

}

function showFlash(){

    if(isset($_SESSION['flash'])){

        echo "
        <div class='alert'>
            ".$_SESSION['flash']."
        </div>
        ";

        unset($_SESSION['flash']);

    }

}
?>