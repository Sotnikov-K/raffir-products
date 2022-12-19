<?php
    $today = date("y");
?>

<div class="orderinfo">
    <div class="orderinfo__data">
        <table id="orderinfo">
            <tr>
                <th>Номер заказа</th>
                <th>Дата заказа</th>
                <th>Способ доставки</th>  
            </tr>
            <tr>
                <td>RU{{$today}}{{$orderid}}</td>
                <td>{{$orderdate}}</td>
                <td>Стандарт</td>
            </tr>
        </table>
    </div>
</div>