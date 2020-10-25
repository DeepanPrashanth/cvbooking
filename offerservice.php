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
		<li><a href="index.php">Home</a></li>
      <li class="active"><a href="offerservice.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Offer Service</a></li>
      <li><a href="takeservice.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Take Service</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
<div class="row">
  <center><h3><b>Fill the details to book a vehicle<b></h3></center>
 

  
  </div>
  </div>


<div class="row">
<div ng-app="myApp" ng-controller="myCtrl">
 <div class="col-sm-2">
 <div class="container">

 <button type="button" class="btn btn-info" ng-click="myFunc()">Freight Calculator</button>
 <button type="button" class="btn btn-info" ng-click="cash()">Payment by Cash</button>  
 <button type="button" class="btn btn-info" ng-click="card()">Payment by Card</button>
   <div ng-show="showMe">
  <ul class="list-group" style="width:300px;">
<br>
  <div class="form-group">
    <label for="kilometer">Enter approximate km:</label>
    <input type="number" ng-model="km" ng-change="myFunc1()" class="form-control" min="1" id="km">
<br>
 <div ng-show="showMe1">
    <div class="alert alert-danger">
  <b>{{" Freight: "+km*10}}</b></div>
  <p>{{"Payment amount :"}} {{mode1}}</p>
  </div>
  </div>
   
   
    </ul>
     </div>




 
 
 
    
</div>
</div>


  <div class="col-sm-4">



<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $timeout)  {

  
 
	 $scope.showMe = false;
	 $scope.showMe1 = false;
	
	
    $scope.myFunc = function() {

        $scope.showMe = !$scope.showMe;
	
		
    }
	$scope.myFunc1 = function() {
		
      if($scope.km>0)
		$scope.showMe1 =true;
	else
		$scope.showMe1 =false;

	
		
    }
	$scope.mode = ' select payment type ';
    $scope.cash = function() {
        $scope.mode = 0;
		$scope.mode1 =$scope.mode+$scope.km*10
    };
    $scope.card = function() {
        $scope.mode = 20;
		$scope.mode1 =$scope.mode+$scope.km*10

    };


});
</script>


 </div>
  <div class="col-sm-2 text-left">
  
  
 </div>
 </div>

 <div class="col-sm-2 text-left">
 </div>
</div>

</body>
</html>
