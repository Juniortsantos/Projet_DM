<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

        $nome = addcslashes($_POST['nome']);
        $email = addcslashes($_POST['email']);
        $telefone = addcslashes($_POST['phone']);
        $mensagem = addcslashes($_POST['mesage']);

        $to = "contato@dillsonmarmore.com";        
        $subject = "Orcamento site";
        $body = "Nome: ".$nome. "/n/r"."Email: ".$email. "/n/r"."Telefone: ". $telefone. "/n/r"."Mensagem: ". $mensagem;        
        $header = "From: contato@dillsonmarmore.com"."/r/n"."Reply-To".$email."/r/n"."X=Mailaer:PHP/".phpversion();

        if (mail($to,$subject,$body,$header)){
        
            echo("Email enviado com sucesso");
            
        }
        else {
            echo("Erro no Envio");
        }

    }


?>