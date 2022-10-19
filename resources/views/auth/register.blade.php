<x-guest-layout>
    <!--<x-auth-card>-->
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form class="space-y-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Entreprise</h3>
                                </div>
                                <div class="mt-5 space-y-6 md:col-span-2 md:mt-0">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nom_entreprise" class="block text-sm font-medium text-gray-700">Nom</label>
                                            <input type="text" name="nom_entreprise" id="nom_entreprise" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email_entreprise" class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" name="email_entreprise" id="email_entreprise" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="adresse" class="block text-sm font-medium text-gray-700">Adresse</label>
                                            <input type="text" name="adresse" id="adresse" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                                            <input type="tel" name="telephone" id="telephone" req class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="numero_ifu" class="block text-sm font-medium text-gray-700">Numero IFU</label>
                                            <input type="tel" name="numero_ifu" id="numero_ifu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="rccm" class="block text-sm font-medium text-gray-700">RCCM</label>
                                            <input type="text" name="rccm" id="rccm" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div> <br>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Logo</label>
                                    <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                        <div class="space-y-1 text-center">
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <input type="file" id="logo" name="logo" accept="image/png, image/jpeg"><br> 
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Informations Personnel</h3>
                                </div>

                                <div class="mt-5 md:col-span-2 md:mt-0">
                                    <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">                            
                                        <x-label for="name" :value="__('Name')" />
                                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />                                                         
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3    ">
                                        <x-label for="password" :value="__('Password')" />
                                        <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />             
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                                    </div>
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
                </div>
                </div>
            </div>
        </div>  
                
        <div class="px-4 sm:px-6 lg:px-8 max-w-7xl  mx-auto sm:px-6 lg:px-8 nop">

    <!--</x-auth-card>-->
</x-guest-layout>
