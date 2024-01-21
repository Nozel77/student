@extends('layout.main')

@section('container')

<table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nis</th>
        <th scope="col">Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Class</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($student as $students)
        <tr>
        <td>{{ $students['nis'] }}</td>
        <td>{{ $students['name'] }}</td>
        <td>{{ $students['birthdate'] }}</td>
        <td>{{ $students['class'] }}</td>
        <td>{{ $students['address'] }}</td>
        <td>
          
          <div class="d-flex">
            <a href="/student/detail{{ $students->id }}"> <button><ion-icon name="information-outline"></ion-icon></button></a>
          <a href="/student/edit/{{ $students->id}}"> <button><ion-icon name="create-outline"></ion-icon></button></a>
          <form action="/student/delete/{{ $students->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this student?');">
            @csrf
            @method('DELETE')
            <button type="submit">
                <ion-icon name="trash-outline"></ion-icon>
            </button>
        </form>
          </div>
        
         
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
  <a href="/student/create"><button><ion-icon name="add-outline"></ion-icon></button></a>
@endsection