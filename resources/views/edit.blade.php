<!-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama    :<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan :<input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur    :<input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat  :<textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

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
                    <h2 class="title">Edit Registration Form</h2>
                </div>
                <div class="card-body">
				@foreach($pegawai as $p)
                    <form action="/pegawai/update" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                        <div class="form-row m-b-55">
						<div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" value="{{ $p->pegawai_nama }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jabatan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Umur</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="umur" value="{{ $p->pegawai_umur }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="alamat" value="{{ $p->pegawai_alamat}}">
                                </div>
                            </div>
                            </div>
							</div>
                            
                            <button class="btn btn--radius-2 btn--red" value="Simpan Data" type="submit">save</button>
                        </div>
                    </form>
					@endforeach
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