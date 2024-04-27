@extends('layouts.app')

@section('content')


<section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>සංඥා පාසල වෙත සාදරයෙන් පිළිගනිමු</h2>
          <p>ශ්‍රී ලංකා සංඥා භාෂාව ඉගෙන ගන්න</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{route('register')}}" class="btn-get-started">ආරම්භ කරන්න</a>
            <a href="" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>වීඩියෝව නරඹන්න</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="" class="stretched-link">ශබ්දකෝෂය</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="" class="stretched-link">දවසේ සංඥා භාෂාව</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="" class="stretched-link">පන්ති කාමරය</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="" class="stretched-link">තවත් හදාරන්න</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>

  <main id="main">
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>අපි ගැන</h2>
            <p>අපේ කතාව</p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
              <p>මිතුරන් ASL ඉගෙනීම සඳහා පරිශීලක-හිතකාමී මාර්ගගත වේදිකාවක් ලෙස SignSchool සොයා ගැනීමට එකතු විය. වීඩියෝ පාඩම් සහ අන්තර්ක්‍රියාකාරී අභ්‍යාසවල මොඩියුලර් විෂය මාලාවක් භාවිතා කරමින්, බිහිරි සහ ශ්‍රවණය අතර එදිනෙදා සන්නිවේදන ප්‍රවේශ්‍යතාව වැඩිදියුණු කිරීම සඳහා ශ්‍රවණ ප්‍රජාව තුළ ASL ඉගෙනීම ප්‍රවර්ධනය කිරීම SignSchool අරමුණු කරයි.</p>
            </div>
            <div class="col-lg-6">
              <div class="content ps-0 ps-lg-5">
                <p class="fst-italic">
                    තරිඳු, නිපුන සහ ප්‍රසාද් මුලින්ම මුණගැසුණු විට ඔවුන් අතර ක්ෂණික මිත්‍රත්වයක් ඇති විය. කෙසේ වෙතත්, කොලින් බිහිරි සහ ඇමරිකානු සංඥා භාෂාව භාවිතා කරන නිසා, තිදෙනාට ලිඛිත පණිවිඩ හරහා සන්නිවේදනය කිරීමට සිදු විය. ලිඛිත සන්නිවේදනයේ පුද්ගල නොවන සහ අකාර්යක්ෂම ස්වභාවය මෙන්ම ASL මාර්ගගතව ඉගෙනීමේ දුෂ්කරතාවය ගැන කලකිරී,
                </p>
                <div class="position-relative mt-4">
                  <img src="{{asset('assets/img/about-2.jpg')}}" class="img-fluid rounded-4" alt="">
                  <a href="" class="glightbox play-btn"></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>

      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>අමතන්න</h2>
            <p>SignSchool | Conatct Us</p>
          </div>

          <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">

              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>ස්ථානය:</h4>
                    <p>2 වන පටුමග, මාලබේ, කොළඹ, ශ්‍රී ලංකාව.</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>විද්යුත් තැපෑල:</h4>
                    <p>SignSchool@help.com</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>අමතන්න:</h4>
                    <p>+94 77 123 1234</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>විවෘත වේලාවන්:</h4>
                    <p>සඳුදා - සෙනසුරාදා: 11AM - 23PM</p>
                  </div>
                </div><!-- End Info Item -->
              </div>

            </div>

            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="ඔයාගේ නම" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="ඔබේ විද්යුත් තැපැල් ලිපිනය" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="විෂය" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="7" placeholder="පණිවුඩය" required></textarea>
                </div>
                <div class="text-center"><button type="submit">පණිවුඩය යවන්න</button></div>
              </form>
            </div>

          </div>

        </div>
      </section>
  </main>

@endsection
