@extends('public.layout')

@section('title', 'No Role Assigned')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-lg text-center">
            <div>
                <div class="flex justify-center mb-6">
                    <div class="w-24 h-24 bg-yellow-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-clock text-yellow-600 text-5xl"></i>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('No Role Assigned') }}</h2>
                <p class="text-gray-600 mb-6">
                    {{ __('Your account has been created successfully, but you haven\'t been assigned a role yet. Please contact your administrator to get access.') }}
                </p>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <div class="bg-blue-50 rounded-lg p-4 mb-6">
                    <div class="flex items-start">
                        <i class="fas fa-info-circle text-blue-600 text-xl mt-0.5 mr-3"></i>
                        <div class="text-left">
                            <p class="text-sm text-blue-800 font-medium mb-1">{{ __('What happens next?') }}</p>
                            <p class="text-sm text-blue-700">
                                {{ __('An administrator will review your account and assign you the appropriate role. You will receive access once your role has been configured.') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <a href="{{ route('welcome') }}" class="block w-full bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition font-medium">
                        <i class="fas fa-home mr-2"></i>{{ __('Back to Home') }}
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block w-full bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition font-medium">
                            <i class="fas fa-sign-out-alt mr-2"></i>{{ __('Logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
