<?php


function encryption($key)
{

    $ciphering = "AES-128-CTR";

    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;

    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '2001028016150512';

    // Store the encryption key
    $encryption_key = "aladole";

    // Use openssl_encrypt() function to encrypt the data
    $encryption = openssl_encrypt($key, $ciphering, $encryption_key, $options, $encryption_iv);
    return $encryption;
};

function decryption($key)
{

    $ciphering = "AES-128-CTR";

    // Use OpenSSl Encryption method
    // Non-NULL Initialization Vector for decryption
    $decryption_iv = '2001028016150512';
    $options = 0;


    // Store the decryption key
    $decryption_key = "aladole";

    // Use openssl_decrypt() function to decrypt the data
    $decryption = openssl_decrypt(
        $key,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );

    return $decryption;
}
?>
