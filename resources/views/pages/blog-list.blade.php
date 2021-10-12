@extends('layout')


@section('pageTitle')
    Blog list
@endsection


@section('content')

    {{-- <main> --}}
        <div id="blog_text">
            <p>Thoughts & News</p>
        </div>

        <div>
            <img src="/images/blog_img.jpg" id="blog_img" alt="contactus_img">
        </div>

        <div id="blog_img_position"></div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>

            <ul class="blog-wrapper">
                @foreach($articles as $article)
                <li class="blog-element">
                    <a href="{{ route('article.show', ['articleId' => $article->id]) }}">
                        {{ $article->title }}
                    </a>

                    <p>Author: <span>{{ $article->author }}</span></p>

                    <p>Publish date: <span>{{ $article->published_at }}</span></p>

                </li>
                @endforeach
            </ul>
            <div id="paginator">
                {{ $articles->links() }}
            </div>
    {{-- </main> --}}
@endsection

