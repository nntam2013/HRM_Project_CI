<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Template HRM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
</head>

<body>
    <div class="container" >
    <?php require 'navigator.php';?>  
        <h4>Human resource management</h4>
        <p class="lead">This is place to manage data for administrator</p>
        <hr class="my-2">
        <div class="container">
            <table class="table table-hover table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th width="10%">Id</th>
                        <th width="20%">Name</th>
                        <th width="20%">Address</th>
                        <th width="10%">Sex</th>
                        <th width="15%">Birthday</th>
                        <th width="15%">Phone number</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($name as $key => $attrs): ?>
                            <tr>
                                <td scope="row"><?php echo $attrs['id'] ?></td>
                                <td><?php echo $attrs['name'] ?></td>
                                <td><?php echo $attrs['address'] ?></td>
                                <td><?php if ($attrs['sex']==="1") {
                                            echo "Female";
                                        } elseif ($attrs['sex']==="2") {
                                            echo "Other";
                                        }
                                        else {
                                            echo "Male";
                                        }
                                        ?>
                                </td>
                                <td><?php echo $attrs['birth_day']?></td>
                                <td><?php echo $attrs['phone_number'] ?></td>
                                <td><a name="" id="editBtn<?php echo $attrs['id']?>" class="btn btn-info" href="<?php echo base_url() ?>/showData_controller/ShowDataById/<?php echo $attrs['id'] ?>" role="button" onclick='editData("editBtn<?php echo $attrs['id']?>")'>Edit</a></td>
                                <td><a name="" id="" class="btn btn-danger" href="<?php echo base_url() ?>/showData_controller/DeleteDataById/<?php echo $attrs['id'] ?>" role="button">Delete</a></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
            </table>
        </div>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text"
        class="form-control" name="" id="input_test_ajax" aria-describedby="helpId" oninput='loadScreen()'>
      <small id="helpId" class="form-text text-muted">This is place to test AJAX</small>
    </div>

    <div class="progress">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;" id="progressbar"
            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span id="progressbar_value"></span></div>
    </div>

    <div style='padding:100px'></div>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script>
        function loadScreen() {
            var length_of_input = document.getElementById('input_test_ajax').value.length;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function (){
                if(this.readyState === 4 && this.status === 200){
                    var progressBar = document.getElementById('progressbar');
                    if (Number(this.responseText)>100) {
                        progressBar.attributes['aria-valuenow'] = 100;
                        progressBar.style.width = '100%';
                        document.getElementById('progressbar_value').innerHTML = "Đủ rồi mấy má";
                        return;
                    }
                    progressBar.attributes['aria-valuenow'] = this.responseText;
                    progressBar.style.width = this.responseText+'%';
                    document.getElementById('progressbar_value').innerHTML = this.responseText;
                }
            }
            xhttp.open('GET','<?php echo base_url()?>ajax_test_in_server/changeBar/'+length_of_input,true);
            xhttp.send();
        }
        function editData($btn_id){
            var btn= document.getElementById($btn_id);
            btn.text='Save';
        }
    </script>
    <script>
        window.onload = function()  {
        document.getElementById('input_test_ajax').value='';
        }
    </script>
</body>

</html>