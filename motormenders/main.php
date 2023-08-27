<html>
<head>
  <title>Motor Menders</title>
</head>
<style>
html {
  scroll-behavior: smooth;
}
body {
  margin: 0;
  padding: 0;
  font-family: Century, sans-serif;
}

.main {
  margin-top: 30px;
}
  header {
     display: flex;
      align-items: center;
      justify-content: center;
      background-color: black;
      color: white;
      padding: 10px;
	  top:0;
	  position:fixed;
	  z-index:1000;
	  width:100%;
	 overflow:hidden; 
    }
	    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }
	    nav a {
      text-decoration: none;
      color: white; 
	  position: relative;
    }
		.logo{
		width:430px;
		height:90px
	}
		nav a::after {
      content: "";
      display: block;
      width: 0;
      height: 2px;
      background-color: #ff9900;
      position: absolute;
      bottom: -4px;
      left: 0;
      transition: width 0.3s;
    }
	    nav a:hover::after {
      width: 100%;
    }
	.photo-container {
	display: flex;
	overflow-x: hidden;
	}
	.photo-slide {
	flex: 0 0 100%;
	animation: slide 10s infinite;
	}
	@keyframes slide{
        0%{
			transform: translateX(0%);
		}
		10%{
			transform: translateX(0%);
		}
		20%{
			transform: translateX(-100%);
		}
		30%{
			transform: translateX(-100%);
		}
		40%{
			transform: translateX(-200%);
		}
		50%{
			transform: translateX(-200%);
		}
		60%{
			transform: translateX(-300%);
		}
		80%{
			transform: translateX(-300%);
		}
		90%{
			transform: translateX(-400%);
		}
		100%{
			transform: translateX(-400%);
		}	
	}
	.photo-slide img {
	max-width: 100%;
	height: auto;
	display: flex;
	}
	.photo-table {
      width: 100%;
	  overflow-x:auto;
	  margin-top:20px;
      border-collapse: collapse;
    }
	.photo-table td {
      padding: 20px 10px 20px 10px;
      border: 1px ;
      text-align: center;
	  transition: background-color 0.3s;
    }
	.photo-table td:hover {
  background-color: #f0f0f0;
	}
	.photo {
      max-width: 100%;
      height: auto;
    }
	.cont{
		width:100%;

	}
	.footer {
  background-color: #000;
  color: white;
  text-align: center;
  position: relative;
  width: 100%;
  bottom: 0;
}
.footer-content {
  display: flex; 
  justify-content: space-between; 
}

.footer-line {
  flex: 1;
  padding: 5px;
}
.photo-table img:hover {
  transform: scale(1.05); /* Scale up the image on hover */
  transition: 0.5s;
}
.photo-table::after {
    content: "";
    clear: both;
    display: table;
}
.footer::after {
    content: "";
    clear: both;
    display: table;
}
</style>
<body>
<div class="cont">
<div class="main">
  <header>
    <nav>
      <ul>
        <li><a href="admin.php">Admin</a></li>
		<li><a href="service.php">Service Enquiry</a></li>
       </ul>
</nav>	   
	 <img class="logo" src="images\logo8_12_145734.jpeg" alt="Logo">
		<nav>
		<ul>
		<li><a href="#table">Services</a></li>
		<li><a href="#contact">Contact</a></li>
		</ul>
	</nav>
  </header>
</div>
  <div class="photo-container">
    <div class="photo-slide">
      <img src="images\WHITE-FERRARI-HEROSCREEN-5192023.png" alt="Photo 1">
    </div>
    <div class="photo-slide">
      <img src="images\10948289.jpg" alt="Photo 3">
    </div>
    <div class="photo-slide">
      <img src="images\2006638.jpg" alt="Photo 3">
    </div>
	<div class="photo-slide">
      <img src="images\57018.jpg" alt="Photo 3">
    </div>
	<div class="photo-slide">
      <img src="images\57000.jpg" alt="Photo 3">
    </div>
  </div>  
  <hr>
  <table class="photo-table" id="table">
    <tr>
      <td><a href="ceramin.php"><img class="photo" src="images\My project (1).jpg" alt="Photo 1"></a></td>
      <td><a href="paint.php"><img class="photo" src="images\My project.jpg" alt="Photo 2"></td>
      <td><a href="body.php"><img class="photo" src="images\My project (4).jpg" alt="Photo 3"></td>
    </tr>
    <tr>
      <td><a href="detail.php"><img class="photo" src="images\My project (2).jpg" alt="Photo 4"></td>
      <td><a href="wrap.php"><img class="photo" src="images\My project (8).jpg" alt="Photo 5"></td>
      <td><a href="insurance.php"><img class="photo" src="images\My project (6).jpg" alt="Photo 6"></td>
    </tr>
	<tr>
      <td><a href="interior.php"><img class="photo" src="images\My project (3).jpg" alt="Photo 4"></td>
      <td><a href="car.php"><img class="photo" src="images\My project (5).jpg" alt="Photo 5"></td>
      <td><a href="other.php"><img class="photo" src="images\My project-1.jpg" alt="Photo 6"></td>
    </tr>
  </table>
  <hr>
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
  </div>
</body>
</html>