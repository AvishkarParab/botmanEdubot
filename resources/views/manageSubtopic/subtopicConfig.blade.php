@foreach($data as $q)
<option value={{$q['id']}}>{{$q['chapterName']}}</option>
@endforeach