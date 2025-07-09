@extends('layout')

@section('header_content')

    <h1>Crear Post</h1>

@endsection

@section('main_content')
    <div class="container-form w-full h-full flex align-items-center justify-center">
        <form action="{{route('posts.store')}}" method="POST"  enctype="multipart/form-data" class="formulario w-100 h-max bg-white shadow-[0_35px_35px_rgba(0,0,0,0.1)] rounded-2xl flex flex-col gap-5 p-5 align-items-center">
            @csrf
            <h1 class="text-3xl text-center font-bold">Post</h1>
            <div class="formulario__row flex flex-col gap-1">
                <label for="titulo" class="formulario__nombre-campo font-semibold">Titulo:</label>
                <input name="tittle" id="titulo" value="{{old('tittle')}}" type="text" class="formulario__campo rounded-lg bg-gray-200 outline-none p-1 pl-2">
                @error('tittle')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div class="formulario__row flex flex-col gap-1">
                <label for="descripcion" class="formulario__nombre-campo font-semibold">Contenido:</label>
                <textarea name="body" id="descripcion" cols="10" rows="5" class="rounded-lg bg-gray-200 outline-none p-1 pl-2 resize-none">{{old('body')}}</textarea>
                @error('body')
                <div>{{ $message }}</div>
                @enderror
            </div>
            
            <div class="formulario__row flex flex-col gap-1">
                <label for="imagen" class="formulario__nombre-campo font-semibold">Seleccione una imagen:</label>
                <input type="file" name="image" id="imagen" accept="image/*" class="p-2 bg-gray-200 rounded-lg hover:bg-gray-300 cursor-pointer">
                @error('image')
                <div>{{ $message }}</div>
                @enderror
            </div>

            <button class="w-45 h-8 bg-amber-200 self-center rounded-lg hover:bg-amber-300 cursor-pointer mt-5 mb-2" type="submit">Crear</button>
        </form>
    </div>
@endsection

@section('footer_content')

@endsection