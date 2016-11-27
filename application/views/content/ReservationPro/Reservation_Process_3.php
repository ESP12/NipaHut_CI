<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title no-border">
            <h1 class="headline">Step 3: Guest &amp; Credit Card Information</h1>
        </div>
    </div>
</section>
<section class="reservation-content">
    <div class="container">
        <div class="col-md-9">
            <div class="row">
                <div class="panel panel-default"><div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Guest Information &amp; Payment Scheme</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Guest Information</h3>
                                    </div>
                                    <div class="panel-body list-group">
                                        <a class="list-group-item">
                                            <p>Do you already have a Nipa Hut Account? This will speed up the guest information process if you already have one.</p>
                                            <form method="POST" action="reservation-step-3.php">
                                                <div class="row">
                                                    <div class="col-md-6 text-center" style="margin-bottom: 10px;">
                                                        <button name="sbt-account-yes" type="submit" class="btn btn-success">Yes</button>
                                                    </div>
                                                    <div class="col-md-6 text-center">
                                                        <button name="sbt-account-no" type="submit" class="btn btn-danger">No</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </a>
                                        <form method="POST" action="reservation-step-3.php">

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
                                                <a class="list-group-item"><h6><i>*This part will be covered for your Nipa Hut Guest Account for your convenient access.</i></h6>
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

                                                <a class="list-group-item">
                                                    Username
                                                    <input name="login-username" type="text" class="form-control" required>
                                                </a>
                                                <a class="list-group-item">
                                                    Password
                                                    <input name="login-password" type="password" class="form-control" required>
                                                </a>

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
                                                    <select name="register-gender" class="btn btn-default form-control" required>
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
                                                <a class="list-group-item"><h6><i>*This part will be covered for your Nipa Hut Guest Account for your convenient access.</i></h6>
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

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Payment Scheme</h3>
                                    </div>
                                    <div class="panel-body list-group">
                                        <a class="list-group-item">
                                            <p><input type="radio" name="payment-choice" value="Bank" required><b> Bank Payment</b></p>
                                            <h6>*You must submit a bank statement to the Hotel within 3 days else the reservation will be voided.</h6>
                                        </a>
                                        <a class="list-group-item">
                                            <p> <input type="radio" name="payment-choice" value="Paypal" required><b> PayPal Payment</b></p>
                                            <h6>*You will be directed to the PayPal Website for payment.</h6>
                                            <h6>*Reservation must be final, paying in paypal will confirm the reservation.</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Terms &amp; Conditions</h3>
                                    </div>
                                    <div class="panel-body list-group">
                                        <a class="list-group-item">
                                            <h5>All charges are based on local currency. Alternate currency displays are for information purposes only.</h5>
                                        </a>
                                        <a class="list-group-item">
                                            <h5>All reservation payments done are not refundable but can be exchanged for another service, reservation or amenity.</h5>
                                        </a>
                                        <a class="list-group-item">
                                            <h5> <input type="checkbox" required> I have read and agree to the above Terms and Conditions and Data Privacy &amp; Security Policy</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button name="sbt-information" type="submit" class="btn btn-success pull-right">Confirm Reservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3	">
            <div class="list-group">
                <a class="list-group-item summary-title">
                    Reservation Summary
                </a>
                <a class="list-group-item">
                    Check-In Date
                    <input readonly type="text" class="text-center form-control" value="">
                </a>
                <a class="list-group-item">
                    Check-Out Date
                    <input readonly type="text" class="text-center form-control" value="">
                </a>
                <div class="dropdown list-group-item text-center">
                    <div class="row">
                        <div class="col-md-6">
                            Adults
                            <input readonly type="text" class="text-center form-control" value="">
                        </div>
                        <div class="col-md-6">
                            Children
                            <input readonly type="text" class="text-center form-control" value="">
                        </div>
                    </div>
                </div>
                <a class="list-group-item list-group-item-warning text-center">
                    <b>Grand Total: PhP </b>
                </a>
            </div>
            <div class="list-group">
                <a class="list-group-item summary-title">
                    Selected Rooms
                </a>
                <a class="list-group-item list-group-item-success text-center">
                    <p><b>Number of Rooms Selected:</b> </p>
                    <b>Number of Types of Rooms Selected:</b>
                </a>

                    <a class="list-group-item">
                        <p class="text-center"><b></b></p>
                        <hr class="selected-room-line">
                        <p><b>Adults:&nbsp;</b> pax</p>
                        <p><b>Children:&nbsp;</b> pax</p>
                        <p><b>Rate:&nbsp;</b>PhP </p>
                    </a>

                <a class="list-group-item list-group-item-warning text-center">
                    <b>Room Total: PhP </b>
                </a>
            </div>
            <div class="list-group">
                <a class="list-group-item summary-title">
                    Selected Amenities
                </a>
                <a class="list-group-item list-group-item-success text-center">
                    <p><b>Number of Amenities Selected:</b> </p>
                    <b>Number of Types of Rooms Selected:</b>
                </a>

                    <a class="list-group-item">
                        <p class="text-center"><b></b></p>
                        <hr class="selected-room-line">
                        <p><b>Rate:&nbsp;</b>PhP </p>
                    </a>

                <a class="list-group-item list-group-item-warning text-center">
                    <b>Amenity Total: PhP </b>
                </a>
            </div>
        </div>
    </div>
</section>













