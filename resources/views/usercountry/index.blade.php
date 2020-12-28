<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Country') }} (User)
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Country ID</th>
                        <th>Country Name</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($countries as $country)
                        <tr>
                            <td>{{ $country->id }}</td>
                            <td>{{ $country->country_name }}</td>
                            <td><a href="{{ route('user.countries.show', $country) }}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
    </div>
</x-app-layout>

