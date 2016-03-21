<?php
if(!empty($_POST)){
    $fname = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$comments = $_POST['comments'];
	$nroom = $_POST['nroom'];
	$room = $_POST['rooms'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$day1 = $_POST['day1'];
	$month1 = $_POST['month1'];
	$year1 = $_POST['year1'];
	$date = $day.'/'.$month.'/'.$year;
	$date1 = $day1.'/'.$month1.'/'.$year1;
	$message	 = "Dear Sir,"."\n\n";
	$message	.='First Name: '.$fname."\n";
	$message	.='Last Name: '.$last."\n";
	$message	.='Email: '.$email."\n";
	$message	.='Phone Number: '.$phone."\n";
	$message	.='Additional Information: '.$comments."\n";
	$message	.='Room Name: '.$nroom."\n";
	$message	.='Room No: '.$room."\n";
	$message	.='Check In Date: '.$date."\n";
	$message	.='Check Out Date: '.$date1."\n\n";
	$message	.='Warm Regards, '."\n";
	$message	.=$fname."\n";
	
	$subject = "Reservaton";  
	
//send email
    if(mail("dilpreet@ourdesignz.com", $subject, $message)){
		echo "true";
    }else{
	   echo "false";
	}
}
?>