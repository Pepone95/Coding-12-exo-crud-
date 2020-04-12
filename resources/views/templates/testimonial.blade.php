<!--==========================
  Testimonials Section
  ============================-->
<section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">{{$titres[2]->titre}}</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">{{$titres[2]->description}}</p>
        </div>
      </div>
      
@foreach ($testimonials as $testi)
    

      <div class="row">
        <div class="col-md-3">
          <div class="profile mb-5">
            <div class="pic"><img src="{{$testi->img_profil}}" alt=""></div>
            <h4>{{$testi->name}}</h4>
            <span> {{$testi->description}} </span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b>{{$testi->commentaire}}<small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>
      @endforeach

      <!-- {{-- <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> {{Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. }}<small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="img/client-2.jpg" alt=""></div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
        </div>
      </div>

    </div> --}} -->
  </section>