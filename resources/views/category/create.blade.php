@extends('layouts.app')

@section('title', 'Category')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category</a></li>
    <li class="breadcrumb-item active">Tambah</li>
@endsection
 
@section('content')
<div class="row">
  <div class="col-lg-12">
    <form action="{{route('category.store')}}" method="post">
      @csrf
        <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" required>
              </div>
            </div>
            <div class="card-footer">
              <button type="reset" class="btn btn-dark">Reset</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
  </div>  
</div>       
@endsection

@push('scripts')
@endpush