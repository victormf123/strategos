<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
	
$to = "contato@strategos.org.br";
$assunto = "$nome";
$menssage = "<strong>nome</strong> $nome<br /><br /><strong>email</strong>$email<br /><br /><strong>telefone
	</strong>$telefone<br /><br /><strong>mensagem</strong>$mensagem<br /><br />";
$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=iso-8859-1\n";
$header .="From:$email\n";
mail($to, $assunto, $message ,$header);	

$servidor = $_SERVER["SERVER_NAME"];
$redirect = "http://". $servidor."/wordpress";
//header("location:$redirect");

echo($nome);
echo('<br>');
echo($email);
echo('<br>');
echo($telefone);
echo('<br>');
echo($mensagem);

?>