@extends('layouts.app-index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Потвърждение на Email адрес</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Линк за потвърждение бе изпратен към вашия E-Mail адрес.
                        </div>
                    @endif

                    Преди да продължите, моя проверете своя E-mail за линк за потвъждение.
                    Ако не сте получили линк моля <a href="{{ route('verification.resend') }}">{{ __('натиснете тук') }}</a> за нов.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
