@extends('layouts.app')

@section('content')
    <main class="dashboard-create">

        <section class="dashboard-create__title-container">
            <h1 class="dashboard-create__title-h1">Редактирование товара</h1>
        </section>
        
        <section class="dashboard-create__control-panel">

            <div class="dashboard__control-title">
                <p>Список товара</p>
            </div>  

            <div class="dashboard__listing">


                @foreach($products as $product)


                    <div class="dashboard__listing-item">



                        <div class="dashboard__number">
                            <p>{{$product->id}}</p>
                        </div>

                        <div class="dashboard__index">
                            <p>{{$product->product_index}}</p>
                        </div>

                        <div class="dashboard__index">
                            <p>{{$product->product_category}}</p>
                        </div>

                        <div class="dashboard__name">
                            <p>{{$product->product_name}} </p>
                        </div>








                       


                        @if($product->product_shape == 'клинок')

                            <div class="dashboard__color">
                                <p>{{$product->product_blade_model}}</p>
                            </div>

                        @else

                            <div class="dashboard__color">
                                <p>{{$product->product_color}}</p>
                            </div>
                            
                        @endif











                        <div class="dashboard__name">
                            <p>{{$product->product_price}} руб.</p>
                        </div>

                        <div class="dashboard__listing-edit">
                            <a class="dashboard__listing-edit-link" href="/dashboard/edit-products/{{$product->id}}">Изменить</a>
                        </div>

                        


                        <div class="dashboard__listing-edit">
                            <form action="/dashboard/product/delete/{{$product->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">удалить</button>
                            </form>
                        </div>



                        


                    </div>

                @endforeach



            </div>






            



        </section>
    </main>
@endsection