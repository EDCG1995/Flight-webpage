<?php
require 'layout/header.php';
require 'lib/functions.php';
require 'systems/booking/trip.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'):
    $fromID;
    $toID;
    $date;
    $class;
    $tickets;
    
    isset($_POST['from'])   ? $fromID = $_POST['from']  : $fromID='';
    isset($_POST['to'])     ? $toID = $_POST['to']      : $toID='';
    isset($_POST['date'])   ? $date = $_POST['date']    : $dateID='';
    isset($_POST['flightClass'])  ? $class = $_POST['flightClass']  : $class='';
    isset($_POST['tickets'])? $tickets = $_POST['tickets'] : $tickets='';
    
    $lookTrip = new Trip($fromID, $toID, $date, $class);
    $lookTrip = get_trips($lookTrip->fromID, $lookTrip->toID);
?>
<!--POST HTML WRITTEN HERE-->
<h1>Select flight!</h1><br>
<table  style="width:700px">
    <tr>
        <th>Select an option</th>
        <th>From</th>
        <th>Destination</th>
        <th>Airline</th>
        <th>Flight Class</th>
        <th>Total price for <?php echo $tickets;?> tickets</th>
    </tr>
    <form action="/pages/paypage.php" method="get">

<?php
    foreach($lookTrip as $index=>$trip):
?>
<!--POST HTML WRITTEN HERE-->
    <tr style="width:500px">

        <th><input type="radio" id="<?php echo $index;?>" name="selection" 
                   value="<?php echo $index;?> <?php echo $trip{'from_city'}; ?> <?php echo $trip{'to_city'}; ?> <?php echo $trip{'airline'};?> <?php echo $trip{'class'};?> <?php echo $tickets;?> <?php echo $trip{'price'}?>" ></th>
        <th><?php echo $trip{'from_city'};?></th>
        <th><?php echo $trip{'to_city'};?></th>
        <th><?php echo $trip{'airline'};?></th>
        <th><?php echo $trip{'class'};?></th>
        <th>€<?php echo $trip{'price'} * $tickets;?></th>
    </tr>
    <?php endforeach; ?>
        <input type="submit">
    </form>
</table>
<?php
endif;


if($_SERVER['REQUEST_METHOD'] == 'GET'):
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Book a Flight!</h1>
            
        <table style="width: 700px" class="form">
            <tr>
                <th>From</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Class</th>
                <th>Amount of tickets</th>
            </tr>
            <form action="index.php" method="post">
                <tr>
                
                    <th class="form-group">
                        <input type="text" name="from" id="from" class="form-control" placeholder="From">
                    </th>
                    <th class="form-group">
                        <input type="text" name="to" id="to" class="form-control" placeholder="To">
                    </th>
                    <th class="form-group">
                        <input type="date" name="date" id="date" class="form-control">
                    </th>
                    <th class="form-group">
                        <select id="flightClass" size="1" name="flightClass" class="form-control">
                            <option value="first">First Class</option>
                            <option value="economy">Economy Class</option>
                            <option value="business">Business Class</option>
                        </select>
                    </th>
                    <th class="form-group">
                    <input type="number" name="tickets" id="tickets" min="1" max="9" class="form-control">
                    </th>
                </tr>
                <tr>
                    <th><input type="reset">
                        <input type="submit" class="btn btn-primary"> 
                    </th>
                </tr>
            </form>
            
        </table>
        </div>
    </div>
</div>

<?php
endif;
require 'layout/footer.php';
?>