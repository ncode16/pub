<!doctype html>
<?php $url = url()->current();?>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Publinetis</title>
<!-- Meta for Responsive View port -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
        <meta content="" name="author" />

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/layouts/layout4/front/images1/favicon.png') }}" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
      
	<!-- Google fonts -->

	<!-- Icon font (Fpntell0) -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/fontello.css') }}" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />

	<!-- Bootstrap v4.2.1 -->
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/bootstrap.min.css') }}" type="text/css">  
	<!-- Responsive Tab -->
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/easy-responsive-tabs.css') }}" type="text/css">

	<!-- Owl Carousel v2.3.4 -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/owl.carousel.min.css') }}" type="text/css"> 
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/owl.theme.default.min.css') }}" type="text/css"> 
<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css1/all.css') }}" type="text/css"> 
	

	<!-- Bootstrap Datepicker -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

  <!-- <link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" /> -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Custom Comman css file -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/style.css') }}" type="text/css"> 
	<!-- Responsive css file -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/query.css') }}" type="text/css"> 

</head>

<?php 
$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$keys = substr(str_shuffle(str_repeat($pool, 10)), 0, 10);
?>

<body>

<!--Header-->
  <header class="sticky-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg p-0">
        <div class="right-nav">
           <ul class="navbar-nav">
          <?php if(empty(session('user_name'))){ ?>
            <li class="nav-item">
              <a class="nav-link  <?php if(strpos($url, 'login') !== false) echo 'active';?>" href="{{ url('login') }}"><i class="icon-locked-padlock d-block d-md-none"></i><span class="d-none d-md-inline-block">Login</span></a>
            </li>
          <?php  } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('logout') }}"><i class="icon-locked-padlock d-block d-md-none"></i><span class="d-none d-md-inline-block">Logout</span></a>
            </li>
          <?php  } ?>
          <?php if(empty(session('user_name'))){ ?>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('register') }}"><i class="icon-signup d-block d-md-none"></i><span class="d-none d-md-inline-block"><i class="fa fa-user"></i>&nbsp;Signup</span></a>
            </li>
          <?php  } ?>
        </ul>
        </div>
        <div class="left-nav">
          
           <?php $user_type = session('login_type');
          if($user_type == 'admin'){
            $url = 'dashboard_admin';
          }else{
            $url = '/';
          }
          ?>
          <a class="navbar-brand" href="{{ url($url) }}">
          <img src="{{ asset('assets/layouts/layout4/front/images1/logo.png') }}"></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse mr-auto" id="navbarsExample07">
            <ul class="navbar-nav ">
<?php if(empty(session('user_name'))){ ?>
               <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'solution') !== false) echo 'active';?>" href="{{ url('/solution') }}">Solution</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'pricing') !== false) echo 'active';?>" href="{{ url('/pricing') }}">Pricing</a>
    </li>
    <?php } ?>
    <?php if(!empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link <?php if(strpos($url, 'dashboard') !== false) echo 'active';?>" href="{{ url('dashboard') }}">Dashboard</a>
    </li>
    <?php } ?>
    <?php if(empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'support') !== false) echo 'active';?>" href="{{ url('/support') }}">Support</a>
    </li>
    <?php } ?>
    

    <?php if(!empty(session('user_name')) && session('login_type') != 'interviewee'){ ?>
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'interview') !== false) echo 'active';?>" href="{{ url('interview') }}/<?php echo $keys ?>">New interview</a>
    </li>
    <?php  } ?>

    <?php if(!empty(session('user_name')) && session('login_type') != 'admin'){ ?>
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'profile') !== false) echo 'active';?>" href="{{ url('profile') }}">My Profile</a>
    </li>
  <?php  } ?>

 <?php if(!empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link <?php if(strpos($url, 'interviewees') !== false) echo 'active';?>" href="{{ url('interviewees') }}">Interviewees</a>
    </li>
    <?php } ?>


            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
<!-- /Header-->


