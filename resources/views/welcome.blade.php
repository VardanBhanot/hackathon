<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EmployeeOne</title>

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/animate.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Styles -->
        
    </head>
    <body class="bgcolor" style="font-family: 'Raleway', sans-serif">
        <nav class="navbar navbar-default animated fadeIndownBig" style="height: 20px; background-color: rgba(255, 255, 255, 0); border: 0px; border-radius: 0%;position: fixed; top: 0px;width: 100%;padding-top: 10px">
            <div id="container-fluid">
              <div class="navbar-header">
               <b> <a class="navbar-brand peak" href="#" style="font-size: 50px; color: rgba(0, 0, 0, 0.767); height: 70px; padding-top: 20px; width: 330px; padding-left: 40px; border-radius: 3px">EmploiOne</a></b>
              </div>
              <ul class="nav navbar-nav header-right" style="float: right" >
               @if (Route::has('login'))
                @auth
                <li><a href="{{ url('/home') }}" class="btn">Home</a></li>
                @else
                <li><a href="#" class="btn" onclick="document.getElementById('modal-wrapper').style.display='block'">Login</a></li>
                @endauth
                @endif
                <li><a href="#" class="btn">Contact Us</a></li>
          
              </ul>
            </div>
        </nav>
            <div style="width: 30%; margin: auto">
                <div class="wrap-contact100 animated bounceInUp" style="height: 630px; margin-top: 70px;">
                    <form class="contact100-form validate-form" style="padding-top: 15px; margin-bottom: 30px" method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="contact100-form-title">
                            Say Hello!
                        </span>
        
                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <b><span class="label-input100">Your Name</span></b>
                            <input class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" type="text" name="name" placeholder="Enter your name">
                            <span class="focus-input100"></span>
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
        
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <b><span class="label-input100">Email</span></b>
                            <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="text" name="email" placeholder="Enter your email addess">
                            <span class="focus-input100"></span>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
        
                        <div class="wrap-input100 input100-select">
                           <b><span class="label-input100">Password</span></b>
                            <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Enter your Password">
                            <span class="focus-input100"></span>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="wrap-input100 input100-select">
                            <b><span class="label-input100">Confirm Password</span></b>
                            <input class="input100" type="password" name="password_confirmation" placeholder="Enter your Password">
                            <span class="focus-input100"></span>

                        </div>
        
                        
                        <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <button class="contact100-form-btn">
                                    <span>
                                        Submit
                                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if (Route::has('login'))
                @auth
                <div class="container-contact100-form-btn" style="position: fixed; bottom: 0px;width: 100%" >
                <div class="wrap-contact100-form-btn" >
                    <div class="contact100-form-bgbtn" ></div>
                    <form action="/home">
                    <button type="submit" class="contact100-form-btn">
                        <span>
                            Home
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </form>
                </div>
            </div>
                @else
                <div class="container-contact100-form-btn" style="position: fixed; bottom: 0px;width: 100%" onclick="document.getElementById('modal-wrapper').style.display='block'">
                <div class="wrap-contact100-form-btn" >
                    <div class="contact100-form-bgbtn" ></div>
                    <button class="contact100-form-btn">
                        <span>
                            Log in
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </div>
                @endauth
                @endif
            

            <div id="modal-wrapper" class="modal">
  
                <form class="modal-content animate" method="POST" action="{{ route('login') }}">
                    @csrf
                      
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                  
                    <h1 style="text-align:center; padding-top: 10px; padding-bottom: 10px">LOGIN</h1>
                  </div>
              
                  <div style="text-align: center; align-content: center">
                   
                        <div class="wrap-input100 validate-input" name="email" value="{{ old('email') }}" data-validate="Name is required" style="width: 50%; margin: 0 auto">
                                
                                <input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" placeholder="Enter Email id">
                                <span class="focus-input100"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
            
                            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz" style="width: 50%;margin: 0 auto">
                             
                                <input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Enter Password">
                                <span class="focus-input100"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>  
                    <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                                <div class="contact100-form-bgbtn"></div>
                                <button type="submit" class="contact100-form-btn">
                                    <span>
                                        Submit
                                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                    </span>
                                </button></a>
                            </div>
                        </div>
                    <input type="checkbox" style="margin: 20px"> Remember me     
                    <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
                     
                </div>
                  
                </form>
                
              </div>
              
              <script>
              
              var modal = document.getElementById('modal-wrapper');
              window.onclick = function(event) {
                  if (event.target == modal) {
                      modal.style.display = "none";
                  }
              }
              </script>
          

          <footer>
            <p>Contact information: <a href="mailto:someone@example.com">
            someone@example.com</a>.</p>
          </footer>
          
    </body>
    <body>
        <div class="flex-center position-ref full-height">
            
        </div>
    </body>
</html>
