

<?php


// $students = [
//     ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
//     ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
//     ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
//     ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
//     ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
// ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
#6
//select==get from to TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='form';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error($conn));
   }
   
   echo 'Connected successfully<br>';
  
   $sql = 'SELECT auth_id, auth_name, auth_email_address FROM auth';
   mysqli_select_db($conn,$dbname);
   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   if (mysqli_num_rows($result) > 0) {
      // output data of each row
        echo "<table>
        <thead>
            <tr>
                <th>ID  </th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>" ;
      // echo "<table>";
      while($row = mysqli_fetch_assoc($result)) {
        //  echo "EMP ID :{$row['auth_id']}  <br> ".
        //  "EMP NAME : {$row['auth_name']} <br> ".
        //  "EMP SALARY : {$row['auth_email_address']} <br> ".
        //  "--------------------------------<br>";

         echo "
         <tbody>
             
                 <tr>
                     
                     
                       <td>{$row['auth_id']}</td>
                     <td>{$row['auth_name']}</td>
                         <td>{$row['auth_email_address']}</td>
                     
                 </tr><br/>
            
         </tbody>
     </table>
     ";

        //  $students = [ 'id' => "{$row['auth_id']}" , 'name' => "{$row['auth_name']}", 'email' => "{$row['auth_email_address']}"];


      }
      // echo "</table>";

    } else {
      echo "0 results";
    }
    /* //Its a good practice to release cursor memory
    mysqli_free_result($result);
    */
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>


<a href="form.php">Add new User</a>




</body>
</html>

