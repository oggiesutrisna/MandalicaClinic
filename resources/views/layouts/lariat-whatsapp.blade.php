<section class="position-relative py-4 py-xl-5">
    <div class="container position-relative">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Kesehatan Anda dimulai disini</h2>
                <p class="w-lg-50">Buat Appointment lewat whatsapp atau email kami.</p><a
                    class="btn btn-primary" type="button" href="https://wa.me/6282298298911"
                    style="border-color: var(--bs-red);background: var(--bs-red);">Whatsapp Sekarang</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-8 col-xl-6 col-xxl-6">
                <div>
                    <form action="{{ route('contacts.store') }}" class="p-3 p-xl-4" method="post">
                        <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                                 name="nama" placeholder="Name"></div>
                        <div class="mb-3"><input class="form-control" type="text" id="email-1"
                                                 name="nohp" placeholder="Nomor Telepon"></div>
                        <div class="mb-3"><input class="form-control" type="text" id="email-2"
                                                 name="subjek" placeholder="Subject"></div>
                        <div class="mb-3">
                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="Keluhan Anda"></textarea>
                        </div>
                        <div><button class="btn btn-danger d-block w-100" type="submit">Send Messages</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
