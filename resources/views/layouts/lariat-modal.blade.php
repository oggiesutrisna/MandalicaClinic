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
                        <label for="nohp" class="col-form-label">Active Phone Number</label>
                        <input type="text" name="nohp" class="form-control"
                            placeholder="Phone Number Active and has Whatsapp" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">Date Of Birth</label>
                        <input type="date" name="ttl" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">Gender</label>
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
                        <label for="dateappointment" class="col-form-label">Appointment Date</label>
                        <input type="date" name="dateappointment" class="form-control" id="dateappointment">
                    </div>
                    <div class="mb-3">
                        <label for="jenisappointment" class="col-form-label">Type Of Appointment</label>
                        <select name="jenisappointment" id="jenisappointment" class="form-control">
                            <option value="Swab Antigen">Swab Antigen</option>
                            <option value="Swab PCR">Swab PCR</option>
                            <option value="Praktek Dokter">Praktek Dokter</option>
                            <option value="IV Treatment">IV Treatment</option>
                            <option value="Non-IV Treatment">Non-IV Treatment</option>
                            <option value="COVID-19 Test + Certificates">COVID-19 Test + Certificates</option>
                            <option value="Rabies Vaccine + Yellow Book">Rabies Vaccine + Yellow Book</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="col-form-label">Additional Information (Optional)</label>
                        <textarea class="form-control" name="keterangan" id="keterangan" cols="30" rows="10"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Submit Appointment</button>
            </div>
        </div>
        </form>
    </div>
</div>
