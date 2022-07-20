<?php session_start(); 
include 'inc/functions.php';
$id = $_GET['id'] ?? '';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>University</title>
  </head>
<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>
                            <a href="admin.php" class="float-center btn btn-danger">Back</a>
                            Add / View Department
                            <a href="javascript:void(0)" class="add-more-form float-end btn btn-primary">Add new Department</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="tasks.php" method="POST">
                        
                            <div class="main-form mt-3 border-bottom">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Name</label>
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Undergraduate Fee</label>
                                            <input type="text" name="underfee[]" class="form-control" required placeholder="Enter Undergraduate Fee">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Postgraduate Fee</label>
                                            <input type="text" name="postfee[]" class="form-control" required placeholder="Enter Postgraduate Fee">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-2">
                                            <label for="">Status</label>
                                            <select name="underorpost[]" id="cars">
                                                <option value=0>Undergraduate</option>
                                                <option value=1>Postgraduate</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="paste-new-forms"></div>
                            <input type="hidden" name="action" id="action" value=<?php echo $id; ?>>
                            <button type="submit" name="save_multiple_data" class="btn btn-primary">Save Department</button>
                        </form>

                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Under Fees</th>
                        <th scope="col">Post Fees</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    // $id = $_GET['id'];
                    $data = getCourses($id); 
                    if (count($data) > 0) {
                        $length = count($data);
                        for ($i = 0; $i < $length; $i++) {
                    ?>
                        <tr>
                        <th scope="row"><?php echo $data[$i]['id']; ?></th>
                        <td><?php echo $data[$i]['p_name']; ?></td>
                        <td><?php echo $data[$i]['under_fees']; ?></td>
                        <td><?php echo $data[$i]['post_fees']; ?></td>
                        <td><?php echo $data[$i]['under_post'] == 0 ? 'undergraduate' : 'postgraduate'; ?></td>
                        <td> <a class="button button-outline" href="tasks.php?id=<?php echo $data[$i]['id']; ?>&key=dep&uniid=<?php echo $id; ?>">Delete</a> </td>    
                    </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.main-form').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form mt-3 border-bottom">\
                                <hr>\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Name</label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Undergraduate Fee</label>\
                                            <input type="text" name="underfee[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Postgraduate Fee</label>\
                                            <input type="text" name="postfee[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                        <label for="">Status</label>\
                                            <select name="underorpost[]" id="cars">\
                                                <option value=0>Undergraduate</option>\
                                                <option value=1>Postgraduate</option>\
                                            </select>\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

</body>
</html>