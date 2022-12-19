<table id="listing">
    <tr>
        <th>#</th>
        <th>товар</th>
        <th>кол-во</th>
        <th>цена</th>
    </tr>

    <?php
        $i = 1
    ?>
    
    @foreach($items as $item)
    
    <tr>
        <td>{{$i++}}</td>
        <td>{{$item->category}} | {{$item->name}} | {{$item->color}}</td>
        <td>{{$item->quantity}} шт.</td>
        <td>{{$item->price}} руб.</td>
    </tr>
    @endforeach
   
</table>
