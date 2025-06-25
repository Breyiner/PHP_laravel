@extends('layout')

@section('header_content')

    <h1>Titulo header</h1>

@endsection

@section('main_content')
    @foreach ($posts as $post)
        <div class="card m-10 p-10 w-100 rounded-2xl bg-white shadow-[0_35px_35px_rgba(0,0,0,0.15)] cursor-pointer hover:-translate-y-2 hover:transition hover:duration-300">
            <div class="card__image ">
                <img src="{{$post->image->path}}" class="img rounded-2xl" alt="image_post">
            </div>
            <div class="card__content mt-5 flex flex-col gap-10">
                <p class="card__title text-center text-2xl ">{{ Str::limit($post->tittle, 20) }}</p>
                <p class="card__body text-justify">{{ Str::limit($post->body, 200) }}</p>
            </div>
        </div>
    @endforeach
@endsection

@section('footer_content')
    {{$posts->links()}}
    <h2> titulo footer</h2>
@endsection

