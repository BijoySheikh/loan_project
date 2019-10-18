
<?php 

include "sql_config.php";

$id = $_GET['id'];

              
$sql = "SELECT * FROM all_member_form_data WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
        <title>Sidebar template</title>
    

        


        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
            <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">

        
    
        
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

        
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        
        
        <link href="css/style.css" rel="stylesheet">   
        <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">


        

    <style>
        .header-top-bg{
        background: #004d66;
    }
    body{
        
    font-family: 'SolaimanLipi', sans-serif !important;
        padding:0;
        margin:0;
    } 
    </style>

    </head>


<body>

        <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য</h2>





<div class="container">
    

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">

            <a href="running_member.php" class="btn btn-sm btn-secondary ml-2"><span><i class="fa fa-tachometer-alt"></i></span> বর্তমান সদস্য</a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
            <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন</a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন</a>
            <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন</a>
                
            </ul>
            </div>
        </nav>

</div>

 
 


 
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">

            <?php  
                echo "<div id='img_div'>";
                echo "<img alt='image of ". $row["m_name"] ." '  class='img-thumbnail rounded' src='images/".$row['image']."' >";
                echo "</div>";
             
            ?>

          <!-- <img  alt="image of  ?>"> -->
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-3">নাম: <span class="text-danger"><?php echo $row["m_name"]; ?></span></h3>
                <p>সদস্য আই.ডি :  <?php echo $row["id"]; ?> </p>
                <p>পিতার নাম: <?php echo $row["f_name"]; ?> </p>
                <p>মোবাইল নং: <?php echo $row["phone_no"]; ?></p>
                </div>
                <div class="col-sm-6">
                <h5>ঋণের পরিমাণ: <?php echo $row["loan_amount"]; ?> /- </h5> 
                <p>মূনাফার পরিমাণ: <?php echo $row["profit_amount"]; ?> /- </p> 
                <hr>
                <p>মোট:  <?php echo $row["total_amount"]; ?> /- </p> 
                
                 
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>


    
<?php 

  }
} else {
  echo "0 results";
}


?>





<div class="container">  
              <div class="table-responsive" ng-app="liveApp" ng-controller="liveController" ng-init="fetchData()">      
                <form name="testform" ng-submit="insertData()">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th width="20%">তারিখ</th>
                                <th width="20%">জমা</th>
                                <th width="20%">test</th>
                                <th width="20%">test</th>
                                <th width="10%">test</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" ng-model="addData.first_name" class="form-control" placeholder="Enter First Name" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.last_name" class="form-control" placeholder="Enter Last Name" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><input type="text" ng-model="addData.test" class="form-control" placeholder="test" ng-required="true" /></td>
                                <td><button type="submit" style="font-size: 20px;" class="btn btn-success btn-sm pl-4 pr-4" ng-disabled="testform.$invalid"><i class="fas fa-plus"></i></button></td>
                            </tr>
                            <tr ng-repeat="data in namesData" ng-include="getTemplate(data)">
                            </tr>
                            
                        </tbody>
                    </table>
                </form>
                <script type="text/ng-template" id="display">
                    <td>{{data.first_name}}</td>
                    <td>{{data.last_name}}</td>
                    <td>{{data.test}}</td>
                    <td>{{data.test}}</td>
                    <td>{{data.test}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" ng-click="showEdit(data)"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm delete_row" ng-click="deleteData(data.id)"><i class="fas fa-trash-alt"></i></i></button>
                    </td>
                </script>
                <script type="text/ng-template" id="edit">
                    <td><input type="text" ng-model="formData.first_name" class="form-control"  /></td>
                    <td><input type="text" ng-model="formData.last_name" class="form-control" /></td>
                    <td><input type="text" ng-model="formData.test" class="form-control" /></td>
                    <td><input type="text" ng-model="formData.test" class="form-control" /></td>
                    <td><input type="text" ng-model="formData.test" class="form-control" /></td>
                    <td>
                        <input type="hidden" ng-model="formData.data.id" />
                        <button type="button" class="btn btn-info btn-sm" ng-click="editData()"><i class="fas fa-check"></i></button>
                        <button type="button" class="btn btn-default btn-sm" ng-click="reset()"><i class="fas fa-times"></i></button>
                    </td>
                </script>         
   </div>  
  </div>
 
    
       
       <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    

   


     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/main.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/sweetalert2.all.min.js" ></script>

   

    
</body>

</html> 



<script>
var app = angular.module('liveApp', []);

app.controller('liveController', function($scope, $http){

    $scope.formData = {};
    $scope.addData = {};
    $scope.success = false;

    $scope.getTemplate = function(data){
        if (data.id === $scope.formData.id)
        {
            return 'edit';
        }
        else
        {
            return 'display';
        }
    };

    $scope.fetchData = function(){
        $http.get('select.php').success(function(data){
            $scope.namesData = data;
        });
    };

    $scope.insertData = function(){
        $http({
            method:"POST",
            url:"member_data_insert.php",
            data:$scope.addData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.addData = {};
        });
    };

    $scope.showEdit = function(data) {
        $scope.formData = angular.copy(data);
    };

    $scope.editData = function(){
        $http({
            method:"POST",
            url:"edit.php",
            data:$scope.formData,
        }).success(function(data){
            $scope.success = true;
            $scope.successMessage = data.message;
            $scope.fetchData();
            $scope.formData = {};
        });
    };

    $scope.reset = function(){
        $scope.formData = {};
    };

    $scope.closeMsg = function(){
        $scope.success = false;
    };

    $scope.deleteData = function(id){
        if(confirm("Are you sure you want to remove it?"))
        {
            $http({
                method:"POST",
                url:"delete.php",
                data:{'id':id}
            }).success(function(data){
                $scope.success = true;
                $scope.successMessage = data.message;
                $scope.fetchData();
            }); 
        }
    };

});

</script>









<script>
$('.delete_row').click(function(){
  
  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
  
});
</script>
