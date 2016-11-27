<section class="transaction-image">
    <div class="welcome-nipa">
        <div class="centered-title no-border">
            <h1 class="headline">Sign Up For A Nipa Hut Account Today!</h1>
        </div>
    </div>
</section>

<section class="reservation-content">
    <div class="container">
        <h1 class="text-center">Registration Successful !</h1><div class="row"><div class="col-md-3"></div><div class="col-md-6">
                <div class="panel panel-default"><div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Guest Information</h3>
                    </div>
                    <div class=" list-group">
                        <form method="POST" action="sign-up.php">
                            <a class="list-group-item">
                                Username
                                <input name="register-username" type="text" class="form-control" readonly value="">
                            </a>
                            <a class="list-group-item">
                                First Name
                                <input name="register-firstname" type="text" class="form-control" readonly value="">
                            </a>
                            <a class="list-group-item">
                                Last Name
                                <input name="register-lastname" type="text" class="form-control" readonly value="">
                            </a>
                            <a class="list-group-item">
                                Gender
                                <input name="register-lastname" type="text" class="form-control" readonly value="">
                            </a>
                            <a class="list-group-item">
                                Email Address
                                <input name="register-emailaddress" type="text" class="form-control" readonly value="">
                            </a>
                            <a class="list-group-item">
                                Mobile Number
                                <input name="register-mobilenumber" type="text" class="form-control" readonly value="">
                            </a>
                        </form>
                    </div></div>
            </div>
        </div></div></div>
</section>

    <section class="reservation-content">
        <div class="container"><div class="row"><div class="col-md-3"></div><div class="col-md-6">
                    <div class="panel panel-default"><div class="panel-heading summary-title">
                            <h3 class="panel-title available-rooms-title">Guest Information - Sign Up</h3>
                        </div>
                        <div class=" list-group">
                            <form method="POST" action="sign-up.php">
                                <a class="list-group-item">
                                    First Name
                                    <input name="register-firstname" type="text" class="form-control" required>
                                </a>
                                <a class="list-group-item">
                                    Last Name
                                    <input name="register-lastname" type="text" class="form-control" required>
                                </a>
                                <a class="list-group-item">
                                    Gender
                                    <select name="register-gender" class="btn btn-default form-control">
                                        <option disabled selected value></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </a>
                                <a class="list-group-item">
                                    Email Address
                                    <input name="register-emailaddress" type="text" class="form-control" required>
                                </a>
                                <a class="list-group-item">
                                    Mobile Number
                                    <input name="register-mobilenumber" type="text" class="form-control" required>
                                </a>
                                <a class="list-group-item"><h6>*This part will be covered for your Nipa Hut Guest Account for your convenient access.</h6>
                                    Username
                                    <input name="register-username" type="text" class="form-control" required>
                                </a>
                                <a class="list-group-item">
                                    Password
                                    <input name="register-password" type="password" class="form-control" required>
                                </a>
                                <a class="list-group-item">
                                    Confirm Password
                                    <input name="register-confirmpassword" type="password" class="form-control" required>
                                </a>
                                <a class="list-group-item text-right">
                                    <button name="sbt-signup" type="submit" class="btn btn-success">Register</button>
                                </a>
                            </form>
                        </div></div>
                </div>
            </div></div></div>
    </section>
