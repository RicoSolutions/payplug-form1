<?php

require_once('payplug-php/lib/init.php');
require_once('config.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$customerid = $_POST['customerid'];
$shipping = $_POST['shipping'];
$savecard = $_POST['savecard'];

if (isset($savecard)) {
  $payment = \Payplug\Payment::create(array(
      'amount'            => $amount*100,
      'currency'          => 'EUR',
      'save_card'         => true,
      'customer'          => array(
          'email'             => $email,
          'first_name'        => $firstname,
          'last_name'         => $lastname
      ),
      'hosted_payment'    => array(
          'return_url'        => 'https://form1.rico.solutions/return.html',
          'cancel_url'        => 'https://form1.rico.solutions/cancel.html'
      ),
      'notification_url'  => 'https://form1.rico.solutions/notifications.html',
      'metadata'          => array(
          'customer_id'       => $customerid,
          'shipping'          =>  $shipping
      )
  ));
} else {
  $payment = \Payplug\Payment::create(array(
      'amount'            => $amount*100,
      'currency'          => 'EUR',
      'save_card'         => false,
      'customer'          => array(
          'email'             => $email,
          'first_name'        => $firstname,
          'last_name'         => $lastname
      ),
      'hosted_payment'    => array(
          'return_url'        => 'https://form1.rico.solutions/return.html',
          'cancel_url'        => 'https://form1.rico.solutions/cancel.html'
      ),
      'notification_url'  => 'https://form1.rico.solutions/notifications.html',
      'metadata'          => array(
          'customer_id'       => $customerid,
          'shipping'          =>  $shipping
      )
  ));
}


$payment_url = $payment->hosted_payment->payment_url;
$paymentid = $payment->id;
header('Location:' . $payment_url);
