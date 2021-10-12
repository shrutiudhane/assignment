<html>
<head>
 <title>Assinment</title>
</head>
  <body style="background-color:lightblue">
	<center>
		<!---This is form size,color and where to redirect page-->
		<form style="background-color:#999999;width:730px;height:800px"; action="animal list.php"> 
	
			<fieldset style=" width:700;height:800">
			<center><h1>Animal</h1></center>

			Name of the animal:<input type="text"name="name"value="Dog"><br><br>
	 
			<!--This is Category-->
			<lable>Category</lable><br>
			<input type="radio"name="category"value="hebivores">hebivores
			<input type="radio"name="category"value="omnivores">omnivores
			<input type="radio"name="category"value="carnivores">carnivores<br><br>
 
			<!--This is image-->
			<img src="/assignment/dog.jfif"><br><br>
 
			<!--This is descreption-->
			<lable><h3>description<h3></lable>
			<txtarea><h5>Today, some dogs are used as pets, others are used to help humans do their work.
			They are a popular pet because they are usually playful, friendly, loyal and listen to humans.
			Thirty million dogs in the United States are registered as pets.[5] Dogs eat both meat and vegetables,
			often mixed together and sold in stores as dog food. Dogs often have jobs, including as police dogs,
			army dogs, assistance dogs, fire dogs, messenger dogs, hunting dogs, herding dogs, or rescue dogs.
			They are sometimes called "canines" from the Latin word for dog - canis. Sometimes people also use
			"dog" to describe other canids, such as wolves. <h5></txtarea><br>
 
			<!--This in life expectancy-->
			<lable>Life expectancy</lable>
			<select>
			<option>0-1 year</option>
			<option>1-5 year</option>
			<option>5-10 year</option>
			<option>10+ years</option>
			</select><br><br>
 
			<!--This is submit button-->
			<input type=submit value="SUBMIT"/>
     
			</fileset>
		</form>
	</center>
</body>
</html>

