<?php

include 'encrypted.php';

    $keyforen = "Type Here"   //Assign data to $key variable for Encryption
    
    //In this Function link with encrypted.php
    // After Call this Fun the data of the $key variable encript from the fun and return to $encryption variable and you can use that variable as you need
    // $keyforde must be an Normal Data
    $encryption = encryption($key);

    echo $encryption;
    
    $keyforde = $encryption;
    
    //After the Call this fun it starting decrypt the encrepted data and return to the $decryptio variable
    // $keyforde must be an Ewncrypted Data
    $decryption = decryption($keyforde);
    
