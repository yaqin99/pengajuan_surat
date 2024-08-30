<section id="contact" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>Kritik dan Saran</h2>
        <p class="separator">Silahkan Berikan Kritik dan Saran Anda tentang Pesona Pamaroh</p>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-4">

          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Jl. Campaka - Rubaru<br>Sumber Bindung, Pamoroh, Kec. Kadur, Kabupaten Pamekasan, Jawa Timur 69355</p>
            </div>

            <div class="email">
              <i class="fa fa-envelope"></i>
              <p>pamaroh@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+62 82332382024</p>
            </div>
          </div>

          

        </div>

        <div class="col-lg-5 col-md-8">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="/addKritik" method="POST" class="php-email-form">
              @csrf
              {{-- <div class="form-group">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div> --}}
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="topik" id="subject" placeholder="Topik" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="saran" rows="5" placeholder="Kritik dan Saran" required></textarea>
              </div>
              <div class="my-3">
                
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
