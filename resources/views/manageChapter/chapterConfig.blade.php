@foreach ($data as $q)
<option value={{$q['id']}}>{{$q['courseName']}}</option>
@endforeach