
<!DOCTYPE html>  
<html>  
<head>  
<title>  
FINAL  
</title> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> 

<style> 

body{  
font-family: Calibri, Helvetica, sans-serif;  
background: url(http://localhost/surveyform/work1.jpg); 
background-size: cover;   
opacity: 0.8;      
background-attachment: fixed; 
}  
.container {  
padding: 50px;  
background-color: darkblue;
max-width: 650px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);  
}  
  
input[type=text] {  
  width: 92%;  
  padding: 15px;  
margin: 5px 0 22px 0;  
display: inline-block;  
 border: none;  
 background: #f1f1f1;  
  
}  
input[type=text]:focus {  
background-color: orange;  
outline: none;  
}  
 div {  
         padding: 10px 0;  
              
}  

input[type=number] {  
  width: 92%;  
  padding: 15px;  
margin: 5px 0 22px 0;  
display: inline-block;  
 border: none;  
 background: #f1f1f1;  
}  
input[type=number]:focus {  
background-color: orange;  
outline: none;  
}  
 div {  
         padding: 10px 0;  
              
} 
 
.btn {  
  background-color:bisque;  
  color:black;  
  padding: 16px 10px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.8;  
  font-size: x-large;
}  
.btn:hover {  
opacity: 5;  
}  
</style>  
</head>  
<body>  
<div class="container">  
<center><h1 class = "animated infinite bounce "><font color="white" font face="italic" size=6" >STUDENT  SURVEY<br>FORM</h1></font></center>
<form action="forminsert.php" method="post"> 
<font color ="white"> 
<h3><b>NAME:</b><br>
<input type="text" name="name" placeholder= "Student name" size="15" required />   
 <div>
AGE:<br>   
<input type="number" name="age" placeholder="age" size="62"required />   
<div>  
GENDER :<br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other
</div>

<div>
Email:<br>
<input type="text" name="myemail" placeholder= "Your email" >
<div>
<label>   
PHONE : <br>
<input type="text" name="phone" placeholder="Your contact no." size="10" required>   
<div> 
ADDRESS :<br>
<input type="text" name="address" placeholder="Your address" size="10" required>   
</div> 

<div>
 Select your field of interest:<br>
 <select name ="role">
 <option value ="Indian history">Indian history</option>
 <option value ="Science and Technology">Science and Technology</option>
 <option value ="Photography">Photography</option>
 <option value ="Political Science">Political Science</option>
 <option value ="Information Technology">Information Technology</option>
 <option value ="Other">Other</option>
 </select></div>

<div>
Which extracurricular activities would you prefer ?


<!-- Input Type Checkbox -->
			<label for="inp-1">
				<br><br><input type="checkbox"
					name="inp">Culture Clubs</input></label><br>
			<label for="inp-2">
				<input type="checkbox"
					name="inp">The Debate Team</input></label><br>
			<label for="inp-3">
				<input type="checkbox"
					name="inp">Acedemic Teams and Clubs</input></label><br>
			<label for="inp-4">
				<input type="checkbox"
					name="inp">Volenteer Work and Community Service</input></label><br>
			<label for="inp-5">
				<input type="checkbox"
					name="inp">Athletics</input></label><br>
			<label for="inp-6">
				<input type="checkbox"
					name="inp">The Student Newspaper</input></label><br>
			<label for="inp-7">
				<input type="checkbox"
					name="inp">Political Activism</input></label><br>
			<label for="inp-7">
				<input type="checkbox"
					name="inp">Creative persuits</input></label><br>
			
		</div>

<button type="submit" name ="save" class="btn">S U B M I T</button>    
</form>   
</body>  
</html>


