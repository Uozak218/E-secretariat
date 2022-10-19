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
                <a href="" class="ml-4 text-sm font-medium text-gray-900 hover:text-gray-700" aria-current="page">Rechercher</a>
            </div>
            </li>
        </ol>
        </nav>

    </x-slot>

    
    <div class="max-w-7xl nop">
        <div class="sm:flex">
            <div class="mt-4 sm:mt-0 sm:ml-16">
                <form action="{{ route('courrier.search')}}">
                    <label for="search" class="block text-sm font-medium text-gray-700">Rechercher</label>
                    <div class="flex">
                        <div class="form-group mr-1">
                            <input type="text" name="search" id="search" class="form-control block w-full rounded-md border-gray-300 pr-12 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div> 
                        <button type="submit" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="px-4 sm:px-6 lg:px-8 max-w-7xl  mx-auto sm:px-6 lg:px-8 nop">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Courriers</h1>
        <p class="mt-2 text-sm text-gray-700">liste de tous les courriers.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a href="save_courrier" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Nouveau courrier</a>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">

            <table class="min-w-full table-fixed divide-y divide-gray-300">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Type de courrier</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Contact</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Objet</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nombre de Pieces-Jointes</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Collaborateur</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                <!-- Selected: "bg-gray-50" -->
                @foreach($courrier_arr as $td)          
                    <tr>
                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">{{$td->type}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            @foreach ($contact_arr as $contact)
                                @if ($contact->id === $td->contact_id)
                                    {{$contact->name}}
                                @endif
                            @endforeach
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$td->objet}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$td->created_at}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$td->nbrpieces}}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            @foreach ($user_arr as $user)
                                @if ($user->id === $td->collaborateur_id)
                                    {{$user->name}}
                                @endif
                            @endforeach
                        </td>
                        <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                        <td>
                            <div class="text-decoration-none">
                                <a href="annotation" class="text-gray-400 hover:text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-text" viewBox="0 0 16 16">
                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                        <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8zm0 2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="flex">
                                <a href="save_new_mail" class="text-gray-400 hover:text-gray-500 ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </a>
                            </div>
                        </td>
                        <td> <a href="delete_courrier/{{$td->id}}" class="text-indigo-600 ml-3 hover:text-indigo-900">Delete</a> | <a href="edit_courrrier/{{$td->id}}" class="text-indigo-600 hover:text-indigo-900">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>

</x-app-layout>
