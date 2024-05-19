<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Login</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('css/pages/admin/login.css')}}">
</head>

<body>
    <div class="container">
        {{-- {{Hash::make('admin@admin');}} --}}
      <div class="center-form">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                  <form method="POST" action="{{route('handle')}}">
                    @csrf
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    @error('email')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    @error('password')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="d-grid">
                      <button class="btn btn-login text-uppercase fw-bold" type="submit">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </body>
  
</html>