<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="Assets/Stylesheets/main.css">
    </head>
    <body>
        <!-------------HEADER---------------->    
        <?php include("header.php");?>

        <!--FORM VARIABLES------>

        <?php $name = $nameERR = $email = $emailERR = "";?>
        <!--------------------FORM VALIDATION---------------------------------------->
        
        <?php 
            if (isset($_POST["submit"])) {
                validation ();
            }
               //----------Name Validation-----------//
            function validation () {
                //-------check for no entry-------//
                global $nameERR;
                global $emailERR;
                if (empty($_POST["formName"])) {
                    $nameERR = "Name is required";
                } 
                else {
                    //--checking for anything that is not letters or spaces.--//
                    $name = test_input($_POST["formName"]);
                    if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
                        $nameERR = "Letters and spaces only. ";
                    }
                }
              
                //-------------Email Validation-----------------//
                    //------Check for no entry--------------//
                if (empty($_POST["formEmail"])) {
                    
                    $emailERR = "Email address is required";
                } 
                else {
                    //-----checking for RFC2822 Validation-----//
                    $email = test_input($_POST["formEmail"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailERR = "Invalid email";
                        echo $emailERR;
                    }
                }
            }
            //sanitization function//
            function test_input($input){
                //--remove whitespace from sides of string--//
                $input = trim($input);
                //--remove slashes from string--//
                $input = stripslashes ($input);
                //--convers &, ", ', >, and < to inert characters--//
                $input = htmlspecialchars ($input);
                return $input;
            }
            ?>
            <?php
            //=======Potential success message=======//
                // <div class="alert alert-success" role="alert">
                // <h4 class="alert-heading">Well done!</h4>
                // <p>Your enquiry has been successfully sent. We will contact you at $POST["email"] soon.</p>
                // <hr>
                // //<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                // </div>

                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
                $from = 'From: email.com'; 
                $to = 'email@gmail.com'; 
                $subject = 'Email Inquiry';
                $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                if ($_POST['submit']) {
                    if (mail ($to, $subject, $body, $from)) { 
                    $success = "Message successfully sent";
                    } else {
                        $success = "Message Sending Failed, try again";
                    }
                }
            ?>
        


    <!---------------------------------------------------Contact Card-------------------------------------------------------------------->
        <div class="forbackground">
            <div class="card-container">
                <div class="card">
                    <h4 class="card-header text-center py-4">
                        <strong>Contact us</strong>
                    </h4>

                    <br>

                    <div class="card-body pt-0">
                        <form class="text-center" style="color: #000;" method= "post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="md-form">
                                <label for="formName">Name</label>
                                <input type="text" name="formName" class="form-control" required>
                                <span class="error" style="color: #FF0000;"><?php echo $nameERR;?></span>
                            </div>

                            <br>

                            <div class="md-form">
                                <label for="formEmail">E-mail</label>
                                <input type="email" name="formEmail" class="form-control" required>
                                <span class="error" style="color: #FF0000;"><?php echo $emailERR;?></span>
                            </div>

                            <br><br>

                            <span>Subject</span>
                            <select class="mdb-select">
                                <option value="" disabled>Choose option</option>
                                <option value="1" seltected>Question</option>
                                <option value="2">Feedback</option>
                                <option value="3">Request</option>
                            </select>

                            <br><br>

                            <div class="md-form">
                                <textarea type="text" id="formMessage" class="form-control md-textarea" rows="3"></textarea>
                                <label for="formMessage">Message</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCopy">
                                <label class="form-check-label" for="formCopy">Send me a copy of this message</label>
                            </div>
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect" name="submit" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>