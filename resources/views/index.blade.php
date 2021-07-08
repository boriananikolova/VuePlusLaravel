@extends('layouts.app-index')

@section('content')
<div class="text-gray-800 leading-normal flex flex-col min-h-screen">
    <header class="border-t-14 border-blue-700">
        <nav class="container mx-auto flex flex-col sm:flex-row justify-between items-center py-6">
            <a href="{{ route('index') }}">
                <span class="text-2xl font-bold text-blue-800">PROJECT</span>
                <span class="text-2xl font-bold text-red-800">MANAGER</span>
            </a>
            <ul class="uppercase tracking-wide font-bold flex mx-auto sm:mx-0 items-center mt-2 sm:mt-0">
                <li class="px-4">
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">
                        Вход
                    </a>
                </li>
                <li class="px-4">
                    <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">
                        Регистрация
                    </a>
                </li>
                <li class="px-4">
                    <a href="/password/reset" class="text-gray-800 hover:text-gray-600">
                        Забравена парола
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="flex-grow">
        <div class="hero container mx-auto flex flex-col sm:flex-row justify-between py-4 sm:py-12">
            <div class="w-full sm:w-3/5 text-center sm:text-left">
                <div class="text-4xl font-bold">ProjectManager</div>
                <div class="text-2xl font-bold text-blue-700">Система за управление на проекти</div>
                <div class="text-xl text-soft border-t border-blue border-dotted">
                    Онлайн система за управление на софтуерни проекти със свободен достъп.
                    Системата дава възможност за създаване на проекти и задачи към тях,
                    управление на контакти, IMAP връзка с E-mail, преглед на степента
                    на завършеност на проектите.
                </div>
            </div>
            <div class="mt-6 sm:mt-0">
                <img src="/images/projects.svg" class="max-w-sm mx-auto sm:mx-0" alt="MaxtradeOffice">
            </div>
        </div>
        <div class="container mx-auto flex flex-col sm:flex-row pt-6 sm:pt-0 pb-6 sm:pb-0 justify-between">
            <a href="{{ route('login') }}" class="w-auto sm:w-2/5 m-4 sm:m-0 py-2 px-3 text-3xl text-center bg-gray-400
            uppercase rounded font-bold text-blue-700">
                Вход
            </a>
            <a href="{{ route('register') }}" class="w-auto sm:w-2/5 m-4 sm:m-0 py-2 px-3 text-3xl text-center bg-gray-400
            uppercase rounded font-bold text-blue-700">
                Регистрация
            </a>
        </div>
    </div>
    <footer class="bg-blue-700 text-white py-4">
        <div class="container mx-auto flex flex-col sm:flex-row items-center justify-between">
            <div>Боряна Николова, СИ, №1809010529</div>
        </div>
    </footer>
</div>
@endsection
