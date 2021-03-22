<?php
require '../layout/header.php';
require '../systems/log/account.php';
require '../systems/log/user.php';
require '../lib/functions.php';

 if($_SERVER['REQUEST_METHOD'] == 'POST'): //When user presses the add button
        //variable declaration
    $username;
    $email;
    $password;
    $name;   
    $last_name;
    $address;
    $country;
    $passport;
    $zip;

    //Account creation.
    isset($_POST['username'])   ? $username = $_POST['username'] : $username = '';
    isset($_POST['email'])      ? $email = $_POST['email']       : $email = '';
    isset($_POST['password'])   ? $password = $_POST['password'] : $password = '';
    $newAccount = new Account($username, $password, $email);
    set_account($newAccount->username, $newAccount->password, $newAccount->email);

    //User Creation
    isset($_POST['name'])       ? $name = $_POST['name'] : $name = '';
    isset($_POST['lastname'])   ? $last_name = $_POST['lastname'] : $last_name = '';
    isset($_POST['address'])    ? $address = $_POST['address'] : $address = '';
    isset($_POST['country'])    ? $country = $_POST['country'] : $country = '';
    isset($_POST['passport'])   ? $passport = $_POST['passport'] : $passport = '';
    isset($_POST['zip'])        ? $zip = $_POST['zip']  : $zip = '';

    $newUser = new User($name, $last_name, $address, $country, $passport, $zip);
    set_user($newUser->name, $newUser->last_name, $newUser->address, $newUser->country, $newUser->passport, $newUser->zip, $newAccount->email);
?>
<h1>Account created Succesfully!</h1>
<?php
 endif;



if($_SERVER['REQUEST_METHOD'] == 'GET'):
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Create a new Account</h1>
            
            <form action="registration.php" method="POST">
                <div class="form-group">
                    <label for="Username" class="control-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="text" name="password" id="password" class="form-control"/>
                </div><br>
                <h2>Finishing touches! Please enter the next fields to create an account!</h2>
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="lastname" class="control-label">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="country" class="control-label">Country</label>
                    <input type="text" name="country" id="country" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="passport" class="control-label">Passport</label>
                    <input type="text" name="passport" id="passport" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="zip" class="control-label">Zip Code</label>
                    <input type="text" name="zip" id="zip" class="form-control"/>
                </div>
              
                <button type="submit" class="btn btn-primary">
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