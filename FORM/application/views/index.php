<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>My First Form</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url();?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>css/main.css" rel="stylesheet" media="all">

    <script src="<?php echo base_url();?>jquery-3.4.0.min.js"></script>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Registration Form</h2>
    
                    <button class="btn btn--radius-2 btn--red" style="width:100" onclick="window.location.href='<?php echo base_url();?>Myfirstform/view/';" type="submit">ALL RECORDS</button>
                </div>
                <div class="card-body">
                    <form name="registration" method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" onchange="allLetter(document.registration.first_name)" value="<?php echo count($userData)==1?$userData[0]['first_name']:"";?>" name="first_name">
<!-- value tag is used when user presses edit button from table so to update value in db the condition is checked, ternary operator is used -->
                                            <label class="label--desc">First name must consist only alphabets.</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" onchange="allLetter(document.registration.last_name)" name="last_name" value="<?php echo count($userData)==1?$userData[0]['last_name']:"";?>">
                                            <label class="label--desc">last name must consist only alphabets.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo count($userData)==1?$userData[0]['company']:"";?>" name="company">
                                    <label class="label--desc">Company name.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" value="<?php echo count($userData)==1?$userData[0]['email']:"";?>" name="email">
                                    <label class="label--desc">Enter a valid email.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" pattern="[1-9]{1}[0-9]{9}" maxlength="10" onchange="phonenumber(document.registration.phone)" type="text" value="<?php echo count($userData)==1?$userData[0]['phone']:"";?>" name="phone">
                                            <label class="label--desc">Phone Number must be less than 10 digits.</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="city">
                                            <option disabled="disabled" selected="selected">Choose City</option>
                                            <option <?php echo count($userData)==1 ? ((strtolower($userData[0]['city']) == "mumbai")  ? "selected" : "") : "" ; ?>>Mumbai</option>
                                            <option <?php echo count($userData)==1 ? ((strtolower($userData[0]['city']) == "pune")  ? "selected" : "") : "" ; ?>>Pune</option>
                                            <option <?php echo count($userData)==1 ? ((strtolower($userData[0]['city']) == "delhi")  ? "selected" : "") : "" ; ?>>Delhi</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="name"><h3><b>State</b></h3></div>
                        <div class="checkbox">
                              <h4><label class="checkbox"><input type="checkbox" name="state[]" value="maharashtra" <?php echo count($userData)==1 ? ((in_array('maharashtra',explode(",",$userData[0]['state'])))? "checked" : "") : "" ; ?>>Maharashtra</label>
                              </h4>
                        </div>
                        <div class="checkbox">
                            <h4><label class="checkbox"><input type="checkbox" name="state[]" value="gujarat" <?php echo count($userData)==1 ? ((in_array('gujarat',explode(",",$userData[0]['state'])))? "checked" : "") : "" ; ?>>Gujarat</label></h4>
                        </div>
                        <div class="checkbox">
                            <h4><label class="checkbox"><input type="checkbox" name="state[]" value="karnataka" <?php echo count($userData)==1 ? ((in_array('karnataka',explode(",",$userData[0]['state'])))? "checked" : "") : "" ; ?>>Karnataka</label></h4>
                        </div>

                        <div class="form-row p-t-20">
                            <label class="label label--block">Gender?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Male
                                    <input type="radio" name="gender" value="male" <?php echo count($userData)==1 ? ((strtolower($userData[0]['gender']) == "male")? "checked" : "") : "" ; ?>>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Female
                                    <input type="radio" name="gender" value="female"  <?php echo count($userData)==1 ? ((strtolower($userData[0]['gender']) == "female")? "checked" : "") : "" ; ?>>
                                    <span class="checkmark"></span>
                                </label>    
                            </div>
                        </div>
                        <div>

                            <button class="btn btn--radius-2 btn--red" type="submit"><?php echo count($userData)==1?"Update":"Register";?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Jquery JS-->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url();?>vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url();?>vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url();?>vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script type="text/javascript">
        function allLetter(inputtxt)
        { 
            var letters = /^[A-Za-z]+$/;
            if(inputtxt.value.match(letters))
            {
                //alert('Your name have accepted : you can try another');
                return true;
            }
        else
        {
            alert('Please input alphabet characters only');
            return false;
        }
        }
        </script>

        <script type="text/javascript">
            function phonenumber(inputtxt)  
            {
                var phoneno = /^\d{10}$/;
                if((inputtxt.value.match(phoneno))
                {
                    return true;
                }
                else
                {
                    alert("message");
                    return false;
                }
            }
        </script>
       <!--  <p id="demo"></p>
        <script>
            function myFunction() 
            {
                var x = document.getElementById("phone").maxLength;
                document.getElementById("demo").innerHTML = x;
            }
        </script> -->

    <!-- <div class="container">
        <div class="row">
            <li class="disabled">
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
      <ul class="pagination">
        <li><a href="https://www.w3schools.com/bootstrap/bootstrap_pagination.asp">1</a></li>
        <li><a href="https://www.w3schools.com/bootstrap/bootstrap_pagination.asp">2</a></li>
        <li><a href="https://www.w3schools.com/bootstrap/bootstrap_pagination.asp">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
    </div> -->
</body>
</html>
<!-- end document-->



