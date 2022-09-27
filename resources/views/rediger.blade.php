<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div>
                <div> <a href="dashboard">Accueil</a> > <a href="Enregistrer">Gestion des courriers </a> > <a>Rediger</a>  </div>
            </div>
        </h2>
    </x-slot>

    <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8 nop">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white text-black border-b border-gray-200">
                <form action="">
                    <div class="container">      
                        <input id="objet" name="objet" type="text" required><br>
                    </div>
                    <div class="mt-4">
                        <label for="avatar">Pieces Jointes:</label><br>
                        <input type="file" id="pieces-jointes" name="pieces-jointes" accept="image/pdf, image/png, image/jpeg"><br>
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
</x-app-layout>
