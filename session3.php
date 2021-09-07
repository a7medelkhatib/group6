<?php 
    

    // function getChar($ch){

    //     $next = ++$ch;


    //      if(strlen($next) > 1){
    //          $next = $next[0];
    //      }
    //      echo $next;
    // }


    // getChar('x');
    // ord('a'); // 
    // chr(97);


//    $url =  "http://sticksandstones.kstrom.com/appen.html";

//    $finalUrl = explode('/',$url);

//    $count = count($finalUrl);

//    echo 'FileName = '. $finalUrl[$count-1];



//  $students = [["ahmed",20,3.2,'010xxx'],["Omar",21],["Root",22,2.1],["Root2",22,2.1]];



//     for ($row=0; $row < count($students) ; $row++) { 
//         # code...

//         if($row == 1){ continue;} 
        
//        for ($col=0; $col < count($students[$row]) ; $col++) { 
//            # code...

          
//            echo $students[$row][$col].'  ';
//        } 
//        echo '<br>';
//     }




//  $colors = ['red','blue','green'];

//     // sort($colors);
// //  rsort($colors);
// //     print_r($colors);

//    $studentsAges = ["ahmed" => 12 , "mohammed" => 30 , "root" => 20];
    
//    // asort($studentsAges);
//    // arsort($studentsAges);
//     // ksort($studentsAges);
//     krsort($studentsAges);
//    print_r($studentsAges);



//$_SERVER 

// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['SERVER_SOFTWARE'];
// echo $_SERVER['SERVER_ADDR'];   // SERVER IP 
//  echo $_SERVER['REMOTE_PORT'];
// echo $_SERVER['REMOTE_ADDR']; // CLIENT IP
// echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['REQUEST_METHOD'];

// $_GET[] 
// $_POST[]
// $_REQUEST[]




// FILTERS .... 

//$num = "https://www.w3schoo��ls.co�m";

$url = "https://www.w3schoo��ls.co�m";

// var_dump(filter_var($num,FILTER_VALIDATE_INT));
//  var_dump(filter_var($num,FILTER_VALIDATE_EMAIL));
// var_dump(filter_var($num,FILTER_VALIDATE_URL));
// var_dump(filter_var($num,FILTER_VALIDATE_IP));

 // ECHO filter_var($num,FILTER_SANITIZE_NUMBER_INT);


//   $finalEmail = filter_var($num,FILTER_SANITIZE_EMAIL);

//  var_dump(filter_var($finalEmail,FILTER_VALIDATE_EMAIL));


 $NEWURL =  filter_var($url,FILTER_SANITIZE_URL);
 var_dump(filter_var($NEWURL,FILTER_VALIDATE_URL));


?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
  <form method="post" action="action.php"  enctype ="multipart/form-data">

  

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password"   class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>




