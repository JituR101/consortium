<?php
require('config.php');
require('includes/dbconnect.php');
// require('config/db_connect.php');
require_once('includes/mailing.php');
// include('login&signup/config/confirmmail.php');
session_start();

//Add db connections here


require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$v = $_SESSION['v'];
$tier = $_SESSION['tier'];

$error = "Payment Failed";

$actual_cust_email = $_SESSION['email'];
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

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $razorpay_signature = $_POST['razorpay_signature'];

    if($v == 'wallstreet'){
      if ($tier == 'basic') {
        $sql3 = "UPDATE ".$v." SET 'tier' = 'basic', `order_id` = '$razorpay_order_id', `razor_payment_id`= '$razorpay_payment_id',`payment_status` = '1' WHERE `email` = '$actual_cust_email'";
      }elseif ($tier == 'advanced') {
        $sql3 = "UPDATE ".$v." SET 'tier' = 'advanced', `order_id` = '$razorpay_order_id', `razor_payment_id`= '$razorpay_payment_id',`payment_status` = '1' WHERE `email` = '$actual_cust_email'";
      }
    }else{
      $sql3 = "UPDATE ".$v." SET `order_id` = '$razorpay_order_id', `razor_payment_id`= '$razorpay_payment_id',`payment_status` = '1' WHERE `email` = '$actual_cust_email'";
    }

    $result = mysqli_multi_query($con,$sql3);
    if($result){
        $html = "<p>Your payment was successful</p>
            <p>$razorpay_order_id</p>
            <p>$razorpay_payment_id</p>
            <p>$razorpay_signature</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>
             <p>$actual_cust_email</p>";
        header("Location: success.php");
        $sub = "Payment Successfull";
        $name = $v." participant";
        $event = "Your payment is succesfull";
        htmlMail($actual_cust_email,$sub,$name,"",'confirm'.$v);
        session_unset();
        session_destroy();

    }else{
        $html = '<p> <?php echo  "Error: " . $sql3 . "<br>" . mysqli_error($con);?> </p>';
        echo  "Error: " . $sql3 . "<br>" . mysqli_error($con);
    }

}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
