@extends('layouts.app')

{{-- PLANTILLA VERIFICACIÓN EMAIL --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Hemos enviado un mensaje a tu email.') }}
                        </div>
                    @endif

                    {{ __('Para seguir, mira tu bandeja de email.') }}
                    {{ __('Si no has recibido el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aqui para mandar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
