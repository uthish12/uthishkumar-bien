<?php

/*
echo "<pre>";
print_r($_POST);
die();
*/

    $comments="<table><tr><td>Name:</td><td>".$_POST['name']."</td></tr>";
	$comments.="<tr><td>Email:</td><td>".$_POST['email']."</td></tr>";
	$comments.="<tr><td>phone:</td><td>".$_POST['phone']."</td></tr>";
	$comments.="<tr><td>Product:</td><td>".$_POST['Product']."</td></tr>";
	$comments.="<tr><td>Quantity:</td><td>".$_POST['Quantity']."</td></tr>";
	$comments.="<tr><td>Message:</td><td>".$_POST['message']."</td></tr>";
	$comments.="</table>";
	
	$email = $_POST['email'];

	$to ="contact@bienmercantile.com";
	
	$subject = "FROM Bien Website";
	$headers = "From: $email\r\n";
	$headers.= "MIME-Version: 1.0\r\n";
	$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$status=mail($to,$subject,$comments,$headers);
	if($status)
	{ 
		header('Location:contact.html');
		die();
	?>
	    <!-- <SCRIPT language="JavaScript">
			alert('1');
          window.location="contact.html";
    
         </SCRIPT>-->
<?php }
      else
	  { 
		header('Location:contact.html');
		die();
	  ?>
	 <!-- <SCRIPT language="JavaScript">
		alert('1');
          window.location="contact.html";
    
         </SCRIPT>-->
 <?php } ?>