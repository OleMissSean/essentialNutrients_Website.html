<?php 
 
 /*  
  Comments.php
  Sean Staz
  CSci 490 ~ Special Topics: JavaScript
  01/13/2014
*/

// *7* Uses server-side code to process the request.

# Script 13.3 - login.php
if ( isset($_POST['name'], $_POST['email'])) 
{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $outputLine = "Server Response:\n Form data received as \n" .
                      "Name: $name \n Email: $email \n Comments: $comments";
        echo nl2br($outputLine);

} else {
	echo 'INVALID';
}
?>
