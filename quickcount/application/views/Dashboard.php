<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">

</head>
<body>
<div class="container mt-3">
	<?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-error alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
			<?php endif; ?>
			

		<h5 class="text-center mb-3">Quick Count</h5>

		<?php foreach ($candidates as $cand => $value) : ?>
		<div class="card container col-md-8 justify-content-center mb-2 pt-3 pb-3">
			<div class="row ">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<p class="m-0">Calon : <?= $value['name'] ?></p>
						</div>
						<div class="col-md-12">
							<p class="m-0">Perolehan Suara : <?= $value['earned_vote']?> </p>
						</div>
					</div>
				</div>
				<div class="col-md-2 d-flex align-items-center">
				<a href="<?= site_url('Dashboard/tambah/').$value['id']?>" class="btn btn-sm btn-success" onclick="return confirm('yakin, ingin menambah suara <?= $value['name'] ?>?');">Tambah</a>
				</div>
			</div>
		</div>
		<?php endforeach ; ?>
	
</div>
<script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

</body>
</html>