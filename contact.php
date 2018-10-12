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
        <?php include("header.php"); ?>
    <div class="forbackground">
        <div class="card-container">
            <div class="card">
                <h4 class="card-header text-center py-4">
                    <strong>Contact us</strong>
                </h4>
                <div class="card-body pt-0">
                    <form class="text-center" style="color: #000;" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="md-form mt-3">
                            <label for="materialContactFormName">Name</label>
                            <input type="text" id="materialContactFormName" class="form-control">
                        </div>

                        <br>

                        <div class="md-form">
                        <label for="materialContactFormEmail">E-mail</label>
                            <input type="email" id="materialContactFormEmail" class="form-control">
                        </div>

                        <br>

                        <span>Subject</span>
                        <select class="mdb-select">
                            <option value="" disabled>Choose option</option>
                            <option value="1" seltected>Question</option>
                            <option value="2">Feedback</option>
                            <option value="3">Request</option>
                        </select>

                        <br><br>

                        <div class="md-form">
                            <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                            <label for="materialContactFormMessage">Message</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                            <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
                        </div>
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect" type="submit">Send</button>
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