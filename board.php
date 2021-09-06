<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <table width="300px">
   
    <?php 
   for ($row=1; $row <=8 ; $row++) { 
            # code...

           echo '<tr>';
      for ($col=1; $col <=8 ; $col++) { 
        # code...
        
        $eq = $row + $col ; 

        if($eq%2 == 0){
            echo "<td  width='30px' height='40px' bgcolor='#FFFFFF'> </td>";
        }else{

            echo "<td  width='30px' height='40px' bgcolor='#000000'> </td>";
            
        }
       
       
    }

           echo '</tr>';


        }
    ?>


   </table>   
    
</body>
</html>