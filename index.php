
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
    <?php
        if(isset($_POST['add'])) {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $cell= $_POST['cell'];
            $uname= $_POST['uname'];
            $msg='';
            if (empty($name) || empty($email) || empty($cell) || empty($uname)) {
                $msg= "<p class=\"alert alert-danger\">All Fields are required <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            } else {
                $msg= "<p class=\"alert alert-success\">Data Stable <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
            }
        }
    
    ?>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h2>Sign Up Form</h2>
                                <?php
                                if(isset($msg)) {
                                    echo $msg;
                                }
                                ?>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="">E-Mail</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Cell</label>
                                        <input type="text" class="form-control" name="cell">
                                    </div>
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" class="form-control" name="uname">
                                    </div>
                                    <div class="form-group">
                                        <p class="text-center">
                                        <input type="submit" class="btn btn-primary" name="add" value="Sign Up">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets//js/popper.min.js"></script>
        <script src="assets//js/bootstrap.min.js"></script>
        <script></script>
    </body>
</html>

