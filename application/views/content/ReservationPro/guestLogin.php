
<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title headline no-border">
            <h1 class="headline">Welcome Back Guest, !</h1>
        </div>
    </div>
</section>
<section class="reservation-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 reservation-summary">
                <div class="list-group">
                    <a class="list-group-item summary-title">
                        Guest Profile
                    </a>
                    <a class="list-group-item">
                        <img style="width:50%; display:block; margin-left: auto; margin-right: auto;" src="images/headicon.png">
                    </a>
                    <a class="list-group-item">
                        <b>Guest ID:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Username:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Name:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Email Address:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Gender:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Mobile Number:</b>
                    </a>
                    <li class="list-group-item text-center">
                        <a href="guest-edit-account.php" class="btn btn-primary">Edit Your Account</a>
                    </li>
                </div>
            </div>
            <div class="col-md-9 reservation-display"> <!-- DISPLAY AVAILABLE ROOMS FROM PHP -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading summary-title">
                            <h3 class="panel-title available-rooms-title">Actions</h3>
                        </div>
                        <div class="panel-body">
                            <p>Your active reservations are enlisted here. Click on <b>Manage</b> to view more details about the reservation. You can <b>Cancel</b> or <b>Modify</b> your reservation under the <b>Manage</b> panel.</p>
                            <div class="panel panel-warning">
                                <div class="panel-heading">YOUR ACTIVE RESERVATIONS</div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td>Reservation ID</td>
                                        <td>Status</td>
                                        <td>Check In Date</td>
                                        <td>Check Out Date</td>
                                        <td>Mode Of Payment</td>
                                        <td>Reservation Request Date</td>
                                        <td>Actions</td>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td><?php //echo $row['ReservationID']; ?></td>
                                            <td><?php //echo $row['Status']; ?></td>
                                            <td><?php// echo $row['CheckInDate']; ?></td>
                                            <td><?php //echo $row['CheckOutDate']; ?></td>
                                            <td><?php //echo $row['ModeOfPayment']; ?></td>
                                            <td><?php //echo $row['RsvRequestDate']; ?></td>
                                            <td><button name="sbt-more" class="btn btn-warning pull-right" data-toggle="modal" data-target="#ReservationsModal<?php echo $row['ReservationID']; ?>">Manage</button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="panel-body list-group text-center">
                                <a class="list-group-item list-group-item-info">
                                    <p><button name="sbt-reservation" type="submit" class="btn btn-primary">Reservation History</button></p>
                                    View your history of reservations here in the resort.
                                </a>
                                <a class="list-group-item list-group-item-info">
                                    <p><button name="sbt-reservation" type="submit" class="btn btn-primary">Billing History</button></p>
                                    View your history of billings here in the resort.
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <div class="modal fade" id="ReservationsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Manage Reservation</h4>
                </div>
                <div class="modal-body">

                        <div class="alert alert-danger text-center" role="alert">
                            <b>Requesting for a cancellation</b>
                        </div>

                    <div class="row list-group">
                        <div class="col-md-6">
                            <a class="list-group-item"><b>Reservation ID:</b> </a>
                            <a class="list-group-item"><b>Name:</b> </a>
                            <a class="list-group-item"><b>Status:</b> </a>
                            <a class="list-group-item"><b>Number of Rooms Reserved:</b>
                                <a class="list-group-item"><b>Number of Amenities Reserved:</b>
                                    <a class="list-group-item"><b>Number of Adults:</b> </a>
                                    <a class="list-group-item"><b>Number of Children:</b> </a>
                        </div>
                        <div class="col-md-6">
                            <a class="list-group-item"><b>Check-In Date:</b> </a>
                            <a class="list-group-item"><b>Check-Out Date:</b> </a>
                            <a class="list-group-item"><b>Number of Days:</b> Wala pa po...</a>
                            <a class="list-group-item"><b>Mode of Payment:</b> </a>
                            <a class="list-group-item"><b>PayPal Transaction Number:</b> </a>
                            <a class="list-group-item"><b>Reservation Request Date:</b></a>

                        </div>
                    </div>
                    <form method="POST" action="guest-login.php">
                        <div class="panel panel-warning">
                            <div class="panel-heading text-left">BILLING SUMMARY OF RESERVATION</div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Number/ID</td>
                                    <td>Services Reserved</td>
                                    <td>Rate</td>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Room #</td>
                                        <td></td>
                                        <td>PhP </td>
                                    </tr>

                                    <tr>
                                        <td>Amenity ID #</td>
                                        <td></td>
                                        <td>PhP </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class="alert alert-warning text-center" role="alert">
                            <b>Total Amount: PhP
                        </div>
                </div>
                <div class="modal-footer">

                        <button name="sbt-cancel" value=""	 type="submit" class="btn btn-success">Cancel Reservation</button>
                        <button name="sbt-modify" value=""	 type="submit" class="btn btn-success">Modify Reservation</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

                </form>
            </div>
        </div>
    </div>
