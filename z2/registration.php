<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Want Register new Tag !!  Provide your details please:</h2>
  <form class="form-horizontal" method='post' action="/z/register_action.php">
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:*</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mobile_no">Mobile No:*</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mobile_no" placeholder="Enter mobile no" name="mobile_no" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:*</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="country">Country:*</label>
      <div class="col-sm-10">
        <select  class="form-control" id="country" name="country" required>
          <option value="India">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="country">State:*</label>
      <div class="col-sm-10">
        <select  class="form-control" id="state" name="state" required>
          <option value="delhi">Delhi</option>
          <option value="haryana">Haryana</option>
          <option value="rajasthan">Rajasthan</option>
          <option value="up">UP</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City:*</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address1">Address1:*</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address1" placeholder="Enter address1" name="address1" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="address2">Address2:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address2" placeholder="Enter address2" name="address2">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pincode">Pincode:*</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pincode" placeholder="Enter pincode" name="pincode" required>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-success">Register</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
