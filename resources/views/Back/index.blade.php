<!DOCTYPE html>


<html lang="en">
<head>
   @include("Back/partials/head");



</head>
<body class="hold-transition skin-blue sidebar-mini">
  
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
 @include("Back/partials/header")
  </header>
  <!-- Left side column. contains the logo and sidebar -->

 @include("Back/partials/sidebar")

  
 @yield("content") 
  @include("Back/partials/footer")
</div>
<!-- ./wrapper --> 

   @include("Back/partials/js")
</body>
</html>
