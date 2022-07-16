<?php
require_once "./Modelo/Conexion.php";
require_once "./Modelo/Metodos/RegistroMetodos.php";
require_once "./Modelo/Entidades/Registro.php";

class MensajesControlador{

		public function VistaMensajeria(){
				require_once "./Vista/Mensajeria.php";
		}

		public function EnviarMensaje(){
				$registroMetodos = new RegistroMetodos();
				$todosRegistros = $registroMetodos->BuscarTodos();
				$destinatarios = "";

				foreach ($todosRegistros as $registro){
						$destinatarios .= $registro->getCorreo().', ';
				}

				$destinatarios = substr($destinatarios, 0, -2);

				$to = $destinatarios;
				$title = $_POST['title'];
				$massage = '<img style="width: 30%; display: block; margin: 1em auto;" src="https://covao.org/wp-content/uploads/2021/07/covao-logo-1.png" alt="Logo"><br><b>'.$title.'</b><br><br>';
				$massage .= wordwrap($_POST['massage'], 70, "\r\n");
				$cabeceras = 'From: COVAO' . "\r\n" .
				'Reply-To: hola' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				if(mail($to, $title, $massage, $cabeceras)){
						require_once "./Vista/Mensajeria.php";
				}
				else require_once "./Vista/Mensajeria.php";
		}
}
