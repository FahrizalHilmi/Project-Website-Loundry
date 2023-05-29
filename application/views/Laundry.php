<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
	
<style>
table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity));
color: white;
}
</style>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>
<body>
	

<!-- <?php 
echo "<pre>";		
echo print_r($_SESSION);
echo "</pre>";

?> -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary py-3" id="readNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="ControlHome" style="color: #ffffff;">Reference App</a>
            <button class="navbar-toggler navbar-toggler-right" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link" href="ControlAdmin" id="admin" style="color: #ffffff ;">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" id="add" style="color: #ffffff ;"data-toggle="modal" data-toggle="modal" data-target="#addLaundry" style="color: #769fcd ;">Add Laundry</a></li>
                    <li class="nav-item"><a class="nav-link" href="ControlLogin/logout" style="color: #ffffff ;">Logout</a></li>
                </ul>
            </div>
			
        </div>
    </nav>
	<div class="text-center my-5">
        <h4 class="mt-1 mb-5 pb-1">We are The ELaundry</h4>
    </div>
	<section>
	<div class="container bg-secondary">
	<div class="row align-items-center table-responsive">
		<form id="formCucian" class="bg-primary">
			<div>
					<table id="DataTable" border="1" class="text-center ">
						<thead class="dt-head-right">	
							<tr>
								<th class="col-sm text-center">NO</th>
								<th class="col-sm text-center">Order ID</th>
								<th class="col-sm text-center">Customer</th>
								<th class="col-sm text-center">Jenis</th>
								<th class="col-sm text-center">Jumlah</th>
								<th class="col-sm text-center">Berat</th>
								<th class="col-sm text-center">Total</th>
								<th class="col-sm text-center">Tanggal</th>
								<th class="col-sm text-center">Status</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($tb_laundry as $u){ 
								
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $u->id ?></td>
								<td><?php echo $u->customer	?></td>
								<td><?php echo $u->jenis ?></td>
								<td><?php echo $u->jumlah ?> Item</td>
								<td><?php echo $u->berat ?> Kg</td>
								<td>Rp.<?= $u->berat * 7000; ?></td>
								<td> <?php echo $u->tanggal ?> </td>
								<td>
								<?php
									if($u->status == "selesai"){
										echo "<a type='button' value='Edit' class='btn btn-success' >$u->status</a>";
									}else{
										echo"<a type='button' class='btn btn-secondary'  >$u->status</a>";
									} 
								?>
								</td>
								
									
								
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
	    </table>
		<!-- Button trigger modal -->


		<?php
			if ($_SESSION['status_akun'] === 'user') {
				echo '<script>$("#admin").hide();</script>';
			}else{
				echo '<script>$("#add").hide();</script>';

			}
			
		?>

		<script>
			$(document).ready(function(){
				$('#DataTable').DataTable();
			});
		</script>
        </form>
	</div>
	</div>
		</section><br>
	        <section class="page-section bg-secondary text-white" id="services" >
            <div class="container" > 
                <h2 class="text-center ">Siap melayani anda</h2>
                <hr class="divider"/>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-gem fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Top Notch Resources</h3>
                            <p class=" mb-0">Kami menggunakan alat dan sumber daya yang dapat menunjang kepuasan pelanggan.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-laptop fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Easy To Access</h3>
                            <p class=" mb-0">Website untuk mempermudah anda menggunakan layanan kami.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-globe fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Wide variety Resources</h3>
                            <p class=" mb-0">kami mempelajari dari banyak referensi dan paham mengenai kualitas pakaian.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <!-- icon bootstrap-->
                            <div class="mb-2"><i class="bi-heart fs-1 text-secondary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class=" mb-0">Kami dengan senang hati senang melihat semua orang puas dengan pelayanan kami.</p>
                        </div>
                   
                    </div>
                </div>
                
            </div>
        </section>
	<!-- Modal -->
	<div class="modal fade" id="addLaundry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Menambahkan Laundry</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form class="form" action="<?php base_url()?>ControlLaundry/tambah_aksi/" method="post">
				<div class="form-group">
					<label>Jenis</label>
					<input type="text" class="form-control" name="jenis">
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="text" class="form-control" name="jumlah">
				</div>
				<div class="form-group">
					<label>Berat</label>
					<input type="text" class="form-control" name="berat">
				</div>
				<br>
				<button type="submit" class="btn btn-secondary">Submit</button>
			</form>
			</div>
		</div>
		</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>