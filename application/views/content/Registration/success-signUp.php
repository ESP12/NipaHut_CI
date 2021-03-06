<section class="transaction-image">
    <div class="welcome-nipa">
        <div class="centered-title no-border">
            <h1 class="headline">Sign Up For A Nipa Hut Account Today!</h1>
        </div>
    </div>
</section>

<section class="reservation-content">
    <div class="container">
            <h1 class="text-center">Registration Successful <?php echo $data['firstname']; ?>!</h1>
            <div class="row">
                <div class="col-md-3"></div><div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading summary-title">
                            <h3 class="panel-title available-rooms-title">Guest Information</h3>
                        </div>
                    </div>
                    <div class=" list-group">
                            <div class='alert alert-error span4'><?php echo validation_errors(); ?></div>

                        <a class="list-group-item">
                            <label>First Name</label>
                            <input name="register-firstname" type="text" value="<?php echo $data['firstname']; ?>" class="form-control" required>
                        </a>
                        <a class="list-group-item">
                            <label>Last Name</label>
                            <input name="register-lastname" type="text" value="<?php echo $data['lastname']; ?>" class="form-control" required>
                        </a>
                        <a class="list-group-item">
                            <label>Gender</label>
                            <input type="text" value="<?php echo $data['gender']; ?>" class="form-control">
                        </a>
                        <a class="list-group-item">
                            <label>Email Address</label>
                            <input name="register-emailaddress" value="<?php echo $data['email']; ?>" type="text" class="form-control" required>
                        </a>
                        <a class="list-group-item">
                            <label>Mobile Number</label>
                            <input name="register-mobilenumber" value="<?php echo $data['mobile']; ?>" type="text" class="form-control" required>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>