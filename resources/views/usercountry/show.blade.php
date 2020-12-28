<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Country') }} (User)
        </h2>
    </x-slot>
    <div id="app">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <br>
            <div class="country-details">
                <strong>Country ID:</strong> {{ $country->id }} <br>
{{--                <strong>Country Name:</strong> <span id="{{ $country->id }}">{{ $country->country_name }}</span> <br>--}}
                <country-name country_name="{{$country->country_name }}" id="{{ $country->id }}"></country-name>

            </div>

            <a class="btn btn-primary" href="{{ route('user.countries') }}">Back</a>
        </div>
    </div>

</x-app-layout>
