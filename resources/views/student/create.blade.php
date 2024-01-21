
@extends('layout.main')

@section('container')
<a href="/student/all"><button><ion-icon name="arrow-back-outline"></ion-icon></button></a><br><br>
<h3>Create Student</h3>

<form action="/student/add" method="post" onsubmit="return alert('data berhasil ditambah!');">
    @csrf

    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" class="form-control" id="nis" name="nis" required>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Name</label>
        <input type="text" class="form-control" id="nama" name="name" required>
    </div>

    <div class="mb-3">
        <label for="tanggal_lahir" class="form-label">Birthdate</label>
        <input type="date" class="form-control" id="tanggal_lahir" name="birthdate" required>
    </div>

    <div class="mb-3">
        <label for="kelas" class="form-label">Class</label>
        <input type="text" class="form-control" id="kelas" name="class" required>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Address</label>
        <input type="text" class="form-control" id="alamat" name="address" required></input>
    </div>

    <button type="submit"  class="btn btn-primary">Submit</button>
</form>
@endsection
    

    
