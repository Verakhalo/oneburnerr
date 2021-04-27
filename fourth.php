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

<section class="my-30 signin">
  <div style="padding-top:10%">
      <h2 class="text-center">Sign In</h2> 
  </div>
  <div class="w-50 m-auto">
      <form action="validation.php" method="post">
         <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" auto-complete="off" class="form-control"required>    
         </div>  
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" auto-complete="off" class="form-control"required>    
         </div>  
         <button type="submit" class="btn button">Login</button>
         <p><a href="forget_pass.php">Forgot password</a></p>
         <p>Don't have an account?<a href="fifth.php">Signup</a>    </p>
      </form>
  </div>
</section>     
<script src="main.js" > </script>
</body>
</html>