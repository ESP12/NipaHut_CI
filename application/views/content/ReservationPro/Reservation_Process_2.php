<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title no-border">
            <h1 class="headline">Step 2: Add Amenities</h1>
        </div>
    </div>
</section>
<section class="reservation-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item summary-title">
                        Reservation Summary
                    </a>
                    <!--  <a class="list-group-item">
					  	# nights for  Children.
					  </a> -->
                    <a class="list-group-item">
                        Check-In Date
                        <input readonly type="text" class="text-center form-control datepicker span2" id="dpd1" value="">
                    </a>
                    <a class="list-group-item">
                        Check-Out Date
                        <input readonly type="text" class="text-center form-control datepicker span2" id="dpd2" value="">
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
            </div>
            <div class="col-md-9">
                <div class="panel panel-default"><div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">Available Amenities</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="reservation-step-2.php">
                            <p>Add amenities to enhance your stay here in Nipa Hut Hotel &amp; Resort. Payment will be upon reservation and the amenity will be reserved for you upon check-in. Adding amenities are optional.</p>

                                    <div class="col-md-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <span class="label  room-price-heading">PhP </span>
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
                                                    <div class="alert alert-qty pull-right text-center" role="alert">
                                                        <b>Quantity:&nbsp;&nbsp;&nbsp;</b>
                                                        <select name="availableamenities[]" class="btn btn-default">
                                                            <option selected value="0">0</option>

                                                        </select>
                                                        <b>&nbsp;&nbsp;, Per Room (PhP )</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            <button type="submit" name="sbt-next-step" class="btn btn-success pull-right">Proceed To Guest &amp; Payment Information</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</section>