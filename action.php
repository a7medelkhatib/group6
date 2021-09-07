<?php 

 function clean($input){
  
     $input = trim($input);
     $input = stripcslashes($input);
     $input = htmlspecialchars($input);
   
   //  htmlspecialchars(stripcslashes( trim($input)));
      return $input;
 }



if($_SERVER['REQUEST_METHOD'] == "POST"){

    // Logic ... 
    $name     = clean($_POST['name']);
    $email    = clean($_POST['email']);
    $password = $_POST['password'];

    $errorMessages = [];

    if(empty($name)){

        $errorMessages['Name'] = "Field Required";
    }


    if(empty($email)){

        $errorMessages['Email'] = "Field Required";
    }


    if(strlen($password) < 6){

        $errorMessages['Password'] = "Length Must be > 5 ch";
    }


    if(count($errorMessages) > 0){
        // ERROR MESSAGES

       foreach($errorMessages as $key => $value){

           echo '* '.$key.' : '.$value.'<br>';
       }


    }else{
    
         echo 'Valid Data';
   
    }
}


?>