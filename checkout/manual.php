<button id="rzp-button1" class="btn btn-primary">Pay with Razorpay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="http://localhost/razor/verify.php" method="POST">
     <input type="hidden" name="item_name" value ="<?php echo $_POST['item_name']; ?>">
     <input type="hidden" name="item_number"  value ="<?php echo $_POST['item_number']; ?>">
      <input type="hidden" name="amount"  value ="<?php echo $_POST['amount']; ?>">
      <input type="hidden" name="cust_name"  value ="<?php echo $_POST['cust_name']; ?>">
       <input type="hidden" name="email"  value ="<?php echo $_POST['email']; ?>">
       <input type="hidden" name="contact"  value ="<?php echo $_POST['contact']; ?>">
   
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature"  id="razorpay_signature" >
</form>

<script>
var options = <?php echo $json?>;
options.handler = function (response){
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.razorpayform.submit();
};
options.theme.image_padding = false;
options.modal = {
    ondismiss: function() {
        console.log("This code runs when the popup is closed");
    },
    escape: true,
    backdropclose: false
};
var rzp = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>