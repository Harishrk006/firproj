<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		college
	</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<div class="header-content">
	<nav>
	<div class="logo">
		<img src="img/bgn.jpg" alt="logo">
	</div>

	<ul class="nav-links">
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="course.php">Course</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</nav>
	</div>
	<div class="text-center mb mt"><br><br>
		<center><h1>Contact us</h1></center><br><br>
		<form action="clgreg.php">
		First Name :
		<input type="text" name="name" placeholder="First Name"><br><br>
		Last Name :
		<input type="text" name="lname" placeholder="Last Name"><br><br>
		Father Name :
		<input type="text" name="fname" placeholder="Father Name"><br><br>
		Email Id :
		<input type="email" name="email" placeholder="Email"><br><br>
		Phone No :
		<input type="number" name="phone" placeholder="Phone No"><br><br>
		Gender :
		<select class="option" name="gender">
		<option>Male</option>
		<option>Female</option>
		</select><br><br>
		Choose your Course :
		<select class="option" name="course">
		<option>B.Sc Computer Science</option>
		<option>B.Sc Information Technology</option>
		<option>BCA</option>
		<option>B.Sc Maths</option>
		<option>B.Sc physics</option>
		<option>B.Sc Chemistry</option>
		<option>B.com</option>
		<option>B.com CA</option>
		</select><br><br>
		Upload 12th Marksheet :
		<input type="file" name="file" class="file"><br><br>
		<center><button class="btn">Submit</button></center>
</form>
	</div>
</header> 
<footer class="footer">
	<div class="header-content">
	<nav>
	<div class="flogo">
		<img src="img/bgn.jpg" alt="logo">
	</div>
	<div class="fotord">
	    <a href="index.php">Home</a><br>
		<a href="about.php">About</a><br>
		<a href="course.php">Course</a><br>
		<a href="contact.php">Contact</a>
		</div>
	<div class="fot-heading ">
<h2>NPR Arts And Science College</h2><br>
<center><p>npracollegeact@gmail.com</p></center><br>
<div class="fotcon">
<img src="img/wp1.WEBP" alt="whatsapp" width="40px" height="40px">
<img src="img/em.WEBP" alt="em" width="40px" height="40px">
<img src="img/dail.WEBP" alt="em" width="40px" height="40px">
</div></div>
	</nav></div>
</footer>
</body>
</html>