@extends('landing.layouts.main')
@section('landingPage')
    <!-- Map Section Begin  -->
    <section class="map map-alt" id="contact">
        <div class="container-fluid nopad-h">
        <div class="col-md-3"></div>
          <div class="col-md-6 nopad-h">
            <div class="footer-form">
              <div class="title section-title text-center wow animated fadeIn">
                <div class="title-icon-container">
                  <div class="title-icon"><i class="pe-7s-key pe-2x pe-va"></i></div>
                </div>
                <h1>Login</h1>
              </div>
              <div id="notification"></div>
              <form role="form" method="post" action="/login">
                @csrf
                <div class="col-md-12 input-container wow animated fadeIn" data-wow-delay="0.2s">
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @endError
                </div>
                <div class="col-md-12 input-container wow animated fadeIn" data-wow-delay="0.2s">
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="col-md-12 button-container wow animated fadeIn" data-wow-delay="0.2s">
                    <button class="submit-btn def-btn">Login</button>
                </div>
              </form>
            </div><!--/.footer-form -->
          </div>
        <div class="col-md-3"></div>
        </div><!--/.container-fluid -->
        </section><!--/.map-alt -->
      <!-- Map Section End  -->
      @if (session()->has('failed'))
        <script>
          alert('email or password is wrong!');
        </script>
      @endif
@endSection