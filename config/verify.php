 <?php
      session_start();

      if (isset($_POST['login']))
      {
      	$username = $_POST['username'];
      	$pass = $_POST['password'];
      	 $row = $db->return_assoc_user($username);
   		   $db_pass = $row['password'];

         if (!empty($row)) {
        if (password_verify($pass,$db_pass)) {
            
            echo "<script>alert('this is fine')</script>";

            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] =$row['username'];
            $_SESSION['admin'] = $row['admin'];
            
            header("location:index.php");
            
        }else{
            echo "<script>alert('Incorrect password')</script>";
           
        }

    }else{
        echo "<script>alert('this account does not exist');

        </script>";


    }
   }


      ?>
