@extends('layout.main')

@section('container')

<div class="row justify-content-end">
<div class="col-md-3">
<form action="/student/all">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
    <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
  </div>
</form>
</div>
</div>

<table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nis</th>
        <th scope="col">Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Class</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student as $students)
        <tr>
        <td>{{ $students->nis }}</td>
        <td>{{ $students->name }}</td>
        <td>{{ $students->birthdate }}</td>
        <td>{{ $students->kelas->nama_kelas}}</td>
        <td>
          <div class="d-flex gap-2">
            <a href="/student/detail{{ $students->id }}"> <button><ion-icon name="information-outline"></ion-icon></button></a>
          </div>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>

<div class="d-flex justify-content-center">
  {{ $student->links()}}
</div>

@endsection
