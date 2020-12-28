<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Country') }} (Admin)
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('admin.countries.update', $country) }}" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group"><label class="col-sm-2 control-label"> {{ __('Select Country') }}</label>
                <div class="col-sm-10">
                    <select name="country" id="country" class="dropdown-style input-field input-normal">
                        <option value="Vietnam" {{ $country->country_name == "Vietnam" ? 'selected' : '' }}>Vietnam</option>
                        <option value="America" {{ $country->country_name == "America" ? 'selected' : '' }}>America</option>
                        <option value="France" {{ $country->country_name == "France" ? 'selected' : '' }}>France</option>
                        <option value="Japan" {{ $country->country_name == "Japan" ? 'selected' : '' }}>Japan</option>
                        <option value="Singapore" {{ $country->country_name == "Singapore" ? 'selected' : '' }}>Singapore</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-success" type="submit"> {{ __('Submit') }}</button>
                </div>
            </div>
        </form>
    </div>


</x-app-layout>
