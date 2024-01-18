
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:title" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:description" content="Workload : Workload Project Management Admin  Bootstrap 5 Template" />
	<meta property="og:image" content="https:/workload.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name') }}</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="https://workload.dexignlab.com/xhtml/images/favicon.png" />
	<link href="https://workload.dexignlab.com/xhtml/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="https://workload.dexignlab.com/xhtml/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!-- Style css -->
    <link href="https://workload.dexignlab.com/xhtml/css/style.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		@include('Backend.Partial.TopHeaderMenuBar')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    @include('Backend.Partial.LeftMainNavigationMenuBar')
<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
            @yield('Main Content')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            @include('Backend.Partial.Footer')
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://workload.dexignlab.com/xhtml/vendor/global/global.min.js"></script>
	<script src="https://workload.dexignlab.com/xhtml/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="https://workload.dexignlab.com/xhtml/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="https://workload.dexignlab.com/xhtml/vendor/apexchart/apexchart.js"></script>

	<script src="https://workload.dexignlab.com/xhtml/vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
    <script src="https://workload.dexignlab.com/xhtml/vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="https://workload.dexignlab.com/xhtml/js/dashboard/dashboard-1.js"></script>

	<script src="https://workload.dexignlab.com/xhtml/vendor/owl-carousel/owl.carousel.js"></script>

    <script src="https://workload.dexignlab.com/xhtml/js/custom.min.js"></script>
	<script src="https://workload.dexignlab.com/xhtml/js/dlabnav-init.js"></script>
	<script src="https://workload.dexignlab.com/xhtml/js/demo.js"></script>
    <script src="https://workload.dexignlab.com/xhtml/js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:10,
				nav:false,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: false,
				navText: ['', ''],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},
					800:{
						items:2
					},
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:4
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>

</body>
</html>
