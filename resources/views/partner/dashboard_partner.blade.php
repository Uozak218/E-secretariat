<x-app-layout>
    <x-slot name="header">  

    </x-slot>

    <div class="mt-8">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <div class="grid grid-cols-1 items-start gap-4 lg:grid-cols-3 lg:gap-8">
            <!-- Left column -->
            <div class="grid grid-cols-1 gap-4 lg:col-span-2">
            <section aria-labelledby="section-1-title">
                <h2 class="sr-only" id="section-1-title">Courriers</h2>
                <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="p-6">
                    <table class="min-w-full table-fixed divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">Type de courrier</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Objet</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Date</th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach($courrier_arr as $td)          
                            <tr>
                                <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium text-gray-900">{{$td->type}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$td->objet}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$td->created_at}}</td>

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
            </section>
            </div>

            <!-- Right column -->
            <div class="grid grid-cols-1 gap-4">
            <section aria-labelledby="section-2-title">
                <h2 class="sr-only" id="section-2-title">Courriers non traiter</h2>
                <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="px-3 py-4 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Courriers non traiter</h3>
                    <div class="p-6">
                        
                        <div>
                            <ul role="list" class="divide-y divide-gray-200">
                                <li class="py-4">
                                <div class="flex space-x-3">
                                    <img class="h-6 w-6 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" alt="">
                                    <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium">Lindsay Walton</h3>
                                        <p class="text-sm text-gray-500">1h</p>
                                    </div>
                                    <p class="text-sm text-gray-500">Deployed Workcation (2d89f0c8 in master) to production</p>
                                    </div>
                                </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>