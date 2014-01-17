// Get values from the form
$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$msg=$_POST['msg'];
 
$to = "cathy@softwareoptions.com";
$subject = "Career Cheetah Contact Form Test";
$message = " Name: " . $name . "\r\n Message: " . $msg . "\r\n Phone: " . $tel . "\r\n Email: " . $email;
 
 
$from = "CareerCheetahWeb";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers, $from))
{
  print "<script>document.location.href='http://careercheetah.net/thankyou.html';</script>";
}else{
  echo "Error! Please try again.";
}