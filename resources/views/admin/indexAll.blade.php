@extends('layouts.app')

@section('title_of_page')
    Admin Panel
@endsection

@section('content')
    <div class="container my-5 pt-5">
        <div class="center d-flex justify-content-center">
            <div></div>
            <H1 class="text-center">Сторінки</H1>
            <div><i title="Створити новий елемент" class="far fa-3x fa-plus-square text-info ml-3 "></i></div>
        </div>
        <div class="table-hover">
            <table class="table table-striped table-lg">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Підпис</th>
                    <th>Назва</th>
                    <th>Вступ</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @each('admin.include.itemForAll', $pages, 'item')
                </tbody>
            </table>
        </div>
    </div>
@endsection

