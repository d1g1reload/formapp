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
        table.no-border,
        table.no-border th,
        table.no-border td {
            border: none !important;
        }
    </style>
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="http://formapp.test/" class="btn btn-outline-dark">Kembali</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="media">
                    <img src="https://placehold.co/100x100" class="mr-3" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 text-center font-weight-bold">RUMAH SAKIT ISLAM JOMBANG</h5>
                        <div class="text-center">
                            Jl. Brigjen Kretarto 22 A<br>
                            Telp. ( 0321 ) 860074 – 868972<br>
                            <b>Jombang</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-0">
                    <table class="table no-border">
                        <tr>
                            <td>Nama Pasien</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="nama_pasien" id="nama_pasien">
                            </td>
                        </tr>

                        <tr>
                            <td>No. Rekam Medis</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="no_rekam_medis" id="no_rekam_medis">
                            </td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">PENGKAJIAN PRA ANESTESI / SEDASI</h2>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mt-0">
                    <table class="table no-border">
                        <tr>
                            <td>Nama DPJP</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="nama_dpjp" id="nama_dpjp">
                            </td>
                        </tr>

                        <tr>
                            <td>Diagnosa</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="diagnosa" id="diagnosa">
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-0">
                    <table class="table no-border">
                        <tr>
                            <td>Nama Tindakan Operasi</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="nama_tindakan_operasi"
                                    id="nama_tindakan_operasi">
                            </td>
                        </tr>

                        <tr>
                            <td>Tanggal Operasi</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control datepicker" name="tanggal_operasi"
                                    id="tanggal_operasi">
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mt-0">
                    <p>PEMERIKSAAN TANDA VITAL :</p>
                    <table class="table no-border">
                        <tr>
                            <td>Tekanan Darah</td>
                            <td>:</td>
                            <td>
                                <div class="input-group ">
                                    <input type="text" class="form-control" name="tekanan_darah" id="tekanan_darah">
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
                                    <input type="text" class="form-control" name="nadi" id="nadi">
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
                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran"
                                        value="kesadaran_cm">
                                    <label class="form-check-label" for="inlineRadio1">CM</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran"
                                        value="apatis_cm">
                                    <label class="form-check-label" for="inlineRadio2">Apatis</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kesadaran" id="kesadaran"
                                        value="samnolen_cm">
                                    <label class="form-check-label" for="inlineRadio2">Samnolen</label>
                                </div>


                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mt-5">
                    <table class="table no-border">
                        <tr>
                            <td>Pernafasan</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="pernafasan" id="pernafasan">
                            </td>
                        </tr>
                        <tr>
                            <td>Suhu</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="pernafasan" id="pernafasan">
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

        <div class="row">
            <div class="col-md-12">
                <div class="mt-0">
                    <p>ANAMNESA :</p>
                    <table class="table no-border">
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
                                            <input type="text" class="form-control" name="riwayat_alergi">
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
                                                    <input type="text" class="form-control" name="riwayat_alergi">
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

        <div class="row">
            <div class="col-md-12">
                <p>PEMERIKSAAN FISIK</p>
                <div class="mt-0">
                    <table class="table no-border">
                        <tr>
                            <td>Paru / Jalan Nafas</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="paru_jalan_nafas"
                                    id="paru_jalan_nafas">
                            </td>
                        </tr>

                        <tr>
                            <td>Sirkulasi</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="sirkulasi" id="sirkulasi">
                            </td>
                        </tr>

                        <tr>
                            <td>Saraf</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="saraf" id="saraf">
                            </td>
                        </tr>

                        <tr>
                            <td>Ginjal</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="ginjal" id="ginjal">
                            </td>
                        </tr>

                        <tr>
                            <td>Gastro Intestinal</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="gastro_intestinal"
                                    id="gastro_intestinal">
                            </td>
                        </tr>

                        <tr>
                            <td>Metabolik / Nutrisi</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="metaboli_nutrisi"
                                    id="metaboli_nutrisi">
                            </td>
                        </tr>

                        <tr>
                            <td>Hepar</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="hepar" id="hepar">
                            </td>
                        </tr>

                        <tr>
                            <td>Lain-lain</td>
                            <td>:</td>
                            <td>
                                <input type="text" class="form-control" name="lain_lain" id="diagnosa">
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
