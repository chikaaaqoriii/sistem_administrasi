<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('logo-unib.png') }}" rel="icon">
    <title>Berita Acara Sidang Skripsi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Times New Roman';
        }

        h4 {
            margin-bottom: -3px;
        }

        p, span {
            margin-bottom: -3px;
            font-size: 22px;
        }

        .table-borderless tr td {
            padding: 3px !important;
        }

        .table-bordered th, .table-bordered td{
            border: 1px solid #000 !important;
        }

        table tr td, table tr th {
            font-size: 20px;
        }

        table tr th{
            padding: 2px !important;
        }

        table tr td {
            padding: 16px !important;
        }
    </style>
</head>
<body>
    <div class="container" style="padding-left: 50px; padding-right: 50px;">
        <div class="row justify-content-center text-center">
            <div class="col-3">
                <img src="{{ url('logo-unib.png') }}" alt="" srcset="" style=" width: 200px; margin-left: -200px;">
            </div>
            <div class="col-9 mt-4" style="margin-left: -200px;">
                <h4>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h4>
                <h4>UNIVERSITAS BENGKULU</h4>
                <h4>FAKULTAS TEKNIK</h4>
                <h4 class="font-weight-bold">PROGRAM STUDI SISTEM INFORMASI</h4>
                <p style=" margin-top: 2px; font-size: 20px;">Jalan Wr. Supratman Kandang Limun Bengkulu</p>
                <p style="font-size: 20px;">Bengkulu 38371 A Telepon : (0736) 344087, 22105 - 227</p>
            </div>
        </div>
        <hr style="border: 2px solid #000; margin-top: -6px;">
        <h5 class="text-center font-weight-bold" style="text-decoration: underline; font-size: 24px;">
            SIDANG SKRIPSI
        </h5>
        <h5 class="text-center font-weight-bold" style="font-size: 20px; margin-top: -10px;">
            BERITA ACARA
        </h5>
        <p class="mt-4 text-justify">Pada hari ini {{ \Carbon\Carbon::parse($data_sidang->tanggal)->translatedFormat('l') }} tanggal {{ \Carbon\Carbon::parse($data_sidang->tanggal)->translatedFormat('d') }} bulan {{ \Carbon\Carbon::parse($data_sidang->tanggal)->translatedFormat('F') }} tahun <span style="text-transform: capitalize">{{ Riskihajar\Terbilang\Facades\Terbilang::make(\Carbon\Carbon::parse($data_sidang->tanggal)->translatedFormat('Y')) }}</span>  pukul {{ \Carbon\Carbon::parse($data_sidang->jam)->translatedFormat('H.i') }} WIB, telah dilaksanakan Seminar Hasil Proposal Skripsi mahasiswa :</p>
        <table class="table table-borderless ml-4 mt-3">
            <tbody>
                <tr>
                    <td style="width: 25%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">NPM</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->npm }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Program Studi</td>
                    <td style="width: 1%;">:</td>
                    <td>Sistem Informasi</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Judul</td>
                    <td style="width: 1%;">:</td>
                    <td class="text-justify">{{ $mahasiswa->judul }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Pembimbing Utama</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->dosen_pembimbing_1->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Pembimbing Pendamping</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->dosen_pembimbing_2->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Ketua Penguji</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->dosen_penguji_1->nama }}</td>
                </tr>
                <tr>
                    <td style="width: 25%;">Penguji</td>
                    <td style="width: 1%;">:</td>
                    <td>{{ $mahasiswa->dosen_penguji_2->nama }}</td>
                </tr>
            </tbody>
        </table>
        <p class="mt-2 text-justify">Berdasarkan hasil sidang yang dilaksanakan pada hari ini, mahasiswa yang namanya tersebut di atas dinyatakan
            @if ($status === 'Lulus')
                LAYAK / <strike>TIDAK LAYAK</strike> / <strike>TINJAU ULANG</strike>
            @elseif ($status === 'Tidak Lulus')
                <strike>LAYAK</strike>  / TIDAK LAYAK / <strike>TINJAU ULANG</strike>
            @elseif ($status === 'Tinjau Ulang')
                <strike>LAYAK</strike>  / <strike>TIDAK LAYAK</strike> / TINJAU ULANG
            @endif Sidang Skripsi dengan nilai</p>
        <p class="mt-2 font-weight-bold text-center">
            @if ($data_sidang->nilai === 'A')
            A / <strike>A-</strike> / <strike>B+</strike> / <strike>B</strike> / <strike>B-</strike> / <strike>C+</strike> / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'A-')
            <strike>A</strike> / A- / <strike>B+</strike> / <strike>B</strike> / <strike>B-</strike> / <strike>C+</strike> / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'B+')
            <strike>A</strike> / <strike>A-</strike> / B+ / <strike>B</strike> / <strike>B-</strike> / <strike>C+</strike> / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'B')
            <strike>A</strike> / <strike>A-</strike> / <strike>B+</strike> / B / <strike>B-</strike> / <strike>C+</strike> / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'B-')
            <strike>A</strike> / <strike>A-</strike> / <strike>B+</strike> / <strike>B</strike> / B- / <strike>C+</strike> / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'C+')
            <strike>A</strike> / <strike>A-</strike> / <strike>B+</strike> / <strike>B</strike> / <strike>B-</strike> / C+ / <strike>C</strike>
            @elseif ($data_sidang->nilai === 'C')
            <strike>A</strike> / <strike>A-</strike> / <strike>B+</strike> / <strike>B</strike> / <strike>B-</strike> / <strike>C+</strike> / C
            @endif
        </p>
        <p class="mt-2">Demikian berita acara ini dibuat dengan sebenarnya untuk digunakan sebagaimana mestinya.</p>
        <table class="table table-bordered mt-3">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Penguji</th>
                    <th>Status Penguji</th>
                    <th>Tanda Tangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" style="width: 2%;">1.</td>
                    <td>{{ $mahasiswa->dosen_pembimbing_1->nama }}</td>
                    <td style="width: 30%;">Pembimbing Utama</td>
                    <td style="width: 20%;"></td>
                </tr>
                <tr>
                    <td class="text-center">2.</td>
                    <td>{{ $mahasiswa->dosen_pembimbing_2->nama }}</td>
                    <td>Pembimbing Pendamping</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">3.</td>
                    <td>{{ $mahasiswa->dosen_penguji_1->nama }}</td>
                    <td>Penguji Utama</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="text-center">4.</td>
                    <td>{{ $mahasiswa->dosen_penguji_2->nama }}</td>
                    <td>Penguji Pendamping</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between mt-5" style="margin-right: 70px;">
            <div class="column">
                <p>Mengetahui,</p>
                <p>Koordinator,</p>
                <p style="margin-top: 100px;">Aan Erlansari, S.T., M.Eng.</p>
                <p>NIP. 198112222008011011</p>
            </div>
            <div class="column">
                <p>Bengkulu, {{ \Carbon\Carbon::parse($data_sidang->tanggal)->translatedFormat('d F Y') }}</p>
                <p>Ketua Tim Penguji,</p>
                <p style="margin-top: 100px;">{{ $mahasiswa->dosen_penguji_1->nama }}</p>
                <p>NIP. {{ $mahasiswa->dosen_penguji_1->nip }}</p>
            </div>
        </div>
    </div>
</body>
<script>
    window.print()
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>
