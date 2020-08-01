@extends('./master.form.index')

@section('titulo','Login')

@section('contenido')
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
        <br>
        @if (Auth::check())
          <div class="alert alert-dark" style="padding-bottom:20px!important;"  role="alert">
                Usted ya tiene una sesión Iniciada
              @if(Auth::user()->rol == 'administrador')
                <a class="btn btn-primary float-right"  href="{{route('admin')}}" type="button" name="button"> Volver a la Sesión </a>

              @else
                <a  class="btn btn-primary float-right" href="{{route('seller')}}" type="button" name="button"> Volver a la Sesión </a>
              @endif
          </div>
        @endif
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido a tu Gestor de Ventas</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" id="user"  aria-describedby="emailHelp" placeholder="Ingresa con tu usuario...">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" id="pass" placeholder="Ahora tu contraseña...">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordarme</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" name="button">Iniciar sesión</button>

                  </form>
                  <hr>
                  <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="small" href="{{ route('password.request') }}">Recuperar contraseña?</a>
                    @endif
                  </div>
                  <div class="text-center">
                    <a class="small" href="">Soporte!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
@endsection
