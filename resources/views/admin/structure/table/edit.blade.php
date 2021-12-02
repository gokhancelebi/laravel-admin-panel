@extends('admin.layouts.app')
@section("content")
    <div class=" flex flex-col admin-edit-table">
        <form action="" method="post" class="w-full flex flex-col">
            @csrf
            <div class="form-control">
                <label for="menu">Tablo Adı</label>
                <input type="text" name="title" class="w-full" id="table">
                <input type="hidden" name="admin_menu_id" value="{{$menu_id}}" class="w-full" id="title">
            </div>
            <div class="form-control">
                <label for="menu">Tablo</label>
                <select name="table" id="table">
                    <option value="">Tablo Seç</option>
                    @foreach($tables as $table)
                        <option value="{{route("admin.structure.table.getcolumns",["table" => $table])}}">{{$table}}</option>
                    @endforeach
                </select>
            </div>
            <div class="hidden admin-table-columns">
                <div class="form-control" >
                    <label for="columns">Sütunlar</label>
                    <div class="admin-table-columns-list">

                    </div>
                </div>
            </div>

            <div class="form-control">
                <label for="menu">İkon</label>
                <input type="text" name="icon" class="w-full" id="icon">
            </div>

            <div class="form-control">
                <button class="btn-red btn-small">Ekle</button>
            </div>
        </form>
    </div>


@endsection
