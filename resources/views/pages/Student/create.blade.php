@extends('layout.app')
@section('title')
    Add student
@endsection
@section('content')
<form>
    <div class="mb-3 container-sm">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
    </div>
    <div class="mb-3 container-sm">
      <label for="roll_no" class="form-label">Roll No</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="roll_no">
    </div>

    <div class="mb-3 container-sm">
        <label for="roll_no" class="form-label">Faculty</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="faculty">
    </div>

    <div class="container-sm">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection