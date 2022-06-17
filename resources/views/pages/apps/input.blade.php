@extends('layout.master')

@section('content')


<nav class="page-breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Input</a></li>
      <li class="breadcrumb-item active" aria-current="page">Masukan Asset</li>
    </ol>
  </nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Masukkan Asset</h6>
          <form>
  
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Tanggal</label>
              <input type="Date" class="form-control" id="exampleInputText1" value="Amiah Burton" placeholder="Enter Name">
            </div>
  
            <div class="mb-3">
              <label for="exampleInputNumber1" class="form-label">Transaksi</label>
              <select class="form-select" id="option">
              <option selected disabled>Pilih Transaksi</option>
              <option>Penyetoran Modal Kas</option>
              <option>Penyetoran Modal Bangunan</option>
              <option>Penyetoran Modal Kendaraan</option>
              <option>Penyetoran Modal perawatan</option>
              <option>Pembelian perlengkapan Tunai</option>
              <option>Pembelian Perlengkapan Kredit</option>
              <option>Pembelian Persediaan Tunai</option>
              <option>Pembelian Persediaan Kredit</option>
              <option>Pembayaran sewa</option>
              <option>Pembelian tanah tunai</option>
              <option>Pembelian bangunan tunai</option>
              <option>Pembelian kendaraan tunai</option>
              <option>Pembelian peralatan tunai</option>
              <option>Pembelian tanah kredit</option>
              <option>Pembelian bangunan kredit</option>
              <option>Pembelian kendaraan kredit</option>
              <option>Pembelian peralatan kredit</option>
              <option>Penerimaan piutang usaha</option>
              <option>Pembayaran utang usaha</option>
              <option>Pembayaran utang bank</option>
              <option>Pendapatan jasa</option>
              <option>Pendapatan sewa</option>
              <option>Penjualan tunai</option>
              <option>Penjualan kredit</option>
              </select>
            </div>
  
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Nominal</label>
              <input type="number" class="form-control" id="exampleInputText1" placeholder="masukkan nominal">
            </div>

            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Asset</label>
              <input type="number" class="form-control" id="exampleInputText1" placeholder="Masukkan Asset">
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Utang</label>
              <input type="number" class="form-control" id="exampleInputText1" placeholder="Masukkan Utang">
            </div>
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Modal</label>
              <input type="number" class="form-control" id="exampleInputText1" placeholder="Masukkan Modal">
            </div>
  
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection