@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                <div class="bg-gray-800 dark:bg-gray-900 text-white px-4 py-2">{{ __('Login') }}</div>

                <div class="p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 dark:text-gray-300">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 @error('email') border-red-500 dark:border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-red-500 dark:text-red-400 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                            <input id="password" type="password" class="mt-1 block w-full p-2 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 @error('password') border-red-500 dark:border-red-500 @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="text-red-500 dark:text-red-400 text-sm mt-1">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="flex items-center">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="ml-2 text-gray-700 dark:text-gray-300" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 dark:bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-700 dark:hover:bg-blue-800">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="text-blue-500 dark:text-blue-300 hover:underline" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
