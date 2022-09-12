<?PHP
$hash = $_GET['base'];
$domain = $_GET['domain'];

$id = base64_decode($hash);
$url = 'https://'.$domain.'.com/appeal/?id='.$id.'';
header("Location: $url");

?>
