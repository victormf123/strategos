<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("PHPMailer/class.phpmailer.php");


// Inicia a classe PHPMailer
$mail = new PHPMailer(true);

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP

try {
    $mail->Host = 'email-ssl.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port       = 587; //  Usar 587 porta SMTP
    $mail->Username = 'contato@strategos.org.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'strategos123'; // Senha do servidor SMTP (senha do email usado)

    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->SetFrom('contato@strategos.org.br', 'Strategos Localweb'); //Seu e-mail
    $mail->AddReplyTo('contato@strategos.org.br', 'Strategos Localweb'); //Seu e-mail
    $mail->Subject = 'Contato WebSite';//Assunto do e-mail


    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('faleconosco@strategos.org.br', 'Teste Locaweb');

    //Campos abaixo são opcionais
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo


    //Define o corpo do email
    $mail->IsHTML(true);
    $mail->Body='Name:  '.$_POST['nome'].'<br/>
                Email:  '.$_POST['email'].'<br/>
                Telefone:  '.$_POST['telefone'].'
           <br/><br/>
                '.nl2br($_POST['mensagem']).'
            <br/><br/>';

    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();
    header("Location: http://localhost:8888/wordpress/"); /* Redirect browser */
    exit();
    echo "Mensagem enviada com sucesso</p>\n";

    //caso apresente algum erro é apresentado abaixo com essa exceção.
}catch (phpmailerException $e) {
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}


?>