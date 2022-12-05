@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-white mx-auto d-block">
<<<<<<< HEAD
                <img src="{{ asset('logo-constructora.png') }}" alt="Constructora" width="150" >
                    <td>
                        <h4>{{ __('INICIAR SESION') }}</h4>
                    </td>
=======
<<<<<<< HEAD
                    <img src="{{ asset('logo-constructora.png') }}" alt="Constructora" width="150">
                    <h4><?php echo e(__('INICIAR SESION')); ?></h4>
                    </td>
=======
                    <img src="{{ asset('logo-constructora.jpg') }}" alt="Constructora" width="100">
                    {{ __('Ingrese credenciales para acceder al sistema') }}
>>>>>>> ddd0ed168aca60f519cb7397505fd5f4a6a8da4d
>>>>>>> 06922fc0224a1f4dd5fb1d040b387825a943b30e
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">

                            <div class="form-outline">
                                <input id="usuario" type="usuario" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autofocus>
                                <label for="usuario" class="form-label">{{ __('Usuario') }}</label>

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-outline">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <label for="password" class="form-label">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
