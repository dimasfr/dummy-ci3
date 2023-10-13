<?php
$this->load->view('template/header_template');
?>

<div class="app-content pt-3 p-md-3 p-lg-4">
	<div class="container-xl">

		<h1 class="app-page-title">Dashboard</h1>

		<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
			<div class="inner">
				<div class="app-card-body p-3 p-lg-4">
					<h3 class="mb-3">Welcome, developer!</h3>
					<div class="row gx-5 gy-3">
						<div class="col-12 col-lg-9">

							<div>This website is only for Assessment purpose only, it won't be published.</div>
						</div><!--//col-->
					</div><!--//row-->
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div><!--//app-card-body-->

			</div><!--//inner-->
		</div><!--//app-card-->

	</div><!--//container-fluid-->
</div><!--//app-content-->

<?php
$this->load->view('template/bottom_template');
?>