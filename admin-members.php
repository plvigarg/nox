<?php
    session_start();
if(!isset($_SESSION["name"]))
{
//    session_start();
//    echo $_SESSION["name"];
    header("location:admin-login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
           <link rel="icon" href="pcs/favicon.ico">

    <link rel="stylesheet" href="style/bootstrap.css">
    <script src="JS/jquery-1.8.2.min.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/angular.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script>
        var module=angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http){
            
            $scope.view = function()
            {
//                alert();
                 $scope.jsonAry;

                $http.get("admin-members-fetch.php").then(fine, notfine);

                function fine(response) {
                    $scope.jsonAry = response.data;
                      // alert();
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }
            
            $scope.dodelete = function(uid) {
                if (confirm("are you sure?") == true) {
                    $http.get("angular-delete-request.php?uid=" + uid).then(fine, notfine);

                    function fine(response) {
                       // alert(JSON.stringify(response.data));
                        $scope.view();
                    }

                    function notfine(response) {
                        alert(JSON.stringify(response));
                    }
                }
            }
            
            $scope.doaccept =function(email){
                if(confirm("are you sure?")==true){
                    
                    $http.get("angular-accept-request.php?email="+email).then(fine, notfine);
                    function fine(response){
//                        alert("");
                        $scope.view();
                      
                    }
                    function notfine(response){
                     alert(JSON.stringify(response));

                    }
                    
                }
            }
        });
    </script>
    <style>
    #load {
            background: url(pcs/829.gif) center;
            z-index: 10;
            width: 100%;
            height: 100vh;
            margin-left: ;
/*            margin-top: 300px;*/
/*            display: none;*/
            position: fixed;
            background-color: black;
            background-repeat: no-repeat;
            
        
        }
    </style>
</head>
<body ng-app="mymodule" ng-controller="mycontroller" ng-init="view();" onload="myload();">
  <div id="load"></div>
   <br>
   <div class="row">
       <div class="col-md-2 offset-10">
               <a href="admin.php" class="btn btn-danger" id="btn">Home</a>

       </div>
   </div>
     <center>
        <br>
        <h2>Member Requests</h2>
    </center>
    <br>
    <div class="container">
       <div>Search: <input type="text" ng-model="google"></div>
       <br>
        <table class="table table-striped text-center">
            <tr>
                <th>User-Name</th>
                <th>Email ID</th>
                <th>Accept</th>
                <th>Remove</th>
                <th>Status</th>
            </tr>
            <tr ng-repeat="oneObj in jsonAry| filter:google">
                <td>{{oneObj.name}}</td>
                <td>{{oneObj.email}}</td>
              
                <td><div class="btn btn-danger" id="accept" ng-click="doaccept(oneObj.email);">Accept</div></td>
                <td><div class="btn btn-danger" ng-click="dodelete(oneObj.email);">Delete</div></td>
                <td>{{oneObj.status}}</td>
            </tr>
        </table>
    </div>
    <script>
     var preloader =document.getElementById("load");
        function myload()
        {
            preloader.style.display='none';
        }
                        
    </script>

</body>
</html>