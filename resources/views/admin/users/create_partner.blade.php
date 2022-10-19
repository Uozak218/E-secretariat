<x-app-layout>
    <x-slot name="header">
        <nav class="flex" aria-label="Breadcrumb">
        <ol role="list" class="flex items-center space-x-4">
            <li>
            <div>
                <a href="dashboard" class="text-gray-400 hover:text-gray-500">
                <!-- Heroicon name: mini/home -->
                <svg class="h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Home</span>
                </a>
            </div>
            </li>

            <li>
            <div class="flex items-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="EnregistrerCollaborateur" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700">Gestion des collaborateurs</a>
            </div>
            </li>

            <li>
            <div class="flex items-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700" aria-current="page">Rechercher</a>
            </div>
            </li>
        </ol>
        </nav>  
    </x-slot>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>


        <x-auth-validation-errors class="mb-4" :errors="$errors" />
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
                        Role:
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" name="roles[]" type="checkbox"
                                    value="{{ $role->id }}" id="{{ $role->name}}">
                                <label class="form-check-label" for="{{ $role->name }}">{{ $role->name }}</label>
                            </div>                                               
                        @endforeach
                    </div>

                    <!--Statut User -->
                    <div class="mb-3">
                        Statut:
                        <!--@foreach($statuts as $statut)
                            <div class="form-check">
                                <input class="form-check-input" name="statuts[]" type="checkbox"
                                    value="{{ $statut->id }}" id="{{ $statut->name}}">
                                <label class="form-check-label" for="{{ $statut->name }}">{{ $statut->name }}</label>
                            </div>                                               
                        @endforeach-->
                        @for ($i = 0; $i <= 2; $i)
                        <div class="form-check">
                                <input class="form-check-input" name="statuts[]" type="checkbox"
                                    value="{{ $statut->id }}" id="{{ $statut->name}}">
                                <label class="form-check-label" for="{{ $statut->name }}">{{ $statut->name }}</label>
                            </div>                                               
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
    </x-auth-card>
</x-app-layout>
