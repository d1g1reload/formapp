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
    <title>Form 049</title>
    <style>
        #bg-blue{
            background:aqua;
            text-align:center;
        }
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

        #judul3 {
            text-align: left;
            margin-top: 10px;
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
        font-size: 12px;
        /* box-sizing: border-box; */
    }

    .container,
    .container-fluid {
        width: 100%;
        padding: 0;
    }

    #page2 {
        margin-top: 600px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Memastikan lebar kolom tetap */
    }

    table td,
    table th {
        /* border: 1px solid #444; */
        padding: 4px; /* Pastikan padding kecil untuk cetakan */
        text-align: center; /* Rata tengah untuk teks */
        vertical-align: middle; /* Rata tengah secara vertikal */
    }

    table td input {
        width: 100%; /* Input akan memenuhi kolom */
        border: none; /* Hilangkan border pada input */
        /* box-sizing: border-box; */
        text-align: center; /* Rata tengah teks dalam input */
    }

    table td:first-child {
        text-align: left; /* Rata kiri untuk kolom pertama */
    }



}

    </style>
</head>

<body style="margin:0;padding:0;">
    <div class="container">
        <div class="col-md-12">
            <div class="judul text-right">
                <u>RM 04.9</u>
                <br>
                Hal. 1/2
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <table style="width: 100%">
                <tr>
                    <td style="width: 40%; ">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 20%; text-align: right">
                                    <img src="https://placehold.co/200x200" alt="" id="logo">
                                </td>
                                <td style="width: 80%">
                                    <div id="judul3">
                                        <span style="font-weight: bold">RUMAH SAKIT UMUM dr. SUYUDI </span><br>
                                        <span style="font-weight: normal">Jalann Raya Deandles Paciran Kab. Lamongan<br>
                                            Telp: (0322) 661412, Fax (0322) 666 293,<br> Hp.: 081330758300</span>
                                        <br>
                                        <span style="font-weight: normal">Email: rsu.suyudi@gmail.com</span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 30%;text-align:center;font-weight:bold;font-size:18px;">
                        <p>LEMBAR OBSERVASI<br>EARLY WARNING SCORE (EWS)</p>
                    </td>
                    <td style="width: 30%; border: 1px solid;text-align:center;">
                        Stiker Pasien
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12"
            style="text-align:left;font-weight:bold;width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div>Pencatatan observasi menggunakan Early Warning Score (EWS) untuk pasien dengan Usia> 18 tahun
            </div>
        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col-last">

                <div class="mt-0 mb-2">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px;">EWS</td>
                                        <td width="60px;">Tanggal</td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="dateonly"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 12px;width:50px;"
                                                name="" id="">
                                        </td>
                                    </tr>

                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px;">
                                            <table>
                                                <tr>
                                                    <td>0</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                    <td>3</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td width="60px">Jam</td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>
                                        <td>
                                            <input type="text" class="timepicker"
                                                style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                name="" id="">
                                        </td>

                                    </tr>

                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Tingkat Kesadaran</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">Sadar</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">V/P/U</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>

                                        </td>

                                    </tr>

                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Tekanan Darah (Sistolik)</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">> 230</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">> 220</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">211</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">201</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">191</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">181</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">171</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">161</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">151</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">141</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">131</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">121</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">111</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">101</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">91</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">81</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">71</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">61</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">51</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px"></td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>

                                        </td>

                                    </tr>

                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Nadi</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">> 140</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">131</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td width="80px">121</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">111</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">101</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">91</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">81</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">71</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">61</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">51</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">41</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="80px">< 40</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px"></td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>

                                        </td>

                                    </tr>

                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Pernafasan</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td width="80px">> 25</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">21 - 24</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">12 - 20</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">9 - 11</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td width="80px">< 8</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Suhu</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">< 39.1°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">38.1°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">37.1°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">36.1°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">35.1°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td width="80px">< 35°</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">SpO2</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">< 96</td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">94 - 95</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:yellow;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td width="80px">92 - 93</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                                <tr>

                                                    <td width="80px">< 91</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:red;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td width="100px">Oksigen</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td width="80px">Ya</td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="background:brown;border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Total Early Warning Score</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Skala Jatuh</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Skala Nyeri</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Intake</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Output</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Diit</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>

                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <table style="width: 100%">
                                    <tr>
                                        <td colspan="2" width="220px">Paraf dan Nama Petugas</td>
                                        <td>
                                            <table>
                                                <tr>

                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
                                                    </td>
                                                    <td>
                                                        <input type="text"
                                                            style="border: hidden; border-bottom: 1px solid; font-size: 14px;width:50px;"
                                                            name="" id="">
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
            <p>Catatan: *) Coret yang tidak perlu V=Voice(Suara) P=Pain(Kesakitan) U=Unresponsive(Kurang memberi respon)</p>
        </div>
    </div>
    <div class="container" id="page2">
        <div class="col-md-12">
            <div class="judul text-right">
                <u>RM 04.9</u>
                <br>
                Hal. 2/2
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <table style="width: 100%">
                <tr>
                    <td style="width: 40%; ">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 20%; text-align: right">
                                    <img src="https://placehold.co/200x200" alt="" id="logo">
                                </td>
                                <td style="width: 80%">
                                    <div id="judul3">
                                        <span style="font-weight: bold">RUMAH SAKIT UMUM dr. SUYUDI </span><br>
                                        <span style="font-weight: normal">Jalann Raya Deandles Paciran Kab. Lamongan<br>
                                            Telp: (0322) 661412, Fax (0322) 666 293,<br> Hp.: 081330758300</span>
                                        <br>
                                        <span style="font-weight: normal">Email: rsu.suyudi@gmail.com</span>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="width: 30%;text-align:center;font-weight:bold;font-size:18px;">
                        <p>LEMBAR OBSERVASI<br>EARLY WARNING SCORE (EWS)</p>
                    </td>
                    <td style="width: 30%; border: 1px solid;text-align:center;">
                        Stiker Pasien
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container">
        <div class="col-md-12"
            style="text-align:left;font-weight:bold;width: 100%; margin-left: 0; border:1px solid; padding:10px;">
            <div>Pencatatan observasi menggunakan Early Warning Score (EWS) untuk pasien dengan Usia> 18 tahun
            </div>
        </div>
        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" id="custom-border-col-last">

                <div class="mt-0 mb-2">
                    <div class="row" style="width:100%; margin-left: 0;">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="mt-0">

                                <table style="width: 100%">
                                    <thead>
                                        <tr style="text-align: center;">
                                            <th width="50px">No.</th>
                                            <th width="200px">NILAI EWS</th>
                                            <th width="200px">FREKUENSI MONITORING</th>
                                            <th width="300px">ASUHAN YANG DIBERIKAN </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background:green;">
                                            <td style="text-align: center;">1</td>
                                            <td style="text-align: center;">0</td>
                                            <td style="text-align: center;">Minimal setiap 12 jam sekali</td>
                                            <td>Lanjutkan observasi/monitoring secara rutin</td>
                                        </tr>
                                        <tr style="background:yellow;">
                                            <td style="text-align: center;">2</td>
                                            <td style="text-align: center;">TOTAL SCORE 1-4</td>
                                            <td style="text-align: center;">Minimal setiap 4-6 jam sekali</td>
                                            <td>Perawat pelaksana menginformasikan kepada ketua
                                                tim/penanggungjawab jaga ruangan tentang siapa
                                                yang melaksanakan assesmen selanjutnya.<br>
                                                Ketua tim/penanggungjawab membuat keputusan :</br>
                                                <ul>
                                                    <li>Meningkatkan frekuensi observasi / Monitoring</li>
                                                    <li>Perbaikan asuhan yang dibutuhkan oleh pasien</li>
                                                </ul>
                                             </td>
                                        </tr>
                                        <tr style="background:brown;">
                                            <td style="text-align: center;">3</td>
                                            <td style="text-align: center;">TOTAL SCORE 5 DAN 6 ATAU 3 DALAM 1(SATU) PARAMETER</td>
                                            <td style="text-align: center;">Peningkatan Frekuensi
                                                Obervasi/Monitoring. Setidaknya Setiap 1 Jam Sekali
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Ketua Tim (Perawat) segera memberikan
                                                         informasi tentang kondisi pasien kepada dokter
                                                         jaga atau DPJP</li>
                                                    <li>Dokter jaga atau DPJP melakukan assesmen  sesuai komperrensinya dan
                                                        menentukan kondisi  pasien apakah dalam penyakit akut</li>
                                                    <li>
                                                        Siapkan fasilitas monitoring yang lebih canggih
                                                    </li>

                                                </ul>
                                             </td>
                                        </tr>
                                        <tr style="background:red;">
                                            <td style="text-align: center;">4</td>
                                            <td style="text-align: center;">TOTAL SCORE 7 ATAU LEBIH</td>
                                            <td style="text-align: center;">
                                                Lanjutkan Observasi/Monitoring Tanda-Tanda Vital
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>Ketua Tim (Perawat) melaporkan kepada Tim
                                                        Code Blue </li>
                                                    <li>Tim Code Blue melakukan assesmen segera </li>
                                                    <li>
                                                        Stabilisasi oleh Tim Code Blue dan pasien dirujuk ke Intermediate Care
                                                    </li>
                                                    <li>
                                                        Untuk pasien di IGD (Prioritas 3, 4 dan 5),
                                                        Perawat penanggungjawab segera kirim pasien
                                                        ke ruang Resusitasi untuk penangan Bantuan
                                                        Hidup Lanjut (BHL)
                                                    </li>
                                                </ul>
                                             </td>
                                        </tr>
                                    </tbody>
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


        $('.dateonly').daterangepicker({
            locale: {
                format: 'DD-MM'
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
