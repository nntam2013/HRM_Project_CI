<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <title>HRM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
</head>

<body>
    <?php require 'navigator.php';?>
        <div class="container">
            <h4>Add employee information</h4>
            <p class="lead">This is place to add more data for administrator</p>
            <hr class="my-2">
            
            <form action="addData_controller/AddData" method="post" enctype="multidata/form-data">
            <div class="form-group">
                <label for="">Full name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            

            <div class="form-group">
                <div class="row">
                    <div class="col-md">
                        <label for="">Date of Birth</label>
                        <input type="date" name="birth_day" class="form-control" >
                    </div>
                    
                    <div class="col-md">
                        <label for="">Sex</label>
                        <div class="form-check form-check-inline form-control">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sex" id="male" value="male"> Male
                            </label>
                            &NonBreakingSpace;
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sex" id="female" value="female"> Female
                            </label>
                            &NonBreakingSpace;
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="sex" id="other_sex" value="other"> Other
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="form-group">
                <label for="">Phone number</label>
                <input type="tel" name="phone_number" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control-file" name="img_url" id="" placeholder="" aria-describedby="fileHelpId">
            </div>
            <div class="row">
                <div class="col-md"></div>
                <div class="col-md">
                    <div class="row">
                        <div class="col-md-5"></div>
                        <button type="submit" class="btn btn-primary col-md-3">Submit</button>&NonBreakingSpace;
                        <a name="" class="btn btn-danger col-md-3" href="<?php echo base_url()?>/showData_controller" role="button">Cancel</a>
                    </div>
            </div>
            <div style="padding-bottom:50px;"></div>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>

</html>