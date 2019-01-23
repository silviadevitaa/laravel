apakah ini keluar?
<br />
@foreach ($custommer as $custommerlist)
  {{ $custommerlist->custommer_id}}
  {{ $custommerlist->name}}
  {{ $custommerlist->address}}
  <a href="/Customer/{{ $custommerlist->custommer_id }}">show</a>
  <a href="/Customer/{{ $custommerlist->custommer_id }}/edit">edit</a>

  <form action="/Customer/
  {{$custommerlist->custommer_id}}" method="post">
      {{csrf_field()}}
      {{method_field('DELETE')}}
      <button>X</button>
  </form>
  <br />
  <!-- http://localhost:8000/Customer/3 -->

@endforeach


<a href="{{ url('Customer/create') }}"> back to view </a>
