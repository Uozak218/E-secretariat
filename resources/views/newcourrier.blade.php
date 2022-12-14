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
                <a href="#" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700">Gestion des courriers</a>
            </div>
            </li>

            <li>
            <div class="flex items-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="#" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700" aria-current="page">Enregistrer</a>
            </div>
            </li>
        </ol>
        </nav>

    </x-slot>

    <div class="flex-column">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-primary overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-primary mx-auto text-white border-b border-gray-200">
                        <div class="text-center">
                            <h4>Enregistrer un nouveau courrier</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white text-black border-b border-gray-200">
                        <div class="container">
                            <form action="save_new_courrier">
                                <div class="test">
                                    <div class="flex justify-content-between">
                                        <div class="mt-4">
                                            <label for="contact_id">Contact</label><br>
                                            <select name="contact_id">
                                                @foreach($contact_arr as $td)
                                                    <option value="{{$td->id}}">{{$td->name}}</option>
                                                @endforeach
                                            </select> <br><br>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="type">Type de courrier</label><br>
                                            <select name="type">
                                                <option value="Arrive">Arrive</option>
                                                <option value="Depart">Depart</option>
                                            </select> <br><br>
                                        </div>
                                    </div>

                                    <div class="flex justify-content-between">
                                        <div class="mt-4">
                                            <label for="objet">Objet</label><br>
                                            <input id="objet" name="objet" type="text" required><br>
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="nbrpieces">Nombre de pieces jointes</label><br>
                                            <input id="nbrpieces" name="nbrpieces" type="number"><br>
                                        </div>
                                    </div>                                        
                                        <div class="mt-4">
                                        <label for="avatar">Pieces Jointes:</label><br>
                                        <input type="file" id="pieces-jointes" name="pieces-jointes" accept="image/pdf, image/png, image/jpeg"><br>
                                    </div>
                                 
                                </div>
                                <div class="items-center mt-4">
                                    <x-button class="ml-4">
                                        <input type="submit" value="Save">
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
