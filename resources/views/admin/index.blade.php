@extends('layouts.app')

@section('title_of_page')
    Admin Panel
@endsection

@section('content')
    <div class="container my-5 pt-5">
        <div class="center d-flex justify-content-center">
            <div></div>
            <H1 class="text-center">{{$page->title}}</H1>
            <div><a href="{{route('pages.create', 'parent='.$page->id)}}"><i title="Створити новий елемент"
                                                                             class="far fa-3x fa-plus-square text-info ml-3 "></i></a>
            </div>
            <div class="row ml-3 align-items-center">
                <form class="d-flex flex-row align-items-center justify-content-center"
                      action="{{route('pages.index')}}">
                    <select id="order_type_num" name="order_type_num" onchange="this.form.submit()">
                        <option @if($order_type_id == null) selected @endif >({{$page->orderType->name}})</option>
                        <option @if($order_type_id == 'id') selected @endif value="id">ID</option>
                        <option @if($order_type_id == 'created_at') selected @endif value="created_at">Дата створення
                        </option>
                        <option @if($order_type_id == 'updated_at') selected @endif value="updated_at">Дата оновлення
                        </option>
                        <option @if($order_type_id == 'order_num') selected @endif value="order_num">Номер</option>
                    </select>
                    <input hidden name="parent" type="number" value="{{$page->id}}">
                </form>
                <form class="d-flex flex-row align-items-center justify-content-center"
                      action="{{route('pages.index')}}">
                    <input hidden name="sort" type="text" value="{{$sort}}">
                    <input hidden name="order_type_num" type="text" value="{{$order_type_id}}">
                    <input hidden name="parent" type="number" value="{{$page->id}}">
                    <button title="Sort" type="submit" class="border-0 bg-transparent ml-2" style="outline: none">
                        <i class="fa fa-2x fa-sort text-dark"></i>
                        <span class="d-block">{{$sort == 1 ? 'Inc' : 'Dec'}}</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="table-hover">
            <table class="table table-striped table-lg">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Назва</th>
                    <th>Вступ</th>
                    <th>Контейнер</th>
                    <th>№</th>
                    <th>Cтворено</th>
                    <th>Оновлено</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @each('admin.include.item', $children, 'item')
                </tbody>
            </table>
        </div>
    </div>
@endsection
