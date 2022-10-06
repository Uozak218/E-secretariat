<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <h3>Creer un nouveau collaborateur</h3>
        <div class="card">
            <form method="POST" action="{{ route('admin.users.store') }}">
                @csrf
                <div class="test">
                    <div class="mb-3 mt-2">
                        <x-label for="name" :value="__('Name')" />
                        <x-input id="name" class="block" type="text" name="name" :value="old('name')" required autofocus />
                        
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="block" type="email" name="email" :value="old('email')" required />
                    
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="block"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>     
                    <div class="mb-3">
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" name="roles[]" type="checkbox"
                                    value="{{ $role->id }}" id="{{ $role->name}}">
                            <label class="form-check-label" for="{{ $role->name }}">{{ $role->name }}</label>
                            </div>                      
                         @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
 