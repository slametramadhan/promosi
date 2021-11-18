<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</head>



<body>


    <div class="container-sm">
        <div class="row">
            <div class="col p-3 mb-2 bg-primary text-white">Edit Promosi</div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col-7">
                <form action="/promosis/{{$promosi->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-2">
                        <input type="text" class="form-control form-control-sm" id="validationDefault01" placeholder="" value="{{$promosi->namap}}" required>
                    </div>


                    <div class="mb-2">

                        <select class="form-select" aria-label="Default select example" name="jenisp" id="validationDefault02" required>
                            <option selected disabled value="">Pilih Jenis Promosi</option>
                            <option value="Mulia">Mulia</option>
                            <option value="Mikro">Mikro</option>
                            <option value="BJDPL">BJDPL</option>
                            <option value="Arrum Haji">Arrum Haji</option>
                            <option value="MPO">MPO</option>
                            <option value="KCA">KCA</option>
                            <option value="KRASIDA">KRASIDA</option>
                            <option value="Agen">Agen</option>
                            <option value="Lain-lain">Lain-lain</option>
                            <option value="Semua">Semua</option>
                            <option selected="true" value="{{$promosi->jenisp}}">{{$promosi->jenisp}}</option>
                        </select>
                    </div>

                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="" value="{{$promosi->idp}}" required>
                    </div>

                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example" name="asalp" id="validationDefault04" required>
                            <option selected disabled value="">Pilih Asal Promosi</option>

                            <option value="Area">Area</option>
                            <option value="Kanwil">Kanwil</option>
                            <option value="Pusat">Pusat</option>
                            <option selected="true" value="{{$promosi->asalp}}">{{$promosi->asalp}}</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example" name="untukp" id="validationDefault05" required>
                            <option selected disabled value="">Pilih Untuk Promosi</option>

                            <option value="Konven">Konven</option>
                            <option value="Syariah">Syariah</option>
                            <option selected="true" value="{{$promosi->untukp}}">{{$promosi->untukp}}</option>
                        </select>
                    </div>

                    <div class="mb-2">
                    <input type="date"  class="form-control form-control-sm" date_format="DD/MM/YYYY" id="validationDefault06" value="{{$promosi->mulaip}}" required>
                    </div>

                    <div class="mb-2">
                        <input type="date" class="form-control form-control-sm" id="validationDefault07" value="{{$promosi->akhirp}}" required>
                    </div>

                    <div class="mb-2">
                        <input type="text" class="form-control form-control-sm" id="validationDefault08" placeholder="" value="{{$promosi->gmbrp}}" required>
                    </div>

                    <div class="mb-2">
                        <input type="text" class="form-control form-control-sm" id="validationDefault09" placeholder="" value="{{$promosi->pdfp}}" required>
                    </div>

                    <input type="submit" value="save">
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

</body>

</html>