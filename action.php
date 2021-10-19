<?php

session_start();
include 'config.php';
error_reporting(null);
 if(isset($_POST['login'])){
   
    $email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
        $_SESSION['r_id'] = $row['r_id'];
        
		echo "<script>
					alert('Login Successfully!');
					window.location.href='index.php';
					</script>";
        // echo $_SESSION['name'];
	} 
    else 
    {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
       
	}
    // header("Location: login.php");

 }
 elseif(isset($_POST['register']))
 {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        //  echo $name.",".$email.",".$password.",".$cpassword;

        if ($password == $cpassword) {
            $sql = "SELECT * FROM login WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO registration (name, email, password)
                        VALUES ('$name', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>
					alert('Registered Successfully!');
					window.location.href='login.php';
					</script>";
                    // echo "<script>alert('Wow! User Registration Completed.')</script>";
                    $name = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                    //  header("Location: login.php");
                    
                } else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }
            
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }
    elseif($_GET['name']=='logout')
    {
        session_destroy();
        header("Location: login.php");
    }



    if(isset($_POST['contact']))
    {
        
           $fullname = $_POST['fullname'];
           $email= $_POST['email'];
           $message = $_POST['message'];
           
        //    $cpassword = $_POST['cpassword'];
           //  echo $name.",".$email.",".$password.",".$cpassword;
   
            //    $sql = "SELECT * FROM login WHERE email='$email'";
            //    $result = mysqli_query($conn, $sql);
               $sql="INSERT INTO contact (fullname, email, message) VALUES ('".$fullname."','".$email."', '".$message."')";

               if(!$result = $conn->query($sql)){
                die('There was an error running the query [' . $conn->error . ']');
                }
                else
                { echo "<script>
					alert('Thank you! We will contact you soon!');
					window.location.href='index.php';
					</script>";
               
                }
                }
                else
                {
                echo "Please fill Name and Email";
                }
                

    if(isset($_POST['event']))
    {
     $r_id = $_SESSION['r_id'];
                    
                       $name = $_POST['name'];
                       $email= $_POST['email'];
                       $number = $_POST['number'];
                       $type = $_POST['type'];
                      
                   
                           $sql="INSERT INTO eve_reg (r_id, name, email, number, type) VALUES ('".$r_id."','".$name."','".$email."', '".$number."', '".$type."')";
            
                           if(!$result = $conn->query($sql))
                            {
                            die('There was an error running the query [' . $conn->error . ']');
                            }
                            else
                            { echo "<script>
                                alert('Registered Successfully!');
                                window.location.href='index.php';
                                </script>";
                           
                            }
                        
                            
    }


    if(isset($_POST['student']))
    {
     $r_id = $_SESSION['r_id'];
     $e_id = $_SESSION['e_id'];
                    
                       $name = $_POST['name'];
                       $number = $_POST['number'];
                       $email= $_POST['email'];
                      
                      
                   
                           $sql="INSERT INTO student (r_id, e_id,  st_name, email, st_mob) VALUES ('".$r_id."','".$e_id."','".$st_name."','".$email."', '".$st_mob."', '".$type."')";
            
                           if(!$result = $conn->query($sql))
                            {
                            die('There was an error running the query [' . $conn->error . ']');
                            }
                            else
                            { echo "<script>
                                alert('Registered Successfully!');
                                window.location.href='index.php';
                                </script>";
                           
                            }
                        
                            
    }

                    
                            
                    
                    
?>