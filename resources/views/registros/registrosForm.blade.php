<x-app-layout>
<link href="{{ asset('css/stylesdos.css') }}" rel="stylesheet">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear registro') }}
        </h2>        
</x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(isset($registro))
                    <form action="{{ route('registro.update', [$registro])}}"  method="POST">
                        @method('patch')
                @else
                <form action="{{route('registro.store') }}"  method="POST">
                @endif
                        @csrf
                        <div>
                            <x-jet-label for="no_registro" value="{{ __('No_Registro') }}" />
                            <x-jet-input id="no_registro" class="block mt-1 w-full" type="text" name="no_registro" :value="old('no_registro') ?? $registro->no_registro ?? ''" required/>
                        </div>
                        @error('no_registro')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @csrf

                        <div>
                            <x-jet-label for="fecha" value="{{ __('Fecha') }}" />
                            <x-jet-input id="fecha" class="block mt-1 w-full" type="date" name="fecha" :value="old('fecha') ?? $registro->fecha ?? ''" required/>
                        </div>
                        @error('fecha')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <x-jet-label for="asunto" value="{{ __('Asunto') }}" />
                            <x-jet-input id="asunto" class="block mt-1 w-full" type="text" name="asunto" :value="old('asunto') ?? $registro->asunto ?? ''" required/>
                        </div>
                        @error('asunto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <x-jet-label for="dependencia" value="{{ __('Dependencia') }}" />
                            <x-jet-input id="dependencia" class="block mt-1 w-full" type="text" name="dependencia" :value="old('dependencia') ?? $registro->dependencia ?? ''" required/>
                        </div>
                        @error('dependencia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <x-jet-label for="envia" value="{{ __('Envia') }}" />
                            <x-jet-input id="envia" class="block mt-1 w-full" type="text" name="envia" :value="old('envia') ?? $registro->envia ?? ''" required/>
                        </div>
                        @error('envia')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <x-jet-label for="destinatario" value="{{ __('Destinatario') }}" />
                            <x-jet-input id="destinatario" class="block mt-1 w-full" type="text" name="destinatario" :value="old('destinatario') ?? $registro->destinatario ?? ''" required/>
                        </div>
                        @error('destinatario')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <x-jet-label for="seguimiento" value="{{ __('Seguimiento') }}" />
                            <x-jet-input id="seguimiento" class="block mt-1 w-full" type="text" name="seguimiento" :value="old('seguimiento') ?? $registro->seguimiento ?? ''" required/>
                        </div>
                        @error('seguimiento')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <x-jet-label for="user_id" value="{{ __('Usuario') }}" />
                        <select name="user_id">
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}" {{ old('user_id') == $usuario->id ? 'selected' : ''}} {{ isset($registro) && $registro->user_id == $usuario->id ? 'selected' : ''}}>{{$usuario->name}}</option>                                       
                            @endforeach                                        
                        </select>
                        <div class="flex items-center justify-end mt-4" style = "float: right">
                            <x-jet-button type="submit" class="ml-4">
                                {{ __('Guardar registro') }}
                            </x-jet-button>
                        </div>
                </form>                
            </div>
        </div>
    </div> 
</x-app-layout>