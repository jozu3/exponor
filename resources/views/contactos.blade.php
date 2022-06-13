<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Contactos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-xl sm:rounded-lg p-4">
                <table class="table-fixed">
                    <thead>
                        <tr class="bg-dark text-ligth">
                            <th>Nombre</th>
                            <th>Mail</th>
                            {{-- <th>Documento</th> --}}
                            <th>Empresa</th>
                            <th>Cargo</th>
                            <th>Celular</th>
                            <th>driver_id</th>
                            <th>Red social</th>
                            {{-- <th>Nivel planta</th> --}}
                            <th>Nivel mantenimiento</th>
                            <th>Areas de interes</th>
                            <th>Presupuesto</th>
                            <th>Relacion SKF</th>
                            <th>Productos feria servicio</th>
                            <th>Productos feria tecnologia</th>
                            <th>Productos feria remanufac</th>
                            <th>Productos feria recondoil</th>
                            <th>Productos feria sistema lubricación</th>
                            <th>Modo de contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)                           
                            <tr>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                {{-- <td>
                                    {{$user->documento}}
                                </td> --}}
                                <td>
                                    {{$user->empresa}}
                                </td>
                                <td>
                                    {{$user->cargo}}
                                </td>
                                <td>
                                    {{$user->celular}}
                                </td>
                                <td>
                                    {{$user->driver_id}}
                                </td>
                                <td>
                                    {{$user->driver}}
                                </td>
                                {{-- <td>
                                    @switch($user->nivel_planta)
                                        @case(1)
                                            {{'Bajo'}}
                                            @break
                                        @case(2)
                                            {{'Medio'}}
                                            @break
                                        @case(3)
                                            {{'Alto'}}
                                            @break
                                        @default
                                    @endswitch
                                </td> --}}
                                <td>
                                    @switch($user->nivel_mantenimiento)
                                        @case(1)
                                            {{'Bajo'}}
                                            @break
                                        @case(2)
                                            {{'Medio'}}
                                            @break
                                        @case(3)
                                            {{'Alto'}}
                                            @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    {{$user->areas_interes}}
                                </td>
                                <td>
                                    @switch($user->presupuesto)
                                        @case(1)
                                            {{'0 a 50kUSD '}}
                                            @break
                                        @case(2)
                                            {{'+50KUSD  a 150kUSD'}}
                                            @break
                                        @case(3)
                                            {{'+150kUSD'}}
                                            @break
                                        @default
                                            
                                    @endswitch
                                </td>
                                <td>
                                    {{-- {{$user->relacionskf}} --}}
                                    @switch($user->relacionskf)
                                        @case(1)
                                            {{'Ventas Spot'}}
                                            @break
                                        @case(2)
                                            {{'Contratos de suministro'}}
                                            @break
                                        @case(3)
                                            {{'Compra de reposición'}}
                                            @break 
                                        @case(4)
                                            {{'Soy un Nuevo Cliente'}}
                                            @break
                                        @default
                                    @endswitch
                                </td>
                                <td>
                                    {{$user->productosferia_servicio}}
                                </td>
                                <td>
                                    {{$user->productosferia_tecnologia}}
                                </td>
                                <td>
                                    {{$user->productosferia_remanufac}}
                                </td>
                                <td>
                                    {{$user->productosferia_recondoil}}
                                </td>
                                <td>
                                    {{$user->productosferia_sis_lubrica}}
                                </td>
                                <td>
                                    {{$user->tipocontacto}}
                                </td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
