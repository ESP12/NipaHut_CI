<section class="transaction-image head-reservation">
    <div class="welcome-nipa">
        <div class="centered-title headline no-border">
            <h1 class="headline">Step 1: Choose Dates &amp; Rooms</h1>
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
                </div>
            </div>
            <div class="col-md-9"> <!-- DISPLAY AVAILABLE ROOMS FROM PHP -->
                <div class="panel panel-default"><div class="panel-heading summary-title">
                        <h3 class="panel-title available-rooms-title">
                            Available Rooms (from )
                        </h3>
                    </div>
                    <div class="panel-body">

                        <form method="POST" action="reservation-step-1.php">
                            <p>Select rooms that suits your selections. One or more rooms may be selection with respect to the number guests.</p>
                            <!--code sql here-->
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <span class="label room-price-heading">PhP </span>
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
                                            <div class="alert alert-qty pull-right text-center" role="alert">
                                                <b>Quantity:&nbsp;&nbsp;&nbsp;</b>
                                                <select name="availablerooms[]" class="btn btn-default">
                                                    <option selected value="0">0</option>

                                                </select>
                                                <b>&nbsp;&nbsp;, Per Room (PhP )</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button name="sbt-next-step" type="submit" class="btn btn-success btn-next">Proceed To Adding Amenities</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</section>
