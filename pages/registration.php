<?php
require '../systems/log/account.php';
require '../layout/header.php';
require '../lib/functions.php';

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//        if(isset($_POST['username'])){
//        $username = $_POST['username'];
//        }else{
//            $username = '';
//        }
//
//        if(isset($_POST['email'])){
//            $email = $_POST['email'];
//        }else{
//            $email = '';
//        }
//
//        if(isset($_POST['password'])){
//            $password = $_POST['password'];
//        }else{
//            $password = '';
//        }
//
//        $account = get_pets();
//        $newPet = array(
//            'name' => $name,
//            'breed' => $breed,
//            'weight' => $weight,
//            'bio' => $bio,
//            'image' => '',
//            'age' => '',
//        ); 
//        $pets[] = $newPet;
//        
//        pets_to_save($pets);
//        header('Location: /');
//        die;
//    }
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Create a new Account</h1>
            
            <form action="/registation.php" method="POST">
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
                </div>
                <button type="submit" class="btn btn-primary">
                    Add
                </button>
            </form>
        
        </div>
    </div>
</div>


<?php
require '../layout/footer.php';
?>