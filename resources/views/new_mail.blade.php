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

    <div class="px-4 sm:px-6 lg:px-8 max-w-7xl  mx-auto sm:px-6 lg:px-8 nop">
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">     
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <h3 class="text-lg font-medium text-warm-gray-900"></h3>
                        <form action="send_Mail"method="POST" class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-warm-gray-900">Email</label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                                </div>
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-warm-gray-900">Subject</label>
                                <div class="mt-1">
                                    <input type="text" name="subject" id="subject" class="block w-full rounded-md border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                                </div>
                            </div>
 
                            <div class="sm:col-span-2">
                                <div class="flex justify-between">
                                    <label for="content" class="block text-sm font-medium text-warm-gray-900">Message</label>
                                </div>
                                <div class="mt-1">
                                    <textarea id="content" name="content" rows="4" class="block w-full rounded-md border-warm-gray-300 py-3 px-4 text-warm-gray-900 shadow-sm focus:border-teal-500 focus:ring-teal-500" aria-describedby="message-max"></textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:flex sm:justify-end">
                                <button type="submit" class="mt-2 inline-flex w-full items-center justify-center rounded-md border border-transparent bg-teal-500 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 sm:w-auto">Envoyer</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>