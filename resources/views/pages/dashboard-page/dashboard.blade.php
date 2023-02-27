@extends('layouts.app')

@section('content')
    <main class="dashboard">

        <section class="dashboard__title-container">
            <h1 class="dashboard__title-h1">Админ панель</h1>
        </section>
        
        <section class="dashboard__control-panel">

        

            <div class="dashboard__control-title">
                <p>Управление товарами</p>
            </div>

            <div class="dashboard__control-item">
                <div class="dashboard__control-links">
                    <a href="dashboard/create-product-composite" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Добавить композит</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                        </div>
                    </a>
                    <a href="dashboard/create-product-wood" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Добавить стаб. дерево</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                        </div>
                    </a>
                    <a href="dashboard/create-product-mammoth" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Добавить блок мамонта</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                        </div>
                    </a>
                    <a href="dashboard/create-product-blade" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Добавить клинок</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                        </div>
                    </a>   
                </div>
            </div>

            <div class="dashboard__control-item">
                <div class="dashboard__control-links">
                    <a href="dashboard/edit-products" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Редактировать товар</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png">
                        </div>
                    </a> 
                </div>
            </div>

            <div class="dashboard__control-title">
                <p>Выход из панели</p>
            </div>

            <!-- exit -->
            <div class="dashboard__control-item">
                <div class="dashboard__control-links">

                    <a href="/logout" class="link link--dashboard">
                        <div class="dashboard__control-link-data">
                            <p class="link__text">Выйти</p>
                            <img class="link__icon" src="/images/icons/footer-arrow-circle-right-white.png" alt="" srcset="">
                        </div>
                    </a>

                </div>
            </div>

        </section>


            
           
 
    </main>


@endsection
