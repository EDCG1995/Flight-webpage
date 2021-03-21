<?php
require 'layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>Book a Flight!</h1>
            
<!--
            <form action="index.php" method="POST">
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
-->
        <table style="width: 700px">
            <tr>
                <th>From</th>
                <th>Destination</th>
                <th>Date</th>
                <th>Class</th>
                <th>Amount of tickets</th>
            </tr>
            <tr>
                <th></th>
            </tr>
        </table>
        </div>
    </div>
</div>

<?php
require 'layout/footer.php';
?>