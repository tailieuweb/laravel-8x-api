<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Country') }} (User)
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('user.countries.store') }}" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group"><label class="col-sm-2 control-label"> {{ __('Select Country') }}</label>
                <div class="col-sm-10">
                    <select name="country" id="country" class="dropdown-style input-field input-normal">
                        <option value="Vietnam">Vietnam</option>
                        <option value="America">America</option>
                        <option value="France">France</option>
                        <option value="Japan">Japan</option>
                        <option value="Singapore">Singapore</option>
                    </select>



                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <button class="btn btn-success" type="submit">{{ __('Submit') }}</button>
                </div>
            </div>
        </form>
    </div>


</x-app-layout>
