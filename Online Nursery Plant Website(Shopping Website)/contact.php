<!Doctype html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="regist.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="header">
    <div class="container">

      <div class="navbar">
         <div class="logo">
            <img src="images\go.jpg" width="140" height="150">
         </div>
     <nav>
       <ul id="MenuItems">
           <li><a href="home.html">Account</a></li> 
          <li><a href="index.html">Home</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          
       </ul>
      </nav>
     <img src="images\cart.jpg" width="75px" height="60px">
      <img src="images\menu.jpg" class="menu-icon" onclick="menutoggle()">

     </div>
  </div>
</div>
  
   



<script>
             var MenuItems = document.getElementById("MenuItems");
             
            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                  {
                     MenuItems.style.maxHeight = "300px";
                   }
                 else
                    {
                        MenuItems.style.maxHeight = "0px";
                    }
             }


         </script>  
    



    <title>Contact us form using php mysql</title>


<body>
    <div class="container">
        <h3>Request Quote or Submit feedback</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
</body>
</html>
