<?php  
 $check =mail("shrutisuryawanshi343@gmail.com","Testing Email","This is a testing email form xamp server","From:shrutisuryawanshi343@gmail.com");
 if($check)
 {
    echo "email sent successfully";
 }
 else{
    echo "email not sent successfully";
 }

?>