<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title headline no-border">
            <h1 class="headline">Welcome, <?php// echo $AdminFirstName. " ". $AdminLastName; ?>!</h1>
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
                        <b>Admin ID:</b> <?php //echo $LoggedInAdminID; ?>
                    </a>
                    <a class="list-group-item">
                        <b>Name:</b> <?php //echo $AdminFirstName. " ". $AdminLastName; ?>
                    </a>
                    <a class="list-group-item">
                        <b>Username:</b> <?php //echo $AdminUsername; ?>
                    </a>
                    <a class="list-group-item">
                        <b>User Level:</b> <?php //echo $AdminUserLevel; ?>
                    </a>
                </div>
            </div>
            <div class="col-md-9 reservation-display"> <!-- DISPLAY AVAILABLE ROOMS FROM PHP -->
                <div class="row">
                    <ul class="nav nav-tabs nav-justified" style="margin-bottom: 6px;">
                        <li role="presentation" class="active"><a href="#">Reservations</a></li>
                        <li role="presentation"><a href="#">Rooms</a></li>
                        <li role="presentation"><a href="#">Guests</a></li>
                        <li role="presentation"><a href="#">Amenities</a></li>
                        <li role="presentation"><a href="#">Billing</a></li>
                        <li role="presentation"><a href="#">Admins</a></li>
                        <li role="presentation"><a href="#">Reports</a></li>
                    </ul>
                    <div class="alert alert-info" role="alert">
                        <p>Filter By:</p>
                        <ul class="nav nav-pills nav-justified">
                            <li role="presentation" class="active"><a href="#">All Active</a></li>
                            <li role="presentation"><a href="#">Confirmations</a></li>
                            <li role="presentation"><a href="#">Cancellations</a></li>
                            <li role="presentation"><a href="#">Modifications</a></li>
                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">RESERVATIONS</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Reservation ID</td>
                                <td>Status</td>
                                <td>First Name</td>
                                <td>Last Name</td>
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
                                    <td><?php //echo $row['FirstName']; ?></td>
                                    <td><?php //echo $row['LastName']; ?></td>
                                    <td><?php //echo $row['CheckInDate']; ?></td>
                                    <td><?php //echo $row['CheckOutDate']; ?></td>
                                    <td><?php //echo $row['ModeOfPayment']; ?></td>
                                    <td><?php //echo $row['RsvRequestDate']; ?></td>
                                    <td><button name="sbt-more" class="btn btn-warning pull-right" data-toggle="modal" data-target="#ReservationsModal<?php //echo $row['ReservationID']; ?>">Manage</button></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>

    <div class="modal fade" id="ReservationsModal<?php //echo $row['ReservationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Manage Reservation <?php// echo $row['ReservationID']; ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row list-group">
                        <div class="col-md-6">
                            <a class="list-group-item"><b>Reservation ID:</b> <?php //echo $row['ReservationID']; ?></a>
                            <a class="list-group-item"><b>Name:</b> <?php //echo $row['FirstName']; ?> <?php //echo $row['LastName']; ?></a>
                            <a class="list-group-item"><b>Status:</b> <?php// echo $row['Status']; ?></a>
                            <a class="list-group-item"><b>Number of Rooms Reserved:</b> <?php //echo $row['NumberOfReservedRooms']; ?>
                                <a class="list-group-item"><b>Number of Amenities Reserved:</b> <?php// echo $row['NumberOfReservedAmenities']; ?>
                                    <a class="list-group-item"><b>Number of Adults:</b> <?php //echo $row['AdultCapacity']; ?></a>
                                    <a class="list-group-item"><b>Number of Children:</b> <?php// echo $row['ChildrenCapacity']; ?></a>
                        </div>
                        <div class="col-md-6">
                            <a class="list-group-item"><b>Check-In Date:</b> <?php //echo $row['CheckInDate']; ?></a>
                            <a class="list-group-item"><b>Check-Out Date:</b> <?php //echo $row['CheckOutDate']; ?></a>
                            <a class="list-group-item"><b>Number of Days:</b> Wala pa po...</a>
                            <a class="list-group-item"><b>Mode of Payment:</b> <?php //echo $row['ModeOfPayment']; ?></a>
                            <a class="list-group-item"><b>PayPal Transaction Number:</b> <?php //echo $row['RsvPaypalNumber']; ?></a>
                            <a class="list-group-item"><b>Reservation Request Date:</b> <?php //echo $row['RsvRequestDate']; ?></a>

                        </div>
                    </div>
                    <form method="POST" action="admin-login.php">
                        <div class="panel panel-default">
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
                                        <td>Room #<?php //echo $row1['RoomNumber']; ?></td>
                                        <td><?php //echo $row1['Type']; ?></td>
                                        <td>PhP <?php //echo $row1['Rate']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>ID #<?php //echo $row2['AmenityID']; ?></td>
                                        <td><?php// echo $row2['Name']; ?></td>
                                        <td>PhP <?php //echo $row2['Rate']; ?></td>
                                    </tr>

                                </tbody>
                            </table>

                            <p><h4 class="pull-right">Total Amount: PhP </h4></p>
                        </div>
                </div>
                <div class="modal-footer">

                        <button name="sbt-confirm-reservation" type="submit" value="" class="btn btn-success">Confirm Reservation</button>
                        <button name="sbt-decline-reservation" type="submit" value="" class="btn btn-danger">Decline Reservation</button>

                        <button name="sbt-confirm-cancellation" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-success">Confirm Cancellation</button>
                        <button name="sbt-decline-cancellation" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-danger">Decline Cancellation</button>

                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
