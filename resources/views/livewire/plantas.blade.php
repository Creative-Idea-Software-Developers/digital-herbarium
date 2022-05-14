<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Plantas') }}
        </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            <div class="py-2">
                <button wire:click="crear()" class="text-white font-bold py-2 px-4 my-3 rounded" style="background-color: rgb(34 197 94);}">Registrar Nueva Planta</button>
            </div>
            @if($modal)
                @include('livewire.crear')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">Planta</th>
                        <th class="px-4 py-2">Descripción</th>
                        <th class="px-4 py-2">Imagen</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plantas as $planta)
                    <tr>
                        @php
                            if(strlen($planta->name) > 10){
                                $planta->name = substr($planta->name, 0, 10).'...';
                            }
                        @endphp
                        <td class="border px-4 py-2"><center>{{ $planta->name }}</center></td>
                        @php
                            if(strlen($planta->description) > 30){
                                $planta->description = substr($planta->description, 0, 30).'...';
                            }
                        @endphp
                        <td class="border px-4 py-2"><center>{{ $planta->description }}</center></td>
                        <td class="border px-4 py-2">
                            <center><img src="{{URL::asset('/resources/'.$planta->image)}}" alt="{{ $planta->name }}" width="100"></center>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <button wire:click="editar({{$planta->id}})" class="bg-indigo-600 hover:bg-indigo-600 text-white font-bold py-2 px-4">Editar</button>
                            <button wire:click="eliminar({{$planta->id}})" class="bg-red-600 hover:bg-red-600 text-white font-bold py-2 px-4">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
