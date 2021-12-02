@extends('admin.layouts.app')
@section("content")
    <div class=" flex flex-col">
        <form action="" method="post" class="w-full flex flex-col">
            @csrf
            <div class="form-control">
                <label for="menu">Menü Adı</label>
                <input type="text" name="menu" class="w-full" id="menu">
            </div>
            <div class="form-control">
                <button class="btn-red btn-small">Ekle</button>
            </div>
        </form>
    </div>
@endsection
