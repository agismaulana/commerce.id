<?php
$title = "Register";
include "../template/templateheader.php";
include "../logic/logicregister.php";
include "../logic/logicpermission.php";
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12 d-none d-lg-block"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Commerce Login</h1>
                                    </div>
                                    <form method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Enter Your Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <input type="password" class="form-control form-control-user col-md-5 ml-2 mr-4" id="password" name="password" placeholder="Password...">
                                                <input type="password" class="form-control form-control-user col-md-5 ml-5" id="repeat" name="repeat" placeholder="Repeat Password...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <textarea class="form-control" name="address" id="address" cols="30" rows="10">
                                        </textarea>
                                        </div>
                                        <div>
                                            <button name="tombol" class="btn btn-primary btn-user btn-block">
                                            Register
                                            </button>
                                        </div>
                                    </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="../index/index.php">Home</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="login.php">Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

include "../template/footer.php";
include "../template/templatefooter.php";

?>
