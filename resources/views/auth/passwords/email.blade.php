@extends('layouts.app-index')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
        <h1 class="full-width text-white text-4xl"><a href="{{ route('index') }}">Project Manager</a></h1>
        <h3 class="text-white text-2xl pt-6">Забравена парола</h3>
        <div class="pt-6">
                @if (session('status'))
                    <div class="text-red-600" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="pt-6">
                    @csrf
                    <div class="relative">
                        <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">
                            E-Mail адрес
                        </label>
                        <div class="">
                            <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none
                            focus:bg-blue-700" name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                            placeholder="{{ __('your@mail.com') }}">
                            @error('email')
                                <span class="text-red-600 text-sm pt-1" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="pt-6">
                        <button type="submit" class="w-full py-2 px-3 text-left bg-gray-400 uppercase rounded font-bold
                        text-blue-800">
                            Изпрати линк за смяна на парола
                        </button>
                    </div>
                </form>
            </div>
    </div>
</div>
@endsection
