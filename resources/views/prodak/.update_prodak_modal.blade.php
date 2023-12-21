<!-- Modal for updating data -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="post" id="updateProdakForm">

        @csrf
        <input type="hidden" name="up_id" id="up_id">

        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalLabel">Update prodak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="errMsgContainer">

                    </div>

                    <!-- NAMA PROSES -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_nama_proses" class="form-label">Nama Proses</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_nama_proses" id="up_nama_proses" required>
                        </div>
                    </div>
                    <!-- END OF NAMA PROSES -->

                    <!-- KLASIFIKASI PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_klasifikasi_perubahan" class="form-label">Klasifikasi Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_klasifikasi_perubahan" id="up_klasifikasi_perubahan" required> -->
                        </div>
                    </div>
                    <!-- END OF KLASIFIKASI PERUBAHAN -->

                    <!-- PELAKSANAAN 2ND QA -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_pelaksanaan2ndQA" class="form-label">Pelaksanaan 2nd QA</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_pelaksanaan2ndQA" id="up_pelaksanaan2ndQA" required> -->
                        </div>
                    </div>
                    <!-- END OF PELAKSANAAN 2ND QA -->

                    <!-- ITEM PERUBAHAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_item_perubahan" class="form-label">Item Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_item_perubahan" id="up_item_perubahan" required> -->
                        </div>
                    </div>
                    <!-- END OF ITEM PERUBAHAN -->

                    <!-- TANGGAL PRODUKSI SAAT PERUBAHAN -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_tanggal_produksi_saat_perubahan" class="form-label">Tanggal Produksi saat Perubahan</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_tanggal_produksi_saat_perubahan" id="up_tanggal_produksi_saat_perubahan" required> -->
                        </div>
                    </div>
                    <!-- END OF TANGGAL PRODUKSI SAAT PERUBAHAN -->

                    <!-- SHIFT -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_shiftt" class="form-label">Shiftt</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_shiftt" id="up_shiftt" required> -->
                        </div>
                    </div>
                    <!-- END OF SHIFT -->

                    <!-- PART NUMBER FINISH GOOD -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_part_number_finish_good" class="form-label">Part Number Finish Good</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="up_part_number_finish_good" id="up_part_number_finish_good" required>
                        </div>
                    </div>
                    <!-- END OF PART NUMBER FINISH GOOD -->

                    <!-- KUALITAS -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_kualitas" class="form-label">Kualitas</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_kualitas" id="up_kualitas" required> -->
                        </div>
                    </div>
                    <!-- END OF KUALITAS -->

                    <!-- FAKTA NG -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_fakta_ng" class="form-label">Fakta NG</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_fakta_ng" id="up_fakta_ng" required> -->
                        </div>
                    </div>
                    <!-- END OF FAKTA NG -->

                    <!-- PCDT -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_pcdt" class="form-label">PCDT</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_pcdt" id="up_pcdt" required> -->
                        </div>
                    </div>
                    <!-- END OF PCDT -->

                    <!-- TANGGAL PERUBAHAN PCDT -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_tanggal_perubahan_pcdt" class="form-label">Tanggal Perubahan PCDT</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_tanggal_perubahan_pcdt" id="up_tanggal_perubahan_pcdt" required> -->
                        </div>
                    </div>
                    <!-- END OF TANGGAL PERUBAHAN PCDT -->

                    <!-- INSTRUKSI KERJA -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_instruksi_kerja" class="form-label">Instruksi Kerja</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_instruksi_kerja" id="up_instruksi_kerja" required> -->
                        </div>
                    </div>
                    <!-- END OF INSTRUKSI KERJA -->

                    <!-- TANGGAL PERUBAHAN INSTRUKSI KERJA -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_tanggal_perubahan_instruksi_kerja" class="form-label">Tanggal Perubahan Instruksi Kerja</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_tanggal_perubahan_instruksi_kerja" id="up_tanggal_perubahan_instruksi_kerja" required> -->
                        </div>
                    </div>
                    <!-- END OF TANGGAL PERUBAHAN INSTRUKSI KERJA -->

                    <!-- ISIR -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_isir" class="form-label">ISIR</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_isir" id="up_isir" required> -->
                        </div>
                    </div>
                    <!-- END OF ISIR -->

                    <!-- TANGGAL PERUBAHAN ISIR -->
                    <!-- Tambahkan elemen formulir sesuai kebutuhan -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_tanggal_perubahan_isir" class="form-label">Tanggal Perubahan ISIR</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Sesuaikan dengan jenis input yang diinginkan -->
                            <!-- Contoh: <input type="text" class="form-control" name="up_tanggal_perubahan_isir" id="up_tanggal_perubahan_isir" required> -->
                        </div>
                    </div>
                    <!-- END OF TANGGAL PERUBAHAN ISIR -->

                    <!-- PEMAHAMAN -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <label for="up_pemahaman" class="form-label">Pemahaman</label>
                        </div>
                        <div class="col-md-9">
                            <!-- Ganti dengan elemen radio button sesuai kebutuhan -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="up_pemahaman" id="up_pemahaman_paham" value="paham" required>
                                <label class="form-check-label" for="up_pemahaman_paham">Paham</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="up_pemahaman" id="up_pemahaman_kurang_paham" value="kurang paham" required>
                                <div class="form-group">
                                    <label for="up_pemahaman">Pemahaman</label>
                                    <select class="form-control" id="up_pemahaman" name="up_pemahaman">
                                        <option value="paham">Paham</option>
                                        <option value="kurang paham">Kurang Paham</option>
                                        <option value="tidak paham sama sekali">Tidak Paham Sama Sekali</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Add similar input fields for other attributes -->

                            <!-- ... (Rest of the input fields) ... -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary update_prodak">Update</button>
                        </div>
                    </div>
                </div>
    </form>
</div>