<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Form 07.1</title>
    <style>
        #tabel_kop_identitas {
            border-collapse: collapse;
            font-size: 20px;
        }

        #logo {
            width: 60%
        }

        .judul {
            font-size: 18px;
            font-weight: bold;
            text-align: center;

        }

        #judul1 {
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }

        #judul2 {
            text-align: center;
            margin-top: -20px;
            font-size: 18px;
            font-weight: bold;
            line-height: 1.15;
        }

        /* Media Cetak */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .container,
            .container-fluid {
                width: 100%;
                padding: 0;
            }

            #page2 {
                margin-top: 280px;
            }

        }

        thead#headTable th {
            text-align: center;
            border: 1px solid #444;
        }

        tbody#bodyTable tr td {
            border: 1px solid #444;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <div class="container">
        <div class="col-md-12" style="width: 25%; margin-left: 75%; border:1px solid;">
            <div class="judul">
                RM 07.1.1/2
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <table style="width: 100%">
                <tr>
                    <td style="width: 50%; border: 1px solid;">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 30%; text-align: right">
                                    <img src="https://placehold.co/100x100" alt="" id="logo">
                                </td>
                                <td style="width: 70%">
                                    <p id="judul1">RUMAH SAKIT ISLAM JOMBANG</p>
                                    <p id="judul2">
                                        <span style="font-weight: normal">Jl. Brigjen Kretarto 22 A<br>Telp : (0321)
                                            860074 -
                                            868972</span>
                                        <br>Jombang
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 50%; border: 1px solid;">
                        <table id="tabel_kop_identitas">
                            <tr>
                                <td style="width: 40%;">Nama</td>
                                <td style="padding-left:10px; padding-right:10px"> :</td>
                                <td> <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                        name="nama_pasien" id="nama_pasien"></td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">No Rekam Medis</td>
                                <td style="padding-left:10px; padding-right:10px"> :</td>
                                <td><input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                        name="no_rekam_medis" id="no_rekam_medis"></td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">Tanggal Lahir</td>
                                <td style="padding-left:10px; padding-right:10px"> :</td>
                                <td><input type="date"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                        name="tanggal_lahir" id="tanggal_lahir"></td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </div>


        <div class="col-md-12" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="judul">RINGKASAN PULANG (RESUME MEDIS)</div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-left:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="150px">Tanggal Masuk RS</td>
                            <td>:</td>
                            <td>
                                <input type="date"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width="150px">Diagnosa Masuk</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="150px">DPJP</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="150px">Tanggal Keluar RS</td>
                            <td>:</td>
                            <td>
                                <input type="date"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width="150px">Ruang Perawatan</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div><b>ANAMNESIS</b> : </div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="230px">Keluhan utama</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="230px" style="vertical-align: top">Riwayat Penyakit Sekarang</td>
                            <td style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id="" cols="5" rows="5"></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td width="230px">Riwayat Penyakit Dahulu</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div><b>PEMERIKSAAN FISIK</b> : </div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="150px">Keadaan Umum</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="150px">Tanda Vital</td>
                            <td>:</td>
                            <td>

                                TD : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">mmHg
                                Suhu : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">°C
                                Nadi : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">x / menit
                                Pernapasan : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">x / menit

                            </td>
                        </tr>

                        <tr>
                            <td width="150px" style="vertical-align: top">Pemeriksaan Fisik</td>
                            <td style="vertical-align: top">:</td>
                            <td>
                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>


                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div><b>PEMERIKSAAN PENUNJANG </b> : </div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="130px" style="vertical-align: top">LABORATORIUM</td>
                            <td style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td width="130px" style="vertical-align: top">RADIOLOGI</td>
                            <td style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>

                            </td>
                        </tr>

                        <tr>
                            <td width="130px" style="vertical-align: top">LAIN-LAIN</td>
                            <td style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="250px"><b>INDIKASI PASIEN RAWAT INAP</b></td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Kuratif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Paliatif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Preventif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Rehabilitatif</label>
                                </div>


                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6"
                style="border-left:1px solid; border-bottom:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="200px"><b>DIAGNOSIS UTAMA</b></td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" style="vertical-align: top;"><b>DIAGNOSIS SEKUNDER</b></td>
                            <td style="vertical-align: top;">:</td>
                            <td>

                                1<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                2<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                3<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                4<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                5<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                6<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                7<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="200px" style="vertical-align: top;"><b>TINDAKAN / PROSEDUR</b></td>
                            <td style="vertical-align: top;">:</td>
                            <td>

                                1<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                2<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                3<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">

                            </td>
                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6"
                style="border-right:1px solid;border-bottom:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="100px">ICD-10</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width="100px" style="vertical-align: top;">ICD-10</td>
                            <td style="vertical-align: top;">:</td>
                            <td>

                                1<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                2<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                3<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                4<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                5<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                6<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                7<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="100px" style="vertical-align: top;">ICD-9-CM</td>
                            <td style="vertical-align: top;">:</td>
                            <td>

                                1<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                2<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">
                                3<input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 95%"
                                    name="" id="">

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div>Keterangan :</div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        1. Lbr 1 : Arsip (Dokumen)<br>
                        2. Lbr 2 : Penjamin
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        3. Lbr 3 : Pasien<br>
                        4. Lbr 4 : Perujuk / Faskes Lain
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" id="page2" style="margin-left: 0;">
            <div class="col-md-3" style="width: 25%; margin-left: 73.7%; border:1px solid;">
                <div class="judul">
                    RM 07.1.2/2
                </div>
            </div>

        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="280px" style="vertical-align: top"><b>PENGOBATAN SELAMA DIRAWAT</b></td>
                            <td style="vertical-align: top">:</td>
                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="50px" style="vertical-align: top"><b>DIET</b></td>
                            <td style="vertical-align: top">:</td>
                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div><b>PENGOBATAN PULANG :</b> : </div>
                <div class="mt-0">
                    <table style="width: 100%;">
                        <thead id="headTable">
                            <tr>
                                <th>Nama Obat</th>
                                <th>Dosis</th>
                                <th>Jumlah</th>
                                <th>Aturan Pakai</th>
                                <th>Cara Pemberian</th>
                            </tr>
                        </thead>
                        <tbody id="bodyTable">
                            <tr>
                                <td>
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                        name="" id="">
                                </td>
                                <td>
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                        name="" id="">
                                </td>
                                <td>
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                        name="" id="">
                                </td>
                                <td>
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                        name="" id="">
                                </td>
                                <td>
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                        name="" id="">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div><b>KONDISI SAAT PULANG</b> : </div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="250px">Keadaan Umum</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="250px">Kesadaran</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="250px">Tanda Vital</td>
                            <td>:</td>
                            <td>

                                TD : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">mmHg
                                Suhu : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">°C
                                Nadi : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">x / menit
                                Pernapasan : <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id="">x / menit

                            </td>
                        </tr>

                        <tr>
                            <td width="250px" style="vertical-align: top">Catatan penting (Kondisi saat ini)</td>
                            <td style="vertical-align: top">:</td>
                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id="" cols="5" rows="5"></textarea>


                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="250px" style="vertical-align: top"><b>INSTRUKSI TINDAK LANJUT</b></td>
                            <td style="vertical-align: top">:</td>
                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    id=""></textarea>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>



        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border-left:1px solid;border-right:1px solid;">
                <div><b>CARA KELUAR RS</b> : </div>
            </div>
        </div>
        <div class="row" style="solid;width:100%; margin-left: 0;">
            <div class="col-xs-4 col-sm-4 col-md-4"
                style="border-bottom:1px solid;border-left:1px solid; padding-bottom:20px;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Pulang Atas
                        Persetujuan</label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Pulang Atas Permintaan
                        Sendiri</label>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5" style="border-bottom:1px solid;">


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Dirujuk</label>
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1" style="padding-right: 10px;">Meninggal,
                        tanggal</label>
                    <input type="text" class="datepicker"
                        style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                        id="">
                </div>

            </div>
            <div class="col-xs-3 col-sm-3 col-md-3" style="border-bottom:1px solid;border-right:1px solid;">


                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Kabur</label>
                </div>


            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border-left:1px solid;border-right:1px solid;">
                <div><b>TINDAK LANJUT</b> : </div>
            </div>
        </div>
        <div class="row" style="solid;width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-left:1px solid;padding-bottom:20px;">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1" style="padding-right: 10px;">Kontrol
                        rawat
                        jalan, tanggal</label>
                    <input type="text" class="datepicker"
                        style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                        id="">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1" style="padding-right: 10px;">Dirujuk
                        ke</label>
                    <input type="text" style="border: hidden; border-bottom: 1px solid; font-size: 14px;"
                        name="" id="">
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-right:1px solid;padding-bottom:20px;">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <input type="text" style="border: hidden; border-bottom: 1px solid; font-size: 14px;"
                        name="" id="">
                </div>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1"></label>
                    <input type="text" style="border: hidden; border-bottom: 1px solid; font-size: 14px;"
                        name="" id="">
                </div>

            </div>
        </div>

        <div class="row" style="border:1px solid;width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-right:1px solid;">
                <div class="text-center">
                    Saya telah memahami dan menyetujui penjelasan
                    di atas.
                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Pasien / Keluarga Pasien
                        </div>
                        <br>

                        (................................)<br>

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="border-left:1px solid;">
                <div class="text-center">
                    Jombang, <input type="text" class="datepicker"
                        style="border: hidden; border-bottom: 1px solid; font-size: 14px;">
                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Dokter Penanggung Jawab Pelayanan (DPJP)
                        </div>
                        <br>

                        (................................)<br>

                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div>Keterangan :</div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        1. Lbr 1 : Arsip (Dokumen)<br>
                        2. Lbr 2 : Penjamin
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        3. Lbr 3 : Pasien<br>
                        4. Lbr 4 : Perujuk / Faskes Lain
                    </div>
                </div>
            </div>
        </div>





    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2();
        $('.datepicker').daterangepicker({
            locale: {
                format: 'DD-MM-Y'
            },
            singleDatePicker: true,
            timePicker: false,
        });

        $('.timepicker').daterangepicker({
            locale: {
                format: 'HH:mm'
            },
            singleDatePicker: true,
            timePicker: true,
            timePicker24Hour: true,
        }).on('show.daterangepicker', function(ev, picker) {
            picker.container.find(".calendar-table").hide();
        });

        $('.datetimepicker').daterangepicker({
            locale: {
                format: 'DD-MM-Y HH:mm'
            },
            singleDatePicker: true,
            timePicker: true,
            autoUpdateInput: false,
            timePicker24Hour: true,
        });
    </script>

</body>
