<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Awal Dietisien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        body {
            padding: 25px;
        }


        label {
            padding: 0px;
            margin: 0px;
        }

        .inputan-antro {
            flex: 1;
            max-width: 50px;
            border: none;
            border-bottom: 1px dotted;
        }

        .form-container {
            margin: auto;
            border: 1px solid #000;
            padding: 5px;
        }

        .form-container-header {
            margin: auto;
            border: 1px solid #000;
            border-bottom: 0px solid #000;
        }

        .form-header {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
        }

        .form-section {
            margin-bottom: 0px;
        }

        .checkbox-group {
            display: flex;
            /* gap: 10px; */
        }

        .pagebreak {
            page-break-after: always;
        }

        .col-1 {
            padding: 0px;
        }

        .col-2 {
            padding: 0px;
        }

        .col-3 {
            padding: 0px;
        }

        .col-4 {
            padding: 0px;
        }

        .col-5 {
            padding: 0px;
        }

        .col-6 {
            padding: 0px;
        }

        .col-7 {
            padding: 0px;
        }

        .col-8 {
            padding: 0px;
        }

        .col-9 {
            padding: 0px;
        }

        .col-10 {
            padding: 0px;
        }

        .col-11 {
            padding: 0px;
        }

        .col-12 {
            padding: 0px;
        }

        @media print {
            * {
                font-size: 14px;
            }

            #logo {
                width: 20% !important;
            }

            .hidden-on-print {
                display: none;
            }

            .col-1 {
                width: 8%;
                float: left;
            }

            .col-2 {
                width: 16%;
                float: left;
            }

            .col-3 {
                width: 25%;
                float: left;
            }

            .col-4 {
                width: 33%;
                float: left;
            }

            .col-5 {
                width: 42%;
                float: left;
            }

            .col-6 {
                width: 50%;
                float: left;
            }

            .col-7 {
                width: 58%;
                float: left;
            }

            .col-8 {
                width: 66%;
                float: left;
            }

            .col-9 {
                width: 75%;
                float: left;
            }

            .col-10 {
                width: 83%;
                float: left;
            }

            .col-11 {
                width: 92%;
                float: left;
            }

            .col-12 {
                width: 100%;
                float: left;
            }
        }

        .tabel_collapse {
            border-collapse: collapse;
            width: 100%;
        }

        .inputan {
            border: none;
            border-bottom: 1px dotted;
        }

        .box_ttd:hover {
            cursor: pointer;
        }

        #logo {
            width: 15%;
        }

        .autocomplete-suggestions {
            border: 1px solid #999;
            background: #FFF;
            overflow: auto;
            cursor: pointer;
        }

        .autocomplete-suggestion {
            padding: 2px 5px;
            white-space: nowrap;
            overflow: hidden;
        }

        .autocomplete-selected {
            background: #F0F0F0;
        }

        .autocomplete-suggestions strong {
            font-weight: normal;
            color: #3399FF;
        }

        .autocomplete-group {
            padding: 2px 5px;
        }

        .autocomplete-group strong {
            display: block;
            border-bottom: 1px solid #000;
        }

        .timepicker {
            width: 7%;
        }

        .datepicker {
            width: 14%;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin: 0px;
        }

        .form-label {
            width: 150px;
            text-align: left;
            margin-right: 10px;
            margin-left: 10px;
        }

        .form-label-antropometri-left {
            width: 115px;
            text-align: left;
            margin-right: 10px;
        }

        .form-label-antropometri-right {
            width: 250px;
            text-align: left;
            margin-right: 10px;
        }

        td {
            padding: 5px;
        }

        .row {
            padding: 0px;
        }
    </style>
</head>

