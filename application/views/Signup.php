<?php echo form_open('Signup_con/register_customer'); ?>	

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName" name="First_Name" required="">First name</label>
                <input required="" name="First_Name" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input required="" name="Last_Name" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
		  </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Username</label>
                <input required="" name="Username" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter Username">
              </div>
            </div>
		  </div>
		
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required="" name="Email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input required="" name="Password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input required="" class="form-control" id="exampleConfirmPassword" name="repeat_password" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="submit_account" value="Submit Application">
		
        </form>
       <div class="text-center">
          <h4><a class="d-block small mt-3"  href="<?php echo base_url(); ?>home_con/home">Return to Homepage</a></h4>
		  
        </div>
      </div>
    </div>
  </div>
