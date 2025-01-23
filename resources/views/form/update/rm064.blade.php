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

    <title>Form 06.4</title>
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
                RM 06.4
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
            <div class="judul">PENGKAJIAN PRA ANESTESI / SEDASI</div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="110px">Nama DPJP</td>
                            <td width="10px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="nama_dpjp" id="nama_dpjp">
                            </td>
                        </tr>

                        <tr>
                            <td>Diagnosa</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="diagnosa" id="diagnosa">
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="190px">Nama Tindakan Operasi</td>
                            <td width="5px">:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="nama_tindakan_operasi" id="nama_tindakan_operasi">
                            </td>
                        </tr>

                        <tr>
                            <td>Tanggal Operasi</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="datepicker"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="tanggal_operasi" id="tanggal_operasi">
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-6 col-sm-6 col-md-6" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <div>PEMERIKSAAN TANDA VITAL :</div>
                    <table style="width: 100%">
                        <tr>
                            <td>Tekanan Darah</td>
                            <td>:</td>
                            <td>
                                <div class="input-group ">
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                        name="tekanan_darah" id="tekanan_darah">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">MmHg</span>
                                    </div>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td>Nadi</td>
                            <td>:</td>
                            <td>
                                <div class="input-group">
                                    <input type="text"
                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 60%"
                                        name="nadi" id="nadi">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">x/menit</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kesadaran</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="kesadaran" id="kesadaran" value="kesadaran_cm">
                                    <label class="form-check-label" for="inlineRadio1">CM</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="kesadaran" id="kesadaran" value="apatis_cm">
                                    <label class="form-check-label" for="inlineRadio2">Apatis</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="kesadaran" id="kesadaran" value="samnolen_cm">
                                    <label class="form-check-label" for="inlineRadio2">Samnolen</label>
                                </div>


                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6" style="border:1px solid; padding:10px;">
                <div class="mt-5">
                    <table style="width: 100%">
                        <tr>
                            <td>Pernafasan</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="pernafasan" id="pernafasan">
                            </td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="pernafasan" id="pernafasan">
                            </td>
                        </tr>
                        <tr>
                            <td>Soporous</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="sopor" id="sopor"
                                        value="option1">
                                    <label class="form-check-label" for="sopor">Sopor</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="coma" id="coma"
                                        value="option2">
                                    <label class="form-check-label" for="coma">Coma</label>
                                </div>

                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div class="mt-0">
                    <p>ANAMNESA :</p>
                    <table style="width: 100%">
                        <tr>
                            <td>Riwayat Alergi</td>
                            <td>:</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="riwayat_alergi_yes_cb" name="riwayat_alergi_yes_cb">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">
                                                Ya,
                                            </label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text"
                                                style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                                name="riwayat_alergi">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2"
                                        id="riwayat_alergi_no_cb" name="riwayat_alergi_no_cb">
                                    <label class="form-check-label">
                                        Tidak
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Riwayat Penyakit Penyerta</td>
                            <td>:</td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Asthma
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Stroke
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label class="form-check-label">
                                                        Lain-lain,
                                                    </label>
                                                </div>
                                                <div class="col-10">
                                                    <input type="text"
                                                        style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                                        name="riwayat_alergi">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                DM
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Jantung
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Hipertensi
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Paru
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
            <div class="col-md-12" style="border:1px solid; padding:10px;">
                <div>PEMERIKSAAN FISIK</div>
                <div class="mt-0">
                    <table style="width: 100%">
                        <tr>
                            <td width="150px;">Paru / Jalan Nafas</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="paru_jalan_nafas" id="paru_jalan_nafas">
                            </td>
                        </tr>

                        <tr>
                            <td>Sirkulasi</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="sirkulasi" id="sirkulasi">
                            </td>
                        </tr>

                        <tr>
                            <td>Saraf</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="saraf" id="saraf">
                            </td>
                        </tr>

                        <tr>
                            <td>Ginjal</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="ginjal" id="ginjal">
                            </td>
                        </tr>

                        <tr>
                            <td>Gastro Intestinal</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="gastro_intestinal" id="gastro_intestinal">
                            </td>
                        </tr>

                        <tr>
                            <td>Metabolik / Nutrisi</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="metaboli_nutrisi" id="metaboli_nutrisi">
                            </td>
                        </tr>

                        <tr>
                            <td>Hepar</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="hepar" id="hepar">
                            </td>
                        </tr>

                        <tr>
                            <td>Lain-lain</td>
                            <td>:</td>
                            <td>
                                <input type="text"
                                    style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                    name="lain_lain" id="diagnosa">
                            </td>
                        </tr>

                        <tr>
                            <td>Klasifikasi ASA</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="klasifikasi_asa_cb" value="2">
                                    <label class="form-check-label" for="klasifikasi_asa_cb">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="klasifikasi_asa_cb" value="3">
                                    <label class="form-check-label" for="klasifikasi_asa_cb">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="klasifikasi_asa_cb" value="4">
                                    <label class="form-check-label" for="klasifikasi_asa_cb">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="klasifikasi_asa_cb" value="5">
                                    <label class="form-check-label" for="klasifikasi_asa_cb">5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="klasifikasi_asa_cb"
                                        id="klasifikasi_asa_cb" value="e">
                                    <label class="form-check-label" for="klasifikasi_asa_cb">E</label>
                                </div>

                            </td>
                        </tr>


                    </table>
                </div>
            </div>

        </div>

        <div class="row" style="width:100%; margin-left: 0;">
            <div class="col-xs-12 col-sm-12 col-md-12" style="border:1px solid; padding:10px;">
                <div>PEMERIKSAAN YANG SUDAH DILAKUKAN </div>
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
                                                Hb
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Ht
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Leukosit
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Trombosit
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                BS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Elektrolit
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                GDA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SGOT
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                SGPT
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain-lain
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                EKG
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Thorax Foto
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                                Lain-lain
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="">INSTRUKSI LAIN :</label>
                                        <textarea name="" style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                            id="" cols="10" rows="5"></textarea>
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
                    <table style="width: 100%">
                        <tr>
                            <td>Assessment</td>
                            <td>:</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Tidak Setuju</label>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td>Rencana Anestesi </td>
                            <td>:</td>
                            <td>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Umum</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Regional</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Nerve Blok</label>
                                </div>

                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="riwayat_alergi_yes_cb" name="riwayat_alergi_yes_cb">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">
                                                Regional,Jenis
                                            </label>
                                        </div>
                                        <div class="col-6">

                                            <input type="text"
                                                style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                                name="riwayat_alergi">
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="riwayat_alergi_yes_cb" name="riwayat_alergi_yes_cb">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">
                                                Puasa
                                            </label>
                                        </div>
                                        <div class="col-6">

                                            <input type="text"
                                                style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                                name="riwayat_alergi">
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="riwayat_alergi_yes_cb" name="riwayat_alergi_yes_cb">
                                    <div class="row">
                                        <div class="col-2">
                                            <label class="form-check-label">
                                                Kebutuhan Darah
                                            </label>
                                        </div>
                                        <div class="col-6">

                                            <input type="text"
                                                style="border: hidden; border-bottom: 1px dotted; font-size: 14px; width: 80%"
                                                name="riwayat_alergi">
                                        </div>
                                    </div>
                                </div>


                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        id="riwayat_alergi_yes_cb" name="riwayat_alergi_yes_cb">
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="form-check-label">
                                                Kebutuhan Ruang ICU
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Ya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Tidak</label>
                                            </div>

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
                <table style="width: 100%">
                    <tr>
                        <td style="width: 60%; padding-left: 15px; text-align: center; vertical-align: text-top">

                        </td>
                        <td style="width: 40%; text-align: center; vertical-align: text-top">
                            Tanggal Pemeriksaan, <input type="text" class="datepicker"
                                style="border: hidden; border-bottom: 1px dotted; font-size: 14px;">
                            <div id="box_ttd">
                                <div style="height: 1.5cm;">
                                    Dokter Anestesi
                                </div>
                                <br>
                                <span style="border-bottom:1px dotted;">
                                    (................................)<br>
                                </span>
                            </div>
                        </td>
                    </tr>
                </table>
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
