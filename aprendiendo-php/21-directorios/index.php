<?php
    if(!is_dir('new_folder')) {
        mkdir('new_folder', 0777) or die('folder cant be created');
        echo 'directoriy created<br>';
    } else {
        echo 'new_folder already exists<br>';
    }

    // if(is_dir('new_folder')) {
    //     rmdir('new_folder');
    //     echo 'directoriy deleted<br>';
    // } else {
    //     echo 'directory already exists<br>';
    // }

    if($gestor = opendir('./new_folder')) {
        while(($archivo = readdir($gestor)) !== false) {
            echo $archivo.'<br>';
        }
    }


?>