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
            <div class="col-md-3 reservation-summary">
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
                        <b>Name:</b> <?php //echo $AdminFirstName. " ". $AdminLastName; ?>
                    </a>
                    <a class="list-group-item">
                        <b>Username:</b> <?php// echo $AdminUsername; ?>
                    </a>
                    <a class="list-group-item">
                        <b>User Level:</b> <?php// echo $AdminUserLevel; ?>
                    </a>
                    <a class="list-group-item">
                        <button name="sbt-more" class="btn btn-success form-control">Manage Your Account</button>
                    </a>
                    <li class="list-group-item text-center">
                        <a href="admin-login.php" class="btn btn-danger form-control">< < Back To Main Menu</a>
                    </li>
                </div>
            </div>
            <div class="col-md-9 reservation-display">
                <div class="panel panel-default">
                    <div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Administrator Actions</h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info text-center" role="alert">
                            <p style="text-align:left;">Filter By:</p>
                            <form method="POST" action="admin-rooms.php">
                                <ul class="nav nav-pills nav-justified">
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-all" value="Show All">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-available" value="Available Only">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-occupied" value="Occupied Only">
                                    </li>
                                    <li role="presentation">
                                        <input type="submit" class="btn btn-primary" name="sbt-filter-reserved" value="Reserved Only">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">ROOMS</div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <td>Room Number</td>
                                    <td>Status</td>
                                    <td>Type</td>
                                    <td>Adult<br>Capacity</td>
                                    <td>Children<br>Capacity</td>
                                    <td>Rate</td>
                                    <td>Actions</td>
                                </tr>
                                </thead>
                                <tbody>



                                    <td><?php //echo $row['RoomNumber']; ?></td>
                                    <td><?php //echo $row['Status']; ?></td>
                                    <td><?php //echo $row['Type']; ?></td>
                                    <td><?php //echo $row['AdultCapacity']; ?></td>
                                    <td><?php// echo $row['ChildrenCapacity']; ?></td>
                                    <td>PhP <?php //echo $row['Rate']; ?></td>
                                    <td><button name="sbt-more" class="btn btn-warning" data-toggle="modal" data-target="#RoomsModal<?php echo $row['RoomNumber']; ?>">Manage</button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</section>

    <div class="modal fade" id="RoomsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Manage Room #</h4>
                </div>
                <div class="modal-body">
                    <div class="row list-group">
                        <div class="col-md-6">
                            <a class="list-group-item  list-group-item-warning"><b>Room Information</b></a>
                            <a class="list-group-item"><b>Room Number:</b> </a>
                            <a class="list-group-item"><b>Room Status:</b> </a>
                            <a class="list-group-item"><b>Room Type:</b>
                                <a class="list-group-item"><b>Room Rate:</b> PhP
                                    <a class="list-group-item"><b>Adult Capacity:</b> </a>
                                    <a class="list-group-item"><b>Children Capacity:</b> </a>
                        </div>

                        <div class="col-md-6">
                            <a class="list-group-item  list-group-item-warning"><b>Guest Assigned</b></a>
                            <a class="list-group-item"><b>Reservation ID:</b> </a>
                            <a class="list-group-item"><b>Guest ID:</b> </a>
                            <a class="list-group-item"><b>Name:</b> </a>
                            <a class="list-group-item"><b>Check-In Date:</b> </a>
                            <a class="list-group-item"><b>Check-Out Date:</b> </a>
                        </div>
                    </div>

                    <form method="POST" action="admin-rooms.php">

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
    </div>
