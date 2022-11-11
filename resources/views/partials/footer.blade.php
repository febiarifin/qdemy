<footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('template') }}/assets/img/logo.png" alt="">
              <span>{{ config('app.name') }}</span>
            </a>
            <p>{{ $setting->description }}</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach ($menus as $menu)
              <li><i class="bi bi-chevron-right"></i> <a href="#">{{ $menu }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach ($categories as $category)
              <li><i class="bi bi-chevron-right"></i> <a href="#">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Wonosobo <br>
              Jawa Tengah 56353<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 892 3455 1256<br>
              <strong>Email:</strong> help@qdemy.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Qdemy</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer>