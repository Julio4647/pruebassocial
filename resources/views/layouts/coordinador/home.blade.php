<div class="p-4 sm:ml-64">
    <div class="p-4  border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4 mb-4">
            <div class="flex items-center justify-center rounded">
                <div class="max-w-xs">
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 flex items-center">
                        <img src="{{ asset('img/user.svg') }}" alt="" class="mr-2">
                        <p class="text-lg text-gray-400 dark:text-gray-500 ">
                            Clientes
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded">
                <div class="max-w-xs">
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 flex items-center">
                        <img src="{{ asset('img/renew.svg') }}" alt="" class="mr-2">
                        <p class="text-md text-gray-400 dark:text-gray-500">
                            Renovados
                        </p>
                    </div>

                </div>
            </div>
            <div class="flex items-center justify-center rounded">
                <div class="max-w-xs">
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 flex items-center">
                        <img src="{{ asset('img/cancel.svg') }}" alt="" class="mr-2">
                        <p class="text-md text-gray-400 dark:text-gray-500">
                            Cancelados
                        </p>
                    </div>

                </div>
            </div>
            <div class="flex items-center justify-center rounded">
                <div class="max-w-xs">
                    <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-4 flex items-center">
                        <img src="{{ asset('img/pause.svg') }}" alt="" class="mr-2">
                        <p class="text-lg text-gray-400 dark:text-gray-500">
                            Pausados
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                        <img src="{{ asset('img/Recurso 1@2x.png') }}" alt="Imagen overlay" class="w-1/2 h-auto">
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                        <img src="{{ asset('img/Recurso 1@2x.png') }}" alt="Imagen overlay" class="w-1/2 h-auto">
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                        <img src="{{ asset('img/Recurso 1@2x.png') }}" alt="Imagen overlay" class="w-1/2 h-auto">
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                        <img src="{{ asset('img/Recurso 1@2x.png') }}" alt="Imagen overlay" class="w-1/2 h-auto">
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                        <img src="{{ asset('img/Recurso 1@2x.png') }}" alt="Imagen overlay" class="w-1/2 h-auto">
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        @role('coordinador', 'coordinador')
            @include('notas.note')
        @endrole



    <div class="flex items-center justify-center h-48 mb-2 rounded bg-gray-50 dark:bg-gray-800">


        <table class="min-w-max w-full table-auto" style="margin-top: 15px">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ID</th>
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Apellido</th>
                    <th class="py-3 px-6 text-left">Email</th>
                    <th class="py-3 px-6 text-left">Cordinador</th>
                    <th class="py-3 px-6 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @if (count($results) > 0)
                    @foreach ($results as $result)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">

                            <td class="py-3 px-6 text-left">{{ $result->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $result->last_name }}</td>
                            <td class="py-3 px-6 text-left">{{ $result->email }}</td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="py-3 px-6 text-center">No hay datos disponibles</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">

        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
    </div>
    <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
    </div>
</div>
</div>
