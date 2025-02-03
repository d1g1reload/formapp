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
    <title>Form 045A</title>
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

        #custom-border-col {
            border-right: 1px solid #444;
            border-left: 1px solid #444;
            padding-top: 10px;

        }

        #custom-border-col-last {
            border-right: 1px solid #444;
            border-left: 1px solid #444;
            border-bottom: 1px solid #444;
            padding-top: 10px;
            margin-bottom: 10px;


        }

        #ctm-border {
            border: 1px solid #444;
            text-align: center;

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
        <div class="col-md-12">
            <div class="judul text-right">
                <u>RM 04.5A</u>
                <br>
                Hal. 1/4
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <table style="width: 100%">
                <tr>
                    <td style="width: 30%; border: 1px solid;">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 70%">
                                    <div class="text-center">
                                        <img src="https://placehold.co/50x50" alt="">
                                    </div>
                                    <p id="judul1">RSU dr. SUYUOI PACIRAN</p>
                                    <p id="judul2">
                                        <span style="font-weight: normal">Jalan Raya Deaudjes Pacizan<br>telp. (0322) 661412 </span>
                                        <br>Fax (0322) 666 293
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 70%; border: 1px solid;">
                        <div class="row" style="width:100%; margin-left: 0;">
                            <div class="col-xs-6 col-sm-6 col-md-6" style=" padding:10px;">
                                <div class="mt-0">
                                    <table style="width: 100%">
                                        <tr>
                                            <td width="110px">Nama Pasien</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin </td>
                                            <td>: </td>
                                            <td>L/P</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">

                                            </td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6" style="padding:10px;">
                                <div class="mt-0">
                                    <table style="width: 100%">
                                        <tr>
                                            <td width="70px">No.RM</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Lahir</td>
                                            <td>:</td>
                                            <td>

                                                <input type="date"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="col-md-12" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="judul">ASESMEN KEPERAWATAN PERINATAL</div>
        </div>
        <div class="col-md-12" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="judul">RIWAYAT KEPERAWATAN (NURSING HISTORY)</div>
        </div>



        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>A. <u>RIWAYAT PENYAKIT SEKARANG</u></b></div>
                <div class="mt-0">
                    <div>Alasan Masuk : </div>
                    <textarea name="" style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 100%"
                        id=""></textarea>

                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col-last">
                <div><b>B. <u>RIWAYAT KELAHIRAN</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <div>1. Antenatal</div>
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. ANC</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak pernah
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-5 col-sm-5 col-md-5">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Pernah, di</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                            id="">
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. TT</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak pernah
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Pernah</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 30%" name=""
                                                            id=""><label class="form-check-label" for="inlineCheckbox1">Kali</label>
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">c. Penyulit kehamilan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Hiperemesis Gravidanun
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Perdarahan
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Lain-lain</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width: 50%" name=""
                                                            id="">
                                                    </div>


                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">d. Penyakit yang menyertai kehamilan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Hipertensi
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            DM
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            TORCHE
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Lain-lain</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width: 60%" name=""
                                                            id="">
                                                    </div>

                                                </div>
                                                <div class=" col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            HIV
                                                        </label>
                                                    </div>


                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                </table>

                                <div>2. Intranatal</div>
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Umur kehamilan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                            id="">minggu

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Kondisi kelahiran</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kurang bulan
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Sesuai usia kehamilan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Cukup bulan
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Serotinus
                                                        </label>
                                                    </div>


                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">c. Jenis persalinan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Spontan
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            VE
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            SC
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Forceps
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">d. Penolong persalinan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-8 col-sm-8 col-md-8">
                                                    <input type="text"
                                                        style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                        id="">


                                                </div>

                                            </div>


                                        </td>
                                    </tr>

                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">e. Penymlit kehamilan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Letak lintang
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Letsu
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Gemelly
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-5 col-sm-5 col-md-5">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Lain-lain</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;" name=""
                                                            id="">
                                                    </div>

                                                </div>
                                            </div>


                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">f. Komplikasi</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            KPD, lama KPD
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;" name=""
                                                            id="">Jam
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            lain-lain
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px dotted; font-size: 14px;" name=""
                                                            id="">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Eklamsia / pre eklamsia
                                                        </label>
                                                    </div>


                                                </div>


                                            </div>


                                        </td>
                                    </tr>
                                </table>

                                <div>3. Post Natal</div>
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Berat Badan Lahir</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">gram

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Panjang Badan </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">cm

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Lingkar Kepala </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">cm

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Lingkar Dada </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">cm

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">e. Lingkar Lengan Atas </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">cm

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">f. Lingkar Perut </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">cm

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">g. Jenis persalinan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Trauma lahir
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Ada
                                                        </label><input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                            id="">
                                                    </div>


                                                </div>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">h. APGAR score </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-check">
                                                        1 menit<input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">

                                                    </div>
                                                    <div class="form-check">
                                                        5 menit<input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 16px;" name=""
                                                            id="">

                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">i. Usaha nafas
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Spartan
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Dengan bantuan
                                                        </label>
                                                    </div>


                                                </div>


                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">j. Riwayat imunisasi
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Belum Imunisasi
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Sudah
                                                        </label>
                                                    </div>


                                                </div>


                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">k. Suhu
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 50%">
                                                <tr>

                                                    <td>

                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; "
                                                            name="" id="">°C

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Heater / wanner
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Inkubator
                                                            </label>
                                                        </div>


                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width=" 310px" style="vertical-align:top;">l. Masalah keperawatan
                                        </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak ada masalab
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Hipotermi
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Penurunan cardiac output
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Hipertermi
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class=" col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Perfusi jaringan
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Inefektif termoregulasi
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


                </div>
            </div>

        </div>


    </div>

    <div class="container">
        <div class="row" id="page2" style="margin-left: 0;">
            <div class="col-md-12">
                <div class="judul text-right">
                    <u>RM 04.5A</u>
                    <br>
                    Hal. 2/4
                </div>
            </div>
        </div>

        <div class="row" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="judul">PEMERIKSAAN FISIK</div>
            </div>
        </div>



        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>A. <u>KEPALA</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Bentuk</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-5 col-sm-5 col-md-5">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                            value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Kelainan</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                            id="">
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Sutura</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tepat
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Overlaping
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
                </div>
                <div><b>B. <u>MATA</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Konjungtiva</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Anemis
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak anemis
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Sekret
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Bentuk</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Simetris
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Asimetris
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Sklera</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Ikterus
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak ikterus
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Pupil</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Isokor
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Anisokor
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
                </div>
                <table style="width: 100%">
                    <tr>
                        <td width="325px" style="vertical-align:top;"><b>C. <u>Telinga</u></b></td>
                        <td width="15px" style="vertical-align:top;">:</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Normal
                                        </label>
                                    </div>

                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3" style="margin-left:-5px;">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Tidak Normal
                                        </label>
                                    </div>

                                </div>

                            </div>


                        </td>
                    </tr>

                </table>
                <table style="width: 100%">
                    <tr>
                        <td width="325px" style="vertical-align:top;"><b>D. <u>Hidung</u></b></td>
                        <td width="15px" style="vertical-align:top;">:</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Normal
                                        </label>
                                    </div>

                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4" style="margin-left:-5px;">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Tidak Normal
                                        </label>
                                    </div>

                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4" style="margin-left:-5px;">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Cuping hidung
                                        </label>
                                    </div>

                                </div>

                            </div>


                        </td>
                    </tr>

                </table>

                <div><b>E. <u>MULUT</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Keadaan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kering
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Stomatitis / oral trust
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kotor
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Cyanosis
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Lembab
                                                        </label>
                                                    </div>

                                                </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Reflek isap</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Lemah
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kuat
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Retlek telan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Lemah
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kuat
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Bentuk mulut</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Labioskizis
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Palatoskizis
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Labiopalatoskizis
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <table style="width: 100%">
                    <tr>
                        <td width="325px" style="vertical-align:top;"><b>F. <u>Dada</u></b></td>
                        <td width="15px" style="vertical-align:top;">:</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Simetris
                                        </label>
                                    </div>

                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3" style="margin-left:-3px;">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Asimetris
                                        </label>
                                    </div>

                                </div>
                                <div class="col-xs-7 col-sm-7 col-md-7" style="margin-left:-5px;">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Lain-lain
                                        </label>
                                        <input type="text"
                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 40%"
                                            name="" id="">
                                    </div>

                                </div>

                            </div>


                        </td>
                    </tr>

                </table>

                <div><b>G. <u>PERUT</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Bentuk</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Distensi
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-5 col-sm-5 col-md-5">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kelainan kongenetal
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                                            name="" id="">
                                                    </div>

                                                </div>


                                        </td>

                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Tali pusat </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Layu
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Segar
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kemerahan
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Bau
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Retlek telan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Lemah
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kuat
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Bentuk mulut</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Labioskizis
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Palatoskizis
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-2 col-sm-2 col-md-2">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Labiopalatoskizis
                                                        </label>
                                                    </div>

                                                </div>

                                        </td>

                                    </tr>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>

                <div><b>H. <u>ANOGENETALIA</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Jenis kelamin</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Laki-laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-8">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Perempuan
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kelainan kongenital
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                                            name="" id="">
                                                    </div>

                                                </div>



                                        </td>

                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Anus </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Paten
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-8">


                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kelainan kongenital
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                                            name="" id="">
                                                    </div>

                                                </div>


                                        </td>

                                    </tr>

                                </table>
                            </div>


                        </div>
                    </div>
                </div>

                <div><b>L. <u>EKSTREMITAS</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Atas dan bawah</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Sama
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-8">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tidak sama
                                                        </label>
                                                    </div>


                                                </div>



                                        </td>

                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Bentuk </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Normal
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-8">


                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Kelainan
                                                        </label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 30%"
                                                            name="" id="">
                                                    </div>

                                                </div>


                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. ROM</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-xs-2 col-sm-2 col-md-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Terbatas
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-8">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Bebas
                                                        </label>
                                                    </div>


                                                </div>



                                        </td>

                                    </tr>

                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="judul">SISTEM TUBUH (BODY SYSTEM)</div>
            </div>
        </div>
        <div class="row" style="width:100%; margin-left: 0;border-bottom:1px solid #444;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>A. <u>PERNAFASAN (B1: BREATHING)</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Usaha Nafas</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 80%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Spontan
                                                            </label>
                                                        </div>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Dengan bantuan
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Nasal kanul
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Head box
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                CPAP
                                                            </label>
                                                        </div>


                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Frekuensi nafas </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 55%">
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; "
                                                            name="" id="">x/mnt
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Regular
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ireguler
                                                            </label>
                                                        </div>


                                                    </td>
                                                </tr>


                                            </table>


                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div><b>B. <u> PEMBULUH DARAH (B2 BLEEDING)</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width: 100%">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Bunyi jantung</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 80%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Normal
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                mur-mur
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Lain-lain</label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                                id="">
                                                        </div>

                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Iramajantung</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 50%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Regular
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ireguler
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                value="option1">
                                                            <label class="form-check-label" for="inlineCheckbox1">Su52 tunggal </label>

                                                        </div>

                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. CRT</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 200px">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                < 3 detik
                                                                    </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                > 3 detik
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Akral</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 310px">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Hangat
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Dingin
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Cyanosis
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">e. Nadi</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 648px">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Keras
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lemah
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <label class="form-check-label" for="inlineCheckbox1">Frekuensi</label>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                            id="">

                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">f. Kulit</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ikterik
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Cyanosi
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Pucat
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kemerahan
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Pigmentasi
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Pletore
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Hangat
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">g. Turgor</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 310px">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Baik
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Cukup
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Jelek
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">h. Luka / lesi </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak ada
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ada lokasi
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                                id="">
                                                        </div>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">i. Masalah keperawat</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak ada masalah
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Mobilisasi
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Integritas jaringan
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Infeksi
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row" id="page2" style="margin-left: 0;">
            <div class="col-md-12">
                <div class="judul text-right">
                    <u>RM 04.5A</u>
                    <br>
                    Hal. 3/4
                </div>
            </div>
        </div>


        <div class="row" style="width:100%; margin-left: 0;">
            <table style="width: 100%">
                <tr>
                    <td style="width: 30%; border: 1px solid;">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 70%">
                                    <div class="text-center">
                                        <img src="https://placehold.co/50x50" alt="">
                                    </div>
                                    <p id="judul1">RSU dr. SUYUOI PACIRAN</p>
                                    <p id="judul2">
                                        <span style="font-weight: normal">Jalan Raya Deaudjes Pacizan<br>lelp. (0322) 661412 </span>
                                        <br>Fax (0322) 666 293
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 70%; border: 1px solid;">
                        <div class="row" style="width:100%; margin-left: 0;">
                            <div class="col-xs-6 col-sm-6 col-md-6" style=" padding:10px;">
                                <div class="mt-0">
                                    <table style="width: 100%">
                                        <tr>
                                            <td width="110px">Nama Pasien</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin </td>
                                            <td>: </td>
                                            <td>L/P</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">

                                            </td>
                                        </tr>


                                    </table>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6" style="padding:10px;">
                                <div class="mt-0">
                                    <table style="width: 100%">
                                        <tr>
                                            <td width="70px">No.RM</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tgl Lahir</td>
                                            <td>:</td>
                                            <td>

                                                <input type="date"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px; width: 100%"
                                                    name="" id="">

                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="col-md-12" style="width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div class="judul">ASESMEN KEPERAWATAN PERINATAL</div>
        </div>


        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>C. <u>PERSYARAFAN (B3: BRAIN)</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width:100%;">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Kesadaran</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%" id="nested-style">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Compos mentis
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Somnolen
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Coma
                                                            </label>
                                                        </div>

                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Apatis
                                                            </label>
                                                        </div>

                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Reflek</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Moro
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Palmer graps
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Menggenggam
                                                            </label>
                                                        </div>

                                                    </td>


                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Babinski
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Rooting
                                                            </label>
                                                        </div>


                                                    </td>



                                                </tr>

                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Kejang</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%" id="nested-style">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Ya
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px; "
                                                            name="" id="">dtk/mnt

                                                    </td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Reflek cahaya</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td width="200px">
                                                        <div class="form-check">

                                                            <label class="form-check-label" style="margin-right: 50px;">
                                                                Kanan
                                                            </label>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Reaksi (+)
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="200px">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Reaksi (-)
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td width="200px">
                                                        <div class="form-check">
                                                            <label class="form-check-label" style="margin-right: 70px;">
                                                                Kiri
                                                            </label>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Reaksi (+)
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="200px">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Reaksi (-)
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">e. Pergerakan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td width="200px">
                                                        <div class="form-check">

                                                            <label class="form-check-label" style="margin-right: 70px;">
                                                                Kaki R/L
                                                            </label>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kuat
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="200px">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lemah
                                                            </label>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td width="200px">
                                                        <div class="form-check">
                                                            <label class="form-check-label" style="margin-right: 50px;">
                                                                Tangan R/L
                                                            </label>
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kuat
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="200px">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lemah
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">f. Masalah keperawatan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak ada masalah
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Gangguan perfusi jaringan cerebral
                                                            </label>
                                                        </div>


                                                    </td>


                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Resiko injuri
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kerusakan mobilitas fisik
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lain-lain
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                                id="">
                                                        </div>


                                                    </td>


                                                </tr>

                                            </table>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>D. <u>PERKEMIHAN - ELIMINASI URI ( B4: BLADDER) </u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width:100%;">
                                    <tr>
                                        <td width="310px" style="vertical-align:top;">a. Buang air kecil</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>

                                                    <td width="400px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lancar
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="100px">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Retensi
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Inkontinensia
                                                            </label>
                                                        </div>

                                                    </td>

                                                </tr>

                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Dower Chateter, jumlah
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                                id="">cc
                                                        </div>
                                                    </td>


                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">b. Warna</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td width="100px">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Jernih
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td width="100px">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Keruh
                                                            </label>
                                                        </div>


                                                    </td>
                                                    <td>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Merah
                                                            </label>
                                                        </div>

                                                    </td>


                                                </tr>

                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">c. Frekuensi</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%" id="nested-style">
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width: 70%" name=""
                                                            id="">
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="310px" style="vertical-align:top;">d. Masalah keperawatan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table style="width: 100%">
                                                <tr>

                                                    <td width="200px">
                                                        <div class="form-check">


                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak ada
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Retensi urine
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lain-lain
                                                            </label> <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                                id="">
                                                        </div>
                                                    </td>

                                                </tr>


                                            </table>
                                        </td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>E. <u>PENCERNAAN - ELIMINASI ALVI (B S BOWEL) </u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">
                                <table style="width:100%;">
                                    <tr>
                                        <td style="vertical-align:top;">a. Buang air besar</td>
                                    </tr>
                                    <tr>
                                        <td width="200px">1. Frekuensi</td>
                                        <td>:</td>
                                        <td> <input type="text"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                id="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">2. Konsistensi</td>
                                        <td>:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Cair
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lunak/ampas
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">3. Warna</td>
                                        <td>:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Kuning
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hijau
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="Merah">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Merah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hitam
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">4. Mekoneum</td>
                                        <td>:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    < 24jam
                                                        </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    > 24jam
                                                </label>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="200px" style="vertical-align:top;">b. Abdomen</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tegang
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Kembung/distensi
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Datar
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="200px">c. Peristaltik</td>
                                        <td>:</td>
                                        <td> <input type="text"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                id="">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="200px" style="vertical-align:top;">d. Pembesaran lien</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">e. Pembesaran hepar</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="200px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>

                                    </tr>

                                </table>
                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">f. Minum</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <div class=" form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Oral
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Netek
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                NGT/OGT, pemberian
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                                id="">
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Jenis :
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                ASI0
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                PASI
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>


                                    </tr>
                                </table>
                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">g. Masalah keperawatan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <div class=" form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tidak ada masalah
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Pemenuhan nutrisi kurang
                                                            </label>
                                                        </div>
                                                    </td>


                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Obstipasi
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Diare
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lain - lain
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;" name=""
                                                                id="">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>


                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>F. <u> TULANG - OTOT - INTEGUMENT (B6: BONE)</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table style="width:100%;">
                                    <tr>
                                        <td width="400px" style="vertical-align:top;">a. Kemampuan pergerakan sendi/otot/tulang</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="250px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Bebas
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Terbatas
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                </table>

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">b. Kekuatan otot </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td>
                                            <table width="65%">
                                                <tr>
                                                    <td>
                                                        <div class=" form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Parese
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Hemiplegia :
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kanan
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Kiri
                                                            </label>
                                                        </div>
                                                    </td>


                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Tetraplegi
                                                            </label>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                Lain - lain
                                                            </label>
                                                            <input type="text"
                                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:100px;" name=""
                                                                id="">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>


                                    </tr>
                                </table>

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">c. Oedema </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>


                                    </tr>
                                </table>

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">d. Tulang belakang </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lordosis
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Kiposis
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Skoliosis
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lain - lain
                                                </label>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:100px;" name=""
                                                    id="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;border-bottom:1px solid #444;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>H. <u> SISTEM ENDOKRIN</u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">a. Hipoglikemia</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">b. Hiperglikemia</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                </table>

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">c. Masalah keperawatan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="250px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak ada masalah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hipoglikemia
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Hiperglikemia
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lain - lain
                                                </label>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:100px;" name=""
                                                    id="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>

                                <table style="width:100%;">
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">d. Masalah keperawatan</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak ada
                                                </label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Lain - lain
                                                </label>
                                                <input type="text"
                                                    style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:100px;" name=""
                                                    id="">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="container">
        <div class="row" id="page2" style="margin-left: 0;">
            <div class="col-md-12">
                <div class="judul text-right">
                    <u>RM 04.5A</u>
                    <br>
                    Hal. 4/4
                </div>
            </div>
        </div>
        <div class="row" style="width:100%; margin-left: 0;border-top:1px solid #444;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>I. <u> ORIENTASI
                        </u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table style="width:100%;">
                                    <tr>
                                        <td width="330px" style="vertical-align:top;">a. Orang tua mengerti tentang penyakit anak</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Ya
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Tidak
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">b. Administrasi & pembayaran</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Sudah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Belum
                                                </label>
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td width="200px" style="vertical-align:top;">c. Konsultasi dokter</td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Sudah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Belum
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">d. Jam berkunjung </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Sudah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Belum
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">e. Ruang tunggu </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Sudah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Belum
                                                </label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="200px" style="vertical-align:top;">f. Jam meneteki / menyusui </td>
                                        <td width="15px" style="vertical-align:top;">:</td>
                                        <td width="100px">
                                            <div class=" form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Sudah
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                    Belum
                                                </label>
                                            </div>
                                        </td>

                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;border-bottom:1px solid #444;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col">
                <div><b>J. <u> PENGKAJIAN NYERI (NIPS) </u></b></div>
                <div class="mt-0">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table width="100%" border="1">
                                    <tr>
                                        <th colspan="2" style="text-align:center;">Pengkajian Nyeri</th>
                                        <th style="text-align:center;">Skor</th>
                                    </tr>
                                    <tr>
                                        <td width="100px"><b>Ekspersi Wajah</b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Otot-otot Rileks</td>
                                        <td width="300px">Wajah tenang, ekspresi netral </td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">1 - Meringis</td>
                                        <td width="300px">Otot wajah tegang, alis berkerut, dagu dan rahang tegang (ekspresi
                                            wajah negatif - hidung, mulut dan alis) </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px"><b>Menangis</b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Tidak menangis</td>
                                        <td width="300px">Tenang, Tidak menangis </td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">1 - Mengerang</td>
                                        <td width="300px">Merengek ringan, kadang-kadang </td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">2 - Menangis Keras</td>
                                        <td width="300px">Berteriak kencang, menaik, melengking, tens menerus (catatan: menangis lirih mungkin dinilai jika bayi diintubasi yang dibuktikan
                                            melalui gerakan mulut clan wajah yang jelas) </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px"><b>Pola Pernafasan</b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Bernafas relaks</td>
                                        <td width="300px">Pola bernafas bayi yang normal </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px">1 - Perubahan pola pernafasan</td>
                                        <td width="300px">Tidak teratur, lebih cepat dan biasanya tersedak, nafas tertahan </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px"><b>Lengan</b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Relaks / Terikat</td>
                                        <td width="300px">Tidak ada kekakuan otot, gerakan tangan acak sekali-sekali </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px">1 - Fleksi / Ekstensi</td>
                                        <td width="300px">Tegang, lengan lurus, kaku dan/atau ekstensi cepat ekstensi, fleksi </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px"><b>Kaki</b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Relaks / Terikat</td>
                                        <td width="300px">Tidak ada kekakuan otot, gerakan kaki acak sekali-kali </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px">1 - Fleksi / Ekstensi</td>
                                        <td width="300px">Tegang, kaki lurus, kaku, danlatau ekstensi cepat ekstensi fleksi </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px"><b>Keadaan kesadaran </b></td>
                                        <td width="300px"></td>
                                        <td width="100px"></td>
                                    </tr>
                                    <tr>
                                        <td width="100px">0 - Tidur/terjaga</td>
                                        <td width="300px">Tenang, tidur damai atau gerakan kaki acak yang terjaga </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <td width="100px">1 - Rewel</td>
                                        <td width="300px">Terjaga, gelisah dan meronta-ronta </td>
                                        <td width="100px"></td>
                                    </tr>

                                    <tr>
                                        <table width="100%" style="border-top:1px solid #444;border-left:1px solid #444;border-right:1px solid #444;">
                                            <tr>
                                                <td>Jumlah :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Keterangan :</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>0 Tidak Nyeri</td>
                                                <td>1-2 Nyeri Ringan </td>
                                            </tr>
                                            <tr>
                                                <td>3-4 Nyeri Sedang </td>
                                                <td>>4 Nyeri Hebat </td>
                                            </tr>
                                        </table>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="margin-top: 28px">
                <div class="text-center">

                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            PPJA
                        </div>
                        <br>
                        <span style="border-bottom:1px dotted;">
                            (................................)<br>
                        </span>
                        <span style="border-bottom:1px dotted;margin-left:20px;">

                            Tanda tangan & Nama Terang
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="text-center">
                    Lamongan: <input type="text"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width:50px;">=
                    <input type="text"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width:50px;">-
                    <input type="text"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width:50px;">Jam :
                    <input type="text"
                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px;width:50px;">
                </div>
                <div id="box_ttd" style="margin-left:100px;">
                    <div style="height: 1.5cm;text-align:center;">
                        DPJP
                    </div>
                    <br>
                    <span style="border-bottom:1px dotted;margin-left:160px;">
                        (................................)<br>

                    </span>
                    <span style="border-bottom:1px dotted;margin-left:120px;">

                        Tanda tangan & Nama Terang
                    </span>
                </div>
            </div>
        </div>
        <div class="row mb-5" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 28px">
                <div class="text-center">

                    <div id="box_ttd">
                        <div style="height: 1.5cm;">
                            Pasien/Keluarga
                        </div>
                        <br>
                        <span style="border-bottom:1px dotted;">
                            (................................)<br>
                        </span>
                        <span style="border-bottom:1px dotted;margin-left:20px;">

                            Tanda tangan & Nama Terang
                        </span>
                    </div>
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
