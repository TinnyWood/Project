@extends('../layout.app')


@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Histori Perubahan Proses dan Perubahan Desain</h1>
    </div>
    {{-- SEARCH BUTTON--}}
    <form class="row g-3 align-items-center mb-3" style="size: 10px" method="POST" action="#">
        <div class="col-6"> {{--Search Line--}}
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default1" style="font-size: 13px;">Search Line</span>
                <select class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default1" style="font-size: 13px;">
                    <option selected>Pilih Line</option>
                    <!-- Tambahkan opsi di sini -->
                    <option value="1">Line 1</option>
                    <option value="2">Line 2</option>
                    <option value="3">Line 3</option>
                    <option value="4">Line 4</option>
                    <option value="5">Line 5</option>
                    <option value="6">Line 6</option>
                    <option value="7">Line 7</option>
                    <option value="8">Line 8</option>
                    <option value="9">Line 9</option>
                    <option value="10">Line 10</option>
                    <option value="11">Line 11</option>
                    <option value="12">Line 12</option>
                    <option value="13">Line 13</option>
                </select>
            </div>
        </div>

        <div class="col-6"></div>
        <div class="col"> {{--Tanggal perubahan--}}
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default2" style="font-size: 13px;">Tanggal Perubahan</span>
                <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default2" style="font-size: 13px;" />
            </div>
        </div>
        <div class="col"> {{--Part Number--}}
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default3" style="font-size: 13px;">Part Number</span>
                <input type="number" min="0" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default3" style="font-size: 13px;" />
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <span class="input-group-text" id="inputGroup-sizing-default4" style="font-size: 13px;">Nama Perubahan</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default4" style="font-size: 13px;" />
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary" title="SEARCH">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>

    <div class="d-flex mb-3 justify-content-end gap-3">
        <a href="" class="btn btn-success d-inline-block mr-2 bi-download" data-bs-toggle="modal" data-bs-target="#export"> Download</a>
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">add</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <h5 class="card-title">REQUEST LIST</h5>

                <div class="datatable-container">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pelaksanaan 2nd QA</th>
                                <th scope="col">Klasifikasi perubahan</th>
                                <th scope="col">No Lembar Instruksi</th>
                                <th scope="col">Item Perubahan</th>
                                <th scope="col">Nama proses</th>
                                <th scope="col">Tanggal Produksi Saat Perubahan</th>
                                <th scope="col">Part Number Finish Good</th>
                                <th scope="col">Kualitas</th>
                                <th scope="col">Fakta NG</th>
                                <th scope="col">PCDT</th>
                                <th scope="col">Tanggal Perubahan PCDT</th>
                                <th scope="col">IK</th>
                                <th scope="col">Tanggal Perubahan IK</th>
                                <th scope="col">ISIR</th>
                                <th scope="col">Tanggal Perubahan ISIR</th>
                                <th scope="col">Ulasan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prodaks as $row=>$prodak)
                            <tr>
                                <th scope="row">{{$row+1}}</th>
                                <td>{{$prodak->pelaksanaan2ndQA}}</td>
                                <td>{{$prodak->klasifikasi_perubahan}}</td>
                                <td>{{$prodak->no_lembar_instruksi}}</td>
                                <td>{{$prodak->item_perubahan}}</td>
                                <td>{{$prodak->nama_proses}}</td>
                                <td>{{$prodak->tanggal_produksi_saat_perubahan}}</td>
                                <td>{{$prodak->part_number_finish_good}}</td>
                                <td>{{$prodak->kualitas}}</td>
                                <td>{{$prodak->fakta_ng}}</td>
                                <td>{{$prodak->pcdt}}</td>
                                <td>{{$prodak->tanggal_perubahan_pcdt}}</td>
                                <td>{{$prodak->instruksi_kerja}}</td>
                                <td>{{$prodak->tanggal_perubahan_instruksi_kerja}}</td>
                                <td>{{$prodak->isir}}</td>
                                <td>{{$prodak->tanggal_perubahan_isir}}</td>
                                <td>{{$prodak->pemahaman}}</td>
                                <td>
                                    <div class="d-flex justify-content-between" style="width: 100px">
                                        <a href="#" class="btn btn-warning btn-sm updateProdakForm" data-bs-toggle="modal" data-bs-target="#updateModal" data-id="{{ $prodak->id }}" data-nama_proses="{{ $prodak->nama_proses }}" data-klasifikasi_perubahan="{{ $prodak->klasifikasi_perubahan }}" data-pelaksanaan2ndQA="{{ $prodak->pelaksanaan2ndQA }}" data-item_perubahan="{{ $prodak->item_perubahan }}" data-no_lembar_instruksi="{{ $prodak->no_lembar_instruksi }}" data-tanggal_produksi_saat_perubahan="{{ $prodak->tanggal_produksi_saat_perubahan }}" data-shift="{{ $prodak->shift }}" data-part_number_finish_good="{{ $prodak->part_number_finish_good }}" data-kualitas="{{ $prodak->kualitas }}" data-fakta_ng="{{ $prodak->fakta_ng }}" data-pcdt="{{ $prodak->pcdt }}" data-tanggal_perubahan_pcdt="{{ $prodak->tanggal_perubahan_pcdt }}" data-instruksi_kerja="{{ $prodak->instruksi_kerja }}" data-tanggal_perubahan_instruksi_kerja="{{ $prodak->tanggal_perubahan_instruksi_kerja }}" data-isir="{{ $prodak->isir }}" data-tanggal_perubahan_isir="{{ $prodak->tanggal_perubahan_isir }}" data-pemahaman="{{ $prodak->pemahaman }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm delete_prodak" data-id="{{ $prodak->id }}"><i class="fas fa-trash"></i> </a>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <form action="" method="post" id="addProdakForm">

            @csrf
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add prodak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="errMsgContainer">

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="nama_proses" class="form-control" style="font-size: 15px; text-align: center">Nama Proses</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="nama_proses" id="nama_proses" autofocus />
                            </div>
                        </div>
                        <!-- END OF NAMA PROSES -->

                        <!-- KLASIFIKASI PERUBAHAN -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="klasifikasi_perubahan" class="form-control" style="font-size: 15px; text-align: center">Klasifikasi Perubahan</label>
                            </div>
                            <div class="col-md-9">
                                <label class="btn btn-outline-primary" style="width: 100%;">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" value="design" required>
                                    Design
                                </label>

                                <label class="btn btn-outline-primary" style="width: 100%;">
                                    <input class="form-check-input" type="radio" name="klasifikasi_perubahan" value="proses" required>
                                    Proses
                                </label>
                            </div>
                        </div>
                        <!-- END OF KLASIFIKASI PERUBAHAN -->

                        <!-- PELAKSANAAN 2ND QA -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="pelaksanaan2ndQA" class="form-control" style="font-size: 15px; text-align: center">Pelaksanaan 2nd QA</label>
                            </div>
                            <div class="col-md-9 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="changesMade" name="pelaksanaan2ndQA" value="ada" />
                                    <label class="form-check-label" for="changesMade">
                                        Ada
                                    </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="newProducts" name="pelaksanaan2ndQA" value="tidak" />
                                    <label class="form-check-label" for="newProducts">
                                        Tidak Ada
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- ITEM PERUBAHAN -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="item_perubahan" class="form-control" style="font-size: 15px; text-align: center">Item Perubahan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="item_perubahan" id="item_perubahan" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            </div>
                        </div>
                        <!-- END OF ITEM PERUBAHAN -->

                        <!-- LEMBAR INSTRUKSI -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="no_lembar_instruksi" class="form-control" style="font-size: 15px; text-align: center">Lembar Instruksi</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="no_lembar_instruksi" id="no_lembar_instruksi" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            </div>
                        </div>
                        <!-- END OF LEMBAR INSTRUKSI -->

                        <!-- PRODUKSI SAAT PERUBAHAN -->
                        <div class="row mb-3">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="tanggal_produksi_saat_perubahan" class="form-control" style="font-size: 15px; text-align: center">Tanggal Produksi saat Perubahan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" id="tanggal_produksi_saat_perubahan" name="tanggal_produksi_saat_perubahan" />
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="shiftt" class="form-control" style="font-size: 15px; text-align: center">Shiftt</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sift_a" name="shiftt" value="sift a" required />
                                            <label class="form-check-label" for="sift_a">Sift A</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sift_b" name="shiftt" value="sift b" />
                                            <label class="form-check-label" for="sift_b">Sift B</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sift_c" name="shiftt" value="sift c" />
                                            <label class="form-check-label" for="sift_c">Sift C</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="non_shiftt" name="shiftt" value="non shiftt" />
                                            <label class="form-check-label" for="non_shiftt">Non Shiftt</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PART NUMBER FINISH GOOD -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="part_number_finish_good" class="form-control" style="font-size: 15px; text-align: center">Part Number Finish Good</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="part_number_finish_good" id="part_number_finish_good" placeholder="Insert Text (Area Text)" style="text-align: center" />
                                <small class="form-text text-muted">Part number pertama yang diproduksi pertama kali saat terjadi perubahan</small>
                            </div>
                        </div>
                        <!-- END OF PART NUMBER -->
                        <!-- KUALITAS -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="kualitas" class="form-control" style="font-size: 15px; text-align: center">Kualitas</label>
                            </div>
                            <div class="col-md-9 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kualitasO" name="kualitas" value="O" />
                                    <label class="form-check-label" for="kualitasO">
                                        OK
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="kualitasX" name="kualitas" value="X" />
                                    <label class="form-check-label" for="kualitasX">
                                        NG
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- END OF KUALITAS -->

                        <!-- FAKTA - FAKTA NG -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="fakta_ng" class="form-control" style="font-size: 15px; text-align: center">Fakta-Fakta NG</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fakta_ng" id="fakta_ng" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            </div>
                        </div>
                        <!-- END OF FAKTA NG -->

                        <!-- PCDT -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="pcdt" class="form-control" style="font-size: 15px; text-align: center">PCDT</label>
                            </div>
                            <div class="col-md-9 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pcdtO" name="pcdt" value="O" />
                                    <label class="form-check-label" for="pcdtO">
                                        Revised
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pcdtNotX" name="pcdt" value="X" />
                                    <label class="form-check-label" for="pcdtNotX">
                                        Not Revised
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label for="tanggal_perubahan_pcdt" class="form-control" style="font-size: 15px; text-align: center">Issued Date</label>
                                </div>
                                <div class="col space-between">
                                    <input class="form-control" type="date" id="tanggal_perubahan_pcdt" name="tanggal_perubahan_pcdt" disabled required />
                                </div>
                            </div>
                        </div>
                        <!-- END OF PCDT -->

                        <!-- INSTRUKSI KERJA -->
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Instruksi Kerja</label>
                            </div>
                            <div class="col-md-3 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="instruksi_O" name="instruksi_kerja" value="O">
                                    <label class="form-check-label" for="instruksi_O">Revised</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="instruksi_X" name="instruksi_kerja" value="X">
                                    <label class="form-check-label" for="instruksi_X">Not Revised</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="date" id="tanggal_perubahan_instruksi_kerja" name="tanggal_perubahan_instruksi_kerja" required />
                            </div>
                        </div>
                        <!-- END OF INSTRUKSI KERJA -->

                        <!-- ISIR -->
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">ISIR</label>
                            </div>
                            <div class="col-md-3 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="isir_O" name="isir" value="O">
                                    <label class="form-check-label" for="isir_O">Revised</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="Isir_X" name="isir" value="X">
                                    <label class="form-check-label" for="Isir_X">Not Revised</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="date" id="tanggal_perubahan_isir" name="tanggal_perubahan_isir" required />
                            </div>
                        </div>
                        <!-- END OF ISIR -->

                        <!-- PEMAHAMAN BEFORE AFTER -->
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Pemahaman</label>
                            </div>
                            <div class="col-md-3 pt-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pemahaman_paham" name="pemahaman" value="paham">
                                    <label class="form-check-label" for="pemahaman_paham">Revised</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pemahaman_kurangpaham" name="pemahaman" value="kurangpaham">
                                    <label class="form-check-label" for="pemahaman_kurangpaham">kurang paham</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="pemahaman_tidak_sama_sekali" name="pemahaman" value="tidak_sama_sekali">
                                    <label class="form-check-label" for="pemahaman_tidak_sama_sekali">Tidak sama sekali</label>
                                </div>
                            </div>
                        </div>

                        <!-- END OF BEFORE AFTER -->

                        <!-- ULASAN -->
                        <div class="row mb-3 mt-2">
                            <div class="col-md-3">
                                <label for="ulasan" class="form-control" style="font-size: 15px; text-align: center">Ulasan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ulasan" id="ulasan" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            </div>
                        </div>
                        <!-- END OF ULASAN -->

                        <!-- HANCHOU -->
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Hanchou</label>
                            </div>
                            <div class="col-md-4">
                                <script>
                                    // Simulasikan proses login
                                    var user = {
                                        name: "Nama Hanchou"
                                    };
                                    localStorage.setItem("user", JSON.stringify(user));

                                    // Isi input dengan nama pengguna yang login saat itu
                                    window.onload = function() {
                                        var loggedInUser = JSON.parse(
                                            localStorage.getItem("user")
                                        );
                                        if (loggedInUser) {
                                            document.getElementById("username").value =
                                                loggedInUser.name;
                                        }
                                    };
                                </script>

                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="username" placeholder="Nama Hanchou" disabled />
                                </div>
                            </div>
                        </div>
                        <!-- END OF HANCHOU -->
                        <!-- TOMBOL SUBMIT -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="submitButton" onclick="openModal('modal2')">Save</button>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal" id="modal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Approval request to</h4>
                                <button type="button" class="close" data-dismiss="modal" onclick="resetModal('addModal')">&times;</button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <p>Choose an option:</p>

                                <!-- Select Option -->
                                <div class="form-group">
                                    <label for="approvalOption">Approval Option</label>
                                    <select class="form-control" id="approvalOption" name="approvalOption">
                                        <option value="approve">Approve</option>
                                        <option value="reject">Reject</option>
                                        <option value="hold">Hold</option>
                                    </select>
                                </div>

                                <!-- Additional content for Modal 2 -->
                                <p>Additional content for Modal 2 goes here.</p>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary add_prodak">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </form>
    </div>


    <script>
        function openModal(modalId) {
            $('#' + modalId).modal('show');
        }

        function resetModal(modalId) {
            $('#' + modalId).modal('show');
        }

        function completeModal() {
            alert('Modals completed!');
            // You can perform additional actions here if needed
        }
    </script>

