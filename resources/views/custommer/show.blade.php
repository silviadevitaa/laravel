ini halaman show
<br />
@foreach ($custommer as $custommerlist)
  {{ $custommerlist->custommer_id}}
  {{ $custommerlist->name}}
  {{ $custommerlist->address}}
  <br />
  <!-- http://localhost:8000/Customer/3 -->

@endforeach


<a href="{{ url('Customer') }}"> back to view </a>
