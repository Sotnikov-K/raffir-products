@extends('layouts.app')

@section('slider-main')
    <div class="slider-main slider-main-admin">
        <div class="">
            <h1 class="slider-main__title-text slider-main__title-text-home">Admin panel</h1>
            <p class="slider-main__paragraph-text slider-main__paragraph-text-home">Add, modify or delete. You can everything!</p>
        </div>
    </div>
@endsection

@section('content')
    <section class="admin-section">

        <div class="admin">
            <a href="/private/create">
                <div class="admin-additem">
                    <p class="admin-additem-title">Add new item to the database</p>
                </div>
            </a>
            <div class="admin-additem">
                <p class="admin-additem-title">Update one specific item</p>
            </div>
            <div class="admin-additem">
                <p class="admin-additem-title">Delete one specific item</p>
            </div>
        </div>
       
        


       


    </section>
@endsection