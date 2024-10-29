<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To do list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>To do list</h1>
        {{-- <div class="card" style="width: 20rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item1">Bikin to do list sederhana</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item1">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item2">Beli perintilan mesin</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item2">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item3">Ke tukang bubut (lubangin head)</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item3">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item4">Ke tukang las (buat kabel)</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item4">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item5">Ke tukang cat (cat motor)</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item5">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item6">Beli intake downdraft</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item6">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item7">Beli tb</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item7">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item8">Beli kabel lampu depan</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item8">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item9">Beli paking2 mesin</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item9">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item10">Bikin head</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item10">
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <label class="form-check-label" for="item11">Bikin blok radiator</label>
                    <input class="form-check-input me-1" type="checkbox" value="" id="item11">
                </li>
            </ul> --}}
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr style="text-align: center">
                        <th>No</th>
                        <th>Tugas</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
            </table>
        </div>
        {{-- <div>
            <button type="button" class="btn btn-primary">Save</button>
        </div> --}}
    </div>
</body>
</html>
