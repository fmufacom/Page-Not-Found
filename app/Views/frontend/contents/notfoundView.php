<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<meta name="author" content="<?= DEV_AUTHOR; ?>">
	<meta name="generator" content="<?= DEV_FRAMEWORK . ' v' . CodeIgniter\CodeIgniter::CI_VERSION . ' | ' . DEV_FRONTEND . ' | ' . DEV_BACKEND; ?>">
	<meta http-equiv="refresh" content="60;url=<?= base_url() ?>" />
	<!-- <meta http-equiv="refresh" content="1800"> 30 minutes -->
	<title><?= esc($pageTitle); ?></title>
	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<!-- Bootstrap v5.1.1 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<!-- Bootstrap icons v1.5.0 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- Font awesome v5.15.4 -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.css"> -->
	<!-- AdminLTE v3.1.0 -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css"> -->
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@5.0.4/bootstrap-4.min.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr-min@1.0.0/build/toastr.css">
	<!-- flag-icon-css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/css/flag-icon.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css">
	<!-- Icheck bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
	<!-- AdminLTE v3.1.0 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Google Font: Lobster -->
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" type="text/css"> -->
	<!-- Customize style -->
	<style type="text/css">
		.container {
			margin-top: 10%;
		}
	</style>
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

	<div class="container">
		<img class="d-block mx-auto mb-3" src="/assets/img/404.png" alt="404 Page Not Found">
		<h1 class="display-5 fw-bold">Page Not Found</h1>
		<p class="lead">Sorry, the page you are looking for could not be found.</p>
		<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
			<a href="/" class="btn btn-primary btn-lg fw-bold border-white px-4 gap-3">
				<i class="bi bi-house-door"></i> Go Home
			</a>
			<a onclick="history.back(-1)" class="btn btn-danger btn-lg fw-bold border-white px-4">
				<i class="bi bi-backspace"></i> Go Back
			</a>
		</div>
	</div>

	<!-- jQuery v3.6.0 -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->
	<!-- Bootstrap v5.1.1 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<!-- Font awesome v5.15.4 -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/js/all.min.js"></script> -->
	<!-- Date-range-picker -->
	<script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>
	<!-- AdminLTE v3.1.0 -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script> -->
</body>

</html>
