<?php



if (isset ($_POST['submit'])) {
    
    if(!empty($_POST['consent'])) {

    $gender = $_POST['gender'];
    $DOB = $_POST['DOB'];
    $id = $_POST['ID'];

    $mailTo = "julia.koziel@kcl.ac.uk";
    $headers = "One of a Kind Data";
    // $txt = $gender $DOB $ID;


    mail($mailTo, $headers, $txt);

    }

    else 
    {
        echo 'Please check the consent form boxes to submit the form';
    }
}