</main>
<!-- modal update -->
<div class=" modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateProdakForm">

        @csrf
        <input type="hidden" name="up_id" id="up_id">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">update prodak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">

                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_nama_proses" class="form-control" style="font-size: 15px; text-align: center">Nama Proses</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_nama_proses" id="up_nama_proses" autofocus />
                        </div>
                    </div>
                    <!-- END OF NAMA PROSES -->

                    <!-- KLASIFIKASI PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_klasifikasi_perubahan" class="form-label">Klasifikasi Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Ganti dengan elemen radio button sesuai kebutuhan -->
                            <div class="btn-group" role="group" aria-label="Klasifikasi Perubahan" style="width: 100%;">
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="up_klasifikasi_perubahan" value="design" {{ $prodak->klasifikasi_perubahan == 'design' ? 'checked' : '' }} required>
                                    Design
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="radio" name="up_klasifikasi_perubahan" value="proses" {{ $prodak->klasifikasi_perubahan == 'proses' ? 'checked' : '' }} required>
                                    Proses
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- END OF KLASIFIKASI PERUBAHAN -->


                    <!-- PELAKSANAAN 2ND QA -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="pelaksanaan2ndQA" class="form-control" style="font-size: 15px; text-align: center">Pelaksanaan 2nd QA</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Checkbox untuk opsi 'Ada' -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="changesMade" name="pelaksanaan2ndQA_ada" value="ada" {{ $prodak->pelaksanaan2ndQA == 'ada' ? 'checked' : '' }} />
                                <label class="form-check-label" for="changesMade">
                                    Ada
                                </label>
                            </div>

                            <!-- Checkbox untuk opsi 'Tidak Ada' -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="newProducts" name="pelaksanaan2ndQA_tidak" value="tidak" {{ $prodak->pelaksanaan2ndQA == 'tidak' ? 'checked' : '' }} />
                                <label class="form-check-label" for="newProducts">
                                    Tidak Ada
                                </label>
                            </div>
                        </div>

                    </div>

                    <!-- ITEM PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_item_perubahan" class="form-control" style="font-size: 15px; text-align: center">Item Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_item_perubahan" id="up_item_perubahan" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF ITEM PERUBAHAN -->

                    <!-- LEMBAR INSTRUKSI -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_no_lembar_instruksi" class="form-control" style="font-size: 15px; text-align: center">Lembar Instruksi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_no_lembar_instruksi" id="up_no_lembar_instruksi" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF LEMBAR INSTRUKSI -->

                    <!-- PRODUKSI SAAT PERUBAHAN -->
                    <div class="row mb-3">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="up_tanggal_produksi_saat_perubahan" class="form-control" style="font-size: 15px; text-align: center">Tanggal Produksi saat Perubahan</label>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="date" id="up_tanggal_produksi_saat_perubahan" name="up_tanggal_produksi_saat_perubahan" />
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="shiftt" class="form-control" style="font-size: 15px; text-align: center">Shiftt</label>
                                </div>
                                <!-- SHIFT -->
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="sift_a" name="shiftt" value="sift a" {{ $prodak->shift == 'sift a' ? 'checked' : '' }} required />
                                        <label class="form-check-label" for="sift_a">Sift A</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="sift_b" name="shiftt" value="sift b" {{ $prodak->shift == 'sift b' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="sift_b">Sift B</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="sift_c" name="shiftt" value="sift c" {{ $prodak->shift == 'sift c' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="sift_c">Sift C</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="non_shiftt" name="shiftt" value="non shiftt" {{ $prodak->shift == 'non shiftt' ? 'checked' : '' }} />
                                        <label class="form-check-label" for="non_shiftt">Non Shiftt</label>
                                    </div>
                                </div>
                                <!-- END OF SHIFT -->
                            </div>
                        </div>
                    </div>
                    <!-- PART NUMBER FINISH GOOD -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_part_number_finish_good" class="form-control" style="font-size: 15px; text-align: center">Part Number Finish Good</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_part_number_finish_good" id="up_part_number_finish_good" placeholder="Insert Text (Area Text)" style="text-align: center" />
                            <small class="form-text text-muted">Part number pertama yang diproduksi pertama kali saat terjadi perubahan</small>
                        </div>
                    </div>
                    <!-- END OF PART NUMBER -->

                    <!-- KUALITAS -->
                    <!-- KUALITAS -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="kualitas" class="form-control" style="font-size: 15px; text-align: center">Kualitas</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <!-- KUALITAS -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="kualitasO" name="up_kualitas" value="O" {{ $prodak->kualitas == 'O' ? 'checked' : '' }} />
                                <label class="form-check-label" for="kualitasO">OK</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="kualitasX" name="up_kualitas" value="X" {{ $prodak->kualitas == 'X' ? 'checked' : '' }} />
                                <label class="form-check-label" for="kualitasX">NG</label>
                            </div>
                            <!-- END OF KUALITAS -->
                        </div>
                    </div>
                    <!-- END OF KUALITAS -->

                    <!-- FAKTA - FAKTA NG -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_fakta_ng" class="form-control" style="font-size: 15px; text-align: center">Fakta-Fakta NG</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_fakta_ng" id="up_fakta_ng" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF FAKTA NG -->

                    <!-- PCDT -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_pcdt" class="form-control" style="font-size: 15px; text-align: center">PCDT</label>
                        </div>
                        <div class="col-md-9 pt-1">
                            <!-- PCDT -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pcdtO" name="up_pcdt" value="O" {{ $prodak->pcdt == 'O' ? 'checked' : '' }} />
                                <label class="form-check-label" for="pcdtO">Revised</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pcdtNotX" name="up_pcdt" value="X" {{ $prodak->pcdt == 'X' ? 'checked' : '' }} / <label class="form-check-label" for="pcdtNotX">Not Revised</label>
                            </div>
                            <!-- END OF PCDT -->

                            <div class="col-md-3">
                                <label for="up_tanggal_perubahan_pcdt" class="form-control" style="font-size: 15px; text-align: center">Issued Date</label>
                            </div>
                            <div class="col space-between">
                                <input class="form-control" type="date" id="up_tanggal_perubahan_pcdt" name="up_tanggal_perubahan_pcdt" disabled required />
                            </div>
                        </div>
                    </div>
                    <!-- END OF PCDT -->

                    <!-- INSTRUKSI KERJA -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Instruksi Kerja</label>
                        </div>
                        <div class="col-md-3 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="instruksi_O" name="up_instruksi_kerja" value="O" {{ $prodak->instruksi_kerja == 'O' ? 'checked' : '' }} />
                                <label class="form-check-label" for="instruksi_O">Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="instruksi_X" name="up_instruksi_kerja" value="X" {{ $prodak->instruksi_kerja == 'X' ? 'checked' : '' }} />
                                <label class="form-check-label" for="instruksi_X">Not Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="up_tanggal_perubahan_instruksi_kerja" name="up_tanggal_perubahan_instruksi_kerja" required />
                        </div>
                    </div>
                    <!-- END OF INSTRUKSI KERJA -->

                    <!-- ISIR -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">ISIR</label>
                        </div>
                        <div class="col-md-3 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="isir_O" name="up_isir" value="O" {{ $prodak->isir == 'O' ? 'checked' : '' }} />
                                <label class="form-check-label" for="isir_O">Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Isir_X" name="up_isir" value="X" {{ $prodak->isir == 'X' ? 'checked' : '' }} />
                                <label class="form-check-label" for="Isir_X">Not Revised</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="date" id="up_tanggal_perubahan_isir" name="up_tanggal_perubahan_isir" required />
                        </div>
                    </div>
                    <!-- END OF ISIR -->

                    <!-- PEMAHAMAN BEFORE AFTER -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Pemahaman</label>
                        </div>
                        <!-- Pemahaman -->
                        <div class="col-md-3 pt-1">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pemahaman_paham" name="up_pemahaman" value="paham" {{ $prodak->pemahaman == 'paham' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pemahaman_paham">Paham</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pemahaman_kurangpaham" name="up_pemahaman" value="kurang paham" {{ $prodak->pemahaman == 'kurang paham' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pemahaman_kurangpaham">Kurang Paham</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="pemahaman_tidak_sama_sekali" name="up_pemahaman" value="tidak sama sekali" {{ $prodak->pemahaman == 'tidak sama sekali' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pemahaman_tidak_sama_sekali">Tidak Sama Sekali</label>
                            </div>
                        </div>
                        <!-- END OF Pemahaman -->

                    </div>

                    <!-- END OF BEFORE AFTER -->

                    <!-- ULASAN -->
                    <div class="row mb-3 mt-2">
                        <div class="col-md-3">
                            <label for="up_ulasan" class="form-control" style="font-size: 15px; text-align: center">Ulasan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_ulasan" id="up_ulasan" placeholder="Insert Text (Area Text)" style="text-align: center" />
                        </div>
                    </div>
                    <!-- END OF up_ULASAN -->

                    <!-- HANCHOU -->
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Hanchou</label>
                        </div>
                        <div class="col-md-4">
                            <script>
                                // Simulasikan proses login
                                var user = {
                                    name: "Nama Hanchou"
                                };
                                localStorage.setItem("user", JSON.stringify(user));

                                // Isi input dengan nama pengguna yang login saat itu
                                window.onload = function() {
                                    var loggedInUser = JSON.parse(
                                        localStorage.getItem("user")
                                    );
                                    if (loggedInUser) {
                                        document.getElementById("username").value =
                                            loggedInUser.name;
                                    }
                                };
                            </script>

                            <div class="col-md-10">
                                <input type="text" class="form-control" id="username" placeholder="Nama Hanchou" disabled />
                            </div>
                        </div>
                    </div>
                    <!-- END OF HANCHOU -->



                    <!-- TOMBOL SUBMIT -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary update_prodak">Save</button>
                    </div>
                </div>
            </div>
    </form>
</div>
<!-- modal tambah -->


@endsection