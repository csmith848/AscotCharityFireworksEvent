<?php
ini_set("register_globals", 0);

if (function_exists ("import_request_variables") &&  False == ini_get('register_globals')) {
  import_request_variables ("CGP","");  // php >=4.1
}
else {
  extract($HTTP_GET_VARS, EXTR_PREFIX_ALL, "");
  extract($HTTP_POST_VARS, EXTR_PREFIX_ALL, "");
}

  if ($redirect=="" || $subject=="")
  {
    header('Location: http://www.ascotfireworks.org.uk/');
    exit();
  }

  if ($realname=="" || $email=="" || $comment=="" || !eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
  {
    header('Location: http://www.ascotfireworks.org.uk/formerr.php');
    exit();
  }

  $to=$who."n2web.co.uk";
  //$from=$email;
  $from='enquiries@ascotfireworks.org.uk';
  
  $message = '<html><head><title>'.$subject.'</title></head><body>'.
            '<p>The following enquiry has been recieved from the Ascot Fireworks website<br>'.
            'Contact name:  '.$realname.'<br>'.
            'Email address: '.$email.'<br>'.
            'Telephone:     '.$telephone.'<br><br>';
  if ($tel_cb=="1" && $email_cb=="1") 
    $message .= 'Contact requested by telephone or email'.'<br>';
  else if ($tel_cb=="1")
    $message .= 'Contact requested by telephone only'.'<br>';
  else if ($email_cb=="1")
    $message .= 'Contact requested by email only'.'<br>';
  else
    $message .= 'Contact preference not indicated'.'<br>';

  $message .= '<br>Comment:       '.$comment.'<br>';
  $message .= '</body></html>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: '.$from . "\r\n" .
              'Reply-To: '.$from . "\r\n" .
              'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  header('Location: http://www.ascotfireworks.org.uk/thanks.php');
?>

