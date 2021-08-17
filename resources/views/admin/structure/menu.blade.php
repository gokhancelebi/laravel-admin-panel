@extends('admin.layouts.app')
@section("content")
    <div class="w-full flex">
        <div class="buttons">
            <button class="btn-red btn-small">
                Add New
            </button>
        </div>
    </div>
    <div class="w-full flex flex-col">
        @foreach($menus as $menu)
            <div class="border-gray-500">
                Hello
            </div>
        @endforeach
    </div>
@endsection
