<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title headline no-border">
            <h1 class="headline">Welcome, <?php //echo $AdminFirstName. " ". $AdminLastName; ?>!</h1>
        </div>
    </div>
</section>
<section class="reservation-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item summary-title">
                        Guest Profile
                    </a>
                    <a class="list-group-item">
                        <img style="width:50%; display:block; margin-left: auto; margin-right: auto;" src="images/headicon.png">
                    </a>
                    <a class="list-group-item">
                        <b>Admin ID:</b> <?php// echo $LoggedInAdminID; ?>
                    </a>
                    <a class="list-group-item">
                        <b>Name:</b> <?php// echo $AdminFirstName. " ". $AdminLastName; ?>
                    </a>
                    <a class="list-group-item">
                        <b>Username:</b> <?php //echo $AdminUsername; ?>
                    </a>
                    <a class="list-group-item">
                        <b>User Level:</b> <?php //echo $AdminUserLevel; ?>
                    </a>
                    <a class="list-group-item">
                        <button name="sbt-more" class="btn btn-success form-control">Manage Your Account</button>
                    </a>
                    <li class="list-group-item text-center">
                        <a href="admin-login.php" class="btn btn-danger form-control">< < Back To Main Menu</a>
                    </li>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Administrator Actions</h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info text-center" role="alert">
                            <p style="text-align:left;">Filter By:</p>
                            <form method="POST" action="admin-reservations.php">
                                <ul class="nav nav-pills nav-justified">
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-all" value="Show All">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-active" value="Active Only">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-confirm" value="Confirmations">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-cancel" value="Cancellations">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-modify" value="Modifications">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-checkin" value="Check-In">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">MANAGE RESERVATIONS</div>
                            <table class="table">
                                <thead>
                                <tr align="center">
                                    <td>Reservation ID</td>
                                    <td>Status</td>
                                    <td>Reserved By</td>
                                    <td>Check In Date</td>
                                    <td>Check Out Date</td>
                                    <td>Mode Of Payment</td>
                                    <td>Reservation Request Date</td>
                                    <td>Actions</td>
                                </tr>
                                </thead>
                                <tbody>

                                    <td><?php //echo $row['ReservationID']; ?></td>
                                    <td><?php //echo $row['Status']; ?></td>
                                    <td><?php //echo $row['FirstName']." ".$row['LastName']; ?></td>
                                    <td><?php //echo $row['CheckInDate']; ?></td>
                                    <td><?php// echo $row['CheckOutDate']; ?></td>
                                    <td><?php// echo $row['ModeOfPayment']; ?></td>
                                    <td><?php //echo $row['RsvRequestDate']; ?></td>
                                    <td><button name="sbt-more" class="btn btn-warning" data-toggle="modal" data-target="#ReservationsModal<?php echo $row['ReservationID']; ?>">Manage</button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</section>


    <div class="modal fade" id="ReservationsModal<?php// echo $row['ReservationID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Manage Reservation <?php// echo $row['ReservationID']; ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row list-group">
                        <div class="col-md-6">
                            <a class="list-group-item"><b>Reservation ID:</b> <?php// echo $row['ReservationID']; ?></a>
                            <a class="list-group-item"><b>Name:</b> <?php //echo $row['FirstName']; ?> <?php echo $row['LastName']; ?></a>
                            <a class="list-group-item"><b>Status:</b> <?php //echo $row['Status']; ?></a>
                            <a class="list-group-item"><b>Number of Rooms Reserved:</b> <?php// echo $row['NumberOfReservedRooms']; ?>
                                <a class="list-group-item"><b>Number of Amenities Reserved:</b> <?php //echo $row['NumberOfReservedAmenities']; ?>
                                    <a class="list-group-item"><b>Number of Adults:</b> <?php// echo $row['AdultCapacity']; ?></a>
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
                    <form method="POST" action="admin-reservations.php">
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
                                        <td>Room #<?php// echo $row1['RoomNumber']; ?></td>
                                        <td><?php// echo $row1['Type']; ?></td>
                                        <td>PhP <?php// echo $row1['Rate']; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Amenity ID #<?php// echo $row2['AmenityID']; ?></td>
                                        <td><?php// echo $row2['Name']; ?></td>
                                        <td>PhP <?php// echo $row2['Rate']; ?></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                        <div class="alert alert-warning text-center" role="alert">
                            <b>Total Amount: PhP <?php// echo $TotalAmountBill; ?></b>
                        </div>
                </div>
                <div class="modal-footer">

                        <button name="sbt-confirm-reservation" type="submit" value="<?php// echo $SelectedReservationID; ?>" class="btn btn-success">Confirm Reservation</button>
                        <button name="sbt-decline-reservation" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-danger">Decline Reservation</button>

                        <button name="sbt-confirm-cancellation" type="submit" value="<?php// echo $SelectedReservationID; ?>" class="btn btn-success">Confirm Cancellation</button>
                        <button name="sbt-decline-cancellation" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-danger">Decline Cancellation</button>

                        <button name="sbt-confirm-modification" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-success">Confirm Modification</button>
                        <button name="sbt-decline-modification" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-danger">Decline Modification</button>

                        <button name="sbt-checkin" type="submit" value="<?php// echo $SelectedReservationID; ?>" class="btn btn-success">Check-In Reservation</button>

                        <button name="sbt-checkout" type="submit" value="<?php //echo $SelectedReservationID; ?>" class="btn btn-danger">Check-Out</button>

                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
