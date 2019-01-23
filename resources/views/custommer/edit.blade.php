ini halaman edit
<br />
@foreach ($custommer as $custommerlist)
 <form action="{{ route('Customer.update', $custommerlist->custommer_id)}}" method="POST">
   {{ csrf_field() }}
        {{ method_field('PUT') }}
  <input type="text"
         name="txt_id"
         value="{{ $custommerlist->custommer_id}}"/> <br />

 <input type="text"
         name="txt_name"
         value="{{$custommerlist->name}}"/> <br />

 <input type="text"
         name="txt_address"
         value="{{ $custommerlist->address}}"/> <br />

@endforeach

<a href="{{url('Customer')}}"></a>

<br/>
  <input type="submit" name="sbm_save" id = "sbm_save" value="save" />
</form>
