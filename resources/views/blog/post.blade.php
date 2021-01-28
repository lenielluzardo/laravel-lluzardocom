@extends('layouts.master')

@section('content')

    <section class="section-container">

        <hr class="section-separator">

        <article class="p_container">

            <section id="p_header">

                <h2 id="p_title"> {{$post['title']}} </h2>

                <div id="p_meta">

                    <h3 id="p_author">Author: {{$post['author']}}</h3>

                    <h4 id="p_date">Date: {{$post['created']}}</h4>

                    <div id="p_rating">
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $post['rating'])
                                <span class="fas fa-star rate"></span>
                            @else
                                <span class="fas fa-star"></span>
                            @endif
                        @endfor
                    </div>

                    <div id="p_tags">
                        @foreach($post['tags'] as $tag)
                            <span class="tag"><a href="">{{$tag}}</a></span>
                        @endforeach
                    </div>

                </div>

            </section>

            <section class="p_body">

                <div class="p_img-container">
                    <img id="p_img" src="{{$post['images']['url_1']}}" alt="publication_img">
                </div>

                <div class="p_paragraphs">
                    <p> {{ $post['content']['paragraph1'] }} </p>

                    <p> {{ $post['content']['paragraph2'] }} </p>
                </div>

                <div class="p_img-container">
                    <img id="p_img" src="{{$post['images']['url_2']}}" alt="publication_img">
                </div>

                <div class="p_paragraphs">
                    <p> {{ $post['content']['paragraph3'] }} </p>

                    <p> {{ $post['content']['paragraph4'] }} </p>
                </div>

            </section>

        </article>

        <hr class="section-separator">

        @include('partials.rating-about')



    </section>

@include('blog.related')

@endsection