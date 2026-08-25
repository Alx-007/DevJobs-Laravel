<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session()->has('mensaje'))
                <div class="bg-green-100 text-green-700 border-l-4 border-green-500 p-2 rounded-md p-2 my-3">
                    {{session('mensaje')}}
                </div>
            @endif

            <livewire:mostrar-vacantes />
        </div>
    </div>
</x-app-layout>
