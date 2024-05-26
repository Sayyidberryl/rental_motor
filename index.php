<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url('foto1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            color: #fff;
        }

        .main {
            height: 100vh;
        }

        .kalkulator {
            height: 600px;
            width: 550px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        @media print {
            body>*:not(.output-container) {
                display: none;
            }

            form {
                display: none;
            }

            .mawang {
                display: none;
            }
        }
        
    </style>
</head>

<body>
    <div class="container main d-flex flex-column justify-content-center align-items-center ">
        <div class="container kalkulator p-5 shadow-lg p-3 mb-5">
            <p class="container text-center fs-5 fw-bold">Welcome to Rental Moge</p>
            <form action="" method="post">

                <div>
                    <label for="bil1">Masukan nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>

                <div>
                    <label for="bil1">Masukan waktu rental</label>
                    <input type="number" class="form-control" name="lamarental" id="lamarental">
                </div>

                <div class="container coba mt-3"><label for="bil1 ">Pilih Motor </label></div>

                <select class="container form-select mt-1" name="jenis" aria-label="Default select example">
                    <option selected disabled>Pilih Motor</option>
                    <option value="scooter">Aerox Paropo</option>
                    <option value="sport">Mio Mirza</option>
                    <option value="sporttouring">R25 Marmut</option>
                    <option value="cross">Baby RR HKU</option>
                </select>
                         

                <div>
                    <button class="container btn btn-success form-control mt-3" type="submit" name="submit">Sumbit
                        </button>
                </div>

            </form>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<?php
require 'logic.php';

$proses = new rental();
$proses->setharga(70000, 90000, 90000, 100000);

if (isset($_POST['submit'])){
    $proses->member = $_POST['nama'];
    $proses->jenis = $_POST['jenis'];
    $proses->waktu = $_POST['lamarental'];

    $proses->pembayaran();
}



















?>
</html>
