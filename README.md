# PHP-MD5-Hash-Cracker
A PHP application which can crack and generate a MD5 hash for a four digit numeric PIN as part of the University of Michigan's Building Web Applications in PHP course.

There are three PHP files in this project. 
  - **index.php**
      -  index.php is the main application which can crack a MD5 hash for a four digit numeric PIN.
      -  You can enter an MD5 hash on this page and in the background PHP will attempt to crack the HASH using comparison statements for each number in the PIN.
  - **makepin.php**
      -   makepin.php is a page which can generate a MD5 hash for any four digit numeric PIN.
      -   Enter in a four digit number of your choosing and select the 'Compute MD5' button.
      -   You can use the hash generated to verify index.php can crack a four digit PIN MD5 hash.
  - **md5.php**
      -   md5.php is a page which can generate a MD5 hash for any given value.
      -   You can use the MD5 hash from this page to verify index.php cannot crack MD5 hash values that are not a four digit PIN.
