<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Contactos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Mail</th>
                            <th>Documento</th>
                            <th>Empresa</th>
                            <th>Cargo</th>
                            <th>Celular</th>
                            <th>driver_id</th>
                            <th>Red social</th>
                            <th>Nivel planta</th>
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
                                <td>
                                    {{$user->documento}}
                                </td>
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
                                <td>
                                    {{$user->nivel_planta}}
                                </td>
                                <td>
                                    {{$user->nivel_mantenimiento}}
                                </td>
                                <td>
                                    {{$user->areas_interes}}
                                </td>
                                <td>
                                    {{$user->presupuesto}}
                                </td>
                                <td>
                                    {{$user->relacionskf}}
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
