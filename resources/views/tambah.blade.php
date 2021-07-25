<!DOCTYPE html>
<html>
<head>

</head>
<body>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

	
	
	<!-- <br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link type="text/css" href="{{ asset('/o/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link type="text/css" href="{{ asset('/o/vendor/font-awesome-4.7/css/font-awesome.min.css') }}"  rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link type="text/css" href="{{ asset('/o/vendor/select2/select2.min.css') }}"   rel="stylesheet" media="all">
    <link type="text/css" href="{{ asset('/o/vendor/datepicker/daterangepicker.css') }}"  rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link type="text/css" href="{{ asset('/o/css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
	
        <div class="wrapper wrapper--w790">
		<a href="/pegawai" type="button" class="btn btn--radius-2 btn--green"> Kembali</a>
		<br>
		<br>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
    
                <div class="card-body">
                    <form action="/pegawai/store" method="POST">
					{{ csrf_field() }}
                        <div class="form-row m-b-55">
						<div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" required name="nama" ">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jabatan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text"  required name="jabatan" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Umur</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" required name="umur">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" required name="alamat">
                                </div>
                            </div>
                            </div>
							</div>
                            
                            <button class="btn btn--radius-2 btn--red" value="Simpan Data" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script type="text/javascript" src="{{ asset('/o/vendor/jquery/jquery.min.js') }}" ></script>
    <!-- o/vendor JS-->
    <script type="text/javascript" src="{{ asset('/o/vendor/select2/select2.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/o/vendor/datepicker/moment.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('/o/vendor/datepicker/daterangepicker.js') }}" ></script>

    <!-- Main JS-->
    <script type="text/javascript" src="{{ asset('/o/js/global.js') }}" ></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->