<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="icon" />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello, world!</title>
</head>

<body>
    @include('sweetalert::alert')

    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="https://1000marcas.net/wp-content/uploads/2021/05/DENSO-Logo.png" alt="">
            </a>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                <button type="submit" title="Search">
                    <i class="bi bi-search"></i>
                </button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span> </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->
                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span> </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">

                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">

                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">

                                <div>
                                    <h4>David Muldon</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span> </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    @include('sweetalert::alert')
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Sembunyikan kolom yang harus diisi setelah kolom sebelumnya diisi
            $("#addProdakForm input, #addProdakForm select").prop("disabled", true);
            $("#nama_proses").prop("disabled", false);

            // Sembunyikan kolom yang harus diisi setelah kolom sebelumnya diisi
            $("#addProdakForm input:not(#nama_proses), #addProdakForm select").prop("disabled", true);

            // Menangani perubahan pada kolom "Nama Proses"
            $("#nama_proses").on("input", function() {
                if ($(this).val().trim() !== "") {
                    // Aktifkan kolom "Klasifikasi Perubahan" setelah "Nama Proses" diisi
                    $("#addProdakForm input[name='klasifikasi_perubahan']").prop("disabled", false);
                } else {
                    // Jika "Nama Proses" kosong, nonaktifkan kolom "Klasifikasi Perubahan"
                    $("#addProdakForm input[name='klasifikasi_perubahan']").prop("disabled", true);
                }
            });
            // Menangani perubahan pada kolom "Nama Proses"


            // Menangani perubahan pada kolom "Klasifikasi Perubahan"
            $("#addProdakForm input[name='klasifikasi_perubahan']").on("change", function() {
                // Aktifkan kolom "Pelaksanaan 2nd QA" setelah "Klasifikasi Perubahan" dipilih
                $("#addProdakForm input[name='pelaksanaan2ndQA']").prop("disabled", false);
            });

            // Menangani perubahan pada kolom "Pelaksanaan 2nd QA"
            $("#addProdakForm input[name='pelaksanaan2ndQA']").on("change", function() {
                // Aktifkan kolom "Item Perubahan" setelah "Pelaksanaan 2nd QA" dipilih
                $("#addProdakForm input[name='item_perubahan']").prop("disabled", false);
            });

            // Menangani perubahan pada kolom "Item Perubahan"
            $("#item_perubahan").on("input", function() {
                if ($(this).val().trim() !== "") {
                    // Aktifkan kolom "Lembar Instruksi" setelah "Item Perubahan" diisi
                    $("#addProdakForm input[name='no_lembar_instruksi']").prop("disabled", false);
                } else {
                    // Jika "Item Perubahan" kosong, nonaktifkan kolom "Lembar Instruksi"
                    $("#addProdakForm input[name='no_lembar_instruksi']").prop("disabled", true);
                }
            });

            // Menangani perubahan pada kolom "No. Lembar Instruksi"
            $("#addProdakForm input[name='no_lembar_instruksi']").on("input", function() {
                if ($(this).val().trim() !== "") {
                    // Aktifkan kolom "Produksi Saat Perubahan" setelah "No. Lembar Instruksi" diisi
                    $("#addProdakForm input[name='tanggal_produksi_saat_perubahan'], #addProdakForm input[name='shiftt']").prop("disabled", false);
                } else {
                    // Jika "No. Lembar Instruksi" kosong, nonaktifkan kolom "Produksi Saat Perubahan"
                    $("#addProdakForm input[name='tanggal_produksi_saat_perubahan'], #addProdakForm input[name='shiftt']").prop("disabled", true);
                }
            });

            // Menangani perubahan pada kolom "Shift"
            $("#addProdakForm input[name='shiftt']").on("change", function() {
                // Aktifkan kolom "Part Number Finish Good" setelah "Shift" dipilih
                $("#addProdakForm input[name='part_number_finish_good']").prop("disabled", false);
            });

            // Menangani perubahan pada kolom "Part Number Finish Good"
            $("#part_number_finish_good").on("input", function() {
                if ($(this).val().trim() !== "") {
                    // Aktifkan kolom "Kualitas" setelah "Part Number Finish Good" diisi
                    $("#addProdakForm input[name='kualitas']").prop("disabled", false);
                } else {
                    // Jika "Part Number Finish Good" kosong, nonaktifkan kolom "Kualitas"
                    $("#addProdakForm input[name='kualitas']").prop("disabled", true);
                }
            });

            // Menangani perubahan pada kolom "Kualitas"
            $("#addProdakForm input[name='kualitas']").on("change", function() {
                // Aktifkan kolom "Fakta-Fakta NG" setelah "Kualitas" dipilih
                $("#addProdakForm input[name='pcdt']").prop("disabled", false);
            });

            // Menangani perubahan pada kolom "PCDT"
            $("#addProdakForm input[name='pcdt']").on("change", function() {
                if ($(this).val() === "O") {
                    // Aktifkan kolom "Tanggal Perubahan PCDT" jika "PCDT" dipilih sebagai "Revised"
                    $("#tanggal_perubahan_pcdt").prop("disabled", false);
                } else {
                    // Jika "PCDT" dipilih sebagai "Not Revised", nonaktifkan kolom "Tanggal Perubahan PCDT"
                    $("#tanggal_perubahan_pcdt").prop("disabled", true);
                }
            });
            $("#addProdakForm input[name='pcdt']").on("change", function() {
                // Aktifkan kolom "Fakta-Fakta NG" setelah "pcdt" dipilih
                $("#addProdakForm input[name='instruksi_kerja']").prop("disabled", false);
            });

            // Menangani perubahan pada kolom "Instruksi Kerja"
            $("#addProdakForm input[name='instruksi_kerja']").on("change", function() {
                // Aktifkan kolom "Tanggal Perubahan Instruksi Kerja" setelah "Instruksi Kerja" dipilih sebagai "Revised"
                if ($(this).val() === "O") {
                    $("#tanggal_perubahan_instruksi_kerja").prop("disabled", false);
                } else {
                    $("#tanggal_perubahan_instruksi_kerja").prop("disabled", true);
                }
            });
            $("#addProdakForm input[name='instruksi_kerja']").on("change", function() {
                // Aktifkan kolom "Fakta-Fakta NG" setelah "instruksi_kerja" dipilih
                $("#addProdakForm input[name='isir']").prop("disabled", false);
            });
            // Menangani perubahan pada kolom "ISIR"
            $("#addProdakForm input[name='isir']").on("change", function() {
                // Aktifkan kolom "Tanggal Perubahan ISIR" setelah "ISIR" dipilih sebagai "Revised"
                if ($(this).val() === "O") {
                    $("#tanggal_perubahan_isir").prop("disabled", false);
                } else {
                    $("#tanggal_perubahan_isir").prop("disabled", true);
                }
            });
            $("#addProdakForm input[name='isir']").on("change", function() {
                // Aktifkan kolom "Fakta-Fakta NG" setelah "isir" dipilih
                $("#addProdakForm input[name='pemahaman']").prop("disabled", false);
            });
            $("#addProdakForm input[name='pemahaman']").on("change", function() {
                // Aktifkan kolom "Fakta-Fakta NG" setelah "isir" dipilih
                $("#addProdakForm input[name='ulasan']").prop("disabled", false);
            });

            $(document).ready(function() {
                $("#submitButton").prop("disabled", true);
            });

            $("input[name='ulasan']").on("change", function() {
                // Mengaktifkan tombol submit jika ulasan sudah diisi
                $("#submitButton").prop("disabled", false);
            });


        });
        $(document).ready(function() {
            $('#addModal').on('shown.bs.modal', function() {
                // Tetapkan fokus pada elemen dengan ID "nama_proses"
                $('#nama_proses').focus();
            });
            // Merekam perubahan pada elemen radio kualitas
            $('input[name="kualitas"]').change(function() {
                // Mendapatkan nilai yang dipilih
                var kualitasValue = $('input[name="kualitas"]:checked').val();

                // Menangani ketergantungan antara kualitas dan fakta_ng
                if (kualitasValue === 'O') {
                    // Jika kualitas OK, nonaktifkan input fakta_ng
                    $('#fakta_ng').prop('disabled', true);
                } else if (kualitasValue === 'X') {
                    // Jika kualitas NG, aktifkan input fakta_ng
                    $('#fakta_ng').prop('disabled', false);
                }
            });
            $('input[name="pcdt"]').change(function() {
                // Mendapatkan nilai yang dipilih
                var pcdtValue = $('input[name="pcdt"]:checked').val();

                // Menangani ketergantungan antara pcdt dan tanggal_perubahan_pcdt
                if (pcdtValue === 'O') {
                    // Jika pcdt O, aktifkan input tanggal_perubahan_pcdt
                    $('#tanggal_perubahan_pcdt').prop('disabled', false);
                } else if (pcdtValue === 'X') {
                    // Jika pcdt X, nonaktifkan input tanggal_perubahan_pcdt
                    $('#tanggal_perubahan_pcdt').prop('disabled', true);
                }
            });
            $('input[name="instruksi_kerja"]').change(function() {
                // Mendapatkan nilai yang dipilih
                var instruksi_kerjaValue = $('input[name="instruksi_kerja"]:checked').val();

                // Menangani ketergantungan antara instruksi_kerja dan tanggal_perubahan_instruksi_kerja
                if (instruksi_kerjaValue === 'O') {
                    // Jika instruksi_kerja O, aktifkan input tanggal_perubahan_instruksi_kerja
                    $('#tanggal_perubahan_instruksi_kerja').prop('disabled', false);
                } else if (instruksi_kerjaValue === 'X') {
                    // Jika instruksi_kerja X, nonaktifkan input tanggal_perubahan_instruksi_kerja
                    $('#tanggal_perubahan_instruksi_kerja').prop('disabled', true);
                }
            });
            $('input[name="isir"]').change(function() {
                // Mendapatkan nilai yang dipilih
                var isirValue = $('input[name="isir"]:checked').val();

                // Menangani ketergantungan antara isir dan tanggal_perubahan_isir
                if (isirValue === 'O') {
                    // Jika isir O, aktifkan input tanggal_perubahan_isir
                    $('#tanggal_perubahan_isir').prop('disabled', false);
                } else if (isirValue === 'X') {
                    // Jika isir X, nonaktifkan input tanggal_perubahan_isir
                    $('#tanggal_perubahan_isir').prop('disabled', true);
                }
            });
            $('input[name="pemahaman"]').change(function() {
                // Mendapatkan nilai yang dipilih
                var pemahamanValue = $('input[name="pemahaman"]:checked').val();
                if (pemahamanValue === 'paham') {
                    $('#ulasan').prop('disabled', true);
                } else if (pemahamanValue === 'kurangpaham') {
                    $('#ulasan').prop('disabled', false);
                } else {
                    $('#ulasan').prop('disabled', false);
                }
            });
            // Ketika tombol submit ditekan
            $('#submitButton').click(function() {
                // Menghapus atribut disabled dari elemen dengan ID "approvalOption"
                $('#approvalOption').prop('disabled', false);
            });

        });
        $(document).ready(function() {
            $('#addProdakForm').submit(function(e) {
                e.preventDefault();
                let nama_proses = $('#nama_proses').val();
                let klasifikasi_perubahan = $('input[name="klasifikasi_perubahan"]:checked').val();
                let pelaksanaan2ndQA = $('input[name="pelaksanaan2ndQA"]:checked').val();
                let item_perubahan = $('#item_perubahan').val();
                let no_lembar_instruksi = $('#no_lembar_instruksi').val();
                let tanggal_produksi_saat_perubahan = $('#tanggal_produksi_saat_perubahan').val();
                let shiftt = $('input[name="shiftt"]:checked').val();
                let part_number_finish_good = $('#part_number_finish_good').val();
                let kualitas = $('input[name="kualitas"]:checked').val();
                let fakta_ng = $('#fakta_ng').val();
                let pcdt = $('input[name="pcdt"]:checked').val();
                let tanggal_perubahan_pcdt = $('#tanggal_perubahan_pcdt').val();
                let instruksi_kerja = $('input[name="instruksi_kerja"]:checked').val();
                let tanggal_perubahan_instruksi_kerja = $('#tanggal_perubahan_instruksi_kerja').val();
                let isir = $('input[name="isir"]:checked').val();
                let tanggal_perubahan_isir = $('#tanggal_perubahan_isir').val();
                let pemahaman = $('#pemahaman').val();
                let ulasan = $('#ulasan').val();

                $.ajax({
                    url: "{{ route('add.prodak') }}",
                    method: 'post',
                    data: {
                        nama_proses: nama_proses,
                        klasifikasi_perubahan: klasifikasi_perubahan,
                        pelaksanaan2ndQA: pelaksanaan2ndQA,
                        item_perubahan: item_perubahan,
                        no_lembar_instruksi: no_lembar_instruksi,
                        tanggal_produksi_saat_perubahan: tanggal_produksi_saat_perubahan,
                        shiftt: shiftt,
                        part_number_finish_good: part_number_finish_good,
                        kualitas: kualitas,
                        fakta_ng: fakta_ng,
                        pcdt: pcdt,
                        tanggal_perubahan_pcdt: tanggal_perubahan_pcdt,
                        instruksi_kerja: instruksi_kerja,
                        tanggal_perubahan_instruksi_kerja: tanggal_perubahan_instruksi_kerja,
                        isir: isir,
                        tanggal_perubahan_isir: tanggal_perubahan_isir,
                        pemahaman: pemahaman,
                        ulasan: ulasan
                        // Add other data fields as needed
                    },

                    success: function(res) {
                        if (res.status == 'success') {
                            $('#addModal').modal('hide');
                            $('#addProdakForm')[0].reset();
                            $('.table').load(location.href + ' .table');
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: 'Data berhasil ditambahkan',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('prodaks') }}";
                                }
                            });

                        }
                    },
                    error: function(err) {
                        let errors = err.responseJSON.errors;
                        $.each(errors, function(index, value) {
                            $('.errMsgContainer').append('<span class="text-danger">' + value + '</span>' + '<br>');
                        });
                    }

                });
            });

            $(document).on('click', '.delete_prodak', function(e) {
                e.preventDefault();
                let prodak_id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this product!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.prodak') }}",
                            method: 'post',
                            data: {
                                prodak_id: prodak_id
                            },
                            success: function(res) {
                                if (res.status == 'success') {
                                    $('.table').load(location.href + ' .table');
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    );
                                }
                            },
                            error: function(err) {
                                $('.errMsgContainer').html('');
                                let errors = err.responseJSON.errors;
                                $.each(errors, function(index, value) {
                                    $('.errMsgContainer').append('<span class="text-danger">' + value + '</span>' + '<br>');
                                });
                            }
                        });
                    }
                });
            });


            // menampilkan modal update data
            $(document).on('click', '.updateProdakForm', function() {
                let id = $(this).data('id');
                let nama_proses = $(this).data('nama_proses');
                let klasifikasi_perubahan = $(this).data('klasifikasi_perubahan');
                let pelaksanaan2ndQA = $(this).data('pelaksanaan2ndQA');
                let item_perubahan = $(this).data('item_perubahan');
                let no_lembar_instruksi = $(this).data('no_lembar_instruksi');
                let tanggal_produksi_saat_perubahan = $(this).data('tanggal_produksi_saat_perubahan');
                let shiftt = $(this).data('shiftt');
                let part_number_finish_good = $(this).data('part_number_finish_good');
                let kualitas = $(this).data('kualitas');
                let fakta_ng = $(this).data('fakta_ng');
                let pcdt = $(this).data('pcdt');
                let tanggal_perubahan_pcdt = $(this).data('tanggal_perubahan_pcdt');
                let instruksi_kerja = $(this).data('instruksi_kerja');
                let tanggal_perubahan_instruksi_kerja = $(this).data('tanggal_perubahan_instruksi_kerja');
                let isir = $(this).data('isir');
                let tanggal_perubahan_isir = $(this).data('tanggal_perubahan_isir');
                let pemahaman = $(this).data('pemahaman');

                $('#up_id').val(id);
                $('#up_nama_proses').val(nama_proses);
                $('#up_klasifikasi_perubahan').val(klasifikasi_perubahan);
                $('#up_pelaksanaan2ndQA').val(pelaksanaan2ndQA);
                $('#up_pelaksanaan2ndQA').val(pelaksanaan2ndQA);
                $('#up_item_perubahan').val(item_perubahan);
                $('#up_no_lembar_instruksi').val(no_lembar_instruksi);
                $('#up_tanggal_produksi_saat_perubahan').val(tanggal_produksi_saat_perubahan);
                $('#up_shiftt').val(shiftt);
                $('#up_part_number_finish_good').val(part_number_finish_good);
                $('#up_kualitas').val(kualitas);
                $('#up_fakta_ng').val(fakta_ng);
                $('#up_pcdt').val(pcdt);
                $('#up_tanggal_perubahan_pcdt').val(tanggal_perubahan_pcdt);
                $('#up_instruksi_kerja').val(instruksi_kerja);
                $('#up_tanggal_perubahan_instruksi_kerja').val(tanggal_perubahan_instruksi_kerja);
                $('#up_isir').val(isir);
                $('#up_tanggal_perubahan_isir').val(tanggal_perubahan_isir);
                // Set nilai radio button pemahaman
                $('#up_pemahaman').val(pemahaman);
            });

            // update prodak
            $(document).on('click', '.update_prodak', function(e) {
                e.preventDefault();
                let up_id = $('#up_id').val();
                let up_nama_proses = $('#up_nama_proses').val();
                let up_klasifikasi_perubahan = $('input[name="up_klasifikasi_perubahan"]:checked').val();
                let up_pelaksanaan2ndQA = $('input[name="up_pelaksanaan2ndQA"]:checked').val();
                let up_item_perubahan = $('#up_item_perubahan').val();
                let up_no_lembar_instruksi = $('#up_no_lembar_instruksi').val();
                let up_tanggal_produksi_saat_perubahan = $('#up_tanggal_produksi_saat_perubahan').val();
                let up_shiftt = $('#up_shiftt').val();
                let up_part_number_finish_good = $('#up_part_number_finish_good').val();
                let up_kualitas = $('input[name="up_kualitas"]:checked').val();
                let up_fakta_ng = $('#up_fakta_ng').val();
                let up_pcdt = $('input[name="up_pcdt"]:checked').val();
                let up_tanggal_perubahan_pcdt = $('#up_tanggal_perubahan_pcdt').val();
                let up_instruksi_kerja = $('input[name="up_instruksi_kerja"]:checked').val();
                let up_tanggal_perubahan_instruksi_kerja = $('#up_tanggal_perubahan_instruksi_kerja').val();
                let up_isir = $('input[name="up_isir"]:checked').val();
                let up_tanggal_perubahan_isir = $('#up_tanggal_perubahan_isir').val();
                let up_pemahaman = $('input[name="up_pemahaman"]:checked').val();

                $.ajax({
                    url: "{{ route('update.prodak') }}",
                    method: 'post',
                    data: {
                        up_id: up_id,
                        up_nama_proses: up_nama_proses,
                        up_klasifikasi_perubahan: up_klasifikasi_perubahan,
                        up_pelaksanaan2ndQA: up_pelaksanaan2ndQA,
                        up_item_perubahan: up_item_perubahan,
                        up_no_lembar_instruksi: up_no_lembar_instruksi,
                        up_tanggal_produksi_saat_perubahan: up_tanggal_produksi_saat_perubahan,
                        up_shiftt: up_shiftt,
                        up_part_number_finish_good: up_part_number_finish_good,
                        up_kualitas: up_kualitas,
                        up_fakta_ng: up_fakta_ng,
                        up_pcdt: up_pcdt,
                        up_tanggal_perubahan_pcdt: up_tanggal_perubahan_pcdt,
                        up_instruksi_kerja: up_instruksi_kerja,
                        up_tanggal_perubahan_instruksi_kerja: up_tanggal_perubahan_instruksi_kerja,
                        up_isir: up_isir,
                        up_tanggal_perubahan_isir: up_tanggal_perubahan_isir,
                        up_pemahaman: up_pemahaman
                        // Tambahkan data lainnya sesuai dengan kebutuhan
                    },

                    success: function(res) {
                        if (res.status == 'success') {
                            $('#updateModal').modal('hide');
                            $('#updateProdakForm')[0].reset();
                            $('.table').load(location.href + ' .table');
                            Swal.fire('Success!', 'Data berhasil diupdate', 'success');
                        }
                    },
                    error: function(err) {
                        $('.errMsgContainer').html('');
                        let error = err.responseJSON;
                        $.each(error.errors, function(index, value) {
                            $('.errMsgContainer').append('<span class="text-danger">' + value + '</span>' + '<br>');
                        });
                    }
                });
            });


            // delete prodak 

        });
    </script>

    {!! Toastr::message() !!}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->


</body>

</html>