<x-app-layout>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles del registro') }}
        </h2>        
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <tr>
                        <th>Campo</th>
                        <th>Información</th>                        
                    </tr>                    
                    <tr>
                        <td>ID:</td>
                        <td>{{ $registro->id }}</td>                        
                    </tr>  
                    <tr>
                        <td>No_Registro:</td>
                        <td>{{ $registro->no_registro }}</td>                        
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td>{{ $registro->fecha }}</td>                        
                    </tr>  
                    <tr>
                        <td>Asunto:</td>
                        <td>{{ $registro->asunto }}</td>                        
                    </tr>            
                    <tr>
                        <td>Dependencia:</td>
                        <td>{{ $registro->dependencia }}</td>                        
                    </tr>
                    <tr>
                        <td>Envia:</td>
                        <td>{{ $registro->envia }}</td>                        
                    </tr>
                    <tr>
                        <td>Destinatario:</td>
                        <td>{{ $registro->destinatario }}</td>                        
                    </tr>
                    <tr>
                        <td>Seguimiento:</td>
                        <td>{{ $registro->seguimiento }}</td>                        
                    </tr>
                    <tr>
                        <td>Usuario:</td>
                        <td>{{ $registro->user->nombre }}</td>                        
                    </tr>                   
                </table>
                <form action="{{ route('registro.destroy', [$registro] ) }}"  method="POST">
                        @method('DELETE')
                        @csrf
                        <div class="flex items-center justify-end mt-4" style = "float: right">
                            <x-jet-button type="submit" class="ml-4">
                                {{ __('Eliminar') }}
                            </x-jet-button>
                        </div>
                </form>
                <form action="{{ route('registro.edit', [$registro] ) }}"  method="POST">
                        @method('GET')
                        @csrf
                        <div class="flex items-center justify-end mt-4" style = "float: right">
                            <x-jet-button type="submit" class="ml-4">
                                {{ __('Editar') }}
                            </x-jet-button>
                        </div>
                </form>
                <form action="{{ route('registro.index')}}"  method="POST">
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