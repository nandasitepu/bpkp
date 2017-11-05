@extends('printa4')
@section('title')
  Show cetak 
@endsection
@section('stylesheets')
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
        
        }
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }
        .page {
            width: 210mm;
            min-height: 297mm;
            padding: 20mm;
            margin: 10mm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            font: 12pt "Tahoma";
        }
        .subpage {
            padding: 0mm 0mm 5mm 10mm;
            border: 0px #000 dashed;
            height: 257mm;
            outline: 2cm #FFF solid;
        }

        td {
            font: 12pt "Tahoma";
        }
        
        @page {
            size: A4;
            margin: 0;
        }
        @media print {
            html, body {
                width: 210mm;
                height: 297mm;        
            }
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            font: "Arial";
            line-height: 1.2;
        }

        .table {
            margin-bottom: 5px;
        }
    </style>
@endsection
@section('content')
 
  <div class="row" style="margin-bottom:70px">
        <div class="book">
            <div class="page">
                <div class="subpage">
                    <img src="/img/instansi/kop-surat.jpg" alt="kop-surat" width="100%">
                    <br>
                    <br>
                    <div class="text-center"><b><u>SURAT TUGAS</u></b></div>     
                    <div class="text-center">Nomor: {{$cetak->no_st_nd}}</div>
                    <br>
                    <p class="text-justify" style="text-indent: 3em;">Kepala Perwakilan Badan Pengawasan Keuangan dan Pembangunan Provinsi Sulawesi Barat menugaskan:</p>
                    <div>
                        <table class="table table-bordered table-condensed">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jabatan</th>
                                    <th class="text-center">Peran</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                    <tr style="line-height:0px">
                                        <td>1</td>
                                        <td class="text-left">
                                        {{$cetak->pengendaliMutu->nama}}<br>
                                        {{$cetak->pengendaliMutu->nip}}
                                        </td>
                                        <td class="text-left">{{$cetak->pengendaliMutu->jabatan}}</td>
                                        <td class="text-left">Pengendali Mutu</td> 
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-left">
                                            {{$cetak->pengendaliTeknis->nama}}<br>
                                            {{$cetak->pengendaliTeknis->nip}}
                                        </td>
                                        <td class="text-left">{{$cetak->pengendaliTeknis->jabatan}}</td>
                                        <td class="text-left">Pengendali Teknis</td> 
                                    </tr>
                                       <tr>
                                        <td>3</td>
                                        <td class="text-left">
                                        {{$cetak->ketuaTim->nama}}<br>
                                        {{$cetak->ketuaTim->nip}}
                                        </td>
                                        <td class="text-left">{{$cetak->ketuaTim->jabatan}}</td>
                                        <td class="text-left">Ketua Tim</td> 
                                    </tr>


                                @foreach($cetak->anggotaTim as $tp)
                                    <tr>
                                        <td>{{$loop->iteration + 3}}</td>
                                        <td class="text-left">
                                        {{$tp->nama}} <br>
                                        {{$tp->nip}}
                                        </td>
                                        <td class="text-left">{{$tp->jabatan}}</td>
                                        <td class="text-left">Anggota Tim</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p class="text-justify">
                    Untuk melaksanakan {{$cetak->uraian}}. Penugasan tersebut dilaksanakan selama 7 (tujuh) hari kerja mulai tanggal 25 September 2017.
                    </p>
                    <p style="text-indent: 3em;">Demikian untuk dilaksanakan dengan penuh tanggung jawab.</p>
                    <br>         
                    <table class="pull-right">
                        <tbody>
                            <tr>
                                <td> September 2017</td>
                            </tr>
                            <tr>
                                <td> Kepala Perwakilan</td>
                            </tr>
                            <tr>
                                <td height="50">_</td>
                            </tr>
                            <tr>
                                <td> Arif Ardiyanto</td>
                            </tr>
                            <tr>
                                <td> NIP 19661019 198703 1 001</td>
                            </tr>
                        </tbody>
                    </table>
                </div>   
            </div>
        </div>
  </div>


@endsection