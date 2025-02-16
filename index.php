<!DOCTYPE html>
<head><title>Jack Marshall MD5 Cracker</title></head>
<body style="font-family: sans-serif">
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of a four digit PIN and checks all 10,000 possible four digit PINs to determine the PIN.</p>
<pre>
Debug Output:
<?php
// This value will be modified to the PIN number if the MD5 hash is cracked
$goodtext = "Not found";

// Attempt to crack the MD5 hash
if ( isset($_GET['md5']) && !empty($_GET['md5'])) {
    $time_pre = microtime(true); // Records the start time when the MD5 crack begins
    $md5 = $_GET['md5']; // Holds the value of the specified MD5 hash
    $txt = "0123456789"; // All possible numberic digits in the MD5 hash
    $show = 15; // Used for rendering the first 15 debug attempts to index.php

    // Loop through numbers 0-9 in the first position of the four digit pin
    for($i=0; $i<strlen($txt); $i++ ) {
        $num1 = $txt[$i];   // The value of the first digit in the pin

        // Loop through numbers 0-9 in the second position of the four digit pin
        for($j=0; $j<strlen($txt); $j++ ) {
            $num2 = $txt[$j];  // The value of the second digit in the pin

            // Loop through numbers 0-9 in the third position of the four digit pin
            for($k=0; $k<strlen($txt); $k++ ) {
                $num3 = $txt[$k];  // The value of the third digit in the pin

                // Loop through numbers 0-9 in the fourth position of the four digit pin
                for($l=0; $l<strlen($txt); $l++ ) {
                    $num4 = $txt[$l];  // The value of the fourth digit in the pin

                    // Concatenate all four numbers together to form the "possible" pre-hash pin
                    $try = $num1.$num2.$num3.$num4;
                    // Run the hash and then check to see if $check is equal to the provided hash.
                    $check = hash('md5', $try);
                    if ( $check == $md5 ) {
                        $goodtext = $try;
                        break;   // Exit the inner loop
                    }

                    // Debug output until $show hits 0
                    if ( $show > 0 ) {
                        print "$check $try\n";
                        $show = $show - 1;
                    }
                }
            } 
        }
    }
    // Compute elapsed time that it took to crack the MD5 hash
    $time_post = microtime(true); // Records the end time when the MD5 crack finishes
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<p>PIN: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="40" value=""/>
<input type="submit" value="Crack MD5"/>
</form>
<ul>
<li><a href="index.php">Reset this page</a></li>
<li><a href="makepin.php">Make an MD5 PIN</a></li>
<li><a href="md5.php">MD5 Encoder</a></li>
</ul>
</body>
</html>
