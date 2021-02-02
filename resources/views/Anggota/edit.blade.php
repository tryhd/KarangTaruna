@extends('layout.master')
@section('content')
<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Kelola Anggota</h1>

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Tambah Data Anggota</h6>
     </div>
     <div class="card-body">
        <form class="row g-3">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4" class="form-label">Nama</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4" class="form-label">Jenis Kelamin</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="form-group col-12">
                <label for="inputAddress" class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group col-12">
                <label for="inputAddress2" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Jawabaaab</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-12">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
   </div>
@endsection
