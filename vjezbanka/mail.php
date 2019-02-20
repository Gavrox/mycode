<?php
$to = "bpanel@gmail.com";
$subj = "Test";
$mess = "Ova poruka testira funkciju mail()";
$headers = "bcc:almir.sehic@gmail.com";
$mailsend = mail($to,$subj,$mess,$headers);
?>