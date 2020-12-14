<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registros') }}
        </h2>        
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <table>
                    <tr>
                        <th>Id</th>                        
                        <th>No Registro</th>                        
                        <th>Fecha</th>
                        <th>Asunto</th>
                        <th>Dependencia</th>
                        <th>Envia</th>
                        <th>Seguimiento</th>
                        <th>Usuario</th>
                    </tr>
                   
                   @foreach($registros as $registro)
                   
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->fecha }}</td>
                            <td>{{ $registro->asunto }}</td>
                            <td>{{ $registro->dependencia }}</td>
                            <td>{{ $registro->envia }}</td>
                            <td>{{ $registro->destinatario }}</td>
                            <td>{{ $registro->seguimiento }}</td>
                            <td>{{ $registro->user->nombre }}</td>
                        </tr>   
                   @endforeach
                </table>
                
                
                <form action="{{ route('registro.create')}}"  method="POST">
                    @method('GET')                        
                    <div class="flex items-center justify-end mt-4" style = "float: right">
                        <x-jet-button class="ml-4">
                            {{ __('Nuevo registro') }}
                        </x-jet-button>
                    </div>
                </form>
                
                <form action="{{ route('dashboard')}}"  method="POST">
                    @method('GET')    
                    <div class="flex items-center justify-end mt-4" style = "float: right">
                        <x-jet-button class="ml-4">
                            {{ __('Regresar') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</x-app-layout>