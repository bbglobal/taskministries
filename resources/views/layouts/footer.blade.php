  <footer class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-12 col-lg-3">
                  <a href="{{ route('home') }}">
                      <img src="{{ url('assets/images/logos/logo.png') }}" alt="Site Logo" max-width="100%">
                  </a>
              </div>
              <div class="col-12 col-md-12 col-lg-3">
                  <h5>Pages</h5>
                  <div>
                      <div>
                          <a href="{{ route('home') }}">Home</a>
                      </div>
                      <div>
                          <a href="{{ route('about') }}">About Us</a>
                      </div>
                      <div>
                          <a href="{{ route('fltc') }}">FLTC</a>
                      </div>
                      <div>
                          <a href="{{ route('apostolichub') }}">Apostolic Hub</a>
                      </div>
                      <div class="ministry">
                          <input type="checkbox" id="fCheck" style="display: none;">
                          <label for="fCheck">
                              <a id="ministry">Ministry
                                  <i class="fa fa-chevron-down"></i>
                              </a>
                          </label>
                          <ul class="fdorpdown">
                              <li>
                                  <a href="{{ route('lecturesspeakers') }}">Speaker-Teacher</a>
                              </li>
                              <li>
                                  <a href="{{ route('ministry') }}">Author</a>
                              </li>
                              <li>
                                  <a href="{{ route('conference') }}">Designs Of Excelence</a>
                              </li>
                          </ul>
                      </div>
                      <div>
                          <a href="{{ route('kingdominspiration') }}">Kingdom Inspirations</a>
                      </div>
                      <div>
                          <a href="{{ route('contact') }}">Contact Us</a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-3">
                  <h5>Follow</h5>
                  <div>
                      <div>
                          <a href="mailto:taskministries@yahoo.com">
                              <i class="fa fa-google"></i> Gmail
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <i class="fa fa-facebook"></i> Facebook
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <i class="fa fa-twitter"></i>
                              Twitter
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <i class="fa fa-youtube-play"></i>
                              Youtube
                          </a>
                      </div>
                      <div>
                          <a href="#">
                              <i class="fa fa-instagram"></i>
                              Instagram
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-12 col-lg-3">
                  <h5>Contact Us</h5>
                  <div>
                      <div>
                          <a href="mailto: taskministries@yahoo.com"> taskministries@yahoo.com</a>
                      </div>
                      <div>
                          <a href="tel:3175147713">(317) 514-7713</a>
                      </div>
                  </div>
              </div>
              <hr class="my-3">
              <div class="d-flex align-items-center justify-content-between">
                  <div class="copyritghts">
                      &copy; All Rights Reserved 2023
                  </div>
                  <div class="copyritghts">
                      Design &amp; developed by <a href="https://brandboosters.us/" target="_blank" rel="nocode">Brand
                          Boosters Global</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- jQuery -->
  <script src="{{ url('assets/vendor/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ url('assets/vendor/bootstrap.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Moment.js -->
  <script src="{{ url('assets/vendor/moment.min.js') }}"></script>

  <!-- FullCalendar -->
  <script src="{{ url('assets/vendor/fullcalendar/fullcalendar.min.js') }}"></script>
  <script>
      $('.faded').slick({
          dots: true,
          infinite: true,
          speed: 1500,
          fade: true,
          cssEase: 'linear',
          autoplay: true,
          autoplaySpeed: 5000,
          pauseOnHover: true,
          arrows: false,
          adaptiveHeight: true
      });
      $('.testimonial').slick({
          autoplay: true,
          autoplaySpeed: 5000,
          cssEase: 'linear',
          dots: true,
          adaptiveHeight: true
      });

      $(document).ready(function() {
          $('#check').change(function() {
              if ($(this).is(':checked')) {
                  $('body, html').css('overflow', 'hidden');
              } else {
                  $('body, html').css('overflow', 'visible');
              }
          });
      });
  </script>
  </body>

  </html>
