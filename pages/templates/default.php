<!DOCTYPE html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>  

  <body>
    
    <title>SchoolAdvisor</title>

    <nav class="navbar navbar-default">
     <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="SchoolAdvisor" src="...">
            </a>
          </div>       
         <ul style="margin-left: 10%;">
            <a href="index.php?page=home"><button type="button" class="btn btn-default navbar-btn">Home</button></a>
            <a href="index.php?page=home"><button type="button" class="btn btn-default navbar-btn">Button</button></a>
            <a href="index.php?page=home"><button type="button" class="btn btn-default navbar-btn">Button</button></a>
            <a href="index.php?page=home"><button type="button" class="btn btn-default navbar-btn">Button</button></a>  
            <input type="text" style="width: 30%; margin-left: 5%;" placeholder="Search">
            <button type="submit" class="btn btn-default">Submit</button>
            <a href="index.php?page=search"><button style="margin-left: 5%;" type="button" class="btn btn-default navbar-btn">Button</button></a>
            <a href="index.php?page=search"><button type="button" class="btn btn-default navbar-btn">Button</button></a>
            <a href="index.php?page=home"><button type="button" class="btn btn-default navbar-btn">Button</button></a>
            <a href="index.php?page=search"><button type="button" class="btn btn-default navbar-btn">Search</button></a>
          </div>
      </div>
    </nav>


    <h1 style="margin-left: 43%;">Default</h1>

    <div>
      
       <?= $content ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>