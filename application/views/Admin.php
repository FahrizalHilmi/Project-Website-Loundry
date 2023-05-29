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
            <a class="navbar-brand" href="ControlHome" style="color: #ffffff ;">Reference App</a>
            <button class="navbar-toggler navbar-toggler-right" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link" href="ControlLaundry" id="admin" style="color: #ffffff ;">Laundry</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="color: #ffffff ;" data-toggle="modal" data-toggle="modal" data-target="#addLaundry" style="color: #769fcd ;">Add Laundry</a></li>
                    <li class="nav-item"><a class="nav-link" href="ControlLogin/logout" style="color: #ffffff ;">Logout</a></li>
                </ul>
            </div>
			
        </div>
    </nav>
	<div class="text-center my-5">
        <h4 class="mt-1 mb-5 pb-1">We are The ELaundry</h4>
    </div>
	<section>

	<div class="container">
	<div class="row align-items-center table-responsive">
		<form id="formCucian" class="bg-primary">
			<div>
					<table id="DataTable" border="1" class="text-center">
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
								<th class="col-sm  text-center" colspan="2">Action</th>
								<th></th>
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
								<td>
								<?php echo $u->tanggal
									
								?>
								</td><td>
								<?php
									if($u->status == "selesai"){
										echo "<label type='text' class='btn btn-success'>$u->status</label>";
									}else{
                                        echo "<label type='text' class='btn btn-secondary'>$u->status</label>";
										
									} 
								?>
								</td>
								<td>
									<a type="button" class="btn btn-secondary" data-toggle="modal" data-toggle="modal" data-target="#EditLaundry<?= $u->id?>">Edit</a></li>
								</td>
								<td >
									<a type="button" class="btn btn-danger"  href="<?php echo base_url('ControlAdmin/hapus/'.$u->id);?>" onClick="return confirm('Apakah Anda Yakin?')" >Hapus</a>
								</td>
					
								</tr>
								<!-- Modal -->
								<div class="modal fade" id="EditLaundry<?= $u->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Edit data Laundry</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
											<form class="form" action="<?php base_url()?>ControlAdmin/update/<?php echo $u->id ?>" method="post">
												<div class="form-group">
													<label>Jenis</label>
													<input type="text" class="form-control" name="customer" value="<?php echo $u->customer ?>">
												</div>
												<div class="form-group">
													<label>Jenis</label>
													<input type="text" class="form-control" name="jenis" value="<?php echo $u->jenis ?>">
												</div>
												<div class="form-group">
													<label>Jumlah</label>
													<input type="text" class="form-control" name="jumlah" value="<?php echo $u->jumlah ?>">
												</div>
												<div class="form-group">
													<label>Berat</label>
													<input type="text" class="form-control" name="berat" value="<?php echo $u->berat ?>">
												</div><br>
												<div class="form-group">
													<label>Sratus</label>
													<select name="status" id ="status" class="form-select">
														<option value="selesai">selesai</option>
														<option value="proses" >proses</option>
													</select>
												</div><br>
											
												<br>
													<button type="submit" class="btn btn-secondary">Update</button>
											</form>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</tbody>
					</table>
				</div>
	    </table>
		<!-- Button trigger modal -->


		<?php
			if ($_SESSION['status_akun'] === 'user') {
				echo '<script>$("#admin").hide();</script>';
			}
			
		?>

		<script>
			$(document).ready(function(){
				var table = $('#DataTable').DataTable({
					ajax: 'https://api.myjson.com/bins/qgcu',
					createdRow: function(row, data, dataIndex){
						// If name is "Ashton Cox"
						if(data[0] === 'Ashton Cox'){
							// Add COLSPAN attribute
							$('td:eq(1)', row).attr('colspan', 3);

							// Hide required number of columns
							// next to the cell with COLSPAN attribute
							$('td:eq(2)', row).css('display', 'none');
							$('td:eq(3)', row).css('display', 'none');

							// Update cell data
							this.api().cell($('td:eq(1)', row)).data('N/A');
						}
					}
				});
				
			});
		</script>
        </form>
	</div>
	</div>
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
				<form class="form" action="<?php base_url()?>ControlAdmin/tambah_aksi/" method="post">
					<div class="form-group">
						<label>Customer</label>
						<input type="text" class="form-control" name="customer">
					</div>
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
	</div>
	
		
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>