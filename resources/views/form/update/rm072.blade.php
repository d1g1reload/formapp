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
    <title>Form 07.2</title>
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
                RM 07.2
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
            <div class="judul">DISCHARGE PLANNING</div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-8 col-sm-8 col-md-8" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="300px">Tanggal dilakukan Discharge Planning</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="datepicker"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="tanggal" id="nama_dpjp">
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="90px">Ruangan</td>
                            <td width="15px">:</td>
                            <td>
                                <select name="" class="select2" id="" style="width:100%;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>

                            </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div>Dipulangkan dari Rumah Sakit dengan keadaan </div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Sembuh
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Meneruskan dengan obat jalan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Atas Permintaan Sendiri
                                            </label>
                                        </div>


                                    </div>

                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>A. Kontrol :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="100px">Waktu</td>
                            <td>:</td>
                            <td>

                                <input type="text" class="datetimepicker"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="waktu" id="waktu">
                            </td>
                        </tr>

                        <tr>
                            <td width="100px">Tempat</td>
                            <td>:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                    name="tempat" id="tempat">

                            </td>
                        </tr>

                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>B. Lanjutan perawatan di rumah (luka, operasi, pemasangan gift, pengobatan dll) :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>C. Aturan diet atau nutrisi :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>D. Obat-obatan yang masih diminum dan jumlahnya :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>E. Aktivitas dan Istirahat :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>F. Pendampingan tenaga khusus di rumah :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>G. Bantuan Medis / Perawatan di Rumah ( home care ) :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>H. Bantuan untuk melakukan aktivitas fisik ( kursi roda, alat bantu jalan ) :</p>
                    <table style="width: 100%">
                        <tr>

                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>




        <div class="row" style="border:1px solid;width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 28px">
                <div class="text-center">

                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Pasien / Keluarga
                        </div>
                        <br>
                        <span style="border-bottom:1px dotted;">
                            (................................)<br>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">
                    Jombang, <input type="text" class="datetimepicker"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px;">
                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Perawat / Bidan
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
