<?php

function testInput($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = testInput($_POST['name']);
  $companyName = testInput($_POST['company-name']);
  $address1 = testInput($_POST['address-1']);
  $address2 = testInput($_POST['address-2']);
  $countryCode = testInput($_POST['country-code']);
  $contactNumber = testInput($_POST['contact-number']);
  $city = testInput($_POST['city']);
  $country = testInput($_POST['country']);
  $email = testInput($_POST['email']);
  $pinZipCode = testInput($_POST['pin-zip-code']);
  $originalManufacturer = testInput($_POST['original-manufacturer']);
  $originalSupplier = testInput($_POST['original-supplier']);
  $message = testInput($_POST['message']);

  $msg = "";
  $msg = "Name: " . $name . "\r\n";
  $msg .= "Company Name: " .  $companyName . "\r\n";
  $msg .= "Address Line - 1: " .  $address1 . "\r\n";
  $msg .= "Address Line - 2: " .  $address2 . "\r\n";
  $msg .= "Country Code & Contact No.: +" .  $countryCode . "-" . $contactNumber . "\r\n";
  $msg .= "City: " .  $city . "\r\n";
  $msg .= "Country: " .  $country . "\r\n";
  $msg .= "Email: " .  $email . "\r\n";
  $msg .= "PIN/ZIP Code: " .  $pinZipCode . "\r\n";
  $msg .= "Original Manufacturer: " .  $originalManufacturer . "\r\n";
  $msg .= "Original Supplier: " .  $originalSupplier . "\r\n";
  $msg .= "Meassge: " .  $message . "\r\n";

  $to = "imvinayak3@gmail.com";
  $subject = "Request From Website";

  $headers = "From: <vinayakagarwal369@gmail.com>" . "\r\n";
  $headers .= "Cc: <vinayakagarwal369@gmail.com>" . "\r\n";

  mail($to, $subject, $msg, $headers);

  header("Location: https://www.imvinayak.co.in/VEC-INDIA");
}
