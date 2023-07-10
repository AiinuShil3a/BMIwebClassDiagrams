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
        background-image: url('asset/img/BGGIF.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        }
        h1 {
            color: #FFFFFF;
        }
        .blur  {
            backdrop-filter: blur(10px);
        }
        .centered {  
            position: fixed;  
            top: 50%;  
            left: 50%;  
            transform: translate(-50%, -50%);  
        }
        .textside {
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- CLASS CARD -->
    <div class="container py-5 h-100 centered">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10 blur">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
                            <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                                <center>
                                    <img src="asset/img/RobotBMI.png" style="width: 250px;" alt="logo">
                                </center>
                            <div class="form-outline mb-4">
                                <input type="number" id="Height" name="Height" class="form-control" placeholder="ส่วนสูง" required />
                            </div>
                            <div class="form-outline mb-4">
                                <input type="number" id="Weight" name="Weight" class="form-control" placeholder="น้ำหนัก" required />
                            </div>
                            <br>
                                <center>
                                    <button type="Submit" class="btn btn-danger" name="Submit">คำนวณค่า BMI</button>
                                </center>
                            </div>
                            </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                &emsp;
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <?php include 'controller/bmiCalculator.php';?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDCLASS -->
</body>
</html>