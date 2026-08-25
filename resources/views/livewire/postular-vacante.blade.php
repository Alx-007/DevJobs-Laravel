<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="jtext-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if (session()->has('mensaje'))
        <p class="border border-green-600 bg-green-100 text-green-700 p-2 rounded-md uppercase font-bold">
            {{session('mensaje')}}
        </p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-5">
            <div class="mb-4">
                <x-input-label for="cv" :value="__('Curriculum o Hoja de vida (PDF)')" />
                <x-text-input id="cv" class="block mt-1 w-full" type="file" wire:model="cv" accept=".pdf" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message" />
            @enderror

            <x-primary-button class="my-5">
                {{__('Postularme')}}
            </x-primary-button>
        </form>
        
    @endif
</div>
