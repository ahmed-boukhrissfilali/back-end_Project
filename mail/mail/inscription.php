<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</head>

<body>
    <section class="vh-100  bg ">
        <div class="container py-5 h-90">
            <div class="row d-flex justify-content-center align-items-center h-90">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong"
                        style="border-radius: 1rem  shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                        <div class="card-body p-5 text-center">
                            <form class="row g-3" method="post" action="controler/inscriptioncode.php">
                                <div class="col-md-10 col-lg-10A">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control " name="email" id="inputEmail4">
                                </div>
                                <div class="col-md-10 col-lg-10">
                                    <label for="inputPassword4" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="inputPassword4">
                                </div>
                            
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary  btn-lg btn-block" name="send">inscrire</button>

</div>
                              


                            </form>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    

 
    

</body>
</html>