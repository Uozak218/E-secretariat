<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="test">
                <div class="form1">
                    <h2>Entreprise</h2>
                    <div class="mt-4">
                        <label for="entreprise_nom">Nom</label><br>
                        
                        <input id="entreprise_name" type="text" name="entreprise_nom" required autofocus><br>
                    </div>
                    
                    <div class="mt-4">
                        <label for="email">Email</label><br>
                        
                        <input id="Email" type="text" required autofocus><br>
                    </div>
                    
                    <div class="mt-4">
                        <label for="telephone">Telephone</label><br>
                        
                        <input id="telephone" type="tel" required autofocus><br>
                    </div>
                    
                    <div class="mt-4">
                        <label for="numero_ifu">Numero IFU</label><br>
                        
                        <input id="numero_ifu" type="tel" required autofocus><br>
                    </div>
                    
                    <div class="mt-4">
                        <label for="adrsse">Adresse</label><br>
                        
                        <input id="adresse" type="text" name="adresse" required autofocus><br>
                    </div>
                    
                    <div class="mt-4">
                        <label for="rccm" :value="rccm">RCCM</label><br>
                        
                        <input id="rccm" type="text" name="entreprise_nom" required autofocus><br><br>
                    </div>
                    
                    <div >
                        <label for="avatar">Ajouter un logo:</label><br>
                    
                        <input type="file" id="logo" name="logo" accept="image/png, image/jpeg"><br>
                    </div>
                </div>
                
                <div class="form2"><br><br>
                <h2>Administrateur</h2>
                <div class="mt-4">
                        <x-label for="name" :value="__('Name')" />

                        <x-input id="name" class="block" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block" type="email" name="email" :value="old('email')" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>

                </div>  
            </div>

            <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
        </form>
    </x-auth-card>
</x-guest-layout>
