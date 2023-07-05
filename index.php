<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator BMI</title>
     <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
        background-image: url('https://wallpaperaccess.com/full/5927911.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }
        h1 {
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <center>
        <h1>BMI Callulator</h1>
    </center>
    <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="https://dynamic.brandcrowd.com/asset/logo/d5ff2558-a87f-4c51-8908-6a415e3a0f83/logo-search-grid-1x?logoTemplateVersion=4&v=638228442355030000&text=BMI&colorpalette=purple" style="width: 200px;" alt="logo">
                                        </div>
                                        <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                                            <div class="form-outline mb-4">
                                                <input type="number" id="Height" name="Height" class="form-control" placeholder="ส่วนสูง" required />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="number" id="Weight" name="Weight" class="form-control" placeholder="น้ำหนัก" required />
                                            </div>
                                                <br>
                                                <center>
                                                    <button type="Submit" class="btn btn-outline-primary" name="Submit">คำนวณค่า BMI</button>
                                                </center>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-dark px-3 py-4 p-md-5 mx-md-4">
                                        <br>
                                        <br>
                                        <br>
                                        <?php include 'controller/bmiCalculator.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>