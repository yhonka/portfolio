<?php

    $destinatario = 'yhonka.yjml@gmail.com';
    
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];
    
    $header = "Enviado desde la pagina";
    $mensajeCompleto = "Asunto: " . $asunto ."\nAtentamente: " . $nombre . "\nMensaje: " . $mensaje;
    
    mail($destinatario, $email,  utf8_decode($mensajeCompleto), $header);

    $mail->send();
    echo '<script>
        alert("Enviado correctamente");
        
    </script>';
    
    } catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
    
    }
    header("Location:index.html");
    
?>

 
  
  


