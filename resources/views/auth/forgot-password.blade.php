@extends('public.layout')

@section('title', 'Forgot Password')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow">
            <div>
                <div class="flex justify-center mb-4">
                    <i class="fas fa-key text-blue-600 text-4xl"></i>
                </div>
                <h2 class="text-center text-3xl font-bold text-gray-900">{{ __('Forgot your password?') }}</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
            </div>

            @if (session('status'))
                <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded">
                    {{ session('status') }}
                </div>
            @endif

            <form class="mt-8 space-y-6" method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-envelope mr-1"></i>{{ __('Email') }}
                    </label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                           class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-medium">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>

                <div class="text-center">
                    <a href="{{ url('/') }}" class="text-sm text-blue-600 hover:text-blue-500">
                        {{ __('Back to home') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
