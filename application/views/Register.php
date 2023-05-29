<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>

    <section class="vh-100 bg-image overflow-auto"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 ">
        <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5 ">
                <h2 class="text-uppercase text-center text-secondary mb-5">Create an account</h2>
                
                <!-- tag form regis menggunakan bootstrap-->
                <form class="form" action="<?php base_url()?>ControlRegister/tambahPengguna" method="post">

                    <div class="form-outline mb-4">
                    <input type="text" name="txtName" id="txtName" class="form-control form-control-lg" />
                    <label class="form-label text-secondary" for="form3Example1cg">Your Name</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="email" name="txtEmail" id="txtEmail" class="form-control form-control-lg" />
                    <label class="form-label text-secondary" for="form3Example3cg">Your Email</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="text" name="txtNotel" id="txtNotel" class="form-control form-control-lg" />
                    <label class="form-label text-secondary" for="form3Example3cg">your phone number</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="txtPassword" id="txtPassword" class="form-control form-control-lg" />
                    <label class="form-label text-secondary" for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="txtConfirmPassword" id="txtConfirmPassword" class="form-control form-control-lg" />
                    <label class="form-label text-secondary" for="form3Example4cdg">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="checkBox" />
                    <label class="form-check-label text-secondary" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u class="text-secondary">Terms of service</u></a>
                    </label>
                    </div>

                    <div class="d-flex justify-content-center">
                    <input type="submit" class="btn btn-secondary btn-lg" id="btnSubmit" value="Register",> 

                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="ControlLogin"
                        class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- ajax & jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(function () {
            //Mengvalidasi password dari inputan menggunakan id
            $("#btnSubmit").click(function () {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtConfirmPassword").val();
                if(password=="" || password == ""){ //password tidak boleh kosong
                    alert("Passwords Cannot Empty");
                    return false;
                }
                if (password != confirmPassword) { //password harus sama
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script>

</body>
</html>