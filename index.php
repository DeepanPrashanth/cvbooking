<!DOCTYPE html>
<html lang="en">
<head>
  <title>CV Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style='color:white;' href="#">Commercial Vehicle Booking</a>
    </div>
    <ul class="nav navbar-nav">
      <!--<li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="index.php">Home</a></li>
      <li><a href="offerservice.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Offer Service</a></li>
      <li><a href="takeservice.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Take Service</a></li>
    </ul>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
<div class="row">
  <center><h3><b>Welcome! to Commercial Vehicle Booking Site</b></h3></center>
 

  
  </div>
  </div>


<div class="row">
<div ng-app="myApp" ng-controller="myCtrl">
 <div class="col-sm-3">
 <div class="container">

  <p><b>SERVICES</b></p>
  <ul class="list-group" style="width:300px;">
   <li class="list-group-item list-group-item-info" ng-repeat="x in records"><span class="glyphicon glyphicon-star"><b>{{" "+x}}</b></span>
   </li>
 
   <div class="alert alert-danger">
  


   <h4><span class="glyphicon glyphicon-warning-sign"><b>{{" "+alert1}}<b></span></h4><br>
    <strong>{{" "+alert2}}</strong><br>
   <strong>{{" "+alert3}}</strong><br>
   <strong>{{" "+alert4}}</strong><br>
  </div>
    </ul>
 
    
</div>
</div>


  <div class="col-sm-5">

<p><b>{{line | uppercase}}</b></p>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $timeout)  {
  $scope.heading = "Welcome! to Commercial Vehicle Booking Site";
  $scope.line = "Book Your required Light Commercial vehicle";
  
  
  $scope.records = [
        "Instant Vehicle booking",
        "Trusted Vehicles",
        "Standard fare",
    ];
	 $scope.alert1="ALERT !";
	$timeout(function () {
      $scope.alert1 = "Important Notification! ";
	  $scope.alert2 = "The vehicle is booked and goods are delivered at your own risk !";
	  $scope.alert3 = "The site connects vehicle and service provider only !";
	  $scope.alert4 = "The vehicle driver must ensure the location and confirm the freight before availing the service !";
  }, 2000);
	
	


});

</script>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="tataace.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="dost.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="bolero.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
 </div>

 <div class="col-sm-4 text-left">
 <p><b>FOR ANY QUERIES REACH US IN</b></p>
 <ul class="list-group" style="width:350px;">
   <li class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-envelope"><b>&nbsp;cvbooking@gmail.com</b></span>
   </li>
   </ul> 
   <ul class="list-group" style="width:350px;">
   <li class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-phone"><b>&nbsp;91 9442804185</b></span>
   </li>
   </ul>
 </div>
</div>
</body>
</html>
