<html>
<head>
  <title>Service Enquiry</title>
</head>
<style>
body {
  margin: 0;
  padding: 0;
  font-family: Century, sans-serif;
  font-size:20px;
}
.main {
  margin-top: 30px;
}
.para{
	text-align:justify;
	padding:10px;
	margin:10px;
}
  header {
     display: flex;
      align-items: center;
      justify-content: center;
      background-color: black;
      color: white;
	 overflow:hidden; 
	 top:0;
	 position:fixed;
	 width:100%;
    }
	.logo{
		width:430px;
		height:90px
	}
	
a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  color: Grey;
}
	.footer {
  background-color: #000;
  color: white;
  text-align: center;
  position: relative;
  width: 100%;
  bottom: 0;
    font-size:16px;
}
.footer-content {
  display: flex; 
  justify-content: space-between; 
}

.footer-line {
  flex: 1;
  padding: 5px;
}
input[type=text],[type=email],[type=number],[type=file], textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit],[type=reset]{
  width: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<body>
<div class="main">
  <header>  
	 <img class="logo" src="images\logo8_12_145734.jpeg" alt="Logo">
  </header>
</div>
<div class="para">
<br>
<br>
<br>
<br>
<br>
<p><a href="main.php">Home</a> >> Service Enquiry</p>
<br>
Welcome to MotorMenders. 
India's leading Bodyshop and Detailing centre.<br>
To get an estimated quote for your Car, please fill the form below and we will get in touch with you via mail or call asap.<br>
<br>
<br>
<form action="submit.php" method="post" name="me" enctype="multipart/form-data">
<label><b>Enter Name</b></label><br>
<input type="text" name="name" placeholder="Enter your name" required>
<br><br>
<label><b>Email</b></label><br>
<input type="email" name="email" placeholder="123@gmail.com" required>
<br><br>
<label><b>Phone</b></label><br>
<input type="number" name="phone" placeholder="8272576385" required>
<br><br>
<label><b>State/UT</b></label><br>
<input type="text" name="state" placeholder="Goa" required>
<br><br>
<label><b>City</b></label><br>
<input type="text" name="city" placeholder="Thane" required>
<br><br>
<label><b>Pin Code</b></label><br>
<input type="number" name="pincode" placeholder="7027416" required>
<br><br>
<label><b>Car Manufacturer</b></label><br>
<input type="text" name="carmanf" placeholder="Maruti" required>
<br><br>
<label><b>Model</b></label><br>
<input type="text" name="model" placeholder="Breeza" required>
<br><br>
<label><b>Year</b></label><br>
<input type="text" name="year" placeholder="2023" required>
<br><br>
<label><b>Service</b></label><br>
<input type="text" name="service" placeholder="coating" required>
<br><br>
<label><b>How Did you hear about us?</b></label><br>
<input type="text" name="hear" placeholder="youtube" required>
<br><br>
<b>Comments</b><br>
<textarea rows="5" cols="50" name="comment">
Write here...
</textarea>
<label><b>Car Image</b></label><br>
<input type="file" name="carimage" accept=".png,.jpg,.jpeg" required>
<br><br>
<input type="submit" name="submit" value="Submit" required>&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" value="Reset" required>
<br><br>



<br><br>
<hr>

  </div>
    <div class="footer" id="contact">
   <div class="footer-content">
    <div class="footer-line">		<b>Our Services</b><br><br>
                                    Ceramic & Graphene Coatings<br>
                                       Paint Protection Films<br>
									Body-Shop (Denting & Painting)<br>
											 Wrap Jobs<br>
									Detailing and Interior cleaning<br>
										  Insurance Claims<br>
									     Other Services<br></div>
        <div class="footer-line"><b>Other Services</b><br><br>
Under-body anti-rust coatings<br>
Windshield and all glass polishing<br>
Seat covers and Door pad leather upholstery<br>
Steering, Gear knob and Gear bellow covers<br>
7D matts with custom stitchings<br>
Headlight and taillight restorations<br>
Body Washing and Vacuuming<br>
Headliners replacement<br></div>
        <div class="footer-line"><b>Visit The Store</b><br><br>
Address : Lane No. 1, Left Turn, Ram Nagar, Behind Grand Truck Road, Wadgaon Sheri, Hooghly, West Bengal 712238<br>
</div>
  <div class="footer-line"><b>Contact Us</b><br><br>
Email : contact@motormenders.in<br><br>

(Please do not send service/work enquiry on this mail. Click service enquiry on top of the page for enquiries.)<br><br>

Phone : 022 - 35155776<br></div>

  </div>
  </div>
</body>
</html>
