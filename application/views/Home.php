<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ELaundry</title>

        <!-- Import Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">ELaundry</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                   
                    <!-- table unorder list -->
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li> 
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="ControlLogin">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">E-Laundry Bandung</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">dengan senang hati membantu Anda dengan layanan laundry melalui layanan terbaik kami </p>
                        <a class="btn btn-secondary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-secondary" id="about">
            <h1 class="h1 text-center py-5 text-primary">About Us</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="assets/image/cloth2.jpg" alt="" class="rounded-circle text-center testimoni-pic">
                    </div>
                    <div class="col align-items-center testimoni-text">
                        <p class="text-primary testimoni-paragraph" >" E-Laundry adalah laundry dengan sistem online, di masa Pandemi yang sudah semakin membaik, Aktivitas kerja dan diluar rumah semakin sering dilakukan dan tidak sedikit pula yang tidak memiliki waktu yang cukup untuk membersihkan dan merapikan pakaian. Sehingga dengan adanya Laundry kita akan semakin terbantu.kami Hadir dimasa Pandemi untuk membantu menyelesaikan masalah laundry anda dengan cepat serta ringan dikantong. Terdapat berbagai layanan yang kami sediakan diantaranya adalah dry clean untuk semua pakaian. "</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5"> 
                <h2 class="text-center mt-0">Siap melayani anda</h2>
                <hr class="divider"/>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-gem fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Top Notch Resources</h3>
                            <p class="text-muted mb-0">Kami menggunakan alat dan sumber daya yang dapat menunjang kepuasan pelanggan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-laptop fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Easy To Access</h3>
                            <p class="text-muted mb-0">Website untuk mempermudah anda menggunakan layanan kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-globe fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Wide variety Resources</h3>
                            <p class="text-muted mb-0">kami mempelajari dari banyak referensi dan paham mengenai kualitas pakaian.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-heart fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Kami dengan senang hati senang melihat semua orang puas dengan pelayanan kami.</p>
                        </div>
                   
                    </div>
                </div>
                
            </div>
        </section>
       
        <section class="page-section bg-secondary text-white">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row">
                    <!--Button untuk memudahkan customer bergabung-->
                    <div class="col">
                        <h2 class="mb-4 text-center">Mari bergabung untuk memudahkan mencuci pakaian kalian!</h2>
                        <p class="text-center">Mulai gunakan layanan kami untuk menyelesaikan cucian Anda secepat mungkin</p>
                        <a href="<?= base_url('ControlLogin') ?>">
                            <button class="btn btn-primary">Try Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>



    </body>
</html>
