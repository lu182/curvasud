<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class='panel-heading'>Edit Form</div>
    <div class='panel-body'>
      <form method='POST' action='{{CRUDBooster::mainpath('edit-save/'.$row->id_ciudad)}}'>
        <div class='form-group'>
          <label>Name</label>
          <input type='text' name='ciudad' required class='form-control' value='{{$row->ciudad}}'/>
        </div>
    </div>
    <div class='panel-footer'>
      <input type='submit' class='btn btn-primary' value='Guardar'/>
    </div>
</form>
  </div>
@endsection
