<?php

// PHP function to reverse a string using
// recursion and substr()
function Reverse($str){

    // strlen() used to calculate the
    // length of the string
    $len = strlen($str);

    // Base case for recursion
    if($len == 1){
        return $str;
    }
    else{
        $len--;

        // extract first character and concatenate
        // at end of string returned from recursive
        // call on remaining string
        return Reverse(substr($str,1, $len))
            . substr($str, 0, 1);
    }
}

// Driver Code
$str = "123456789";
print_r(Reverse($str));

?>
