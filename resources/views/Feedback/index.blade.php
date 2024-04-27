@extends('layouts.app')

@section('content')

<section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4">
          <div class="content px-xl-5">
            <h3>නිතර අසන <strong>ප්රශ්න</strong></h3>
            <p>
                ප්‍රශ්න තියෙනවද? මෙම නිතර අසන ප්‍රශ්න ලැයිස්තුව ගවේෂණය කරන්න. ඔබට තවමත් ඔබ සොයන පිළිතුර සොයාගත නොහැකි නම්, අප අමතන්න අංශය වෙත යන්න.
            </p>
          </div>
        </div>

        <div class="col-lg-8">

          <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <span class="num">1.</span>
                  SignSchool යනු කුමක්ද?
                </button>
              </h3>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    SignSchool යනු ඇමරිකානු සංඥා භාෂාව සඳහා නොමිලේ මාර්ගගත ඉගෙනුම් වේදිකාවකි. SignSchool හි පරමාර්ථය වන්නේ ශ්‍රවණාබාධිත සහ ශ්‍රවණ ප්‍රජාවන් අතර මූලික සන්නිවේදනය පහසු කිරීම සඳහා ශ්‍රවණය කරන පුද්ගලයින්ට ඇමරිකානු සංඥා භාෂාව ඉගෙන ගැනීමට උසස් තත්ත්වයේ මාර්ගගත වේදිකාවක් සැපයීමයි.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <span class="num">2.</span>
                  මට මගේ ජංගම උපාංගයේ හෝ ටැබ්ලටයේ SignSchool සමඟ ඉගෙන ගත හැකිද?
                </button>
              </h3>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    නියත වශයෙන්ම! SignSchool iPhones සහ iPads මත SignSchool හි iOS යෙදුම හරහා සහ Android උපාංග SignSchool හි Google Play යෙදුම හරහා භාවිත කළ හැක!
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <span class="num">3.</span>
                  වීඩියෝ සමහර විට බොඳ වී හෝ පූරණය වීමට යම් කාලයක් ගත වන්නේ ඇයි?
                </button>
              </h3>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    අපගේ වීඩියෝ පූර්ණ HD වලින් රූගත කර ඇති අතර, ඒවා අභිරුචි වීඩියෝ ධාවකයන් මත සත්කාරකත්වය දරයි. ඔබගේ අන්තර්ජාල සම්බන්ධතාවයේ ගුණාත්මක භාවය අනුව, ඔබගේ බැලීමේ අත්දැකීම බලපානු ඇත. අභිරුචි වීඩියෝ වාදකයන්ට බෙදා හැරීමේ වේගය ප්‍රශස්ත කිරීම සඳහා වාදනය වන වීඩියෝවේ විභේදනය ස්වයංක්‍රීයව සීරුමාරු කරන විශේෂිත ඇල්ගොරිතම ඇත. එනම්, ඔබගේ අන්තර්ජාල වේගය මන්දගාමී වන අවස්ථාවකදී ක්‍රීඩකයින් විසින් වීඩියෝවේ විභේදනය ස්වයංක්‍රීයව අඩු කරන අතර එමඟින් වීඩියෝව නොපැහැදිලි වේ. වීඩියෝ පැටවීමේ වේගය ද ඔබගේ අන්තර්ජාල සම්බන්ධතාවයේ වේගයට බලපායි. ඔබට SignSchool පූරණය කිරීමේ හෝ වීඩියෝ බැලීමේ ගැටලුවක් තිබේ නම්, ඔබගේ අන්තර්ජාල සේවා සපයන්නා (ISP) සම්බන්ධ කර ගැනීමට අපි නිර්දේශ කරමු.
                </div>
              </div>
            </div><!-- # Faq item-->

            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                  <span class="num">4.</span>
                  වීඩියෝ ප්ලේයරයේ "විරාමය" බොත්තමක් නොමැති නම් මම වීඩියෝව විරාම කරන්නේ කෙසේද?
                </button>
              </h3>
              <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                <div class="accordion-body">
                    ඔබේ කර්සරය වීඩියෝව මතට ගෙන ගොස් එය විරාම කිරීමට වරක් ක්ලික් කරන්න. නැවත ක්ලික් කිරීමෙන් වීඩියෝව දිගටම කරගෙන යනු ඇත.
                </div>
              </div>
            </div><!-- # Faq item-->

          </div>

        </div>
      </div>

    </div>
  </section>

  <div class="container" style="margin-bottom: 100px;">
    <div class="row">
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h2>ප්රතිපෝෂණ</h2>
            <div class="card mt-3 mb-3">
                @foreach ($latestFeedbacks as $latestFeedback )
                <div class="card p-3 m-2">
                    <h4 class="m-2">{{$latestFeedback->user->name}}</h4>
                    <p class="m-2">{{$latestFeedback->message}}</p>
                </div>
                @endforeach
            </div>
            <form action="{{route('Feedback.Store')}}" method="post">
                @csrf
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
              <div class=" text-center m-3"><button class="buy-btn" type="submit">ප්‍රතිපෝෂණ එක් කරන්න</button></div>
            </form>
        </div>
    </div>
  </div>

@endsection
