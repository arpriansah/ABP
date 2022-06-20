<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/pics/infocation.png" width="130" height="55" class="d-inline-block align-text-top" id="img">
                </a>
            </div>
        </nav>
        <div class="container">
            <form action="{{ route('addData') }}" method="POST" style="margin-left:320px; margin-right:320px; margin-top:50px;">
                @csrf
                <h3><center>Input Data Destinasi</center></h3><br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Destinasi Wisata</label>
                    <input type="text" name="namadestinasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pulau</label>
                    <input type="text" name="pulau" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputPassword1">
                </div>
                <center><button type="submit" class="btn btn-danger" style="margin-top: 20px; border-radius: 15px;">Add Data</button></center>
            </form>
        </div>
    </body>
</html>