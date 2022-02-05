<?php
//INCLUDE DA LIB DO PHP MAILER, NÃO ALTERAR OS ARQUIVOS INTERNOS
require_once 'PHPMailer-master/PHPMailerAutoload.php';

function defaultsend($remetente, $nomeremetente, $destinatario, $assunto, $mensagemHTML, $copiaOculta, $files) {
	$mail = new PHPMailer();
	$mail->From = $remetente;
	$mail->FromName = $nomeremetente;
	$mail->addReplyTo($_POST['email'], $nomeremetente);	
	if(is_array($destinatario)) {
		foreach ($destinatario as $mailDest) {
			$mail->addAddress($mailDest);
		}
	} else {
		$mail->addAddress($destinatario);
	}
	$mail->AddBCC ($copiaOculta);
	$mail->CharSet = 'UTF-8';
	$mail->Subject = $assunto;
	$mail->Body = $mensagemHTML;
	$mail->IsHTML (true);

	if(!empty($files)) {
		$mail->AddAttachment($files['tmp_name'], $files['name']);
	}

	//A AUTENTICAÇÃO A SEGUIR FOI CONFIGURADA DEVIDO ERROS INTERNOS NO SERVIDOR
	$mail->IsSMTP(); //DEFINE QUE É SMTP
	$mail->SMTPDebug  = 2;
	$mail->Host = 'smtp.office365.com'; //DEFINE O HOST
	$mail->Port = 587; //DEFINE A PORTA
	$mail->SMTPAuth = true; //AUTENTICAÇÃO SET TRUE(VERDADEIRO)
	$mail->Username = 'naoresponder@ledax.com'; //E-MAIL PARA AUTENTICAÇÃO(NO CASO FOI CRIADO UM E-MAIL DO GMAIL)
	$mail->Password = 'Ledax@2021'; //SENHA DO E-MAIL
	
	if (($_SERVER['HTTP_HOST'] == "www.ledax.com") || ($_SERVER['HTTP_HOST'] == "ledax.com"))
	{
		$mail->SetFrom("form.ledax.com", $nomeremetente);
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
	}

	try {
		if($mail->Send()) {
			return true;
		} else {
			$mail->ErrorInfo;
			echo "Erro envio 1";


			$mail2 = new PHPMailer();
			$mail2->From = $remetente;
			$mail2->FromName = $nomeremetente;
			$mail2->addReplyTo($_POST['email'], $nomeremetente);	
			if(is_array($destinatario)) {
				foreach ($destinatario as $mailDest) {
					$mail2->addAddress($mailDest);
				}
			} else {
				$mail2->addAddress($destinatario);
			}
			$mail2->AddBCC ($copiaOculta);
			$mail2->CharSet = 'UTF-8';
			$mail2->Subject = $assunto;
			$mail2->Body = $mensagemHTML;
			$mail2->IsHTML (true);

			if(!empty($files)) {
				$mail2->AddAttachment($files['tmp_name'], $files['name']);
			}

			//A AUTENTICAÇÃO A SEGUIR FOI CONFIGURADA DEVIDO ERROS INTERNOS NO SERVIDOR
			$mail2->IsSMTP(); //DEFINE QUE É SMTP
			$mail2->SMTPDebug  = 2;
			$mail2->Host = 'smtp.office365.com'; //DEFINE O HOST
			$mail2->Port = 587; //DEFINE A PORTA
			$mail2->SMTPSecure = 'tls';
			$mail2->SMTPAuth = true; //AUTENTICAÇÃO SET TRUE(VERDADEIRO)
			$mail2->Username = 'naoresponder@ledax.com'; //E-MAIL PARA AUTENTICAÇÃO(NO CASO FOI CRIADO UM E-MAIL DO GMAIL)
			$mail2->Password = 'Ledax@2021'; //SENHA DO E-MAIL

			if (($_SERVER['HTTP_HOST'] == "www.ledax.com") || ($_SERVER['HTTP_HOST'] == "ledax.com"))
			{
				$mail2->SetFrom("form.ledax.com", $nomeremetente);
				$mail2->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);
			}		
			if($mail2->Send()) {
				return true;
			} else {
				$mail2->ErrorInfo;
				echo "Erro envio 2";

				$mail3 = new PHPMailer();
				$mail3->From = $remetente;
				$mail3->FromName = $nomeremetente;
				$mail3->addReplyTo($_POST['email'], $nomeremetente);	
				if(is_array($destinatario)) {
					foreach ($destinatario as $mailDest) {
						$mail3->addAddress($mailDest);
					}
				} else {
					$mail3->addAddress($destinatario);
				}
				$mail3->AddBCC ($copiaOculta);
				$mail3->CharSet = 'UTF-8';
				$mail3->Subject = $assunto;
				$mail3->Body = $mensagemHTML;
				$mail3->IsHTML (true);

				if(!empty($files)) {
					$mail3->AddAttachment($files['tmp_name'], $files['name']);
				}

				//A AUTENTICAÇÃO A SEGUIR FOI CONFIGURADA DEVIDO ERROS INTERNOS NO SERVIDOR
				$mail3->IsSMTP(); //DEFINE QUE É SMTP
				$mail3->SMTPDebug  = 2;
				$mail3->Host = 'smtp.office365.com'; //DEFINE O HOST
				$mail3->Port = 587; //DEFINE A PORTA
				$mail3->SMTPSecure = 'tls';
				$mail3->SMTPAuth = true; //AUTENTICAÇÃO SET TRUE(VERDADEIRO)
				$mail3->SetFrom("naoresponder@ledax.com", $nomeremetente);
				$mail3->Username = 'naoresponder@ledax.com'; //E-MAIL PARA AUTENTICAÇÃO(NO CASO FOI CRIADO UM E-MAIL DO GMAIL)
				$mail3->Password = 'Ledax@2021'; //SENHA DO E-MAIL
				


				$mail3->SMTPOptions = array(
					'ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);



				if($mail3->Send()) {
					return true;
				} else {
					$mail3->ErrorInfo;
					echo "Erro envio 3";
					return false;
				}
			}
		}
	} catch (Exception $e) {
		return $e->getMessage();
	}
}

?>