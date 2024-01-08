@extends('layouts.aps')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
<h2 class="mt-4">Dashboard</h2>
<div class="mb-2 mb-sm-2">
    <div class="flex mb-2 mb-sm-2">
        <a href="{{ route('tambah_data') }}" class="btn btn-success">Tambah Data</a>
    </div>
</div>
<div class="row">
<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NO ID KARYAWAN</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Mobile Number</th>
                                            <th>Departemen</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data_karyawan as $karyawan)
                                        <tr style="">
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <span class="js-lists-values-general-karyawan-id">{{$karyawan->general_karyawan_id}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-nama">{{$karyawan->general_firstname}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-email">{{$karyawan->general_email}}</span>
                                            </td>
                                            <td>
                                                <span class="js-lists-values-no-hp">{{$karyawan->general_no_hp}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-department">{{$karyawan->general_department}}</span>
                                            </td>
                                            <td style="">
                                                <span class="js-lists-values-jabatan">{{$karyawan->general_riwayat_jabatan}}</span>
                                            </td>
                                            <td style="width: 10px;" align="center" >
                                                <a href="">
                                                <span class="icon">
                                                    <i class="fas fa-pencil-alt"></i> <!-- Icon pensil (pencil) -->
                                                </span>
                                                </a>
                                                <a href="">
                                                    <span class="icon">
                                                        <i class="fas fa-trash-alt"></i> <!-- Icon tong sampah (trash) -->
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
</div>

@stop