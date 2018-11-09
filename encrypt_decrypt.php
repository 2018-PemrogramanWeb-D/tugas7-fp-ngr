
<?php
function encrypt(string $plaintext)
{

$ciphertext = base64_encode( $plaintext );
return $ciphertext;
}

function decrypt(string $ciphertext)
{
	$original_plaintext = base64_decode("$ciphertext");
    return $original_plaintext."\n";
}
?>
