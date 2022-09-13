<html>
<body>
<?php 
$username = "root"; 
$password = "";
$database = "users"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";


echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">User Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Password</font> </td> 
          <td> <font face="Arial">Trn date</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row['username'];
        $field2name = $row['email'];
        $field3name = $row['password'];
        $field4name = $row['trn_date']; 
        
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>