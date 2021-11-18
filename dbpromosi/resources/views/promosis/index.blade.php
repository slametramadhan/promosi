<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-3 mb-2 bg-primary text-white">Data Promosi</div>
        </div>
        <div class="row">
            <div class="col">
                
                <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col">ID</th>
                            <th class="col">Nama Promosi</th>
                            <th scope="col">Jenis Promosi</th>
                            <th scope="col">Id Promosi</th>
                            <th scope="col">Asal Promosi</th>
                            <th scope="col">Untuk Promosi</th>
                            <th scope="col">Mulai Promosi</th>
                            <th scope="col">Akhir Promosi</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Pdf</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promosis as $promosi)
                        <tr>
                            <th scope="row">{{$promosi->id}}</th>
                            <td>{{$promosi->namap}}</td> 
                            <td>{{$promosi->jenisp}}</td>
                            <td>{{$promosi->idp}}</td>
                            <td>{{$promosi->asalp}}</td>
                            <td>{{$promosi->untukp}}</td>
                            <td>{{$promosi->mulaip}}</td>
                            <td>{{$promosi->akhirp}}</td>
                            <td><p class="text-break">{{$promosi->gmbrp}}</p></td>
                            <td><p class="text-break">{{$promosi->pdfp}}</p></td>
                            <td><a href="/promosis/{{$promosi->id}}/edit">Edit</a></td>
                            <td>
                                <form action="/promosis/{{$promosi->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" value="Delete">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col"><a href="/promosis/create"><button type="button" class="btn btn-outline-primary">Tambah</button></a></div>
        </div>
    </div>

    </div>
</body>

</html>