<div class="modal fade" id="modalExample" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pasiensetor') }}" method="POST" role="form">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Anda"
                            id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">Nomor Handphone Aktif</label>
                        <input type="text" name="nohp" class="form-control"
                            placeholder="Nomor Handphone Aktif yang terpasang di whatsapp" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">Tempat, Tanggal Lahir</label>
                        <input type="date" name="ttl" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option value="Laki - Laki">
                                Laki - Laki
                            </option>
                            <option value="Perempuan">
                                Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="dateappointment" class="col-form-label">Tanggal Appointment</label>
                        <input type="date" name="dateappointment" class="form-control" id="dateappointment">
                    </div>
                    <div class="mb-3">
                        <label for="jenisappointment" class="col-form-label">Jenis Appointment</label>
                        <select name="jenisappointment" id="jenisappointment" class="form-control">
                            <option value="Swab Antigen">Swab Antigen</option>
                            <option value="Swab PCR">Swab PCR</option>
                            <option value="Praktek Dokter">Praktek Dokter</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="col-form-label">Keterangan Tambahan (Optional)</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Submit Appointment</button>
            </div>
        </div>
        </form>
    </div>
</div>
