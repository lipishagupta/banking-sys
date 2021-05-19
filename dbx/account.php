<!--MY ACCOUNT-->
<html>

<head>
    <title>TRANSFER MONEY</title>


    <!--STYLING THE PAGE-->
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("lg.jpg");
            background-size: cover;
            position: absolute;

        }

        .container {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("container.jpg");
            padding: 50px 8px 20px 38px;
            border-radius: 10%;
            width: 400px;
            height: 250px;
            margin-left: 35%;
            font-size: 25px;
            position: absolute;
            top: 75px;
            left: 470px;
        }

        .txt {
            width: 90%;
            height: 5%;
            border-radius: 25px;
            padding: 20px 15px 20px 15px;
            margin: 10px 0px 15px 0px;
            color: grey;
            font-family: "Poppins", sans-serif;
            font-size: 20px;
        }

        select {
            width: 90%;
            border: 1px solid brown;
            border-radius: 25px;
            box-shadow: 1px 1px 2px 1px grey;
            padding: 15px 10px 10px 10px;

        }


        select {
            color: black;
        }

        .logo img {
            float: center;
            width: 200px;
            height: auto;
            position: absolute;
            left: 28%;
            bottom: 50%;

        }

        .color {
            color: white;
        }

        .select {
            font-family: "Poppins", sans-serif;
            font-size: 20px;
        }

        .back {
            position: absolute;
            top: 10px;
            left: 5px;
        }
    </style>


</head>

<body>

 

    <div class="container">
        <div class="logo">
            <img src="logo.png">
        </div>
        
        <div class="back">
            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="50" height="50"
                viewBox="0 0 172 172"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path><g fill="#000000">
                        <path d="M86,6.88c-43.63156,0 -79.12,35.48844 -79.12,79.12c0,43.63156 35.48844,79.12 79.12,79.12c43.63156,0 79.12,-35.48844 79.12,-79.12c0,-43.63156 -35.48844,-79.12 -79.12,-79.12zM98.75219,117.96781c1.34375,1.34375 1.34375,3.52062 0,4.86437c-0.67187,0.67188 -1.54531,1.00781 -2.43219,1.00781c-0.88687,0 -1.76031,-0.33594 -2.43219,-1.00781l-34.4,-34.4c-1.34375,-1.34375 -1.34375,-3.52062 0,-4.86437l34.4,-34.4c1.34375,-1.34375 3.52062,-1.34375 4.86437,0c1.34375,1.34375 1.34375,3.52062 0,4.86437l-31.96781,31.96781z">
                    </path></g></g></svg></a>

        <form action="two.php" method="POST">
            <br><br><br>
            <label class="color">Username: Localhost/User</label><br><br>
            <label class="color">IFSC: SD1231232X</label><br><br>
            <label class="color">Balance: $
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
                    $a=1000000;
                    $a1=0;
                        
                    if ($result->num_rows > 0) {
                        // output data of each row
                
                        while($row = $result->fetch_assoc()) {
                            
                            $a1=$row["Amount"]+$a1;
                        }
                    } 
                    
                    $balance = $a-$a1;
                    if($balance<=0)
                    {
                        echo $a;
                    }
                    else
                    {
                        echo $balance;
                    }
                    
                    
                    $conn->close();     
                ?>
            </label><br>
            
        
        </form>
    </div>
</body>

</html>

