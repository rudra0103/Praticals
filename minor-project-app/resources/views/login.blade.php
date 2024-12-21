<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="login.css">

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">


</head>

<body>

    <div class="box">
        <div class="container">
            <div class="row justify-content-center align-item-center">
                <div class="col-12">
                   <h3 class="text-center my-2"> Log In Now!!!</h3>
                   <form action="/login_user" method="POST">
                    @csrf
                   <div class="input-group mb-3">
                     <span class="input-group-text" id="input1"><i class="bi bi-person"></i></span>
                    <input type="text" placeholder="abc@gmail.com" class="form-control" name="username">
                   </div>
                   <div class="input-group mb-3">
                    <span class="input-group-text" id="input1"><i class="bi bi-key"></i></span>
                    <input type="text" placeholder="Password" class="form-control" name="password">
                </div>

                   <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Button</button>
                    </div>

                <div class="text-center my-3">
                      <a href="#">Forgot Password?</a>
                </div>
               
                <div class="container  text-center"> 
                  <i class="fa-brands fa-facebook fa-2xl" style="color: #253b5f;"></i>
                  <i class="fa-brands fa-square-instagram fa-2xl" style="color: #cd55dd;"></i>
                  <i class="fa-brands fa-twitter fa-2xl" style="color: #5d5a8c;"></i>
                  
                </div> 
                <p class="lead text-secondary text-center mb-5">Don't Have Account ? Register Now...</p>
                </div>
                </div>
                </form>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    @if (Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "{{Session::get('success')}}",
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

</body>

</html>
