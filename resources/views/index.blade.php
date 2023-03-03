@extends('layout.app')


@section('content')
    <div class="container">
        <h5>Master Barang</h5>
        <br>
        <form action="{{ route('tambah_barang') }}" method="GET">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
              <input type="text" class="form-control" id="kode" name="kode_barang">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama_barang">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah_barang">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                <input type="text" class="form-control" id="harga" name="harga_barang">
              </div>
            <input type="submit" class="btn btn-primary" value="Simpan" name="store"></input>
            <input type="submit" class="btn btn-primary" value="Update" name="store"></input>
          </form>
          <br>
          <table class="table table-striped table-hover">
              <thead>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Harga Barang</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                  @foreach ($barang as $barangs)
                <tr>
                    <td>{{$barangs->kode_barang}}</td>
                    <td>{{$barangs->nama_barang}}</td>
                    <td>{{$barangs->jumlah_barang}}</td>
                    <td>Rp.{{$barangs->harga_barang}}</td>
                    <td>
                
                        <button class="btn btn-warning btn-sm btn_edit">Edit</button>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    @endforeach
                </tr>
              </tbody>
          </table>
    </div>
@endsection

@push('js')
@endpush

