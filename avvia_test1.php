<?php

//session_start();
//$nome_autore = $_SESSION['nomeaut'];

$nome_autore = $_POST['nome_autore'];

error_reporting(E_ALL);

echo "<h2>TCP/IP Connection</h2>\n";

/* Get the port for the WWW service. */
//$service_port = getservbyname('8082', 'tcp');
$service_port = '8082';
/* Get the IP address for the target host. */
$address = gethostbyname('192.168.2.135');

/* Create a TCP/IP socket. */
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
} else {
    echo "OK.\n";
}

echo "Attempting to connect to '$address' on port '$service_port'...";
$result = socket_connect($socket, $address, $service_port);
if ($result === false) {
    echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
} else {
    echo "OK.\n";
}

$in = "evviva";

$out = '';

echo "Sending HTTP HEAD request...";

socket_write($socket, $nome_autore, strlen($nome_autore));
echo "OK.\n";

#echo "Reading response:\n\n";
#while ($out = socket_read($socket, 1024)) {
#    echo $out;
#}
#exit;
echo "Closing socket...";
socket_close($socket);
echo "OK.\n\n";


header('Location: avvia_test.php');
?>
