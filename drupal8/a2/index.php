<?php
 include 'dbh.php';
?>
<html>
<head>
	<title>Ajax -Load from database</title>

    <!--jquery integraion  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<script>


        $(document).ready(function(){
  // var commentCount used to count the 2 comment already comes from database        
           var commentCount = 2;
          $("button").click(function(){
            // increment the comment by 2 after click on button
              commentCount = commentCount + 2;
            $("#comments").load("load-comments.php",{
                commentNewCount: commentCount
            });
          });
        }); 

	</script>

</head>
<body>
   
   <div id="comments">
   	 <?php
        $sql = "SELECT * FROM comments LIMIT 2";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<p>";
                echo $row['author'];
                echo "<br>";
                echo $row['message'];
                echo "</p>";
            }
        }else{
          echo "There are no comments!";
        }
     ?>

   </div>

   <button>Show more comments</button>



</body>
</html>	
