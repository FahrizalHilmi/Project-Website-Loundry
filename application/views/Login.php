<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Document</title>
</head>
<body>
    <section class="h-100  overflow-auto" style="background-color: #eee;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
      
                      <div class="text-center my-5">
                        <h4 class="mt-1 mb-5 pb-1">We are The ELaundry</h4>
                      </div>
                      
                      <!-- form login -->
                      <form action="<?php base_url()?>ControlLogin/Cek_Login" method="post">
                        <p>Please login to your account</p>
                        
                        <!-- Input username-->
                        <div class="form-outline mb-4">
                          <input type="text" name="username" id="form2Example11" class="form-control"
                            placeholder="Username" />
                          <label class="form-label" for="form2Example11">Username</label>
                        </div>
                        
                        <!--input password-->
                        <div class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example22" class="form-control" 
                          placeholder="Password" />
                          <label class="form-label" for="form2Example22">Password</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">  
                        <button class="btn btn-secondary btn-block fa-lg mb-3" type="submit">Log in</button>
                          <a class="text-muted" href="#!">Forgot password?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">Don't have an account?</p>
                          <a href="ControlRegister"><button type="button" class="btn btn-secondary">Create new</button></a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center bg-secondary">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">We are more than just a laundry company</h4>
                      <p class="small mb-0">E-Laundry adalah laundry dengan sistem online, di masa Pandemi yang sudah semakin membaik, Aktivitas kerja dan diluar rumah semakin sering dilakukan dan tidak sedikit pula yang tidak memiliki waktu yang cukup untuk membersihkan dan merapikan pakaian. Sehingga dengan adanya Laundry kita akan semakin terbantu.kami Hadir dimasa Pandemi untuk membantu menyelesaikan masalah laundry anda dengan cepat serta ringan dikantong. Terdapat berbagai layanan yang kami sediakan diantaranya adalah dry clean untuk semua pakaian.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>