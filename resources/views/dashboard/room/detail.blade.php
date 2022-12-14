@extends('layout.main.main')

@section('container')
    <h2 class="mb-3 fs-sm-3">Detail Kamar {{ $room->title }}</h2>
    <div class="col-xl-8 p-0 mb-3 mb-md-5">
        <a class="btn btn-primary me-0 me-3 w-100 w-lg-auto mb-3 mb-lg-0" href="{{ route($rooms_route["index"]) }}">Kembali ke Data Tabel</a>
        <a class="btn btn-warning me-0 me-3 w-100 w-lg-auto mb-3 mb-lg-0" href="{{ route($rooms_route["edit"], $room->id) }}">Edit Data</a>
        <form action="{{ route($rooms_route["delete"], $room->id) }}" class="d-inline w-100 w-lg-auto mb-3 mb-lg-0" method="post">
            @csrf
            @method("delete")
            <button onclick="return confirm('Konfirmasi')" class="btn btn-danger w-100 w-lg-auto">Hapus</button>
        </form>
    </div>
    <div class="col-xl-8 mb-5 p-0">
        <div class="p-0 mb-sm-3">
            @if (count($room->roomimages) > 0)
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        @for ($i = 0; $i < count($room->roomimages); $i++)
                            @if ($i == 0)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="active" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                            @else
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" aria-label="Slide {{ $i+1 }}"></button>
                            @endif
                        @endfor
                    </div>
                    <div class="carousel-inner bg-primary flex justify-content-center align-items-center w-100">
                        @for ($i = 0; $i < count($room->roomimages); $i++)
                            @if ($i == 0)
                                <div class="carousel-item active">
                                    <img src="{{ asset("storage/" . $room->roomimages[$i]->image) }}" class="d-block w-100" alt="...">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{ asset("storage/" . $room->roomimages[$i]->image) }}" class="d-block w-100" alt="...">
                                </div>
                            @endif
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @else
                <div class="col-12 mb-3 p-0">
                    <span class="form-control border-1 border-danger text-danger">Tidak ada gambar untuk kamar ini</span>
                </div>
            @endif
        </div>
        <div class="d-flex p-0 flex-sm-column">
            <div class="row my-3 p-0">
                <div class="col-lg-5">
                    <span class="form-control border-1 border-primary">Nomer Kamar</span>
                </div>
                <div class="col-lg-7">
                    <span class="form-control border-1 border-primary">{{ $room->room_number }}</span>
                </div>
            </div>
            <div class="row my-3 p-0">
                <div class="col-lg-5">
                    <span class="form-control border-1 border-primary">Nama Penghuni Kos</span>
                </div>
                <div class="col-lg-7">
                    <span class="form-control border-1 border-primary {{ $room->dormitory->name ?? "text-danger"}}">{{ $room->dormitory->name ?? "Tidak ada penghuni"}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection