<!DOCTYPE html>
<html>
    <head>
        <title>Tubes INFOCATION</title>
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
        </nav><br><br>
        <div class="container">
            <table class="table table-striped table-hover">
            <a class="btn btn-dark" href="/addData" role="button" id="addbtn" style="width: 120px; margin-bottom: 20px;">Add</a>
                <thead>
                    <tr>
                        <th scope="col"><center>No.</center></th>
                        <th scope="col-3"><center>Nama</center></th>
                        <th scope="col-2"><center>Pulau</center></th>
                        <th scope="col-6"><center>Deskripsi</center></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <th scope="row"><center>{{ $data->id }}</center></th>
                        <td><center>{{ $data->namadestinasi }}</center></td>
                        <td><center>{{ $data->lokasi }}</center></td>
                        <td>{{ $data->deskripsi }}</td>
                        <td><a class="btn btn-warning" href="/updateData/{{ $data->id }}" role="button" id="updatebtn">Update</a></td>
                        <td><a class="btn btn-danger" href="#" role="button" id="deletebtn">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>