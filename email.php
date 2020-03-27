<?php


if(isset($_POST['iemail']) && !empty($_POST['iemail'])){

$nome = addslashes($_POST['iname']);
$email = addslashes($_POST['iemail']);
$mensagem = addslashes($_POST['imessage']);



$to = "lucasoliveira.si@outlook.com";
$subject = "Contato - Site pizzaria";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "From: lucasoliveira.si@outlook.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();      
    
if(mail($to, $subject, $body, $header)){

    echo("Email enviado com sucesso!");

}else {

    echo("Falha de envio!");

}
}

?>
