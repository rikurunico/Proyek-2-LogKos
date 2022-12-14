@extends('layout.main.main')

@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800 text-">Data Kos {{ $data_instance->name }}</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <em class="fas fa-download fa-sm text-white-50"></em>
            Generate Report
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route("rooms.index") }}" class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"  >
                                Data Kamar
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Total = {{ $total_rooms }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <em class="fas fa-calendar fa-2x text-gray-300"></em>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route("dormitory.index") }}" class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Warga</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total = {{ $total_dormitories }}</div>
                        </div>
                        <div class="col-auto">
                            <em class="fas fa-dollar-sign fa-2x text-gray-300"></em>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route("transactions.index") }}" class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Data Transaksi
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        Total = {{ $total_transactions }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <em class="fas fa-clipboard-list fa-2x text-gray-300"></em>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <a href="{{ route("users.index") }}" class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Data Admin Kos
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                All Data = {{ $total_users }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <em class="fas fa-comments fa-2x text-gray-300"></em>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Content Row -->

    {{-- <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div href="#" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                >
                    <h6
                        class="m-0 font-weight-bold text-primary"
                    >
                        Earnings Overview
                    </h6>
                    <div class="dropdown no-arrow">
                        <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <em class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                            ></em>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink"
                        >
                            <div class="dropdown-header">
                                Dropdown Header:
                            </div>
                            <a
                                class="dropdown-item"
                                href="#"
                                >Action</a
                            >
                            <a
                                class="dropdown-item"
                                href="#"
                                >Another action</a
                            >
                            <div
                                class="dropdown-divider"
                            ></div>
                            <a
                                class="dropdown-item"
                                href="#"
                                >Something else here</a
                            >
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                >
                    <h6
                        class="m-0 font-weight-bold text-primary"
                    >
                        Revenue Sources
                    </h6>
                    <div class="dropdown no-arrow">
                        <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            id="dropdownMenuLink"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            <em class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"
                            ></em>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink"
                        >
                            <div class="dropdown-header">
                                Dropdown Header:
                            </div>
                            <a
                                class="dropdown-item"
                                href="#"
                                >Action</a
                            >
                            <a
                                class="dropdown-item"
                                href="#"
                                >Another action</a
                            >
                            <div
                                class="dropdown-divider"
                            ></div>
                            <a
                                class="dropdown-item"
                                href="#"
                                >Something else here</a
                            >
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <em
                                class="fas fa-circle text-primary"
                            ></em>
                            Direct
                        </span>
                        <span class="mr-2">
                            <em
                                class="fas fa-circle text-success"
                            ></em>
                            Social
                        </span>
                        <span class="mr-2">
                            <em
                                class="fas fa-circle text-info"
                            ></em>
                            Referral
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@endsection