<?php
session_start();
require('config.php');
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

   $razorpayOrderId = $_SESSION['razorpay_order_id'];
   $razorpayPaymentId = $_POST['razorpay_payment_id'];
   $name = $_POST['item_name'];
   $id = $_POST['item_number'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $amount = $_POST['amount'];

if ($success === true)
{
  
   
   $paymentStatus = '1';
   $paymentMessage = "Sucessfull";
  
       $sql =  "INSERT INTO `razorpay_payment` (`product_id`, `razorpayId`, `razaorpayOrderId`, `emailAddress`, `phoneNumber`, `subscriptionName`, `amount`, `payment_status`, `payment_message`) 
   VALUES ('".$id."', '".$razorpayPaymentId."', '".$razorpayOrderId."', '".$email."', '".$contact."', '".$name."', '".$amount."', '".$paymentStatus."', '".$paymentMessage."')";

			 
}
else
{
    
   $paymentStatus = '0';
   $paymentMessage = $error;
   $sql =  "INSERT INTO `razorpay_payment` (`product_id`, `razorpayId`, `razaorpayOrderId`, `emailAddress`, `phoneNumber`, `subscriptionName`, `amount`, `payment_status`, `payment_message`) 
   VALUES ('".$id."', '".$razorpayPaymentId."', '".$razorpayOrderId."', '".$email."', '".$contact."', '".$name."', '".$amount."', '".$paymentStatus."', '".$paymentMessage."')";

}


$result = mysqli_query($link, $sql);

echo $sql;
die();

