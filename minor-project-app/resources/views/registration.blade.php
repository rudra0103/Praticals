<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="singup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
  <div class="box">

    <div class="container">
        @php
            print_r($errors);
        @endphp
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="/register_user" method="post">
                    @csrf
                    <br>
                        <h2 class="text-center mx-2"><i class="bi bi-explicit"></i> Tour & Travells</h2>
                    <br>
                    
                    <h3 class="my-4 text-center">Registation</h3>
                    <br>
                    <br>
                    <br>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                        <input name="fullname" type="text" class="form-control fs-4" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" value="{{old('fullname')}}">
                    </div>
                    <span class="text-danger">
                        @error('fullname')
                        {{$message}}
                    @enderror
                 </span>
                   
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                        <input  name="username"type="text" class="form-control fs-4" placeholder="User Name" aria-label="User Name" aria-describedby="basic-addon1" value="{{old('username')}}">
                    </div>

                    <span class="text-danger">
                        @error('username')
                        {{$message}}
                    @enderror
                </span>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                        <input  name="password"type="password" class="form-control fs-4" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" value="{{old('password')}}">
                    </div>
                    <span class="text-danger">
                        @error('password')
                        {{$message}}
                    @enderror
                 </span>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                        <input name="con_password" type="password" class="form-control fs-4" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="basic-addon1" value="{{old('con_password')}}">
                    </div>
                    <span class="text-danger">
                        @error('con_password')
                        {{$message}}
                    @enderror
                 </span>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-at-fill"></i></span>
                        <input  name="email"type="text" class="form-control fs-4" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{old('email')}}">
                    </div>

                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                    @enderror
                 </span>


                    

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                        <input  name="mobileno"type="text" class="form-control fs-4" placeholder="Mobile No" aria-label="Mobile No" aria-describedby="basic-addon1" value="{{old('mobileno')}}">
                    </div>

                    <span class="text-danger">
                        @error('mobileno')
                        {{$message}}
                    @enderror
                 </span>


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                        <input  name="address"type="text" class="form-control fs-4" placeholder="address" aria-label="Mobile No" aria-describedby="basic-addon1" value="{{old('address')}}">
                    </div>
                    <span class="text-danger">
                        @error('address')
                        {{$message}}
                    @enderror
                 </span>

                    

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                        <input  name="email"type="text" class="form-control fs-4" placeholder="email" aria-label="Mobile No" aria-describedby="basic-addon1">
                    </div>
                   
                   
                    <div class="d-grid gap-2 text-center">
                        <button class="btn btn-outline-info fs-4 text-dark" type="submit">Submit</button>
                    </div>

                    <div class="text-center my-3 fs-2">
                        <a href="/registration" class="text-decoration-none">Forgot Password</a>
                        <a href="/login" class="text-decoration-none mx-3 text-white">Registation</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>