@extends('admin.layouts.app')
@section('content')
    <div class="page-inner">
        <div class="col-12">
            @component('components.card-form', [
                'titulo' => 'Registrar usuario',
                'show' => false,
            ])
                <form action="{{ route('usuarios.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label class="form-label" for="name">Nombre <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email" >Correo electrónico <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            value="{{ old('password') }}" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Confirmar contraseña <span class="text-danger">*</span></label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                            value="{{ old('password_confirmation') }}" required>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row justify-content-between mx-2 mt-4">
                        <a href="{{ route('usuarios.index') }}" class="btn btn-default col-12 col-md-5">Cancelar</a>
                        <button class="btn btn-success col-12 col-md-5" type="submit">Registrar</button>
                    </div>
                </form>
            @endcomponent
        </div>
    </div>
@endsection
