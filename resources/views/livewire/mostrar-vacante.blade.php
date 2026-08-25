<div class="p-1">
    <div class="md:grid md:grid-cols-2 bg-gray-50 rounded-lg my-6 p-5">
        <p class="text-m font-semibold uppercase">Empresa:
            <span class="font-bold text-indigo-600 normal-case">{{ $vacante->empresa }}</span>
        </p>

        <p class="text-m font-semibold uppercase my-2">Ultimo dia para postularse:
            <span class="font-bold text-indigo-800 normal-case">{{ $vacante->ultimo_dia->ToFormattedDateString() }}</span>
        </p>

        <p class="text-m font-semibold uppercase my-2">Categoria:
            <span class="font-bold text-indigo-600 normal-case">{{ $vacante->categoria->categoria }}</span>
        </p>

        <p class="text-m font-semibold uppercase my-2">Salario:
            <span class="font-bold text-indigo-600 normal-case">{{ $vacante->salario->salario }}</span>
        </p>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img src="{{asset('storage/vacantes/' . $vacante->imagen)}}" alt="{{'Imagen Vacante ' . $vacante->titulo}}">
        </div class="md:">

        <div class="md:col-span-4">
            <h2 class="text-2xl font-bold mb-5">Descripcion del puesto:</h2>
            <p class="text-gray-700 text-base mb-5">
                {{ $vacante->descripcion }}
            </p>
            </p>
        </div>
    </div>

    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
            <p>
                ¿dDeseas aplicar a esta vacante? <a href="{{route('register')}}" class="font-bold text-indigo-600 hover:text-indigo-400">Obten una cuenta y aplica a esta y otras vacantes</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante"/>
    @endcannot

</div>
