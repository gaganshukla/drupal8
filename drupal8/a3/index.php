<?php
 
?>
<html>
<head>
	<title>Ajax - using get and post method</title>

    <!--jquery integraion  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<script>
    $(document).ready(function(){

     /* // get method
        $("button").click(function(){
            $.get("text.txt", function(data , status){
                $("#test").html(data);
                alert(status);
            });
        }); */

        $("input").keyup(function(){
            var name = $("input").val();
            $.post("suggestions.php", {
               suggestion: name
            }, function(data, status){
               $("#test").html(data);
            });
        });


    });


	</script>

</head>
<body>
    <input type="text" name="name">
    <button>click here</button>
    <p id="test"></p>
   


</body>
</html>	
