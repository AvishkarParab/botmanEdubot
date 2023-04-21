<div>
    <h4 class="text-center">View Question</h4>
        <table border="1" class="container table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question Type</th>
                    <th>Question</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Correct Option</th>
                </tr>
            </thead>
            @foreach ($data as $q)
                <tr>
                    <td>{{$q['id']}}</td>
                    <td>{{$q['qtype']}}</td>
                    <td>{{$q['quest']}}</td>
                    <td>{{$q['opt1']?$q['opt1']:"NULL"}}</td>
                    <td>{{$q['opt2']?$q['opt2']:"NULL"}}</td>
                    <td>{{$q['opt3']?$q['opt3']:"NULL"}}</td>
                    <td>{{$q['opt4']?$q['opt4']:"NULL"}}</td>
                    <td>{{$q['correctopt']?$q['correctopt']:"NULL"}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
    


@include('components.footer')
@include('components.chatbot');
