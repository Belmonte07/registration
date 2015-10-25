<?php

//tertiary operator
$fullName = empty($_POST['fullname']) ? 'Undefined' : $_POST['fullname'] ; 
$grades = empty($_POST['Science']) ? 'Undefined' : $_POST['science'];
$grades= empty($_POST['Technology']) ? 'Undefined' : $_POST['technolgy'];
$grades = empty($_POST['English']) ? 'Undefined' : $_POST['english'];


 Firstname: <strong><?php echo $firstName; ?></strong><br />
 $grades:<strong><?php echo $middleName; ?></strong><br />
$grades <strong><?php echo $lastName; ?></strong><br />
$grades <strong><?php echo $gender; ?></strong><br />
 
