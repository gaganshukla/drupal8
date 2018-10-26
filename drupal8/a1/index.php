<html>
<head>
	<title>Ajax -Load from server</title>

    <!--jquery integraion  -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>

	<script>
		$(document).ready(function() {
			$("#btn").click(function(){
				// this will run and load data from data.txt
				//$("#test").load("data.txt");

  // Now load func. take 3 argument , first the file name , second the method name and third the call back function


  				$("#test").load("data.txt", {
  					Name: "Gagan",
  			        Lastname: "shukla"
  			}, function(){
  				alert("Hello");
  			});

			});
			
		});
  /* above code data.txt is the file from data comes , Used random text name , lastname insted of POST/GET method and
  function alert is the callback fun. that run after execute
  the code and do something */

	</script>

</head>
<body>
   
   <div id="test">
   	  <p>This is the content </p>

   </div>

   <button id="btn">Click here</button>



</body>
</html>	
