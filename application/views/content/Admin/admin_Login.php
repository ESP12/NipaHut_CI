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
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item summary-title">
                        Admin Profile
                    </a>
                    <a class="list-group-item">
                        <img style="width:50%; display:block; margin-left: auto; margin-right: auto;" src="images/headicon.png">
                    </a>
                    <a class="list-group-item">
                        <b>Admin ID:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Name:</b>
                    </a>
                    <a class="list-group-item">
                        <b>Username:</b>
                    </a>
                    <a class="list-group-item">
                        <b>User Level:</b>
                    </a>
                    <a class="list-group-item">
                        <button name="sbt-more" class="btn btn-success form-control">Manage Your Account</button>
                    </a>
                </div>
            </div>
            <div class="col-md-9"> <!-- DISPLAY AVAILABLE ROOMS FROM PHP -->
                <div class="panel panel-default">
                    <div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Administrator Actions</h3>
                    </div>
                    <div class="panel-body">
                        <p>Choose an <b>action</b> from the choices below.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="admin-reservations.php" class="btn btn-primary form-control">View Reservations</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="#" class="btn btn-primary form-control">Check-In &amp; Check-Out</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="admin-rooms.php" class="btn btn-primary form-control">View Rooms</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="#" class="btn btn-primary form-control">Billing</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="#" class="btn btn-primary form-control">Generate Reports</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="well well-sm">
                                    <a href="#" class="btn btn-primary form-control">Manage Records</a>
                                    <h5>Handle reservations, cancellations and modifications</h5>
                                </div>
                            </div>
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
                    <h4 class="modal-title" id="myModalLabel">Manage Reservation </h4>
                </div>
                <div class="modal-body">
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
                            <a class="list-group-item"><b>Reservation Request Date:</b> </a>

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
                            <b>Total Amount: PhP </b>
                        </div>
                </div>
                <div class="modal-footer">

                        <button name="sbt-confirm-reservation" type="submit" value="" class="btn btn-success">Confirm Reservation</button>
                        <button name="sbt-decline-reservation" type="submit" value="" class="btn btn-danger">Decline Reservation</button>

                        <button name="sbt-confirm-cancellation" type="submit" value="" class="btn btn-success">Confirm Cancellation</button>
                        <button name="sbt-decline-cancellation" type="submit" value="" class="btn btn-danger">Decline Cancellation</button>

                        <button name="sbt-confirm-modification" type="submit" value="" class="btn btn-success">Confirm Modification</button>
                        <button name="sbt-decline-modification" type="submit" value="" class="btn btn-danger">Decline Modification</button>

                        <button name="sbt-checkin" type="submit" value="" class="btn btn-success">Check-In Reservation</button>

                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
