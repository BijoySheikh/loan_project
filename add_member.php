<?php 
include ('img_upload.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link href="css/jquery-ui.min.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/datatables.min.css"/>
    <!-- Theme CSS - Includes Bootstrap -->
    <style>
      form{
        height: 100%;
      }
      .header-top-bg{
        background: #004d66;
      }
      body{
        font-family: 'SolaimanLipi', sans-serif !important;
        padding:0;
        margin:0;
        background: #555  ;
        height:100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
            <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">
              <span>
                <i class="fa fa-tachometer-alt">
                </i>
              </span> বর্তমান সদস্য
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য
                </a>
                <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য
                </a>
                <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন
                </a>
                <li class="nav-item dropdown">
                  <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    সদস্য
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="running_member.php">বর্তমান সদস্য
                    </a>
                    <a class="dropdown-item" href="#">পরিশোধকৃত সদস্য
                    </a>
                    <div class="dropdown-divider">
                    </div>
                    <a class="dropdown-item" href="#">সদস্য
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য ফরম
    </h2>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
              </div>
              <div class="col-md-8 ">
                <div class="user-form mt-3">
                  <form action="insert.php" method="POST" enctype="multipart/form-data" autocomplete="off" onsubmit="return check_blank()">
                    <div class="row justify-content-center" >
                      <div class="col-md-6" >
                        <input class="mt-3" id="m_name"  type="text" ng-model="name" name="m_name"  placeholder="নাম*">
                        <br>
                        <input class="mt-3" id="f_name"  type="text" name="f_name" placeholder="পিতার নাম">
                        <br>
                        <input class="mt-3"  type="text" ng-model="phone_no" id="phone_no" name="phone_no"  placeholder="ফোন নাম্বার*">
                        <br>
                        <input class="mt-3" type="text"  name="refer_name" placeholder="জামিনদারের নাম">
                        <br>
                        <input class="mt-3" type="text"  name="present_addr"  placeholder="বর্তমান ঠিকানা">
                        <br>
                        <input class="mt-3" type="text"  name="permanent_addr"  placeholder="স্থায়ী ঠিকানা">
                        <br>
                        <input type="hidden" name="size" value="1000000">  
                        <input type="file" name="image">
                      </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <input class="mt-3" type="number" name="loan_sirial"  placeholder="ঋণ নং">
                        <br>
                        <input class="mt-3" name="loan_date" type="text" id="datepicker" placeholder="তারিখ*" min="2010-01-01" value="">
                        <input class="mt-3" id="loan_amount" type="number" ng-model="loan_amount" name="loan_amount"  placeholder="ঋণের পরিমাণ*">
                        <br>
                        <input class="mt-3" id="profit_amount" type="number" ng-model="profit" name="profit_amount"  placeholder="মুনাফার পরিমাণ*">
                        <br>
                        <input class="mt-3" type="number" name="total_amount"  placeholder="মোট টাকা" value="">
                        <br>
                        <input class="mt-3" type="number" name="premier_amount" ng-model="premier"  placeholder="কিস্তির পরিমাণ">
                        <br>
                        <input class="mt-3" type="number" name="savings_amount"  placeholder="সঞ্চয়ের পরিমাণ">
                        <br>
                      </div>   
                    </div>
                    <button  type="submit" name="img_upload"   class="btn btn-info mt-5 text-white btn-block" >
                      <i class="fas fa-user-plus">
                      </i>  নিবন্ধন করুন
                    </button>       
                  </form> 
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                  crossorigin="anonymous">
          </script>
          <script type="text/javascript" src="js/main.js">
          </script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                  crossorigin="anonymous">
          </script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js">
          </script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
          </script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8">
          </script> 
          <script src="https://cdn.jsdelivr.net/npm/promise-polyfill">
          </script>
          <script src="js/angular.js">
          </script>
          <script src="js/jquery-ui.min.js">
          </script>
          <script src="js/sweetalert2.all.min.js" >
          </script>
          </body>
        </html> 
      <script  >
        function check_blank() {
          var name =document.getElementById('m_name').value;
          var phone =document.getElementById('phone_no').value;
          var date =document.getElementById('datepicker').value;
          var loan_amount =document.getElementById('loan_amount').value;
          var profit_amount =document.getElementById('profit_amount').value;
          if(name == "", phone == "", date == "", loan_amount == '', profit_amount == '' ){
            Swal.fire({
              title: '<strong>গুরুত্বপূর্ণ ঘরগুলো পূরন করুন</strong>',
              type: 'info',
              html:
              '<b>নাম, মোবাইল নাম্বার, তারিখ, ঋণের পরিমাণ ইত্যাদি পরবর্তীতে প্রয়োজন হতে পারে</b>' 
              ,
              showCloseButton: true,
              focusConfirm: true,
              confirmButtonText:
              ' OK ',
              confirmButtonAriaLabel: 'Thumbs up, great!',
            }
                     )
            return false;
          }
          else{
            Swal.fire(
              'তথ্য নিবন্ধিত হয়েছে',
              'Ok!',
              'success'
            );
          }
        }
      </script>
