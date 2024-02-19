@extends('layout.main')

@section('container')

<table class="table table-sm">
    <thead class="table-dark">
      <tr>
        <th scope="col">Class</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kelass as $kelas)
        <tr>
        <td>{{ $kelas->nama_kelas }}</td>
        <td> 
          <div class="d-flex gap-2">
            <a href="/kelas/detail{{ $kelas->id }}"> <button><ion-icon name="information-outline"></ion-icon></button></a>
          </div>
          </div>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
@endsection