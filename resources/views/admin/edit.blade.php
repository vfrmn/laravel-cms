@extends('layouts.app')

@section('title_of_page')
    Admin Panel
@endsection

@section('content')
    <div class="container my-5 pt-5 d-flex flex-column justify-content-center align-items-center" style="height: 930px">
        <H1 class="text-center">{{$page->title}}</H1>
        <div class="row" style="width: 90%">
            <div class="col-8 bg-white table-bordered border h-100 p-4">
                <form id="create_form" method="post" action="{{route('pages.update', $page->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="mb-2">
                        <label for="caption">Заголовок</label> <br>
                        <input class="w-100" id="caption" name="caption" type="text" value="{{old('caption', $page->caption)}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="title_ua">Назва українською</label><br>
                        <input class="w-100" id="title_ua" name="title_ua" type="text" value="{{old('title_ua', $page->title_ua)}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="title_en">Назва англійською</label><br>
                        <input class="w-100" id="title_en" name="title_en" type="text" value="{{old('title_en', $page->title_en)}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="intro_ua">Вступ українською</label><br>
                        <input class="w-100" id="intro_ua" name="intro_ua" type="text" value="{{old('intro_ua', $page->intro_ua)}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="intro_en">Вступ англійською</label><br>
                        <input class="w-100" id="intro_en" name="intro_en" type="text" value="{{old('intro_en', $page->intro_en)}}" required>
                    </div>
                    <div class="mb-2">
                        <label for="content_ua">Контент українською</label><br>
                        <textarea class="w-100" id="content_ua" name="content_ua" type="text" required>{{old('content_ua', $page->content_ua)}}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="content_en">Контент англійською</label><br>
                        <textarea class="w-100" id="content_en" name="content_en" type="text" require>{{old('content_en', $page->content_en)}}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="parent_id">Id батьківської сторінки</label><br>
                        <input class="w-100"  id="parent_id" type="number" step="1" value="{{old('parent_id', $page->parent_id)}}">
                    </div>
                    <div class="mb-2">
                        <label for="order_num">Номер сортування</label><br>
                        <input class="w-100" id="order_num" name="order_num" type="number" step="1" min="0" value="{{old('order_num', $page->order_num)}}">
                    </div>
                    <div class="mb-2">
                        <label for="order_type">Тип сортування</label>
                        <select name="order_type" id="order_type">
                            @foreach(\App\OrderType::all(['id', 'name']) as $type)
                                <option @if($type->id == old('order_type', $page->order_type))selected @endif value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="container_type">Тип контейнера</label>
                        <p><input name="container_type" type="radio" value="tile" @if('tile' == old('container_type', $page->container_type))checked @endif>  Плитка</p>
                        <p><input name="container_type" type="radio" value="list" @if('list' == old('container_type', $page->container_type))checked @endif>  Список</p>
                        <p><input name="container_type" type="radio" value="" @if('' == old('container_type', $page->container_type))checked @endif>  Не контейнер</p>
                    </div>
                </form>
            </div>
            <div class="col-4 col-md-3 h-75 d-flex flex-column justify-content-start align-items-center">
                <div class="border table-bordered bg-white d-flex flex-column align-items-center py-3 px-3">
                    <div class="mb-3">
                        <label for="created_at">Створено</label>
                        <input class="w-100" id="created_at" value="{{$page->updated_at}}" type="text" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="updated_at">Оновлено</label>
                        <input class="w-100" id="updated_at" value="{{$page->updated_at}}" type="text" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="deleted_at">Видалено</label>
                        <input class="w-100" id="deleted_at" value="{{$page->deleted_at}}" type="text" disabled>
                    </div>
                </div>
                <br>
                <div class="border table-bordered bg-white text-center w-100">
                    {{$page->id}}
                </div>
                <br>
                <div class=" bg-white py-4 w-50 d-flex flex-column justify-content-center align-items-center">
                    <button form="create_form" class=" btn btn-success text-center">
                        <i class="fa fa-2x fa-save"></i>
                    </button>
                </div>
                <div class="bg-white py-4 w-50 d-flex flex-column justify-content-center align-items-center">
                    <form onsubmit="return confirm('Видалити запис і всі дочірні елементи?')" method="post" action="{{route('pages.destroy', $page->id)}}">
                        @method('delete')
                        @csrf
                        <button title="Видалити" type="submit" class="border-0 bg-transparent " style="outline: none">
                            <i class="fa fa-2x fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
