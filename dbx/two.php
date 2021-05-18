<?php 
    $image = "img5.jpg";
    $url = 'background-img4.jpg';
    $servername = "localhost"; 
    $username = "lipisha"; 
    $password = "0!J0f(e_C0H66.)Y"; 
    $dbname = "testdb"; 
        
            // Create connection 
    try {
        $conn = new mysqli($servername, $username, $password, $dbname); 
                // Check connection 
        $user = $_POST['user']="LocalHost"; 
        $amount = $_POST['Amount']; 
        $beneficiary = $_POST['Beneficiary']; 
            
        $sql = "INSERT INTO money (user,amount,beneficiary) VALUES ('$user','$amount','$beneficiary')"; 
            
        if(mysqli_query($conn, $sql))
        {
            echo "<script>
            function myFunction() {
              location.replace('success.html')
            }
            myFunction()
            </script>";
            echo ("\n$user\n $amount\n $benificiary");
        } 
        else
        {
            echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
        }
                    
                    // Close connection
        mysqli_close($conn);
    }
    catch(PDOException $e){
        echo "FAILED";
    }

?>