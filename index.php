<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Is Marijn vandaag Jarig?</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<header></header>
<main>
    
   <nav class="orange lighten-3 " role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Marijn</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#"></a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center deep-orange-text ">Is Marijn vandaag jarig?</h1>
      <div class="row center">
        <h5 class="header col s12 light">
            
            <script>
            var d = new Date();
            var n = d.getDate();

            var z = new Date();
            var x = z.getMonth();


            console.log(n+""+x);

            if (n == 7 && x == 2)
            {
                document.write("Ja.");
            }
            else
            {
                document.write("Nee.");
            };
        </script>
            
        </h5>
      </div>
      
      <br><br>

    </div>
  </div> 
</main>
 
  


  <div class="container">
  </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer orange darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"></h5>
          <p class="grey-text text-lighten-4">Dit domein is te koop.</p>


        </div>
        
        
      </div>
    </div>
    
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
