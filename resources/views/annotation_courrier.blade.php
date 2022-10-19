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

    <div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto sm:px-6 lg:px-8 nop">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Annotations</h1>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#annotationModal" data-bs-whatever="@fat" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Ajouter une annotation</a>
            </div>
        </div>
        
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li class="py-4">
                                <div class="flex space-x-2">
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
    </div>

    <div class="modal fade" id="annotationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle annotation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="save_annotation">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="note" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="note"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>