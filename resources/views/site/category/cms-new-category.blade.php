@extends('layouts.site')
@section('content')
    <header class="common-header">
        <div class="pattern__header"></div>
    </header>
    <div class="gray-background-fixed"></div>

    <section class="cms__container main-wrapper">
        <form class="contact__form" action="{{route('site.category.form')}}" method="post">
        @csrf
        @if(session('success'))
            <div>
                {{session('message')}}
            </div>
        @endif
        <div>
        </div>
            <header class="cms__container__header">
                <ul class="cms__container__header__tabs">
                    <li><a href="{{route('home.cms')}}" class="tab__active">Categorias e produtos</a></li>
                    <li><a href="{{route('site.edit_blog')}}">Gerenciar blog</a></li>
                </ul>
            </header>
            <section class="cms__container__content">
                
                <div class="split__container">
                    <h2 class="title-small">Nova categoria</h2>
                    <p>Utilize os campos abaixo para adicionar as informações da categoria</p>

                    <label for="name">Nome da categoria</label>
                    <input id="name" name="name" type="text" tabindex="1"
                        placeholder="Ex: Mouses" autofocus value="{{old('name')}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="description">Descricao da Categoria</label>
                    <textarea id="description" name="description" tabindex="3" cols="20" rows="4"
                            placeholder="Digite aqui...">{{old('description')}}</textarea>
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror

                    <span class="label">Imagem de capa</span>
                    <label for="image" class="button add_new">Clique para adiconar imagem de capa</label>
                    <input id="image" name="image" value="Clique para adiconar imagem de capa" type="file"
                        tabindex="2" multiple  accept="image/png, image/jpeg" required value="{{old('image')}}">
                    @error('image')
                    <div>{{ $message }}</div>
                    @enderror

                </div>

            </section>
            <footer class="cms__container__footer flex-container">
                <div>
                    <button data-modal="success" class="trigger button button_primary">Adicionar nova categoria</button>
                    <a href="{{route('home.cms')}}" class="button button_secondary" role="button">Cancelar</a>
                </div>
                <div>
                    <!-- To Do -->
                    <a href="javascript:;" class="footer__delete__disabled" role="button">Excluir Categoria</a>
                </div>
            </footer>
        </form>
    </section>
@endsection
