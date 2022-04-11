@extends('layouts.auth')

@section('content')
<h1 class="text-3xl font-bold my-4">ログイン</h1>
<form class="w-full max-w-sm" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                Email
            </label>
        </div>
        <div class="md:w-2/3">
            <input id="email" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="email" name="email" required autofocus>
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                Password
            </label>
        </div>
        <div class="md:w-2/3">
            <input id="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" type="password" name="password" required autocomplete="current-password">
        </div>
    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                ログイン
            </button>
        </div>
    </div>
</form>
@endsection