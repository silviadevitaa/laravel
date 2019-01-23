ini halaman show
<br />
@foreach ($employee as $employeelist)
  {{ $employeelist->employee_id}}
  {{ $employeelist->employee_name}}
  {{ $employeelist->employee_address}}
  {{ $employeelist->employee_phone_number}}
  <br />
  <!-- http://localhost:8000/Customer/3 -->

@endforeach


<a href="{{ url('Employee') }}"> back to view </a>
