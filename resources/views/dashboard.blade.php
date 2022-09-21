<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="cont">
        <div class="dropdown">
            <button class="btn-top">
                <span>Gestion des courriers</span>
                <svg fill="#f1f1f1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 407.437 407.437"
                    style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve">
                    <polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 " />
                </svg>
            </button>

            <div class="bloc-links">
                <ul>
                    <li>
                        <a >>Enregistrer</a>
                    </li>
                    <li>
                        <a >>Rechercher</a>
                    </li>
                    <li>
                        <a >>Rediger</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dropdown1">
            <button class="btn-top1">
                <span>Gestion des contacts</span>
                <svg fill="#f1f1f1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 407.437 407.437"
                    style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve">
                    <polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 " />
                </svg>
            </button>

            <div class="bloc-links1">
                <ul>
                    <li>
                        <a >>Enregistrer</a>
                    </li>
                    <li>
                        <a >>Rechercher</a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="dropdown2">
            <button class="btn-top2">
                <span>Gestion des collaborateurs</span>
                <svg fill="#f1f1f1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 407.437 407.437"
                    style="enable-background:new 0 0 407.437 407.437;" xml:space="preserve">
                    <polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 " />
                </svg>
            </button>

            <div class="bloc-links2">
                <ul>
                    <li>
                        <a >>Enregistrer</a>
                    </li>
                    <li>
                        <a >>Rechercher</a>
                    </li>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
