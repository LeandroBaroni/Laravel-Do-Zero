@extends('layouts.site')
@section('content')
    <header class="common-header">
        <div class="pattern__header"></div>
    </header>
    <div class="gray-background-fixed"></div>

    <section class="cms__container main-wrapper">
        <header class="cms__container__header">
            <ul class="cms__container__header__tabs">
                <li><a href="{{route('home.cms')}}">Categorias e produtos</a></li>
                <li><a href="{{route('site.edit_blog')}}" class="tab__active">Gerenciar blog</a></li>
            </ul>
        </header>
        <section class="cms__container__content">
            <div class="split__container">
                <h2 class="title-small">Nova postagem</h2>
                <p>Preencha os campos abaixo para publicar um novo post</p>

                <label for="post-title">Titulo da postagem</label>
                <input id="post-title" type="text" tabindex="1" required autofocus placeholder="Ex: Novo produto">

                <span class="label">Imagem de capa</span>
                <label for="post-cover-img" class="button add_new">Clique para adiconar imagem de capa</label>
                <input id="post-cover-img" value="Clique para adiconar imagem de capa" type="file" tabindex="2" multiple  accept="image/png, image/jpeg" required>
            </div>

            <hr class="thin_divider_overlap">

            <div class="split__container">
                <h2 class="title-small">Conteúdo</h2>
                <p>Preencha o conteudo da postagem</p>

                <label for="paragraphy-1">Parágrafo</label>
                <textarea id="paragraphy-1" cols="30" rows="9" required tabindex="3" placeholder="Ex: Estimula a maturação"></textarea>

                <hr class="thin_divider">

                <div class="blog__toolbar">
                    <div class="blog__toolbar__container">
                        <button data-modal="gallery" class="trigger blog__toolbar__button"><img src="{{asset('/images/toolbar/toolbar-gallery.svg')}}" alt="">Galeria</button>
                        <button data-modal="image" class="trigger blog__toolbar__button"><img src="{{asset('/images/toolbar/toolbar-image.svg')}}" alt="">Imagem</button>
                        <button data-modal="video" class="trigger blog__toolbar__button"><img src="{{asset('/images/toolbar/toolbar-video.svg')}}" alt="">Vídeo</button>
                        <button class="blog__toolbar__button"><img src="{{asset('/images/toolbar/toolbar-title.svg')}}" alt="">Título</button>
                        <button class="blog__toolbar__button"><img src="{{asset('/images/toolbar/toolbar-paragraph.svg')}}" alt="">Parágrafo</button>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
