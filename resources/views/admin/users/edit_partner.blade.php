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

    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">               
                    <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Modifier <strong>{{ $user->name  }}</strong> </h1>
                        </div> <br>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <form action="{{ route('admin.users.update', $user) }}" method="POST">                   
                                @csrf
                                @method('PATCH')

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" value="{{ $user->name }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="eamil" value="{{ $user->email }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div> <br>

                                <h3>Role:</h3>
                                @foreach($roles as $role)
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id }}" 
                                        id="{{ $role->id }}" @foreach($user->roles as $userRole) @if ($userRole->id === $role->id) checked @endif @endforeach>
                                        <label for="{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
                                    </div>
                                @endforeach <br>

                                <h3>Statut:</h3>
                                @foreach($statuts as $statut)
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" name="statuts[]" value="{{ $statut->id }}" 
                                        id="{{ $statut->id }}" @foreach($user->statut as $userStatut) @if ($userStatut->id === $statut->id) checked @endif @endforeach>
                                        <label for="{{ $statut->id }}" class="form-check-label">{{ $statut->name }}</label>
                                    </div>
                                @endforeach
                                <button type="submit" class="flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>  
                
</x-app-layout>
