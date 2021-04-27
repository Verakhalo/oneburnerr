<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">	
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1935d064dd.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="mediaquery.css" />
    <title>Oneburner</title>
</head>
<body>

<section class="my-15 signin">
   <div class=py-5>
      <h2 class="text-center">Contact Us</h2> 
   </div>

   <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
         <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lastname" auto-complete="off" class="form-control"required>    
         </div>  
         <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" auto-complete="off" class="form-control"required>    
         </div>
		 <div class="form-group">
            <label>Work Email</label>
            <input type="email" name="email" auto-complete="off" class="form-control"required>    
         </div>
		 <div class="form-group">
		 <label>Phone Number</label>
		 	<div class="input-group mb-3">
			 	<div class="input-group-prepend">
        			<button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown">
          				<img src="images/flag1.png"style="width:30px">
        			</button>
        			<div class="dropdown-menu">
          				<a class="dropdown-item" href="#"></a>
          				<a class="dropdown-item" href="#"></a>
          				<a class="dropdown-item" href="#"></a>
        			</div>
      			</div>
      					<input type="text"name="phone" class="form-control" placeholder="+234"required>
    		</div>  
		 </div>
		 <div class="form-group">
		 	<label for="sel1">Product of Interest</label>
      		<select class="form-control" id="sel1" name="product">
			<option>Select an option</option>
			<option>HRM</option>
        	<option>Finance</option>
        	<option>Counselling</option>
        	<option>Meridian</option>
      		</select>
		 </div>
		 <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="compname" auto-complete="off" class="form-control"required>    
         </div>
		 <div class="form-group">
		 	<label for="sel1">Company Size</label>
      		<select class="form-control" id="sel1" name="compproduct">
			<option>Select an option</option>
			<option>10-30</option>
        	<option>30-50</option>
        	<option>50-80</option>
        	<option>Above 80</option>
      		</select>
		 </div>
		 <div class="form-group">
            <label>How can our experts help you?</label>
            <textarea auto-complete="off" class="form-control" name="help"> </textarea>   
         </div>  
         <button type="submit" class="btn button"style="width:100%">Contact Us</a>
      </form>
   </div>
</section>     
<script src="main.js" > </script>
</body>

</html>