@extends('admin.layouts.app')
@section("content")
    <div class="w-full flex">
        <div class="buttons">
            <a class="btn-red btn-small" href="{{route("admin.structure.menus.new")}}">
                Add New
            </a>
        </div>
    </div>
    <div class="w-full flex flex-col mt-5">
        @foreach($menus as $menu)
            <div class="border-gray-500 my-1 border p-2 rounded flex justify-between items-center">
                <span>{{$menu->name}}</span> <a href="{{route("admin.structure.table.new",["menu_id" => $menu->id])}}" class="btn-red btn-small">Tablo Ekle</a>
            </div>
            @if(count($menu->tables) > 0)
                <div class="grid grid-cols-4 border-gray-500 my-1 border p-2 rounded">

                    @foreach($menu->tables as $table)
                        <a href="" class="border-gray-500 my-1 border p-2 rounded">
                            {{$table->title}}
                        </a>
                    @endforeach
                </div>

            @endif
        @endforeach
    </div>
@endsection
