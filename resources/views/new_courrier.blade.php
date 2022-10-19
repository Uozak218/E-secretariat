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
                <a href="save_courrier" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700">Gestion des courriers</a>
            </div>
            </li>

            <li>
            <div class="flex items-center">
                <!-- Heroicon name: mini/chevron-right -->
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                </svg>
                <a href="" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700" aria-current="page">Enregistrer</a>
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

        <div class="px-4 sm:px-6 lg:px-8 max-w-7xl  mx-auto sm:px-6 lg:px-8 nop">
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">

                      <form class="space-y-6" action="save_new_courrier">
                        <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:p-6">
                          <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="mt-5 md:col-span-2 md:mt-0">
                              <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="objet" class="block text-sm font-medium text-gray-700">Objet</label>
                                    <input type="text" name="objet" id="objet" autocomplete="given-name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="contact_id" class="block text-sm font-medium text-gray-700">Contact</label>
                                    <select id="contact_id" name="contact_id" autocomplete class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    @foreach($contact_arr as $td)
                                      <option value="{{$td->id}}">{{$td->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                      <label for="collaborateur_id" class="block text-sm font-medium text-gray-700">Collaborateur</label>
                                      <select id="collaborateur_id" name="collaborateur_id" autocomplete class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                       @foreach($user_arr as $td)
                                            <option value="{{$td->id}}">{{$td->name}}</option>
                                        @endforeach
                                      </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                      <label for="type" class="block text-sm font-medium text-gray-700">Type de courrier</label>
                                      <select id="type" name="type"class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option value="Arrive">Arrive</option>
                                        <option value="Depart">Depart</option>
                                      </select>
                                </div>
                              </div> <br>
                              
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nbrpieces" class="block text-sm font-medium text-gray-700">Nombre de pieces jointes</label>
                                    <input type="number" name="nbrpieces" id="nbrpieces" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                </div>
                                
                                <div>
                                <label class="block text-sm font-medium text-gray-700">Pieces Jointes</label>
                                <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                                    <div class="space-y-1 text-center">
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input type="file" id="pieces-jointes" name="pieces-jointes" accept="image/pdf, image/png, image/jpeg"><br> 
                                        </label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
                            <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
