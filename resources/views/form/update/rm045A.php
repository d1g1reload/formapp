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
                <div><b>B. <u>RIWAVAT KELAHIRAN</u></b></div>
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