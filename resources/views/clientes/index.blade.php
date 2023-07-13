<div class="p-4 sm:ml-64">
    <div class="p-4 dark:border-gray-700 mt-14">
        <div class="bg-white shadow-md rounded my-6">
            <a href="{{ route('clientes.crear') }}" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Agregar Cliente
            </a>
            <div class="overflow-x-auto">
                <table class="min-w-max w-full table-auto" style="margin-top: 15px">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-center">ID</th>
                            <th class="py-3 px-6 text-center">Communitys id</th>
                            <th class="py-3 px-6 text-center">Nombre</th>
                            <th class="py-3 px-6 text-center">Apellido</th>
                            <th class="py-3 px-6 text-center">Telefono</th>
                            <th class="py-3 px-6 text-center">Email</th>
                            <th class="py-3 px-6 text-center">Fecha Inicio</th>
                            <th class="py-3 px-6 text-center">Fecha Vencimiento</th>
                            <th class="py-3 px-6 text-center">Fecha Pago</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Plazo</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($clients as $cliente)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center">{{ ++$i }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->community->name }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->nombre }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->apellido }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->telefono }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->correo }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->fecha_inicio }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->fecha_vencimiento }}</td>
                                <td class="py-3 px-6 text-center">{{ $cliente->fecha_pago }}</td>
                                <td class="py-3 px-6 text-center @if(Carbon\Carbon::parse($cliente->fecha_vencimiento) <= now()) text-danger @endif">
                                    @if(Carbon\Carbon::parse($cliente->fecha_vencimiento)->isToday())
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-yellow-400 mr-2"></div> Pendiente
                                        </div>
                                    @elseif(Carbon\Carbon::parse($cliente->fecha_vencimiento) >= now())
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Activo
                                        </div>
                                    @else
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Vencido
                                        </div>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center">
                                    @php
                                        $diasDiferencia = Carbon\Carbon::parse($cliente->fecha_pago)->diffInDays(Carbon\Carbon::parse($cliente->fecha_vencimiento));
                                        $plazo = '';
                                        if ($diasDiferencia >= 365 * 5) {
                                            $plazo = 'For Life';
                                        } elseif ($diasDiferencia >= 365) {
                                            $plazo = 'Anual';
                                        } elseif ($diasDiferencia > 30) {
                                            $plazo = 'Mensual';
                                        } elseif ($diasDiferencia < 30) {
                                            $plazo = 'No definido';
                                        }
                                    @endphp
                                    @if ($plazo === 'Mensual')
                                        <span class="text-green-500">{{ $plazo }}</span>
                                    @elseif ($plazo === 'Anual')
                                        <span class="text-blue-500">{{ $plazo }}</span>
                                    @elseif ($plazo === 'For Life')
                                        <span class="text-purple-500">{{ $plazo }}</span>
                                    @elseif ($plazo === 'No definido')
                                        <span class="text-red-500">{{ $plazo }}</span>
                                    @endif
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a href="{{ route('clientes.actualizar', $cliente->id) }}"
                                        class="text-gray-900 bg-gradient-to-r from-yellow-200 via-yellow-300 to-yellow-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">
          <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
          </div>
          <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-```html
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
       </div>
       <div class="grid grid-cols-2 gap-4 mb-4">
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
