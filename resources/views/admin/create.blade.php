@extends('layouts.app')

@section('title_of_page')
    Admin Panel
@endsection

@section('content')
    <div class="container my-5 pt-5 d-flex justify-content-center" style="height: 930px">
        <div class="row" style="width: 90%">
            <div class="col-8 bg-white table-bordered border h-100 p-4">
                <form id="create_form" method="post" action="{{route('pages.store')}}">
                    @csrf
                    <div class="mb-2">
                        <label for="caption">Заголовок</label> <br>
                        <input class="w-100" id="caption" name="caption" type="text" required>
                    </div>
                    <div class="mb-2">
                        <label for="title_ua">Назва українською</label><br>
                        <input class="w-100" id="title_ua" name="title_ua" type="text" required>
                    </div>
                    <div class="mb-2">
                        <label for="title_en">Назва англійською</label><br>
                        <input class="w-100" id="title_en" name="title_en" type="text" required>
                    </div>
                    <div class="mb-2">
                        <label for="intro_ua">Вступ українською</label><br>
                        <input class="w-100" id="intro_ua" name="intro_ua" type="text" required>
                    </div>
                    <div class="mb-2">
                        <label for="intro_en">Вступ англійською</label><br>
                        <input class="w-100" id="intro_en" name="intro_en" type="text" required>
                    </div>
                    <div class="mb-2">
                        <label for="content_ua">Контент українською</label><br>
                        <textarea class="w-100" id="content_ua" name="content_ua" type="text" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="content_en">Контент англійською</label><br>
                        <textarea class="w-100" id="content_en" name="content_en" type="text" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="parent_id">Id батьківської сторінки</label><br>
                        <input class="w-100"  id="parent_id" type="number" value="{{request()->parent}}"
                               disabled>
                        <input name="parent_id" value="{{request()->parent}}" hidden>
                    </div>
                    <div class="mb-2">
                        <label for="order_num">Номер сортування</label><br>
                        <input class="w-100" id="order_num" name="order_num" type="number" step="1" min="0" value="0">
                    </div>
                    <div class="mb-2">
                        <label for="order_type">Тип сортування</label>
                        <select name="order_type" id="order_type">
                            @foreach(\App\OrderType::all(['id', 'name']) as $type)
                                <option @if($type->id == 1)selected @endif value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="container_type">Тип контейнера</label>
                        <p><input name="container_type" type="radio" value="tile">  Плитка</p>
                        <p><input name="container_type" type="radio" value="list">  Список</p>
                        <p><input name="container_type" type="radio" value="" checked>  Не контейнер</p>
                    </div>
                </form>
            </div>
            <div class="col-3 h-50 d-flex flex-column justify-content-start">
                <div
                    class="border table-bordered bg-white h-25 d-flex flex-column justify-content-center align-items-center">
                    <button form="create_form" class=" h-50 w-50 btn btn-success text-center">
                        Зберегти
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
