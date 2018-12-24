<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- ========== Favicon ============== -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon_template.png"/>
    <!-- ========== Fonts ============== -->
    <link rel="stylesheet" href="" >
    <!-- ========== CSS ============== -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/estils.css">
    <!-- ========== Icons ============== -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ========== JavaScript ============== -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <title>Support</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>

    <!-- ========== Start of Content ============== -->
    <div class="container faq row">
      <div class="col l2 white faq1">
        <ul class="collapsible expandable">
         <li>
           <div class="collapsible-header">First</div>
           <div class="collapsible-body">
              <ul>
                <li><a id="1" href="#">Hola</a></li>
                <li><a id="2" href="#">Hola2</a></li>
                <li><a id="3" href="#">Hola3</a></li>
              </ul>
           </div>
         </li>
         <li>
           <div class="collapsible-header">Second</div>
           <div class="collapsible-body">
              <ul>
                <li><a id="4" href="#">Hola</a></li>
                <li><a id="5" href="#">Hola2</a></li>
                <li><a id="6" href="#">Hola3</a></li>
              </ul>
           </div>
         </li>
         <li>
           <div class="collapsible-header">Third</div>
           <div class="collapsible-body">
              <ul>
                <li><a id="7" href="#">Hola</a></li>
                <li><a id="8" href="#">Hola2</a></li>
                <li><a id="9" href="#">Hola3</a></li>
              </ul>
           </div>
         </li>
       </ul>
      </div>
      <div id="faqcontent" class="col l8 card-panel faqcontent">

      </div>
    </div>
    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
