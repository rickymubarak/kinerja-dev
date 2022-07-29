<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Style dari bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    {{-- end style bootsrap --}}
    
<!-- Css Custome -->
    <link rel="stylesheet" href="{{ $style }}">

<!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

<!-- Icon Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

    <title>Pelaporan Kinerja</title>
</head>
<body>

{{-- sidebar baru --}}
    <div class="grid">
        <div style="dislay: flexbox; justify-content:space-around;"><a class="btn btn-primary g-col-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Menu</a></div>
            <h1 style="text-align: center;"> CAPAIAN KINERJA ASN PEMERINTAH KOTA PONTIANAK </h1>
    </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Side Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
            <div class="navbar mt-3"> 
                <ul class="" aria-labelledby="">
                <li><a class="nav-link active" href="{{ "home" }}">Home</a></li><br>
                <li><a class="nav-link" href="{{ "rencana" }}">Rencana</a></li><br>
                <li><a class="nav-link" href="{{ "laporan" }}">Laporan</a></li><br>
                <li><a class="nav-link" href="#">Rekapan</a></li>
                </ul>
            </div>
            </div>
        </div>

<!-- Halaman sidebar -->

{{-- <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"> </i> </div>
    <div class="fw-bold">LAPORAN CAPAIAN KINERJA ASN PEMERINTAH KOTA PONTIANAK</div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="{{ "home" }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Laporan Kinerja</span> </a>
            <div class="nav_list"> 
                <a href="{{ "home" }}" class="nav_link active"> 
                    <i class='bx bx-grid-alt nav_icon'></i> 
                    <span class="nav_name">Home</span> </a> 
                <a href="{{ "rencana" }}" class="nav_link"> 
                    <i class='bx bx-user nav_icon'></i> 
                    <span class="nav_name">Rencana</span> </a> 
                <a href="{{ "laporan" }}" class="nav_link"> 
                    <i class='bx bx-message-square-detail nav_icon'></i> 
                    <span class="nav_name">Laporan</span> </a> 
                <a href="{{ "validasi" }}" class="nav_link">   
                    <i class='bx bx-bookmark nav_icon'></i> 
                    <span class="nav_name">Rekapan</span> </a>  
            </div>
        </div> <a href="#" class="nav_link"> 
            <i class='bx bx-log-out nav_icon'></i> 
            <span class="nav_name">Logout</span> </a>
    </nav>
</div> --}}
{{-- <div id="content">
    <button type="button" id="sidebarCollapse" class="navbar-btn">
        <span></span>
        <span></span>
        <span></span>
    </button>
</div> --}}

<!-- akhir halaman sidebar -->

<!-- halaman konten -->

    @yield('content')

<!-- akhir halaman konten -->

{{-- Menu --}}
<script>
    $(document).ready(function(){
        $('a').click(function() {
            $('a.nav-link.active').removeClass("active");
            $(this).addClass('active');
        });
    });
</script>

<!-- Js boostrp 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer class="bg-success text-white text-center pb-2">
    <p>All Reserverd <i class="bi bi-c-circle-fill"></i> by <a href="#" class="text-white fw-bold" style="text-decoration: none;">PJLP IT BKPSDM</a></p>

   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</footer>

</html>