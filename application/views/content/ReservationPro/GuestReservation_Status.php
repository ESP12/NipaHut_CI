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
                    <a class="list-group-item">
                        <button name="sbt-reservation" type="submit" class="btn btn-danger">< <  Back to Main Menu</button>
                    </a>
                </div>
            </div>
            <div class="col-md-9 reservation-display"> <!-- DISPLAY AVAILABLE ROOMS FROM PHP -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading summary-title">
                            <h3 class="panel-title available-rooms-title">RESERVATION STATUS</h3>
                        </div>

                        <div class="panel-body list-group">
                            <div class="alert alert-success text-center" role="alert">
                                <p><b>Reservation Status:</b> </p>
                                <p>
                                    <button style="margin-right: 20px;" name="sbt-reservation" type="submit" class="btn btn-danger" data-toggle="modal" data-target="#CancellationConfirmation">Cancel Reservation</button>
                                    <button name="sbt-reservation" type="submit" class="btn btn-info" data-toggle="modal" data-target="#ModifyConfirmation">Modify Reservation</button>
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 list-group">
                                    <a class="list-group-item"><b>Reservation ID:</b> </a>
                                    <a class="list-group-item"><b>Name:</b> </a>
                                    <a class="list-group-item"><b>Number of Rooms Reserved:</b> Wala pa po...</a>
                                    <a class="list-group-item"><b>Number of Amenities Reserved:</b> Wala pa po...</a>
                                    <a class="list-group-item"><b>Number of Adults:</b> </a>
                                    <a class="list-group-item"><b>Number of Children:</b> </a>
                                </div>
                                <div class="col-md-6 list-group">
                                    <a class="list-group-item"><b>Check-In Date:</b> </a>
                                    <a class="list-group-item"><b>Check-Out Date:</b> </a>
                                    <a class="list-group-item"><b>Number of Days:</b> Wala pa po...</a>
                                    <a class="list-group-item"><b>Mode of Payment:</b> </a>
                                    <a class="list-group-item"><b>Reservation Request Date:</b></a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading summary-title">
                                    <h3 class="panel-title available-rooms-title">Rooms Reserved</h3>
                                </div>
                                <div class="panel-body list-group">

                                        <div class="col-md-12">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        <span class="label label-info room-price-heading">PhP </span>
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="col-md-4">
                                                        <img class="card-img" src="images/room1.jpg">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3></h3>
                                                        <p><b>Adult Capacity:&nbsp;</b></p>
                                                        <p><b>Children Capacity:&nbsp;</b></p>
                                                        <p><b>Rate:&nbsp;</b></p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div></div>
                        </div>

                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading summary-title">
                                    <h3 class="panel-title available-rooms-title">Amenities Reserved</h3>
                                </div>
                                <div class="panel-body list-group">

                                        <div class="col-md-12">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">
                                                        <span class="label label-info room-price-heading">PhP </span>
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="col-md-4">
                                                        <img class="card-img" src="images/room1.jpg">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3></h3>
                                                        <p><b>Rate:&nbsp;</b>PhP </p>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>



                            </div>
                        </div>

                    </div>
                </div>
</section>

<div class="modal fade" id="CancellationConfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cancellation Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to cancel the reservation?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModifyConfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modification Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to modify the reservation?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>