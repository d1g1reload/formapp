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
                RM 07.4
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


        <div class="col-md-12"
            style="width: 100%; margin-left: 0; border-right:1px solid; border-left:1px solid; padding:10px;">
            <div id="judul1"><u><b>SURAT KETERANGAN KONTROL</b></u></div>
            <div class="judul">Nomor : <input type="text"
                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%" name=""
                    id=""></div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Kepada :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="50px">Yth:</td>
                            <td></td>
                            <td style="padding-bottom: 5px;">
                                <table width="18.5%">
                                    <tr>
                                        <td> Dokter</td>
                                        <td><select name="" class="select2" id="" style="width:100%;">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td width="50px"></td>
                            <td></td>
                            <td style="padding-bottom: 5px;">
                                <table width="20%">
                                    <tr>
                                        <td> di Poli</td>
                                        <td><select name="" class="select2" id="" style="width:100%;">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select></td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr>
                            <td width="50px"></td>
                            <td></td>
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
                style="border-left:1px solid;border-right:1px solid;border-right:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>Assalamu‘alaikum wr wb</div>
                    <div>Mohon kontrol / perawatan lebih lanjut atas pasien :</div>
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">Nama</td>
                            <td width="15px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                    name="" id="">Usia <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                    name="" id=""> th/bl

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Alamat</td>
                            <td width="15px">:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Mulai dirawat</td>
                            <td width="15px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                    name="" id="">s/d <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 66%"
                                    name="" id="">

                            </td>
                        </tr>
                        <tr>
                            <td width="200px">No RM </td>
                            <td width="15px">:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">Ruang Perawatan </td>
                            <td width="15px">:</td>
                            <td>

                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                    name="" id="">
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" style="vertical-align: top">Status Pasien</td>
                            <td width="15px" style="vertical-align: top">:</td>
                            <td style="padding-top:10px;">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Umum
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        BPJS :
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Kelas I</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1"> Kelas II</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Kelas III</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">PBI</label>
                                        </div>

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Asuransi lain : InHealth / <input type="text"
                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 50%"
                                            name="" id="">
                                    </label>
                                </div>



                            </td>
                        </tr>

                        <tr>
                            <td width="200px" style="vertical-align: top">Diagnosa </td>
                            <td width="15px" style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                    id=""></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" style="vertical-align: top">Terapi </td>
                            <td width="15px" style="vertical-align: top">:</td>
                            <td>

                                <textarea name="" style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                    id=""></textarea>
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
                    <div>Demikian atas perhatiannya, terima kasih.</div>
                    <div>Wassalamu‘alaikum wr wb.</div>

                </div>
            </div>

        </div>



        <div class="row" style="border-left:1px solid;border-right:1px solid; solid;width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 28px">
                <div class="text-center">

                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Perawat
                        </div>
                        <br>

                        (................................)<br>

                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">
                    Jombang, <input type="text" class="datetimepicker"
                        style="border: hidden; border-bottom: 1px solid; font-size: 14px;">
                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            DPJP
                        </div>
                        <br>

                        (................................)<br>

                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12"
                style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="200px">Kontrol Hari</td>
                            <td width="15px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                    name="" id="">Tanggal <input type="text"
                                    class="datetimepicker"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id=""> Jam <input type="text" class="datetimepicker"
                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 10%"
                                    name="" id=""> WIB

                            </td>
                        </tr>

                        <tr>
                            <td width="200px">Catatan</td>
                            <td width="15px">:</td>
                            <td>
                                <textarea name="" style="height:50px;border: hidden; border-bottom: 1px solid; font-size: 14px; width: 80%"
                                    id="" cols="5" rows="5"></textarea>
                            </td>
                        </tr>



                    </table>
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
