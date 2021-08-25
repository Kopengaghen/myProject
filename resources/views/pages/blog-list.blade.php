@extends('layout')


@section('pageTitle')
    Blog list
@endsection


@section('content')

    <main>
        <div id="blog_text">
            <p>Thoughts & News</p>
        </div>

        <div>
            <img src="/images/blog_img.jpg" id="blog_img" alt="contactus_img">
        </div>

        <div id="blog_img_position"></div>

        <div id="lista_de_articole">
            <ul>
                <li><a href="/blog/article">DO YOU LIKE TO COLOUR CODE!?</a></li>
                <li><a href="/blog/article">5 BENEFITS OF ATTENDING A CONFERENCE</a></li>
                <li>Lista de articole</li>
                <li>Lista de articole</li>
                <li>Lista de articole</li>
                <li>Lista de articole</li>
                <li>Lista de articole</li>
                <li>Lista de articole</li>
            </ul>
        </div>
    </main>
@endsection
