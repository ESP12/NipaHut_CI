
<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title headline no-border">
            <h1 class="headline">Welcome, !</h1>
        </div>
    </div>
</section>
<section class="reservation-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="guest-login.php" class="btn btn-danger">< < Back To Main Menu</a>
            </div>
            <div class="col-md-4 reservation-summary">
                <div class="list-group">
                    <form method="POST" action="guest-edit-account.php">
                        <a class="list-group-item summary-title">
                            Edit Guest Account
                        </a>
                        <a class="list-group-item">
                            <img style="width:35%; display:block; margin-left: auto; margin-right: auto;" src="images/headicon.png">
                        </a>
                        <a class="list-group-item">
                            Guest ID
                            <input name="register-firstname" type="text" class="form-control" readonly value="">
                        </a>
                        <a class="list-group-item">
                            First Name
                            <input name="new-firstname" type="text" class="form-control" required value="
                        </a>
                        <a class="list-group-item">
                            Last Name
                            <input name="new-lastname" type="text" class="form-control" required value="
                        </a>
                        <a class="list-group-item">
                            Gender
                            <select name="new-gender" class="btn btn-default form-control">
                                <option disabled selected value="</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </a>
                        <a class="list-group-item">
                            Email Address
                            <input name="new-emailaddress" type="text" class="form-control" required value="
                        </a>
                        <a class="list-group-item">
                            Mobile Number
                            <input name="new-mobilenumber" type="text" class="form-control" required value="
                        </a>
                        <a class="list-group-item">
                            Username
                            <input name="new-username" type="text" class="form-control" required value="
                        <a class="list-group-item">
                            Old Password
                            <input name="new-password" type="password" class="form-control" required>
                        </a>
                        <a class="list-group-item">
                            New Password
                            <input name="new-password" type="password" class="form-control" required>
                        </a>
                        <a class="list-group-item">
                            Confirm New Password
                            <input name="new-confirmpassword" type="password" class="form-control" required>
                        </a>
                        <li class="list-group-item text-right">
                            <button name="sbt-signup" type="submit" class="btn btn-success">Save Changes</button>
                            <a href="guest-login.php" class="btn btn-danger">Cancel</a>
                        </li>
                    </form>
                </div>
            </div>
        </div>
</section