<head>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="row justify-content-center text-black">
    <div class="col-8">
     <form action="{{ route('hitung') }}" method="post" enctype="multipart/form-data">
      @csrf
       <h4 class="text-center mb-3">Apa Jenis Kelamin Anda?</h4>
        <div class="row text-center mb-4">
          <div class="card col border-0">       
            <img class="profile-user-img img-fluid img-circle" src="https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg" alt="User profile picture">
             <div class="col">
                <input type="radio" name="jenis_kelamin" value="L">
                <span class="checkmark ">Laki-Laki</span>
             </div>  
          </div>
          <div class="card col border-0">       
            <img class="profile-user-img img-fluid img-circle" src="https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg" alt="User profile picture">
             <div class="col">
                <input type="radio" name="jenis_kelamin" value="P">
                <span class="checkmark ">Perempuan</span>
             </div>  
          </div>
        </div>
        <div class="form-group text-center">
          <label for="usia">Berapa Usia Anda?</label>
          <input type="text" class="form-control" name="usia">
        </div>

        <div class="form-group text-center">
          <label for="tinggi_badan">Berapa Tinggi Badan Anda?</label>
          <input type="number" class="form-control" name="tinggi_badan">
        </div>

        <div class="form-group text-center">
          <label for="berat_badan">Berapa Berat Badan Anda?</label>
          <input type="number" class="form-control" name="berat_badan">
        </div>

        <div class="col text-center">
         <button type="submit" class="btn btn-success justify-content-center">Hitung</button>
        </div>
    </div>
  </div>
</div>
</body>
