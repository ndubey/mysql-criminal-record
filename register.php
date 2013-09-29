<?php

  // connect to the database

  include('library/dbconnect.php');

    

    $error = false;

    

  // run this only, once the user has hit the "Add Contact" button

  if (isset($_POST['submit'])) {

    // assign form inputs

    $username = $_POST['username'];

    $passwd = $_POST['passwd'];
         

    // validate inputs

    if ( !empty($username) && !empty($passwd) ) {    

      // add member to database

      $query = "INSERT INTO admin (user_name,Password) VALUES ('".$username."','".$passwd."')";

      $result = mysql_query($query);

          $message = "\"".$username. "\" has been successfully registered.";

        

      Header("Location: index.php"); 

      exit; 

    }

    else {

      $error = true; // input validation failed

    }

  }




?>



<form name="login" method="post" action="register.php">
<table width="300" height="100" border="0" align="center" cellpadding="0" ><tr>&nbsp;</tr><tr>&nbsp;</tr></table>
<table width="300" border="0" width="225" align="center">
    <tr>
        <td width="219" bgcolor="#999999">
            <p align="center"><font color="white"><span style="font-size:12pt;"><b>Registration</b></span></font></p>
        </td>
    </tr>
                   <tr>
                    <td width="116"><span style="font-size:10pt;">Username:</span></td>
                    <td width="156"><input name="username" type="text" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td width="116"><span style="font-size:10pt;">Password:</span></td>
                    <td width="156"><input name="passwd" type="password" value="<?php echo $passwd; ?>"></td>
                </tr>
                <tr>
                    <td width="116">&nbsp;</td>
                        <td width="156">
                            <p align="right"><input type="submit" name="submit" value="Submit"></p>
                        </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="219" bgcolor="#999999">&nbsp;</td>
    </tr>
</table>
</form>
