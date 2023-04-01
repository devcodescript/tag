<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Journey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/owl.carousel.min.css" rel="stylesheet">
  <link href="css/owl.theme.default.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/media.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid p-0">
  <div class="row m-0">
    <div class="col-lg-5 p-0">
      <div class="left-area">
        <div class="left-inner-cnt">
        	<div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
            <div class="left-part-hd">
            	<h1>Did you find, something? <br>
 <span>Scan the QR</span> to reach its owner!</h1>
            </div>
          <div class="owl-carousel owl-theme">
            <div class="item"> <div class="card-img"><img src="images/card-img.png"></div>  <div class="card-desc">When your belonging is misplaced or lost, enable good samaritans to reach out to you instantly when they find it, without them knowing your identity. 
</div></div>
            <div class="item"> <div class="card-img"><img src="images/card-img.png"></div>  <div class="card-desc">When your belonging is misplaced or lost, enable good samaritans to reach out to you instantly when they find it, without them knowing your identity. 
</div></div>
            <div class="item"> <div class="card-img"><img src="images/card-img.png"></div>  <div class="card-desc">When your belonging is misplaced or lost, enable good samaritans to reach out to you instantly when they find it, without them knowing your identity. 
            </div></div>
            <div class="item"> <div class="card-img"><img src="images/card-img.png"></div>  <div class="card-desc">When your belonging is misplaced or lost, enable good samaritans to reach out to you instantly when they find it, without them knowing your identity. 
            </div></div>
            <div class="item"> <div class="card-img"><img src="images/card-img.png"></div>  <div class="card-desc">When your belonging is misplaced or lost, enable good samaritans to reach out to you instantly when they find it, without them knowing your identity. 
            </div></div>
          </div>
         
        </div>
      </div>
    </div>
    <div class="col-lg-7 p-0 relative">
      <div class="right-area">
        <div class="right-inner-cnt">
        	<form class="form-horizontal" method='post' action="/z2/update_info_action.php">
            <div class="screen4">
            	<h2 class="cmn-hd1"><span>Welcome  USER NAME / MBL NO. !!</span> <br>
						Provide your details please</h2> 
                 
                 <div class="details-form-cnt">
                	 
                    <div class="row">
                    	<div class="col-md-6"><label class="form-label" for="name">Name:</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required></div></div>
                        <div class="col-md-6"><label class="form-label" for="mobile_no">Your Mobile No:*</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="mobile_no" placeholder="Enter mobile no" name="mobile_no" required></div></div>
                        
                        <div class="col-md-6"><label class="form-label" for="email">Email:*</label>
                        <div class="formarea-control"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></div></div>
                        <div class="col-md-6"><label class="form-label" for="country">Country:*</label>
                        <div class="formarea-control"><select  class="form-control" id="country" name="country" required>
          <option value="India">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select></div></div>
                        
                        <div class="col-md-6"><label class="form-label" for="state">State:*</label>
                        <div class="formarea-control"><select  class="form-control" id="state" name="state" required>
          <option value="delhi">Delhi</option>
          <option value="haryana">Haryana</option>
          <option value="rajasthan">Rajasthan</option>
          <option value="up">UP</option>
        </select></div></div>
                        <div class="col-md-6"><label class="form-label" for="city">City & Pin Code:</label>
                        <div class="formarea-control"><div class="cityname"><input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required></div><div class="pincode"><input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode" required></div></div></div>
                        
                           <div class="col-md-6"><label class="form-label" for="address1">Address1:</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="address1" placeholder="Enter address1" name="address1" required></div></div>
                        <div class="col-md-6"><label class="form-label" for="address2">Address2:</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="address2" placeholder="Enter address2" name="address2"></div></div>
                         
                         <div class="col-lg-12">
                         <h3 class="cmn-hd">Update your Travel:</h3>
                         </div>
                       
                           <div class="col-md-6"><label class="form-label" for="travelfrom">Traveling From:*</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="travelfrom" placeholder="Enter Traveling From" name="travelfrom"></div></div>
                        <div class="col-md-6"><label class="form-label" for="travelto">Traveling To:*</label>
                        <div class="formarea-control"><input type="text" class="form-control" id="travelto" placeholder="Enter Traveling To" name="travelto"></div></div>
                        
                        <div class="col-lg-12">
                        	<div class="form-btn text-center m-2"><input type="reset" class="btn-gray" value="RESET"> <input type="submit" class="btn-green" value="Update"></div>
                        </div>
                    </div>
                    
                   
                </div>
           </div>
           </form>
        </div>
      </div>
      <div class="copyright">NSU Copyright &copy; 2023</div>
    </div>
  </div>
</div>
<script src="js/jquery-3.6.3.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
