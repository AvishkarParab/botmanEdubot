@foreach($data as $q)
<option value={{$q['id']}}>{{$q['subtopicName']}}</option>
@endforeach