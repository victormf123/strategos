<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 17/01/17
 * Time: 03:19
 */

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensasgem = $_POST['menssagem'];
$assunto = 'Mensagem de seu Cliente';

//enviar

// emails para quem será enviado o formulário
$emailenviar = "seuemail@seudominio.com.br";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: $nome <$email>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
}