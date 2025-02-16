# MD5-Hash-Cracker
A PHP application which can crack and generate a MD5 hash for a four digit numeric PIN as part of the University of Michigan's Building Web Applications in PHP course.

There are three PHP files in this project: 
  - **index.php**
      -  index.php is the main application which can crack a MD5 hash for a four digit numeric PIN.
      -  You can enter an MD5 hash on this page and in the background PHP will attempt to crack the HASH using comparison statements for each number in the PIN.
      -  index.php will check all 10,000 possible four digit PIN combinations to determine the correct PIN.
  - **makepin.php**
      -   makepin.php is a subpage which can generate a MD5 hash for any four digit numeric PIN.
      -   Enter in a four digit number of your choosing and select the 'Compute MD5' button.
      -   You can use the hash generated to verify index.php can crack a four digit PIN MD5 hash.
  - **md5.php**
      -   md5.php is a subpage which can generate a MD5 hash for any given value.
      -   You can use the MD5 hash from this page to verify index.php cannot crack MD5 hash values that are not a four digit PIN.

**Overview of the Application:**
- The PHP code running in the background on **index.php** uses a conditional statement to determine when the user has added a value into the vacant field next to the 'Crack MD5' button.
  - To crack the provided hash, a series of four nested for loops are used to iterate through numbers 0-9 for each position in a four-digit PIN.
  - Each for loop has a variable $numx (where x is either 1-4) and is incremented during each loop iteration.
  - Within the fourth nested for loop, a variable $try concatenates the values of each $num(x) into a singular variable.
    - The $try variable is then hashed using the MD5 algorithm.
    - Afterwards, a conditional statement is used to check whether the value of $try is equal to the value of the MD5 hash provided by the user.
      - If the hashes are the same, the nested for loop statement will break and the PIN will be returned back to the user.
      - The nested for loop statement will attempt all 10,000 possible combinations and will return "Not Found" if the PIN is not cracked.
- The **makepin.php** file is another page in the application which can create an MD5 hash for a given four digit numeric PIN.
  - In the background PHP checks that the input from the user has a length of '4' and that each character provided is a number and between 0-9.
  - If the input matches these conditions, the four digit PIN is hashed using the MD5 algorithm and is returned to the page for the user to copy and use on index.php.
- The **md5.php** page is similar to the makepin.php page, however the primary difference is that there are no value restrictions the user can enter.
  - e.g., the user may enter "hello" or "1234567890" and the PHP code in the background will return the equivelant MD5 hash back to the page.
  - This hash can also be used on index.php to verify that index.php can only crack a four digit PIN number.     
  
     
      
