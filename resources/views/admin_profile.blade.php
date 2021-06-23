<table border="1">



@foreach($selectKey as $item)


    <tr>
    <td>{{$item->Name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->password}}</td>
    </tr>


@endforeach

</table>