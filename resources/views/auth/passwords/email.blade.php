@extends('layouts.admin')

@section('title', 'Passwort zurücksetzen')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="adminlogin">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Emailadresse</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Passwort Zurücksetzungslink schickens</button>
            </div>
        </div>
    </form>

@endsection
