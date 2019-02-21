//Regex or Regular Expressions
//Validating user inputs
//Salitizing user input improves system security


//Validating phone numbers

<?php

// validate a US phone number

if (preg_match('/^((1-)?d{3}-)d{3}-d{4}$/', $phone)) {
    echo $phone . " is valid format.";
}

?>




// Data Sanitization

<?php

// sanitize HTML from the comment

$comment = strip_tags($_POST["comment"]);

//Sometimes, data validation and sanitization/normalization can go hand in hand.

?>



// Data Sanitization and validation

<?php

// normalize and validate a US phone number

$phone = preg_replace('/[^d]/', "", $phone);
$len = strlen($phone);
if ($len == 7 || $len == 10 || $len == 11) {
    echo $phone . " is valid format.";


}

?>