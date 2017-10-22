@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')

@section('content')
    <div class="row">
        <div class="col-md-3" min-height="400px">
            <div class="panel panel-default">
                <div class="panel-body">
                    <b>Perpustakaan BPKP Sulawesi Barat</b>
                    <hr>
                    <div>
                        <ul>
                           <b> Daftar Peraturan</b>
                            <ul>
                                <li>Undang-Undang</li>
                                <li>Peraturan Pemerintah</li>
                                <li>Peraturan Menteri</li>
                            </ul>
                        </ul>
                         <ul>
                           <b> Pedoman Penugasan</b>
                            <ul>
                                <li>TU</li>
                                <li>APD</li>
                                <li>IPP</li>
                                <li>AN</li>
                                <li>INV</li>
                                <li>P3A</li>
                            </ul>
                        </ul>
                        <ul>
                           <b>Informasi Lainnya</b>
                            <ul>
                                <li>Akademik</li>
                                <li>Majalah</li>
                                <li>Kliping</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9"> 
            <div class="panel panel-default" >
                <div class="panel-heading" style="background:purple;color:#fff">
                    <b>Daftar Isi</b>
                </div>
                <div class="panel-body">
                   <div class="table table-responsive">
                        <table class="table table-borderless" style="background:#fff">
                            <thead>
                               <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tahun</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pedoman Penugasan Bidang Investigasi</td>
                                    <td>2013</td>  
                                    <td>INV</td>  
                                    <td>
                                        <button class="btn btn-default btn-xs">View</button>
                                        <button class="btn btn-default btn-xs">Edit</button>
                                        <button class="btn btn-default btn-xs">Delete</button>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>2</td>
                                    <td>Pedoman Penugasan Bidang Investigasi</td>
                                    <td>2013</td>  
                                    <td>INV</td>  
                                    <td>
                                        <button class="btn btn-default btn-xs">View</button>
                                        <button class="btn btn-default btn-xs">Edit</button>
                                        <button class="btn btn-default btn-xs">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection