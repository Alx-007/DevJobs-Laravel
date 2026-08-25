<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 rounded-xl">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-7 text-gray-900">
                    <h1 class="text-3xl font-bold my-4"> {{$vacante->titulo}}</h1>
                
                    <div class="overflow-hidden">
                        <livewire:mostrar-vacante
                            :vacante="$vacante"
                        />
                    </div>    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>