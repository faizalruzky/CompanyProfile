<!doctype html>
<html lang="en">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="_token" content="{{ app('Illuminate\Encryption\Encrypter')->encrypt(csrf_token()) }}" />
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../../../assets/dashboard/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard SMS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../../../assets/dashboard/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../../../assets/dashboard/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../../../assets/dashboard/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../../assets/dashboard/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../../assets/dashboard/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body id="appdashboard-layout">
    @yield('content-dashboard')
    @yield('content-hseaccident')
    
</body>
   <!--   Core JS Files   -->
    <script src="../../../assets/dashboard/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../../../assets/dashboard/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="../../../assets/dashboard/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script src="../../../assets/dashboard/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../../../assets/dashboard/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="../../../assets/dashboard/js/light-bootstrap-dashboard.js"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="../../../assets/dashboard/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>