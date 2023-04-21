{{-- <div>
    <table border="3">
        <tr >
            <td style="width: 60px">ID</td>
            <td style="width: 60px">Name</td>
        </tr>
         @foreach ($collection as $item)
            <tr>
            <td style="width: 60px">{{$item['id']}}</td>
            <td style="width: 60px">{{$item['firstname']}}</td>
            </tr>
        @endforeach
        
    </table>
</div> --}}
<?php 
   print_r($collection["users"][0]["username"]);
?>