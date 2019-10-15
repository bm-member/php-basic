<?php 

//  $success = true;

if(isset($success)) {
    echo "Success";
} else {
    echo "Fail";
}

// result => Success

$result = isset($success) ? "Success" : "Fail";

echo $result;
