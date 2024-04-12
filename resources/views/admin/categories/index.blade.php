
@extends('admin.layouts.template')
@section("contenu")
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    @if (Session::has("message"))
    <div class="alert alert-success">{{Sesion::get('message')}}</div>
     @endif   
   
        
    
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Name</th>
        
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @forelse ($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>
            <button class="btn btn-success">Modifier</button>
            <form class="d-inline" action="{{route('categories.destroy',$category->id)}}"method="post">
              @csrf
              @method("DELETE")
            <button type="submit"onclick="return confirm('etes vous sure de supprimer')" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
            
        @empty
       <tr><td colspan="2">no date found</td>
      </tr>
            
        @endforelse
     
  </tbody>
      <tfoot>
      <tr>
        <th>Name</th>
        <th>Action</th>
        
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection
    
