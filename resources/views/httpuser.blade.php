<div>
    <table border="3">
        <tr >
            <td style="width: 60px">ID</td>
            <td style="width: 60px">Name</td>
        </tr>
         @foreach ($collection as $item)
            <tr>
            <td style="width: 60px">{{$item['id']}}</td>
            <td style="width: 60px">{{$item['first_name']}}</td>
            </tr>
        @endforeach
        
    </table>
</div>