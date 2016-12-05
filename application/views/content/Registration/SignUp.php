<section class="transaction-image">
    <div class="welcome-nipa">
        <div class="centered-title no-border">
            <h1 class="headline">Sign Up For A Nipa Hut Account Today!</h1>
        </div>
    </div>
</section>

    <section class="reservation-content">
        <div class="container"><div class="row"><div class="col-md-3"></div><div class="col-md-6">
                    <div class="panel panel-default"><div class="panel-heading summary-title">
                            <h3 class="panel-title available-rooms-title">Guest Information - Sign Up</h3>
                        </div>
                        <div class=" list-group">

                            <?php echo validation_errors();?>
                            <?php echo form_open('NipaHut_Controller/SignUp');?>
                                <a class="list-group-item">
                                    <label>First Name</label>
                                    <input name="register-firstname" type="text" value="<?php  echo set_value('register-firstname');?>" class="form-control" >
                                </a>
                                <a class="list-group-item">
                                    <label>Last Name</label>
                                    <input name="register-lastname" type="text" value="<?php  echo set_value('register-lastname');?>" class="form-control" >
                                </a>
                                <a class="list-group-item">
                                    <label>Gender</label>
                                    <select name="register-gender" class="btn btn-default form-control">
                                        <option disabled selected value></option>
                                        <option value="Male" <?php echo set_select('register-gender','male');?>>Male</option>
                                        <option value="Female" <?php echo set_select('register-gender','female');?>>Female</option>
                                    </select>
                                </a>
                                <a class="list-group-item">
                                    <label>Email Address</label>
                                    <input name="register-emailaddress" value="<?php  echo set_value('register-emailaddress');?>" type="text" class="form-control" >
                                </a>
                                <a class="list-group-item">
                                    <label>Mobile Number</label>
                                    <input name="register-mobilenumber" value="<?php  echo set_value('register-mobilenumber');?>" type="text" class="form-control" >
                                </a>
                                <a class="list-group-item"><h6>*This part will be covered for your Nipa Hut Guest Account for your convenient access.</h6>
                                    <label>Username</label>
                                    <input name="register-username" value="<?php  echo set_value('register-username');?>" type="text" class="form-control" >
                                </a>
                                <a class="list-group-item">
                                    <label>Password</label>
                                    <input name="register-password" value="<?php  echo set_value('register-password');?>" type="password" class="form-control" >
                                </a>
                                <a class="list-group-item">
                                    <label>Confirm Password</label>
                                    <input name="register-confirmpassword" type="password" class="form-control" >
                                </a>
                                <a class="list-group-item text-right">
                                    <button name="sbt-signup" type="submit" class="btn btn-success">Register</button>
                                </a>
                            <?php form_close();?>
                        </div></div>
                </div>
            </div></div></div>
    </section>