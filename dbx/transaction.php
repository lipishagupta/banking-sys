<!DOCTYPE html>
<html lang="en">
<!--TRANSACTION PAGE-->
<head>
    <link rel="stylesheet" type="text/css" href="transaction.css">  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaction</title>
    
</head>
<body>

    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.png">
            </div>
            <ul>
                <li><a href="one.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="customers.html">CUSTOMERS</a></li>
                <li><a href="http://localhost/dbx/transactions.php">TRANSACTIONS</a></li>
                <li><a href="http://localhost/dbx/account.php">MY ACCOUNT</a></li>
                <li><a href="contact.html">CONTACT US</a></li>

            </ul>
        </div>

        <div class="heading">
            <h2>TSF BANK</h2>
        </div>
        <table style="width:70%">
            <tr>

                <th>USER</th>
                <th>AMOUNT</th>
                <th>BENEFICIARY</th>

            </tr>
            <?php 
                $servername = "localhost"; 
                $username = "lipisha"; 
                $password = "0!J0f(e_C0H66.)Y"; 
                $dbname = "testdb"; 
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM money";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  // output data of each row
        
                  while($row = $result->fetch_assoc()) {
                    
                    echo "<tr>";
                    echo "<td>" . $row['user'] . "</td>";
                    echo "<td>" . $row['Amount'] . "</td>";
                    echo "<td>" . $row['Beneficiary'] . "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "0 results";
                }
                $conn->close();
                
            ?>
                    
        </table>

    </header>

</body>

</html>