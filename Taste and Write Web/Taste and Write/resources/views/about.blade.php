@extends('templates/main')

@section('content')
<section id="Mainaboutus">
  <div class="about-all-con">
    <div class="mab-con">
      <div class="aboutitem1 about-1">
        <h3>About us</h3>
        <p>
        Welcome to Taste & Write, your ultimate guide to discovering the best dining experiences. Whether you're searching for a cozy café, a hidden gem, or a five-star restaurant, we curate a diverse list of eateries to suit every palate. Our mission is to help food lovers explore and enjoy culinary delights from every corner of the city.
        </p>
      </div>
    </div>
    <div class="mab-points point-1">
      <div class="mp-img1">
        <img src="{{ asset('img/Logo/CHEF.png') }}" alt="" />
      </div>
      <div class="mp-text">
        <h3>Fancy Restaurant</h3>
        <p>
        We not only offer an extraordinary dining venue but also create an enjoyable experience for everyone. From delicious dishes to a delightful atmosphere, we ensure every customer feels special.
        </p>
      </div>
    </div>
    <div class="mab-points point-2 desktop-point">
      <div class="mp-text">
        <h3>Foods</h3>
        <p>
        We guarantee that the culinary experiences we recommend will meet your expectations. From traditional dishes to modern creations, every place is carefully selected to provide the best satisfaction.
        </p>
      </div>
      <div class="mp-img2">
        <img src="{{ asset('img/Logo/Culinary.png') }}" alt="" />
      </div>
    </div>

    <div class="mab-points mb-point">
      <!--This point for mobile-->
      <div class="mp-text">
        <h3>Foods</h3>
        <p>
          We assure you that the doctors we provide are highly experienced and will not disappoint.
        </p>
      </div>
    </div>

    <div class="mab-points point-3"> 
      <div class="mp-img3">
        <img src="{{ asset('img/Logo/RESTAURANT.png') }}" alt="" />
      </div>
      <div class="mp-text">
        <h3>Good Chef</h3>
        <p>
          We believe that every dish has a story, and Good Chef is where taste meets creativity. With the best quality ingredients and proven expertise, we deliver an extraordinary dining experience.
        </p>
      </div>
    </div>
  </div>
</section>
@endsection