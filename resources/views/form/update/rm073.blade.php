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
    <title>Form 07.3</title>
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



        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <div class="container">
        <div class="col-md-12" style="width: 25%; margin-left: 75%; border:1px solid;">
            <div class="judul">
                RM 07.3
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
                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                        name="nama_pasien" id="nama_pasien"></td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">No Rekam Medis</td>
                                <td style="padding-left:10px; padding-right:10px"> :</td>
                                <td><input type="text"
                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                        name="no_rekam_medis" id="no_rekam_medis"></td>
                            </tr>
                            <tr>
                                <td style="width: 40%;">Tanggal Lahir</td>
                                <td style="padding-left:10px; padding-right:10px"> :</td>
                                <td><input type="date"
                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                        name="tanggal_lahir" id="tanggal_lahir"></td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </div>


        <div class="col-md-12" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="judul">SURAT PERNYATAAN PULANG ATAS PERMINTAAN SENDIRI (APS)
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Yang bertanda tangan dibawah ini,</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">Nama</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">(Laki-Laki/Perempuan)
                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Alamat</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Nomor Telepon/ HP</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Hubungan dengan pasien</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="checkbox" id="inlineCheckbox1"
                                        value="option1" checked>
                                    <label class="form-check-label" for="inlineCheckbox1">Diri sendiri</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Orang Tua</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Suami</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Istri</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Anak</label>
                                </div>
                                <br>
                                Pengampu <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="nadi" id="nadi">(Sebutkan)

                            </td>
                        </tr>


                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Dengan sesungguhnya menyatakan <u><b>MENOLAK</b></u> nasehat dokter :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">Nama</td>
                            <td width="15px">:</td>
                            <td>

                                <select name="" class="select2" id="" style="width:50%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Ruang Rawat Inap</td>
                            <td width="15px">:</td>
                            <td>

                                <select name="" class="select2" id="" style="width:50%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Alamat</td>
                            <td width="15px">:</td>
                            <td>
                                RSI Jombang
                            </td>
                        </tr>


                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Untuk menjalani <u><b>perawatan</b></u> di RSI Jombang, terhadap pasien :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">Nama</td>
                            <td width="15px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Tanggal Lahir</td>
                            <td width="15px">:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px">No. Rekam Medis</td>
                            <td width="15px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="" id="">
                            </td>
                        </tr>


                    </table>
                    <div>Selanjutnya apabila terjadi sesuatu atau kemungkinan yang tidak diinginkan akan menjadi
                        tanggung
                        jawab kami sendiri.</div>

                </div>

            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Alasan pulang atas permintaan sendiri :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">1. Ingin dirawat ditempat lain</td>
                            <td width="15px">:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Rumah Sakit</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Klinik</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Rumah</label>
                                </div>


                            </td>
                        </tr>

                        <tr>
                            <td width="350px">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Pelayanan tidak atau kurang
                                        memuaskan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Tidak segera
                                        ditangani</label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Ditelantarkan</label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Petugas kurang ramah</label>
                                </div><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Tempat/ ruangan tidak
                                        menyenangkan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Keamanan kurang
                                        terjamin</label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td width="200px">2. Biaya
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tarif terlalu mahal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tidak mempunyai biaya
                                    </label>
                                </div>
                            </td>


                        </tr>

                        <tr>
                            <td width="200px">3. Lain-lain
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sudah merasa sembuh
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Tidak ada harapan
                                    </label>
                                </div>
                            </td>


                        </tr>
                        <tr>
                            <table width="100%">
                                <tr>
                                    <td>4. Alasan diluar 1 sampai dengan 3 : <br>
                                        <input type="text"
                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width:100%; "
                                            name="" id="">
                                    </td>
                                </tr>
                            </table>


                        </tr>
                    </table>


                </div>

            </div>
        </div>

        <div class="row" style="border-left:1px solid;border-right:1px solid;width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">Mengetahui</div>
                <div class="row">
                    <div class="col-6">
                        <div class="text-center">
                            <div id="box_ttd">
                                <div style="height: 1.5cm;">
                                    DPJP / Dokter Jaga
                                </div>
                                <br>
                                <span style="border-bottom:1px dotted;">
                                    (................................)<br>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center">

                            <div id="box_ttd">
                                <div style="height: 1.5cm;">
                                    Kepala Jaga
                                </div>
                                <br>
                                <span style="border-bottom:1px dotted;">
                                    (................................)<br>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">
                    Jombang, <input type="text" class="datepicker"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px;">
                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Yang Menyatakan
                        </div>
                        <br>
                        <span style="border-bottom:1px dotted;">
                            (................................)<br>
                        </span>
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
