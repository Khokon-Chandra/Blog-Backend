<x-app-layout>
    
        <x-page-title pagename="Create New User" />
        <x-content-card class="col-md-6 offset-md-3" :title="__('Card Title')" :subTitle="__('card subtitle')">

            <div class="card-body">
                @if(session()->get('success'))
                <div class="alert alert-success p-4"> {{ session()->get('success') }} </div>
                @endif
                <form method="POST" action="{{ route('users.store') }}">
               
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <x-label for="name" :value="__('User Name')" />
                            <x-input class="py-2"
                            id="name"
                            class="block mt-1 w-full"
                            type="text" name="name" :value="old('name')" autofocus />
                            @error('name')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror
                        </div>

                        <div class="col mb-3">
                            <x-label for="user_role" :value="__('User role')" />
                            <select id="user_role" name="user_role" class="form-control">
                                <option selected>Choose..</option>
                                <option value="1" >Author</option>
                                <option value="2" >Admin</option>
                                <option value="3" >Moderator</option>
                                <option value="4" >Editor</option>
                                <option value="5" >Contributor</option>
                                <option value="6" >Viewer</option>
                               
                            </select>
                            @error('user_role')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror

                        </div>
                    </div>

                        <div class="form-group">
                        <x-label for="email" :value="__('Email Address')" />
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
                            @error('email')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                        <x-label for="password" :value="__('Password')" />
                        <input type="password" id="password" name="password" class="form-control">
                            @error('password')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror 
                        </div>

                        <div class="form-group">
                        <x-label for="password_confirmation" :value="__('Confirm password')" />
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            @error('password_confirmation')
                            <div class="invalid-feedback d-block mb-3"> {{ $message }} </div>
                            @enderror 
                        </div>

                        <div class="mb-3 text-right">
                            <x-button class="btn-dark" type="submit">Create</x-button>
                        </div>
                    </form>
            </div>



      
    </x-content-card>

</x-app-layout>