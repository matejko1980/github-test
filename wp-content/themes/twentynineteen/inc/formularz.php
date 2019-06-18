<?php
/**
 * Twenty Nineteen: Formularz
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/*
* Stworzenie własnego shortcode
*/
if (!$_GET["action"]){

function formularz_kontaktowy_function(){

	// define variables and set to empty values
	$nameErr = $emailErr = "";
	$name = $email = $gender = $comment = $website = "";

	function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
    }
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	  if (empty($_POST["email"])) {
		$emailErr = "E-mail jest wymagany";
		$form_errors = "yes";
	  } else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Niepoprawny format e-mail";
		  $form_errors = "yes";
		}
	  }

	  if (empty($_POST["comment"])) {
		$commentErr = "Treść jest wymagana";
		$comment = "";
		$form_errors = "yes";
	  } else {
		$comment = test_input($_POST["comment"]);
	  }

	
		//wysyłanie formularza
		if (!$form_errors){
			
			$to = "maciek@mammothdesign.pl";
			$subject = "HTML email";
			
			$message = '
			<html>
			<head>
			<title>Wiadomość</title>
			</head>
			<body>
			<table>
			<tr>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>E-mail</th>
			<th>Treść</th>
			</tr>
			<tr>
			<td>'.$name.'</td>
			<td>'.$surname.'</td>
			<td>'.$email.'</td>
			<td>'.$comment.'</td>
			</tr>
			</table>
			</body>
			</html>
			';
			
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			// More headers
			$headers .= 'From: <webmaster@example.com>' . "\r\n";

			mail($to,$subject,$message,$headers);

		}else{
			echo ('są błedy');
		}	

	}
	
	$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	echo'	
	<form method="post" action="'.$actual_link.'">

		<fieldset class="contact_form__input-group">
            <input class="contact_form__txt-input" id="first_name_30" maxlength="100" name="name" type="text" value="'.$name.'">
            <label class="contact_form__txt-label" for="first_name_30">Imię</label>
        </fieldset>

		<fieldset class="contact_form__input-group">
            <input class="contact_form__txt-input" id="first_name_30" maxlength="100" name="surname" type="text" value="'.$surname.'">
            <label class="contact_form__txt-label" for="first_name_30">Nazwisko</label>
        </fieldset>

		<fieldset class="contact_form__input-group">
            <input class="contact_form__txt-input" id="first_name_30" maxlength="100" name="email" required="" type="text" value="'.$email.'">
            <label class="contact_form__txt-label" for="first_name_30">E-mail*</label>
			<span class="error">'.$emailErr.'</span>
        </fieldset>
		
		<fieldset class="contact_form__input-group answer">
            <textarea class="contact_form__txt-input" cols="40" id="answer_30" maxlength="20000" name="comment" required="" rows="10">'.$comment.'</textarea>
            <label class="contact_form__txt-label" for="answer_30">Treść</label>
			<span class="error">'.$commentErr.'</span>
        </fieldset>
		
		<p><span class="error">* pole wymagane</span></p>
		<input type="submit" name="submit" value="Submit"> 
	   
	</form>';
};


add_shortcode( 'formularz_kontaktowy', 'formularz_kontaktowy_function' );

};
