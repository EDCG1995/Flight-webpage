<?php
require '../layout/header.php';
require '../systems/paying/card.php';
require '../lib/functions.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'): //When user presses the add button
    //variable declaration
     $name;
     $number;
     $expiration;
     $csn;
     $amount;

  
    //Card creation.
    isset($_POST['name'])               ? $name = $_POST['name'] : $name = '';
    isset($_POST['number'])             ? $number = $_POST['number'] : $number = '';
    isset($_POST['expiration_month'])   ? $expiration= $_POST['expiration_month'] : $expiration = '';
    isset($_POST['csn'])                ? $csn = $_POST['csn'] : $csn = '';
    isset($_POST['amount'])             ? $amount = $_POST['amount'] : $amount = '';
	
    $newCard = new Card($name,$number,$expiration,$csn);
    set_card($newCard->name,$newCard->number,$newCard->expiration,$newCard->csn);

	?>
 <h1>Card has been added Succesfully and the payment has been processed!</h1>

<table class="form">
    <tr>
        <th>Summary</th>
        <th>Amount</th>
    </tr>
    <tr>
        <th>Amount ot pay:</th>
        <th>+ <?php echo $amount ;?>  </th>
    </tr>
    <tr>
        <th>Paid with card</th>
        <th>- <?php echo $amount ;?>  </th>
    </tr>
    <tr>
        <th>PAYMENT COMPLETE</th>
    </tr>
</table>

<?php
 endif;



if($_SERVER['REQUEST_METHOD'] == 'GET'):
    $data = explode(' ',$_GET['selection']);
    $tripData = get_trips($data[1], $data[2]);
    $selectedTrip= $tripData[$data[0]];
    //var_dump($data);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Here's your trip</h1>
            <table class="form" style="width:700px">
                <tr>
                    <th>From</th>
                    <th>Destination</th>
                    <th>Airline</th>
                    <th>Flight Class</th>
                    <th>Amount of Tickets</th>
                    <th>Total Amount</th>
                </tr>
                <tr>
                    <th><?php echo $selectedTrip{'from_city'} ; ?> </th>
                    <th><?php echo $selectedTrip{'to_city'};?></th>
                    <th><?php echo $selectedTrip{'airline'};?></th>
                    <th><?php echo $selectedTrip{'class'};?></th>
                    <th><?php echo $data[5] ;?></th>
                    <th>€<?php echo $selectedTrip{'price'} * $data[5] ;?> </th>
                    
                </tr>
            </table><br>
            <h2>Pay for your trip....</h2>
            
            <form action="paypage.php" method="POST">
                <div class="form-group">
                    <label for="name" class="control-label">Cardholder's name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="number" class="control-label">Card Number</label>
                    <input type="text" name="number" id="number" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="expiration" class="control-label">expiration</label>
                    <input type="month" name="expiration_month" id="expiration_month" class="form-control"/>
                </div><br>
                <div class="form-group">
                    <label for="csn" class="control-label">csn</label>
                    <input type="text" name="csn" id="csn" class="form-control"/>
                </div>
                <div>
                    <label for="amount" class="control-label">Confirm Amount</label>
                    <input type="checkbox" id="amount" name="amount" value="<?php echo $selectedTrip{'price'} * $data[5] ; ?>"> €<?php echo $selectedTrip{'price'} * $data[5] ;?>
                </div>
                
              
                <button type="submit"class="btn btn-primary" >
                    Add
                </button>
            </form>
        
        </div>
    </div>
</div>


<?php
endif;
require '../layout/footer.php';
?>