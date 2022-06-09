<?php
$link = mysqli_connect('localhost', 'qacxdneq_influencer', '@$EvFW78U+VY', 'qacxdneq_influencerhire');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
   $razorpayOrderId = "xydz12345433";
   $razorpayPaymentId = "pay054wdkg334ss";
   $name = "Silver";
   $id = "x345";
   $email = "meetshahab2@gmail.com";
   $contact = "9580445657";
   $amount = "1";
   $paymentStatus = '1';
   $paymentMessage = "Sucessfull";
   
  echo $sql =  "INSERT INTO `razorpay_payment` (`product_id`, `razorpayId`, `razaorpayOrderId`, `emailAddress`, `phoneNumber`, `subscriptionName`, `amount`, `payment_status`, `payment_message`) 
   VALUES ('".$id."', '".$razorpayPaymentId."', '".$razorpayOrderId."', '".$email."', '".$contact."', '".$name."', '".$amount."', '".$paymentStatus."', '".$paymentMessage."')";

   $result = mysqli_query($link, $sql);



