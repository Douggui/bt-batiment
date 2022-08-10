<?php
$results=[];
$results['message']=[];
$results['errors']=0;


if (isset($_POST['firstName']) && !empty($_POST['firstName'])){
$firstName=htmlentities($_POST['firstName']);

}
else{
    $results['errors']=1;
    $results['message']='veuillez entrer un Nom';
	
}
if (isset($_POST['lastName']) && !empty($_POST['lastName'])){
$lastName=htmlentities($_POST['lastName']);

}
else{
    $results['errors']=1;
  $results['message']='veuillez entrer un prénom';

}
if (isset($_POST['works']) && !empty($_POST['works'])){
$works=htmlentities($_POST['works']);
}
else{
    $results['errors']=1;
  $results['message']="veuillez définir la nature de vos projets de rénovation";

}
if (isset($_POST['email']) && !empty($_POST['email'])){
$email=htmlentities($_POST['email']);
}
else{
	$results['errors']=1;
    $results['message']='veuillez entrer votre email';
	
}
if (isset($_POST['message']) && !empty($_POST['message'])){
$message=htmlentities($_POST['message']);
}
else{
	$results['errors']=1;
    $results['message']='veuillez décrire vos traveaux';

}

if(!$results['errors']){

 $to='narjes.dougui@gmail.com';
  $subject='demande de devis en ligne';
  $headers = "FROM: $email " . "\r\n" .
  "Reply-To: $email" . "\r\n" .
  'Content-type:text/html;charset=utf-8' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  
  $subject1='Votre demande de devis sur le site BT BATIMENT';
  $emailContent1="<div style='width:80vw;margin:auto;'>
  <h3>Bonjour </h3>
    <p>Nous avons bien réçu votre demande de devis,nous vous contacterons dans les plus bref délais </p>
    <p>Cordialement</p>
  </div> ";
  
 
  $emailContent = "<div style='width:80vw;margin:auto;'>
  <p>vous avez reçu une demande de devis de la part de $firstName $lastName , email: $email</p>
  <p>Nature des traveaux : $works</p>
  <p>message : $message</p>
   </div>";


    if(mail($to, $subject,$emailContent,$headers)){
       $results['message']='nous avons bien réçu votre demande, nous vous répondrons dans les plus bref délais';
    }else{
        $results['message']='une erreur est survenu veuillez réessayer ';
    }
    mail($email,$subject1,$emailContent1,$headers);
}
echo json_encode($results,JSON_UNESCAPED_UNICODE);


?>