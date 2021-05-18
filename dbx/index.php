<!--HTML CODE FOR STRUCTURE OF PAGE FORM-->
<html>
<head>
    <title>TRANSFER MONEY</title>

<!--STYLING THE PAGE-->
<style>
	body{
		background-image:url("lg.jpg");
		background-size:cover;
		position:absolute;
		
		
	}
	.container {
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("container.jpg");
		padding: 50px 8px 20px 38px;
		width: 350px;
		height: 480px;
		margin-left: 35%;
		font-size: 25px;
		position: absolute;
		top:35px;
		left:500px;
		border-radius:20px;	
	}
	
	.txt {
		width: 90%;
		height: 5%;
		border: 1px solid brown;
		border-radius: 20px;
		padding: 20px 15px 20px 15px;
		margin: 10px 0px 15px 0px;
		color:grey;
		font-family: Times;
		font-size: 15px;
		color: crimson;
	}

	select {
		width: 90%;
		border: 1px solid brown;
		border-radius: 20px;
		box-shadow : 1px 1px 2px 1px grey;
		padding: 10px 10px 10px 10px;

	}


	.logo img {
		float: center;
		width: 150px;
		height: auto;
		position: absolute;
		top:0px;
		left:120px;

	}
	.head{
		text-decoration:none;
		font-family: "Poppins", sans-serif;
        font-size: 20px;
		color:#fff;
	}
	.select{
		text-decoration:none;
		font-family: "Poppins", sans-serif;
        font-size: 18px;
	}
	.btn{
		text-decoration:none;
		font-family: "Poppins", sans-serif;
        font-size: 18px;
		color:#000;
		border-radius: 20px;
		border:2px solid #000;
		position:absolute;
		left:100px;
	}
</style>

</head>
<body>

	<div class="container">
		<div class="logo">
			<img src="logo.png">
		</div>
    
        <form action="two.php" method="POST">
			<br><br><br>
            <label class="head"><h3><b>Sender's Name:</b></h3>LocalHost</label>
			<label class="head"><h3><b>Amount to Transfer:</b></h3></label>
            <input type="number" class="txt" name="Amount" placeholder="Enter Your Amount"/>
			<!--DropDown List-->
            <label class="head"><h3><b>Recipient's Name:</b></h3></label>
            <select name="Beneficiary">
                <option value="" class="select">--Select--</option>
                <option value="Jack" class="select">Jack</option>
                <option value="Mary" class="select">Mary</option>
                <option value="Ria" class="select">Ria</option>
				<option value="Nancy" class="select">Nancy</option>
				<option value="Robert" class="select">Robert</option>
                <option value="Okasha" class="select">Okasha</option>
                <option value="Kareem" class="select">Kareem</option>
                <option value="Aisha" class="select">Aisha</option>
                <option value="Hayat" class="select">Hayat</option>
                <option value="Selena" class="select">Selena</option>
				
            </select><br><br>    

            <input type="submit"   class="btn" name="insert" value="TRANSFER MONEY"/>

        </form>
	</div>
</body>
</html>

<!--To connect Dropdown Menu to MySQL database-->
