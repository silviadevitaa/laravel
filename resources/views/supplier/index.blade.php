apakah ini keluar?
<br />
@foreach ($supplier as $supplierlist)
  {{ $supplierlist->supplier_id}}
  {{ $supplierlist->supplier_name}}
  {{ $supplierlist->supplier_address}}
  <a href="/Customer//{{ $customerlist->custommer_id }}">show</a>
  <br />
  <!-- http://localhost:8000/Customer/3 -->
@endforeach

<a href="{{ url('Supplier/create') }}"> pencet lah </a>
