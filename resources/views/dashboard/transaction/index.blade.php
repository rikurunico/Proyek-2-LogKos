@extends('layout.main.main')

@section('container')
    <div class="d-flex flex-wrap mb-5 align-items-center justify-content-between">
        <a class="btn btn-primary w-sm-100 mb-sm-1" href="{{ route($transactions_route["create"]) }}">Tambah Data Transaksi</a>
        @if ($transactions->count() > 0)
            {{-- <form action="{{ route(config("data.route.admin.genres.print")) }}" class="d-inline" method="post">
                @csrf
                @method("post")
                <button class="btn btn-success border-0">Generete Report</button>
            </form> --}}
            <a class="btn btn-success w-sm-100" href="{{ "#" }}">Cetak Data</a>
        @endif
    </div>
    @if (session()->has("success")) 
        <div class="col-md-5 p-0">  
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session("success") }}
                <button type="button" class="btn-close py-0 py-3" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if ($transactions->count() > 0)
        <div class="table-responsive mb-5">
            <table class="table table-striped table-sm" >
                <caption></caption>
                <style>
                    table.table thead tr th:nth-child(1)    , 
                    table.table tbody tr td:nth-child(1){
                        text-align: center
                    }

                    table.table tbody tr td{
                        vertical-align: middle !important;
                    }
                </style>
                <thead>
                    <tr>
                        <th scope="col">Nomer Kamar</th>
                        <th scope="col">Nama Penghuni</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)        
                        @dd($transaction ->dormitory_id->name)
                        <tr>
                            <td>{{$transaction ->dormitory_id->name}}</td>
                            <td>{{$transaction ->total_bulan}}</td>
                            <td>{{$transaction ->bulan_mulai}}</td>
                            <td>{{$transaction ->bulan_selesai}}</td>
                            <td>{{$transaction ->bukti_pembayaran}}</td>

                            <td class="d-flex">
                                <a href="{{ route($transactions_route["show"], $transaction->id) }}" class="btn btn-primary mr-2">Detail</a>
                                <a href="{{ route($transactions_route["edit"], $transaction->id) }}" class="btn btn-warning mr-2">Edit</a>
                                <form action="{{ route($transactions_route["delete"], $transaction->id) }}" class="d-inline" method="post">
                                    @csrf
                                    @method("delete")
                                    <button onclick="return confirm('Konfirmasi')" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            {{ $transactions->links() }}
        </div>
    @else
        <div class="d-flex">
            <h3>Tidak ada Data Transaksi</h3>
        </div> 
    @endif
@endsection