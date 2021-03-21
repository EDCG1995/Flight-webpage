<?php
require '../layout/header.php';
require '../systems/card/card.php';
require '../lib/functions.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'){ //When user presses the add button
        //variable declaration
     $name;
     $number;
     $expiration;
     $csn;
   
    //Card creation.
    if(isset($_POST['name'])){
    $name = $_POST['name'];
    }else{
        $name = '';
    }

    if(isset($_POST['number'])){
        $number = $_POST['number'];
    }else{
        $number = '';
    }

    if(isset($_POST['expiration'])){
        $expiration= $_POST['expiration'];
    }else{
        $expiration = '';
    }
	
	
	 if(isset($_POST['csn'])){
        $csn = $_POST['csn'];
    }else{
        $csn = '';
    }
	
	
    $newCard = new Card($name,$number,$expiration,$csn);
    set_card($newCard->name,$newCard->number,$newCard->expiration,$newCard->csn);

	?>
 Card has been added Succesfully!</h1>
<?php
 }



if($_SERVER['REQUEST_METHOD'] == 'GET'){
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Add a new Card</h1>
            
            <form action="card.php" method="POST">
                <div class="form-group">
                    <label for="name" class="control-label">name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="number" class="control-label">Card Number</label>
                    <input type="text" name="number" id="number" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="expiration" class="control-label">expiration</label>
                    <input type="text" name="expiration" id="expiration" class="form-control"/>
                </div><br>
                <div class="form-group">
                    <label for="csn" class="control-label">csn</label>
                    <input type="text" name="csn" id="csn" class="form-control"/>
                </div>
                
              
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </form>
        
        </div>
    </div>
</div>


<?php
}
require '../layout/footer.php';
?>