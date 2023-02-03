<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'lookup@lookupfor.com';

    $email_subject = "Email From LookUp Website";

    $email_body = "Ad: $name\n".
                    "E-Posta: $visitor_email \n".
                        
                        "Mesaj: $message\n"; 
                
    $to = "lookup@lookupfor.com";

    $headers = "From: $email_from \n";
    
    $headers .= "Reply-To: $visitor_email \n";

    mail($to,$email_subject,$email_body,$headers);
    
if (mail) { ?>
	<script language="javascript" type="text/javascript">
		alert('Mesajınız için teşekkürler. Kısa süre içinde sizinle iletişime geçeceğiz.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Mesaj başarısız oldu. Lütfen mesajınızı lookup@lookupfor.com adresine gönderin');
		window.location = 'index.html';
	</script>
<?php
}
?>


