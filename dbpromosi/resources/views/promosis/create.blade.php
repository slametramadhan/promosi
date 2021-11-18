<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col p-3 mb-2 bg-primary text-white">Tambah Promosi</div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-7">
                <form action="/promosis" method="POST">
                    @csrf
                    <div class="mb-2">
                        <input type="text" class="form-control form-control-sm" id="validationDefault01" placeholder="Nama Promosi" name="namap" required>

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
                        </select>
                    </div>


                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault03" placeholder="id Promosi" name="idp" required>
                    </div>

                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example" name="asalp" id="validationDefault04" required>
                            <option selected disabled value="">Pilih Asal Promosi</option>

                            <option value="Area">Area</option>
                            <option value="Kanwil">Kanwil</option>
                            <option value="Pusat">Pusat</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <select class="form-select" aria-label="Default select example" name="untukp" id="validationDefault05" required>
                            <option selected disabled value="">Pilih Untuk Promosi</option>

                            <option value="Konven">Konven</option>
                            <option value="Syariah">Syariah</option>
                        </select>
                    </div>

                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault06" placeholder="Mulai Promosi" name="mulaip" required>
                    </div>


                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault07" placeholder="Akhir Promosi" name="akhirp" required>
                    </div>

                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault08" placeholder="Gambar" name="gmbrp" required>
                    </div>

                    <div class="mb-2">

                        <input type="text" class="form-control form-control-sm" id="validationDefault09" placeholder="Pdf" name="pdfp" required>
                    </div>

                    <input type="submit" value="save">
                </form>
            </div>

            <div class="col">
              
            </div>
        </div>
    </div>


</body>

</html>