<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 px-8 rounded-xl">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl font-bold text-center my-10">Mis Notificaciones</h1>

                    <div class="divide-y divide-gray-200">
                        @forelse ($notificaciones as $notificacion)
                            <div class="p-5 lg:flex lg:justify-between lg:items-center">
                                <div>
                                    <p>Tienes un nuevo candidato en:
                                        <span class="font-bold text-indigo-600">{{ $notificacion->data['nombre_vacante'] }}</span>
                                    </p>

                                    <p>
                                        <span class="font-bold text-gray-500">{{ $notificacion->created_at->diffForHumans() }}</span>
                                    </p>
                                </div>
                                <div class="mt-5">
                                    <a href="{{ route('candidatos.index', $notificacion->data['id_vacante']) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                                        Ver Candidatos
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-center text-gray-600">No hay Notificaciones Nuevas</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
