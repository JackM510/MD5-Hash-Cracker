# MD5-Hash-Cracker
A simple PHP application which can crack and generate a MD5 hash for a four digit numeric PIN. This project was developed as part of the Web Applications for Every specialisation from the University of Michigan.

# Features
- index.php: The main application which can crack a MD5 hash for a four digit numeric PIN.
- makepin.php: A subpage which can generate a MD5 hash for any four digit numeric PIN.
- md5.php: A subpage which can generate a MD5 hash for any given value (e.g., String values).

# Installation
1. Clone the repository.
2. Run the application on your local server from 'index.php'.

# Usage
To crack a MD5 hash you first need to generate a hash for a four-digit pin. 
1. From index.php, select the link 'Make an MD5 PIN'.
2. Enter in any four-digt pin in the input field and select the 'Compute MD5' button.
3. The key will generate and render on the makepin.php page. Copy the hash and select the 'Back to Cracking' link.
4. Paste the hash in the input field on index.php and select the 'Crack MD5' button.
5. If your PIN is cracked it will be rendered to you on the page, otherwise it will render 'Not Found'.

You can optionally then use the 'MD5 Encoder' link to generate an MD5 hash for any given value.
6. Enter in any value of your choice and select the 'Compute MD5' button.
7. The key will generate and render on the md5.php page. Copy the hash and select the 'Back to Cracking' link.
8. Paste the hash in the input field on index.php and select the 'Crack MD5' button.
9. Your PIN should render 'Not Found' if your hash value was anything other than a four-digit PIN. 
This is to illustrate that the application is only capable of cracking an MD5 hashed four-digit PIN.