<body>

    <div class="RM_405_1">
        <div class="container-fluid">
            <div class="col-12" style="text-align: right;">
                <span style="border-bottom: 1px solid;">RM.04.5</span><br>
                <span>Hal. 1/6</span>
            </div>
        </div>
        <table style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
            <tr>
                <td style="width: 50%; padding-right: 10px; vertical-align: top; border: #000 1px solid;">
                    <div style="display: flex; align-items: center;">
                        <img src="{{ asset('filelogo/logors.jpg') }}" alt="Logo" style="width: 100px; height: 100px; margin-right: 10px;">
                        <div>
                            <p style="margin: 0; font-weight: bold; font-size: 20px;">RUMAH SAKIT UMUM DR.SUYUDI</p>
                            <p style="margin: 0;">
                                Jl. Raya Paciran - Lamongan Telp:(0322) 661412. Fax: (0322) 666293.<br>
                                E-mail : rsu.suyudi@gmail.com
                            </p>
                        </div>
                    </div>
                </td>
                <td rowspan="2" style="width: 50%; padding-left: 10px; vertical-align: top; border: #000 1px solid;">
                    <div style="display: flex; align-items: center;">
                        <div class="form-section">
                            <div class="form-group">
                                <label class="form-label">No RM</label>:
                                <input type="text" class="inputan" name="no_rm" value="no_rm">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Pasien</label>:
                                <input type="text" class="inputan" name="nama" value="nama">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tanggal Lahir</label>:
                                <input type="text" class="inputan" name="tgl_lahir" value="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nik</label>:
                                <input type="text" class="inputan" name="nik" value="nik">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td rowspan="2" style="border: #000 1px solid;">
                    <div class="form-header">ASSESMEN SAAT PASIEN MASUK RAWAT INAP <br>(diisi oleh perawat)</div>
                </td>
            </tr>
        </table>
        <div class="form-container">
            <div class="form-section">
                <div class="form-group mb-1 row" style="">
                    <div class="col-8">
                        <label class="" style="flex: 1;">Tanggal</label>
                        <span style="padding-left: 5px;padding-right: 5px">:</span>
                        <input type="text" class="inputan datepicker" name="tanggal" style="flex:2">

                        <label class="" style="flex: 1;">Pukul </label>
                        <span style="padding-left: 5px;padding-right: 5px">:</span>
                        <input type="text" class="inputan timepicker" name="hour" style="flex:2">
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">1. Informasi di dapat dari</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="pasien"> Pasien</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="penerjemah_bahasa"> Penerjemah Bahasa</label>
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="keluarga"> Keluarga</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="nama"> Nama</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="hubungan"> Hubungan</label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="keluarga_input">
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="orang_lain"> Orang Lain</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="nama"> Nama</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="hubungan"> Hubungan</label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="oranglain_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">2. Cara Masuk</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Jalan tanpa bantuan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Kursi rode </label>
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalandenganbantuan"> Jalan dengan bantuan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="tempattidurdorong"> Tempat tidur dorong </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="lainlain"> Lain lain</label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="lainlain_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">3. Asal Masuk Pasien</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Jalan tanpa bantuan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Kursi rode </label>
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="IGD"> IGD </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="Poli"> Poli </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kamar_operasi"> Kamar Operasi </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">4. Alat bantu yang digunakan</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="tidak_ada"> Tidak Ada </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="ada_sebutkan"> Ada, sebutkan </label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="lainlain_input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container-header">
            <div class="form-header">PSIKOSOSIAL/SPIRITUAL/EKONOIVII</div>
        </div>
        <div class="form-container">
            <div class="form-section">
                <div class="form-group mb-1 row" style="">
                    <div class="col-8">
                        <label class="" style="flex: 1;">Tanggal</label>
                        <span style="padding-left: 5px;padding-right: 5px">:</span>
                        <input type="text" class="inputan datepicker" name="tanggal" style="flex:2">

                        <label class="" style="flex: 1;">Pukul </label>
                        <span style="padding-left: 5px;padding-right: 5px">:</span>
                        <input type="text" class="inputan timepicker" name="hour" style="flex:2">
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">1. Hubungan dg penanggung Jawab</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name="pasien"> Anak kandung</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name="penerjemah_bahasa"> Anak Tiri</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name="penerjemah_bahasa"> Anak Angkat</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name="penerjemah_bahasa"> Lainnya</label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="lainlain_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">2. Kepercayaan khusus </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Tidak Ada </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Ada, Sebutkan </label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="lainlain_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">3. Status Pernikahan </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Menikah </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Belum Menikah </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Duda / Janda </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">4. Cara Pembayaran</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Pribadi </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Perusahan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Asuransi / BPJS </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">5. Tinggal Bersama</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Istri/Suami </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Orang Tua Kandung </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Saudara </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">6. Tempat Tinggal</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Rumah Sendiri </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Kontrakan / Kost </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Lainnya </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">7. Agama</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Islam </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Hindu </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Kristen </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Budha </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Konghucu </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Lain-lain </label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="lainlain_input">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">8. Kemampuan Beribadah</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Mampu </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Kurang Mampu </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Belum Mampu </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">9. Persepsi terhadap sakitnya</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Cobaan Tuhan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Hukuman Tuhan </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Lain-lain </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">10. Status psikologis / emosional</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Kooperatif </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Cemas </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Marah </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Depresi </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">11. Curiga Penganiayaan</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Ya </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Tidak </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3"><b>KEBUTUHAN PRIVASI</b></label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="jalantanpabantuan"> Tidak ada </label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="kursiroda"> Ada </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-12"><b>KEBUTUHAN INFORMASI PAPA PASIEN DAN KELUARGA </b></label>
                    <div class="col-12" style="padding-left: 15px;">
                        <div class="checkbox-group row">
                            <div class="col-4">
                                <label><input type="checkbox" name="jalantanpabantuan"> Perawat yang melakukan perawatan </label>
                            </div>
                            <div class="col-4">
                                <label><input type="checkbox" name="jalantanpabantuan"> Waktu dokter visit dan konsul </label>
                            </div>
                            <div class="col-4">
                                <label><input type="checkbox" name="kursiroda"> Dokter Penanggung Jawab </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-container-header">
            <div class="form-header">RIWAYAT KESEHATAN</div>
        </div>
        <div class="form-container">
            <div class="form-section">
                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">1. Diagnosa Masuk</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="diagnosa_masuk">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group mb-1 row" style="align-items: normal">
                    <label class="col-3">2. Riwayat kesehatan sekarang (alasan masuk RS / Keluhan utama)</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="alasan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">3. Pernah dirawat</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="radio" name="pernah_dirawat" id="tidak_pernahdirawat"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="radio" name="pernah_dirawat" id="ya_pernahdirawat"> Ya, kapan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">4. Obat dari rumah</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ada </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">5. Apakah pernah mendapatkan obat pengencer darah</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ya, kapan Dihentikan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">6. Apakah akhir-akhir ini anda bepergian ke daerah endemic malaria (Sumatra, NTT, Irian jaya)</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ya, kapan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">7. Riwayat Kemotrapi</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ya, kapan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">8. Riwayat checkboxterapi</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ya, kapan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">9. Riwayat Penyakit Dahulu</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ada, sebutkan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">10. Riwayat Penyakit Turunan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ada, sebutkan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">11. Riwayat Alergi Obat/Makanan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="ada_sebutkan"> Ada, sebutkan </label>
                        </div>
                        <div class="col-3">
                            <input class="input-field inputan" type="text" name="lainlain_input">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">12. Imunisasi</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="lengkap"> Lengkap </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="belum_lengkap"> Belum Lengkap </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="tambahan"> Tambahan </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group mb-1 row" style="align-items: normal">
                <label class="col-3">13. Riwayat ketergantungan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name="tidak_ada"> Tidak ada </label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name="belum_lengkap"> Ada, Berupa </label>
                        </div>
                        <div class="col-6">
                            <label><input type="checkbox" name="tambahan"> Rokok </label>
                            <label><input type="checkbox" name="tambahan"> Alhokohol </label>
                            <label><input type="checkbox" name="tambahan"> Obat </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagebreak"></div>

    <div class="RM_405_2">
        <div style="justify-self: right;">
            <span style="border-bottom: 1px solid;">RM.04.5</span><br>
            <span>Hal. 2/6</span>
        </div>
        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">14. Riwayat Pembedahan <br> / Pembiusan <br> pasien pernah dioperasi</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name="tidak"> Tidak</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="ya"> Ya, Kapan</label>
                            </div>
                            <div class="col-3">
                                <input class="input-field inputan" type="text" name="text">
                            </div>
                            <div class="col-12">
                                Jenis Operasi :<input class="input-field inputan" type="text" name="text">
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        Pernah Ada Masalah dengan operasi :
                                    </div>
                                    <div class="checkbox-group row">
                                        <div class="col-4">
                                            <label><input type="radio" name="operasi" id="tidak_operasi"> Tidak</label>
                                        </div>
                                        <div class="col-4">
                                            <label><input type="radio" name="operasi" id="ya_operasi"> Ya, Sebutkan</label>
                                        </div>
                                        <div class="col-4">
                                            <input class="input-field inputan" type="text" name="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <span><b>Untuk Maternitas</b></span>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">15. Riwayat Kehamilan sekarang</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                Hamil Ke <input class="input-field inputan" type="text" name="text" style="max-width: 50px">
                            </div>
                            <div class="col-3">
                                Umur Kehamilan <input class="input-field inputan" type="text" name="text" style="max-width: 50px">
                            </div>
                            <div class="col-3">
                                Anc <input class="input-field inputan" type="text" name="text" style="max-width: 50px">Kali
                            </div>
                            <div class="col-3">
                                TT <input class="input-field inputan" type="text" name="text" style="max-width: 50px">Kali
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Riwayat Haid</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-6">
                                HPHT : <input class="input-field inputan" type="text" name="text" style="">
                            </div>
                            <div class="col-6">
                                HP : <input class="input-field inputan" type="text" name="text" style="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Riwayat Persalinan lalu</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <input type="checkbox" name="ya">Aterm
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">Prematur
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">Abortus
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">Meninggal
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">SC
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">Spontan
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-4">
                                <input type="checkbox" name="ya">Lainnya, Sebutkan
                                <input class="input-field inputan" type="text" name="text" style="max-width: 60px;">
                            </div>
                        </div>
                    </div>
                </div>

                <span><b>Untuk Neonatur</b></span>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">16. Riwayat Persalinan</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <input type="checkbox" name="ya">SC
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-3">
                                <input type="checkbox" name="ya">Spontan
                                <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x
                            </div>
                            <div class="col-4">
                                <input type="checkbox" name="ya">Lainnya, Sebutkan
                                <input class="input-field inputan" type="text" name="text" style="max-width: 60px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">APGAR Score</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <input class="input-field inputan" type="text" name="text" style="">
                            </div>
                            <div class="col-6">
                                Warna Ketuban : <input class="input-field inputan" type="text" name="text" style="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Kelainan Proses Persalinan </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <input class="input-field inputan" type="text" name="text" style="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Penolong</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-4">
                                <input type="checkbox" name="ya">Dokter
                            </div>
                            <div class="col-4">
                                <input type="checkbox" name="ya">Bidan
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">PEMERIKSAAN FISIK</div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">1. Tanda Vital</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            Suhu : <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">C
                        </div>
                        <div class="col-3">
                            Nadi : <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x/mnt
                        </div>
                        <div class="col-3">
                            Nadi : <input class="input-field inputan" type="text" name="text" style="max-width: 20px;">x/mnt
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="tidak"> Teratur
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tidak Teratur
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="tidak"> Kuat
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="tidak"> Lemah
                        </div>
                    </div>

                    <label class="col-3" style="padding-left: 25px">Tekanan Darah</label>
                    <div class="col-9 checkbox-group row">
                        <input class="input-field inputan" type="text" name="text" style="">mmHg
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">2. Kesadaran</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            <input type="checkbox" name="tidak"> Komposmetis
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Apatis
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="tidak"> Somnolen
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="tidak"> Sopor
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="tidak"> Koma
                        </div>
                    </div>

                    <label class="col-3" style="padding-left: 25px">CGS</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            E<input class="input-field inputan" type="text" name="text" style="max-width: 80px">
                        </div>
                        <div class="col-2">
                            V<input class="input-field inputan" type="text" name="text" style="max-width: 80px">
                        </div>
                        <div class="col-2">
                            M<input class="input-field inputan" type="text" name="text" style="max-width: 80px">
                        </div>
                        <div class="col-4">
                            Reflek Cahaya<input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">3. Untuk Bayi BBL</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            BBL<input class="input-field inputan" type="text" name="text" style="max-width: 45px">qr
                        </div>
                        <div class="col-2">
                            BBS<input class="input-field inputan" type="text" name="text" style="max-width: 45px">qr
                        </div>
                        <div class="col-2">
                            PB<input class="input-field inputan" type="text" name="text" style="max-width: 45px">Cm
                        </div>
                        <div class="col-2">
                            Lila<input class="input-field inputan" type="text" name="text" style="max-width: 45px">Cm
                        </div>
                        <div class="col-3">
                            Likep<input class="input-field inputan" type="text" name="text" style="max-width: 45px">Cm
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center">Usia > 2 Tahun</th>
                            <th class="text-center">Usia < 2 Tahun</th>
                            <th class="text-center">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Eye</td>
                            <td>
                                Terbuka spontan<span style="display: block; margin: 0;"></span>
                                Terbuka terhadap suar<span style="display: block; margin: 0;"></span>
                                Terbuka terhadap rangsangan nyeri<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                Terbuka spontan<span style="display: block; margin: 0;"></span>
                                Terbuka terhadap suar<span style="display: block; margin: 0;"></span>
                                Terbuka terhadap rangsangan nyeri<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                <input type="checkbox" name="eye_score"> 4
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="eye_score"> 3
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="eye_score"> 9
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="eye_score"> 1
                            </td>
                        </tr>
                        <tr>
                            <td>Verbal</td>
                            <td>
                                Orientasi Baik<span style="display: block; margin: 0;"></span>
                                Disorientasi / bingung<span style="display: block; margin: 0;"></span>
                                Jawaban tidak sesuai<span style="display: block; margin: 0;"></span>
                                Suara tidak dapat dimengerti (teriakan)<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                Berceloteh<span style="display: block; margin: 0;"></span>
                                Menangis, gelisah<span style="display: block; margin: 0;"></span>
                                Menangis terhadap rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Merintih, mengerang<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                <input type="checkbox" name="verbal_score"> 5
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="verbal_score"> 4
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="verbal_score"> 3
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="verbal_score"> 2
                                <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="verbal_score"> 1
                            </td>
                        </tr>
                        <tr>
                            <td>Motorik</td>
                            <td>
                                Mengikuti perintah<span style="display: block; margin: 0;"></span>
                                Melokaliasai nyeri<span style="display: block; margin: 0;"></span>
                                Menarik diri dari rangsangan nyeri<span style="display: block; margin: 0;"></span>
                                Fleksi abnormal, anggota gerak terhadap rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Ekstensi abnormal, anggota gerak terhadap rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                Pergerakan normal<span style="display: block; margin: 0 ;"></span>
                                Menarik diri terhadap sentuhan<span style="display: block; margin: 0;"></span>
                                Menarik diri dari rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Fleksi abnormal, anggota gerak terhadap rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Ekstensi abnormal, anggota gerak terhadap rangsang nyeri<span style="display: block; margin: 0;"></span>
                                Tidak merespon
                            </td>
                            <td>
                                <input type="checkbox" name="motorik_score"> 6 <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> 5 <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> 4 <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> 3 <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> 2 <span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> 1 <span style="display: block; margin: 0;"></span>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">TOTAL SCORE</th>
                        </tr>
                        <tr>
                            <td>
                                Kreteriap
                                <br>
                                Cederap
                            </td>
                            <td>
                                <input type="checkbox" name="motorik_score"> Skor 13-15 : ringan(apartis-composmetis)<span style="display: block; margin: 0;"></span>
                                <input type="checkbox" name="motorik_score"> Skor 9-12 : sedang(stupor-sormnolent)<span style="display: block; margin: 0;"></span>
                            </td>
                            <td>
                                <input type="checkbox" name="motorik_score"> Skor 3-9 : berat(coma-stupor)<span style="display: block; margin: 0;"></span>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">4. Rambut Kepala</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Bersih
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Kotor
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Kusam
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Rontok
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">5. Ubun-ubun</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Datar
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Cekung
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Cembung
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">6. Mata</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Bersih
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Sklera lkterik
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Konjuntiva Anemis
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Bersekret
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Katarak
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Simetris
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Asimetris
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">7. Hidung</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tersumbat
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Sekret (+)
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Epistaksis
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">8. Mulut</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Bersih
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Lidah Kotor
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Pendarahan
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Trismus
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Stomatitis
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Bibir</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Kering
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Sumbing
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="ya"> Lainnya, Sebutkan
                            <input class="input-field inputan" type="text" name="text" style="max-width: 60px;">
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Gigi</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Bersih
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Kotor
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Kawat gigi
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Ompong
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Gigi Palsu
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">9.Telinga</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Bersih
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Kotor
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Otitis media
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tinitus
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">10. Leher</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Ada benjolan
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Kaku Kuduk
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tracheostomi
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">11. Dada</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Bentuk Asimetris
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Payudara</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-5">
                            <input type="checkbox" name="ya"> Ada Benjolan, Lokasi
                            <input class="input-field inputan" type="text" name="text" style="max-width: 100px;">
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Collusirum</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Positif
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Negatif
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">12. Resplrasi</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Dyspnea
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Wheesing
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Rochi
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Cyianosis
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Nyeri seat nafas
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Retraksi dada
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Batuk</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Ada
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tidak ada
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Tidak Produktif
                        </div>
                        <div class="col-5">
                            <input type="checkbox" name="ya"> Produktif, Warna
                            <input class="input-field inputan" type="text" name="text" style="max-width: 100px;">
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Cyianosis
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Nyeri seat nafas
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Retraksi dada
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">13. Sirkulasi</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Normal
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Fusing
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Sakit kepala
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Syncopel
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Palpitasi
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Cyanosis
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Nyeri Dada
                        </div>
                        <div class="col-3">
                            <input type="checkbox" name="ya"> Nyeri dibetis
                        </div>
                        <div class="col-5">
                            <input type="checkbox" name="ya"> Edema,lokasi
                            <input class="input-field inputan" type="text" name="text" style="max-width: 100px;">
                        </div>
                    </div>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">14. Ekstermitas</label>
                    <div class="col-9 checkbox-group row">
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Hangat
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Panes
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Dingin
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Basah
                        </div>
                        <div class="col-2">
                            <input type="checkbox" name="ya"> Kering
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagebreak"></div>

    <div class="RM_405_3">
        <div style="justify-self: right;">
            <span style="border-bottom: 1px solid;">RM.04.5</span><br>
            <span>Hal. 3/6</span>
        </div>
        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">14. Gastrointestinal</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Normal</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Kembung</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Ascites</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Bising usus</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Mual</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Muntah</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Benjolan / massa</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak ada</label>
                            </div>
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Ada, Lokasi</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 200px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Defekasi</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Frekuensi :</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 200px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Terakhir Defekasi</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <input class="input-field inputan" type="text" name="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Onstipasi</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Ya</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Pemakalan obat pencaha</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Perubahan BB</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Ya,Kira-kira</label>
                            </div>
                            <div class="col-6">
                                <input class="input-field inputan" type="text" name="text"> Kg/bulan/minggu
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Nafsu makan</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Balk</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Kurang</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak ada</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Cyanosis</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Nyeri dada</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">15. Kulit </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Utuh</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Memar</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Kering</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Lembab</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Bersisik</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Petechiae</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Pucat</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Ikterik</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Kemerahan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Luka </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak ada</label>
                            </div>
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Ada, Lokasi</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 200px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px;">Turgor </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Baik</label>
                            </div>
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Jelek</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span><b>Untuk Ibu Hamil</b></span>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">16. Perut </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-4">
                                TFU :<input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                            </div>
                            <div class="col-4">
                                Cortenen :<input class="input-field inputan" type="text" name="text" style="max-width: 100px">x/mnt
                            </div>
                            <div class="col-4">
                                Kontraksi Uterus :<input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Perineum </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Menstruasi</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Genetalia </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Normal</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Bekas luka episiotomi</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Lochea</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Oedem</label>
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <label><input type="checkbox" name=""> VT O</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 100px">Cm
                            </div>
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Eff</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 100px">%
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Ketuban</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Belum Pecah</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Pecah</label>
                            </div>
                        </div>
                        <div class="checkbox-group row">
                            <div class="col-6">
                                <label><input type="checkbox" name=""> Kepala Bokong H</label>
                                <input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                            </div>
                            <div class="col-3">
                                Warna Ketuban :
                                <label><input type="checkbox" name=""> Jernih</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name=""> Meconial</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">17. Untuk Neonatus </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-12">
                                <input class="input-field inputan" type="text" name="text" style="max-width: 250px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3" style="padding-left: 25px">Tali Pusar </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Segar</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Layu</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Bau</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Pendarahan</label>
                            </div>
                            <div class="col-2">
                                <label><input type="checkbox" name=""> Tidak Bau</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th>Pemeriksaan</th>
                                <th class="text-center">0</th>
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Appearance</td>
                                <td>Biru, Pucat</td>
                                <td>Badan Pucat,Eksternitas biru</td>
                                <td>Seluruh tubuh merah, Kemerahan</td>
                            </tr>
                            <tr>
                                <td>Pulse</td>
                                <td>Tidak teraba</td>
                                <td>
                                    < 100 x/mnt</td>
                                <td>> 100 x/mnt</td>
                            </tr>
                            <tr>
                                <td>Grimace</td>
                                <td>Tidak</td>
                                <td>Sedikit gerakan mimik</td>
                                <td>Batuk / Bersin</td>
                            </tr>
                            <tr>
                                <td>Activity</td>
                                <td>Lemes/Lumpuh/Tidak ada</td>
                                <td>Gerakan sedikit / Fleksi Tungkai/ Ekstremitas Dalam Sedikit Fleksi</td>
                                <td>Gerakan aktif / fleksi Tungkai baik/ reaksi melawan</td>
                            </tr>
                            <tr>
                                <td>Respiratory</td>
                                <td>Tidak ada</td>
                                <td>Lambat/tidak teratur</td>
                                <td>Baik / Menangis kuat</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-12">
                        Apgar Score dihitung pada menit ke 1'-5'-10' Bila lebih 10'
                        <input class="input-field inputan" type="text" name="text" style="max-width: 200px">
                        Down Score
                    </label>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">EVALUASI GAWAT NAFAS</div>
        </div>

        <div class="form-container">
            <div class="form-group row" style="align-items: normal">
                <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th rowspan="2">Pemeriksaan</th>
                            <th colspan="3" class="text-center">Score</th>
                        </tr>
                        <tr>
                            <th class="text-center">0</th>
                            <th class="text-center">1</th>
                            <th class="text-center">2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Frekwensi</td>
                            <td>
                                < 60 x/menit</td>
                            <td>60 - 80 x/menit</td>
                            <td>> 80 x/menit</td>
                        </tr>
                        <tr>
                            <td>Retraksi</td>
                            <td>-</td>
                            <td>Retraksi Ringan</td>
                            <td>Retraksi Berat</td>
                        </tr>
                        <tr>
                            <td>Sianosis</td>
                            <td>-</td>
                            <td>Hilang dg Pemberian Oksigen</td>
                            <td>Menetap walau dg Pemberian Oksigen</td>
                        </tr>
                        <tr>
                            <td>Suara Nafas</td>
                            <td>Kedua paru-paru baik</td>
                            <td>Pada kedua paru-paru</td>
                            <td>Tidak ada suara nafas dari kedua paru-paru</td>
                        </tr>
                        <tr>
                            <td>Merintih</td>
                            <td>Tidak merintih</td>
                            <td>Dapat didengar dengan stetoskop</td>
                            <td>Dapat didengar dengan Terdengar dengan stetoskop</td>
                        </tr>
                    </tbody>
                </table>

                <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th class="text-center">Down Score</th>
                            <th class="text-center">Gawat Nafas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                < 3</td>
                            <td>Ringan</td>
                        </tr>
                        <tr>
                            <td>
                                4-5</td>
                            <td>Sedang</td>
                        </tr>
                        <tr>
                            <td>
                                > 6</td>
                            <td>Berat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="form-container">
            <div class="form-group row" style="align-items: normal">
                <label class="col-12">18. Down score dihitung bila bayi terjadi gawat nafas </label>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">19. Urine</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Normal</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Inkontinensia</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Dyssuria</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Nocturis</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Retensi</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Hematuri</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Pyuria</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">20. Muskulo-skeletal</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Normal</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Skoliosis</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Lordosis</label>
                        </div>
                        <div class="col-2">
                            <label><input type="checkbox" name=""> Kiposis</label>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="padding-left: 25px;">
                    Catatan : <input class="input-field inputan" type="text" name="text" style="max-width: 250px">
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN FUNGSI SENSORIK MOTORIK KOGNITIF</div>
        </div>

        <div class="form-container">
            <div class="form-group row" style="align-items: normal">
                <label class="col-12">a. Sensorik</label>
                <label class="col-3" style="padding-left: 25px">Pengliahatan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Normal</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Kabur</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Kaca Mata</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Lensa Kontak</label>
                        </div>
                    </div>
                </div>

                <label class="col-3" style="padding-left: 25px">Penciuman</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            <label><input type="checkbox" name=""> Normal</label>
                        </div>
                        <div class="col-6">
                            <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>

                <label class="col-3" style="padding-left: 25px">Pendengaran</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-4">
                            <label><input type="checkbox" name=""> Normal</label>
                        </div>
                        <div class="col-4">
                            <label><input type="checkbox" name=""> Tuli kanan / kiri </label>
                        </div>
                        <div class="col-4">
                            <label><input type="checkbox" name=""> Alat bantu dengan kanan / kiri Tidak dapan dimengerti</label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row" style="align-items: normal">
                <label class="col-3">b. Kognitif</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            <label><input type="checkbox" name=""> Orientasi Penuh</label>
                        </div>
                        <div class="col-6">
                            <label><input type="checkbox" name=""> Bingung</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagebreak"></div>

    <div class="RM_405_4">
        <div style="justify-self: right;">
            <span style="border-bottom: 1px solid;">RM.04.5</span><br>
            <span>Hal. 4/6</span>
        </div>

        <div class="form-container">
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">c. Motorik</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-12">
                            : <input class="input-field inputan" type="text" name="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Aktifitas sehari-hari</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Mandiri</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Bantuan Minimal</label>
                        </div>
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Bantuan Sebagian</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Menggantungkan Total</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Berjalan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Tidak ada kesulitan</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Perlu Bantuan</label>
                        </div>
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Sering jatuh</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Kelumpuhan</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN NYERI</div>
        </div>

        <div class="form-container">
            <p><b>METODE WONG BAKER USIA >6 TAHUN </b></p>
            <div class="form-group row" style="align-items: normal">
                <div class="col-9">
                    <div class="form-group row">
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                            <span><br>0 <br> Tidak Sakit</span>
                        </div>
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm349.5 52.4c18.7-4.4 35.9 12 25.5 28.1C350.4 374.6 306.3 400 255.9 400s-94.5-25.4-119.1-63.5c-10.4-16.1 6.8-32.5 25.5-28.1c28.9 6.8 60.5 10.5 93.6 10.5s64.7-3.7 93.6-10.5zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                            <span><br>2 <br> Sedikit Sakit</span>
                        </div>
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM176.4 240a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm192-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM184 328c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z" />
                            </svg>
                            <span><br>4 <br> Agak Mengganggu</span>
                        </div>
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM174.6 384.1c-4.5 12.5-18.2 18.9-30.7 14.4s-18.9-18.2-14.4-30.7C146.9 319.4 198.9 288 256 288s109.1 31.4 126.6 79.9c4.5 12.5-2 26.2-14.4 30.7s-26.2-2-30.7-14.4C328.2 358.5 297.2 336 256 336s-72.2 22.5-81.4 48.1zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                            <span><br>6 <br> Mengganggu</span>
                        </div>
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M175.9 448c-35-.1-65.5-22.6-76-54.6C67.6 356.8 48 308.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208s-93.1 208-208 208c-28.4 0-55.5-5.7-80.1-16zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM128 369c0 26 21.5 47 48 47s48-21 48-47c0-20-28.4-60.4-41.6-77.7c-3.2-4.4-9.6-4.4-12.8 0C156.6 308.6 128 349 128 369zm128-65c-13.3 0-24 10.7-24 24s10.7 24 24 24c30.7 0 58.7 11.5 80 30.6c9.9 8.8 25 8 33.9-1.9s8-25-1.9-33.9C338.3 320.2 299 304 256 304zm47.6-96a32 32 0 1 0 64 0 32 32 0 1 0 -64 0zm-128 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                            </svg>
                            <span><br>8 <br> Sangat Mengganggu</span>
                        </div>
                        <div class="col-2" style="text-align: center;height: 155px;align-content: center">
                            <svg style="width: 75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M400 406.1L400 288c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 152.6c-28.7 15-61.4 23.4-96 23.4s-67.3-8.5-96-23.4L160 288c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 118.1C72.6 368.2 48 315 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 59-24.6 112.2-64 150.1zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM159.6 220c10.6 0 19.9 3.8 25.4 9.7c7.6 8.1 20.2 8.5 28.3 .9s8.5-20.2 .9-28.3C199.7 186.8 179 180 159.6 180s-40.1 6.8-54.6 22.3c-7.6 8.1-7.1 20.7 .9 28.3s20.7 7.1 28.3-.9c5.5-5.8 14.8-9.7 25.4-9.7zm166.6 9.7c5.5-5.8 14.8-9.7 25.4-9.7s19.9 3.8 25.4 9.7c7.6 8.1 20.2 8.5 28.3 .9s8.5-20.2 .9-28.3C391.7 186.8 371 180 351.6 180s-40.1 6.8-54.6 22.3c-7.6 8.1-7.1 20.7 .9 28.3s20.7 7.1 28.3-.9zM208 320l0 32c0 26.5 21.5 48 48 48s48-21.5 48-48l0-32c0-26.5-21.5-48-48-48s-48 21.5-48 48z" />
                            </svg>
                            <span><br>10 <br> Tak Tertahan</span>
                        </div>
                    </div>
                </div>
                <div class="col-3" style="align-content: center">
                    <div class="form-group row" style="align-items: normal">
                        <label class="col-6">Skala Nyeri</label>
                        <div class="col-6">
                            <div class="checkbox-group row">
                                <div class="col-12">
                                    : <input class="input-field inputan" type="text" name="text" style="max-width: 50px">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>Apabila pada kondisi tidak sadar pergunakan metode COMFORT SCALE </p>
                        </div>
                    </div>
                </div>
            </div>

            <p><b>METODE FLACCS UNTUK USIA 1 -6 TAHUN </b></p>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">Kategori</th>
                                <th colspan="3" class="text-center">Parameter</th>
                                <th rowspan="2" class="text-center" width="180px">Skala</th>
                            </tr>
                            <tr>
                                <th class="text-center">0</th>
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>WAJAH</td>
                                <td>Tersenyum atau tidak ada ekspresi khusus</td>
                                <td>Terkadang meringis / menarik diri</td>
                                <td>Sering menggetarkan dagu dan mengatupkan rahang</td>
                                <td rowspan="5">
                                    <label><input type="checkbox" name=""> 0 : Nyaman</label>
                                    <label><input type="checkbox" name=""> 1-3 : Kurang Nyaman</label>
                                    <label><input type="checkbox" name=""> 4-6 : Nyeri sedang</label>
                                    <label><input type="checkbox" name=""> 7-10 : Nyeri hebat</label>
                                </td>
                            </tr>
                            <tr>
                                <td>KAKI</td>
                                <td>Gerakan normal/ relaksasi</td>
                                <td>Tidak tenang / tenang</td>
                                <td>Kaki dibuat menendang / menarik diri</td>
                            </tr>
                            <tr>
                                <td>AKTIVITAS</td>
                                <td>Tidur posisi normal, mudah bergerak</td>
                                <td>Gerakan menggeliat,berguling,kaku</td>
                                <td>Melengkungkan punggung/kaku/menghentak</td>
                            </tr>
                            <tr>
                                <td>MENANGIS</td>
                                <td>Tidak menangis (bangun/tidur)</td>
                                <td>Mengerang, merengek-rengek</td>
                                <td>Menangis terus-menerus,terisak,menjerit</td>
                            </tr>
                            <tr>
                                <td>BERSUARA</td>
                                <td>Bersuara normal, tangan </td>
                                <td>Tangan bila dipeluk, digendong/diajak bicara</td>
                                <td>Sulit untuk menenangkan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p><b>SKALA NIPS (Neonatal Infant Paint Scale) UNTUK USIA < I TAHUN</b>
            </p>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">ASSESMEN</th>
                                <th class="text-center">PENILAIAN NYERI</th>
                                <th class="text-center">NILAI</th>
                                <th class="text-center" width="180px">Skala</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Ekspresi Wajah</td>
                                <td>
                                    Santai (Alami)
                                    <br>
                                    Meringis (hidung melekat pada dahi)
                                </td>
                                <td>0<br>1</td>
                                <td rowspan="6">
                                    <label><input type="checkbox" name=""> 0 : Nyaman</label>
                                    <label><input type="checkbox" name=""> 1-3 : Kurang Nyaman</label>
                                    <label><input type="checkbox" name=""> 4-6 : Nyeri sedang</label>
                                    <label><input type="checkbox" name=""> 7-10 : Nyeri hebat</label>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Menangis</td>
                                <td>
                                    Tidak menangis
                                    <br>
                                    Merengek (Sebentar-bentar menangis)
                                    <br>
                                    Menangis kuat
                                </td>
                                <td>
                                    0<br>1<br>2
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Pernafasan</td>
                                <td>
                                    Nafas biasa / santai (normal)
                                    <br>
                                    Perubahan bernafas (lebih cepat)
                                </td>
                                <td>
                                    0<br>1
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Gerak Lengan</td>
                                <td>
                                    Santai (otot tidak kaku, pergerakan sedikit)
                                    <br>
                                    Flexi/ekstensi (otot keras, langsung flexi)
                                </td>
                                <td>
                                    0<br>1
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Tungkai </td>
                                <td>
                                    Santai (otot tidak kaku, pergerakan kaki deikit)
                                    <br>
                                    Flexi/ekstensi (otot keras, langsung flexi)
                                </td>
                                <td>
                                    0<br>1
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Bangun </td>
                                <td>
                                    Tertidur/bangun (cepat tidur, sedikit bergerak)
                                    <br>
                                    Rewel (terganggu tidurnya, pelan nyerinya hilang)
                                </td>
                                <td>0<br>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p><b>METOPE HEART RATE dan SATURASI OKSIGEN (digunakan pada anak diruang PICU) </b>
            </p>
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Parameter</th>
                                <th class="text-center">PENILAIAN NYERI</th>
                                <th class="text-center">Skor</th>
                                <th class="text-center" width="180px">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Heart Rate</td>
                                <td>
                                    10% dari baseline<br>11-20% dari baseline<br>>20% dari baseline
                                </td>
                                <td>0<br>1<br>2</td>
                                <td rowspan="2">
                                    <label><input type="checkbox" name=""> 0 : Tidak Nyeri</label>
                                    <label><input type="checkbox" name=""> 1-2 : Nyeri Ringan</label>
                                    <label><input type="checkbox" name=""> 3-4 : Nyeri Sedang</label>
                                    <label><input type="checkbox" name=""> 5-7 : Nyeri Hebat</label>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Saturasi Oksigen</td>
                                <td>
                                    Tidak perlu oksigen tambahan<br>Diperlukan penambhan oksigen
                                </td>
                                <td>
                                    0<br>1
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Lokasi Nyeri</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-12">
                            : <input class="input-field inputan" type="text" name="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Onset</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-12">
                            : <input class="input-field inputan" type="text" name="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Sifat Nyeri</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Kejang</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Konstan</label>
                        </div>
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Intermediet</label>
                        </div>
                        <div class="col-3">
                            Lainnya : <input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Faktor Pemberat</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Nyeri tajam</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Beret</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Rasa terbakar</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Tekanan</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Faktor Pemberat</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Cahaya</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Gerakan</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Berbaring</label>
                        </div>
                        <div class="col-3">
                            Lainnya : <input class="input-field inputan" type="text" name="text" style="max-width: 100px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3" style="padding-left: 25px;">Faktor Peringan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Reposisi</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Konipres</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Obat</label>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Kurangi rangsang </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagebreak"></div>

    <div class="RM_405_5">
        <div style="justify-self: right;">
            <span style="border-bottom: 1px solid;">RM.04.5</span><br>
            <span>Hal. 5/6</span>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN RESIKO JATUH MORSE</div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th class="text-center">Faktor</th>
                                <th class="text-center">Skala</th>
                                <th class="text-center">Point</th>
                                <th class="text-center">Skor Pasien</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">Riwayat Jatuh</td>
                                <td class="text-left">Ya<br>Tidak</td>
                                <td class="text-center">25<br>0</td>
                                <td class="text-center"><input type="checkbox"><br><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Diagnosa Medis (>2 Diagnosa Medis)</td>
                                <td class="text-left">Ya<br>Tidak</td>
                                <td class="text-center">15<br>0</td>
                                <td class="text-center"><input type="checkbox"><br><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Terpasang Infus</td>
                                <td class="text-left">Perabot<br>Tongkat,kruk,Waker<br>Tidak ada.Kursi roda/perawat/tirah baring</td>
                                <td class="text-center">30<br>15<br>0</td>
                                <td class="text-center"><input type="checkbox"><br><input type="checkbox"><br><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Gaya Berjalan</td>
                                <td class="text-left">Terganggu<br>Lemah<br>Normal / Tirah baring / imobilisasi</td>
                                <td class="text-center">30<br>15<br>0</td>
                                <td class="text-center"><input type="checkbox"><br><input type="checkbox"><br><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Status Mental</td>
                                <td class="text-left">Sering lupa / respon tidak sesuai perintah<br>Orientasi baik terhadap diri sendiri</td>
                                <td class="text-center">15<br>0</td>
                                <td class="text-center"><input type="checkbox"><br><input type="checkbox"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Kriteria Resiko jatuh</td>
                                <td>Total</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Catalan Resiko tinggi >45, Resiko Sedang: 25- 44, Resiko Rendah 0-24 </p>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN RESIKO JATUK (HUMTY DUMTY) </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th class="text-center">Parameter</th>
                                <th class="text-center">Kriteria</th>
                                <th class="text-center">Nilai</th>
                                <th class="text-center">Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">Usia</td>
                                <td class="text-left">
                                    <input type="checkbox">0 < 3 Tahun <br>
                                        <input type="checkbox"> 3-7 Tahun<br>
                                        <input type="checkbox"> 7-13 Tahun<br>
                                        <input type="checkbox"> > 13 Tahun<br>
                                </td>
                                <td class="text-center">4<br>3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Jenis Kelamin</td>
                                <td class="text-left">
                                    <input type="checkbox">Laki-Laki <br>
                                    <input type="checkbox"> Perempuan<br>
                                </td>
                                <td class="text-center">2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Diagnosa</td>
                                <td class="text-left">
                                    <input type="checkbox">Diagnosa Neurologi <br>
                                    <input type="checkbox"> Perubahan Oksigenasi<br>
                                    <input type="checkbox"> Gangguan Perilaku<br>
                                    <input type="checkbox"> Diagnosa Lainnya<br>
                                </td>
                                <td class="text-center">4<br>3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Gangguan Kognitif</td>
                                <td class="text-left">
                                    <input type="checkbox">Tidak Menyadari keterbatasan Did<br>
                                    <input type="checkbox">Lupa Akan Adanya Keterbatasan Did<br>
                                    <input type="checkbox">Orientasi Baik<br>
                                </td>
                                <td class="text-center">3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Faktor Lingkungan</td>
                                <td class="text-left">
                                    <input type="checkbox">Riwayat Jatuh <br>
                                    <input type="checkbox"> Pasien Menggunakan Alat Bantu<br>
                                    <input type="checkbox"> Pasien diletakkan ditempat lidur<br>
                                    <input type="checkbox"> Area diLuar RS<br>
                                </td>
                                <td class="text-center">4<br>3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Respon Terhadap Pembedahan/Sedasi/Anastesi</td>
                                <td class="text-left">
                                    <input type="checkbox">Dalam 24 Jam<br>
                                    <input type="checkbox">Dalam 48 Jam<br>
                                    <input type="checkbox">0 > 48 Jam/tidak mengalami pembedahan/sedasi/anastesi<br>
                                </td>
                                <td class="text-center">3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-left">Penggunaan Medikamentosa</td>
                                <td class="text-left">
                                    <input type="checkbox"> Penggunaan multiple obat<br>
                                    <input type="checkbox">Penggunaan salah satu obat<br>
                                    <input type="checkbox"><input class="inputan"><br>
                                </td>
                                <td class="text-center">3<br>2<br>1</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Kriteria Resiko jatuh : Rendah (Skor 7-11) Tinggi (Skor > 12)</td>
                                <td>Total</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN STATUS NUTRISI (MUST) </div>
        </div>

        <div class="form-container">
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">TB</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-12">
                            : <input class="input-field inputan" type="text" name="text"> cm
                        </div>
                    </div>
                </div>
                <label class="col-3">BB</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-12">
                            : <input class="input-field inputan" type="text" name="text"> kg
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Skor IMT (IMT=BB(Kg)/TB (m)2)</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> 0</label>
                            <br>
                            <p>> 20</p>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 1</label>
                            <br>
                            <p>18.5 - 20</p>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 2</label>
                            <br>
                            <p>
                                < 18.5</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Prosentase Kehilangan BB</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> 0</label>
                            <br>
                            <p>5%</p>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 1</label>
                            <br>
                            <p>5-10%</p>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 2</label>
                            <br>
                            <p>> 10%</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Efek akut akibat penyakit</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> 0</label>
                            <br>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 1</label>
                            <br>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 2</label>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Skor Total</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> 0 : Resiko Rendah</label>
                            <br>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> 1 : Resiko Sedang</label>
                            <br>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> >2 : Resiko Rendah</label>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row" style="align-items: normal">
                <div class="col-12" style="place-items: center">
                    <table border="1">
                        <th>
                            0 : Tidak ada gangguan dalam asupan makanan<br>
                            1 : Asupan makan kurang / tidak ada asupan makan selama 2-5 hari<br>
                            2 : Asupan makan kurang / tidak ada asupan selama > 5 hari
                        </th>
                    </table>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Perlu Asuhan Gizi Lanjutan</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-3">
                            : <label><input type="checkbox" name=""> Tidak</label>
                            <br>
                        </div>
                        <div class="col-3">
                            <label><input type="checkbox" name=""> Ya</label>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pagebreak"></div>

    <div class="RM_405_6">
        <div style="justify-self: right;">
            <span style="border-bottom: 1px solid;">RM.04.5</span><br>
            <span>Hal. 6/6</span>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN SEKSUAL REPRODUKSI </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-12">
                        <label><input type="checkbox" name="">Wanita</label>
                    </label>
                    <label class="col-3" style="padding-left: 15px">Menstruasi</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                : <label><input type="checkbox" name="">Normal</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="">Tidak Normal</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="">Belum Menstruasi</label>
                            </div>
                        </div>
                    </div>

                    <label class="col-3" style="padding-left: 15px">Tanggal Menstruasi Terakhir</label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-12">
                                : <input type="text" class="inputan datepicker" name="tanggal" style="flex:2">
                            </div>
                        </div>
                    </div>

                    <label class="col-3">
                        <label><input type="checkbox" name="">Laki-Laki</label>
                    </label>
                    <div class="col-9">
                        <div class="checkbox-group row">
                            <div class="col-3">
                                : <label><input type="checkbox" name="">Normal</label>
                            </div>
                            <div class="col-3">
                                <label><input type="checkbox" name="">Tidak Normal</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">ASSESMEN STATUS MENTAL </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-4">
                        <label><input type="checkbox" name="">Kooperatif</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Pasien Tidak Kooperatif</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Pasien Gelisah atau delinium clan berontak</label>
                    </label>
                    <label class="col-12">
                        <label><input type="checkbox" name="">Ketidak mampuan dalam mengikuti perintah untuk tidak meninggalkan tempat tidur</label>
                    </label>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">
                        <label>Restrian</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Tidak</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Ya, lakukan ASSESMENT restrian</label>
                    </label>
                </div>

            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">AKTIFITAS DAN ISTIRAHAT / TIDUR </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">
                        <label>Pola tidur </label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Normal</label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Sering Terbangun</label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Insomnia</label>
                    </label>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">
                        <label>Penggunaan Obat Tidur </label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Tidak</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Ya, sebutkan</label>
                        <input type="text" class="inputan">
                    </label>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">
                        <label>Perawatan Diri </label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Mandiri</label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Dengan Bantuan</label>
                    </label>
                    <label class="col-3">
                        <label><input type="checkbox" name="">Bantuan penuh </label>
                    </label>
                </div>

                <div class="form-group row" style="align-items: normal">
                    <label class="col-3">
                        <label>Penggunaan Alat Medis </label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Tidak</label>
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Ya</label>
                    </label>
                    <label class="col-3"></label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Kateter</label>
                        Tgl Pasang :<input type="text" class="inputan">
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">Infus</label>
                        Tgl Pasang :<input type="text" class="inputan">
                    </label>

                    <label class="col-3"></label>
                    <label class="col-4">
                        <label><input type="checkbox" name="">NGT</label>
                        Tgl Pasang :<input type="text" class="inputan">
                    </label>
                    <label class="col-4">
                        <label><input type="checkbox" name=""></label>
                        Lain-lain :<input type="text" class="inputan">
                    </label>
                </div>

            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">DAFTAR MASALAH KEPERAWATAN </div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td>D.0001</td>
                                <td>Bersihan jalan nafas tidak efektif</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0008</td>
                                <td>Penurunan curah jantung</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0005</td>
                                <td>Pola nafas tidak efektif</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0021</td>
                                <td>Hipovolemi</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0003</td>
                                <td>Gangguan pertukaran gas</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0023</td>
                                <td>Hipovolemi</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0130</td>
                                <td>Hipertemi</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0027</td>
                                <td>Ketidakstabilan gula darah</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0131</td>
                                <td>Hipotermi</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0007</td>
                                <td>Gangguan sirkulasi spontan</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0077</td>
                                <td>Nyeri akut</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0039</td>
                                <td>Risiko syok</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0078</td>
                                <td>Nyeri kronis</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0012</td>
                                <td>Risiko perdarahan</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0036</td>
                                <td>Risiko ketidakseimbangan cairan</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0054</td>
                                <td>Gangguan mobilitas fisik</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0000</td>
                                <td>Ansietas</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0074</td>
                                <td>Gangguan rasa nyaman</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0037</td>
                                <td>Risiko ketidakseimbangan elektrolit</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0036</td>
                                <td>Risiko ketidakstabilan gula darah</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0020</td>
                                <td>Diare</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0055</td>
                                <td>Gangguan pola tidur</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0050</td>
                                <td>Retensi urine</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0076</td>
                                <td>Nausea</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0049</td>
                                <td>Konstipasi</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0056</td>
                                <td>Intoleransi aktivitas</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                            <tr>
                                <td>D.0002</td>
                                <td>Gangguan penyapihan ventilator</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                                <td>D.0129</td>
                                <td>Gangguan integritas kulit</td>
                                <td><input type="text" class="inputan" style="max-width: 50px"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-12">
                        Lain-lain :<input type="text" class="inputan">
                        <br>
                        <span><b>(isi kotak di atas den gan angka sesuai urutan prioritas masalah yang terjadi pada pasien)</b></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">PERENCANAAN PULANG / DISCHARGE PLANNING</div>
        </div>

        <div class="form-container">
            <span>Kritefla Discharge Planning:</span>
            <div class="form-group row" style="align-items: normal">
                <label class="col-6">1. Umur > 65 tahun</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Ya</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-6">2. Keterbatasan mobilitas</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Ya</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-6">3. Perawatan atau pengobatan lanjutan</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Ya</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-6">4. Bantuan untuk melakukan aktivitas sehari hari</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Ya</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="align-items: normal">
                <label class="col-6">5. Bantuan Pelayanan psikososial</label>
                <div class="col-3">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Ya</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <span>Bila salah satu jawaban ,'Ya" dari kriteria perencanaan pulang diatas, maka akan dilanjutkan dengan perencanaan pulang </span>
            <div class="form-group row" style="align-items: normal">
                <label class="col-3">Sebagai Berikut</label>
                <div class="col-9">
                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Perawatan diri (mandi. BAB. BAK)</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Pemantauan diet</label>
                        </div>
                    </div>

                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Pemantauan pemberian obat</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Perawatan Luka</label>
                        </div>
                    </div>

                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Latihan fisik lanjutan</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Pendampingan tenga khusus di rumah</label>
                        </div>
                    </div>

                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Bantuan medis/perawatan di rumah (home care)</label>
                        </div>
                        <div class="col-6">
                            : <label><input type="checkbox" name=""></label>
                            Lain-lain :<input type="text" class="inputan">
                        </div>
                    </div>

                    <div class="checkbox-group row">
                        <div class="col-6">
                            : <label><input type="checkbox" name=""> Bantuan untuk melakukan aktifitas fisik (kursi roda,alat bantu jalan)</label>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="form-container-header">
            <div class="form-header">PEMERIKSAAN PENUNJANG YANG DIBAWA</div>
        </div>

        <div class="form-container">
            <div class="form-section">
                <div class="form-group row" style="align-items: normal">
                    <table border="1" style="border: #000 1px solid; width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr>
                                <th class="text-center">JENIS PEMERIKSAAN</th>
                                <th class="text-center">ASAL PEMERIKSAAN</th>
                                <th class="text-center">JUMLAH</th>
                                <th class="text-center">PENERIMAAN</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                            </tr>
                            <tr>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>

                            </tr>
                            <tr>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>

                            </tr>
                            <tr>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                                <td class="text-center"><input type="text" class="inputan"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-footer" style="text-align: right; margin-top: 20px;">
                <div class="form-section">
                    <div class="form-group row">

                        <div class="col-6">
                            <div style="display: flex; justify-content: center; text-align: center; margin-top: 20px;">
                                <div>
                                    <p>Verifikasi DP JP</p>
                                    <p style="font-weight: bold; margin-top: 30px;">TTD</p>
                                    <p style="margin-top: 60px;">( .......................................................... )</p>
                                    <p>Tanda tangan dan nama terang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p style="padding-right: 20px">
                                <span>Paciran, </span>
                                <input type="text" class="inputan datepicker" name="tanggal">
                                <span> Jam: </span>
                                <input type="text" class="inputan timepicker" name="hour" style="max-width: 100px">
                                <span>WIB</span>
                            </p>

                            <div style="display: flex; justify-content: center; text-align: center; margin-top: 20px;">
                                <div>
                                    <p>Perawat</p>
                                    <p style="font-weight: bold; margin-top: 30px;">TTD</p>
                                    <p style="margin-top: 60px;">( .......................................................... )</p>
                                    <p>Tanda tangan dan nama terang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
<script>
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


</html>
