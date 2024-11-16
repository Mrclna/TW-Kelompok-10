<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taste & Write</title>
    <!-- font awesome cdn  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- flickity Cdn  -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <!-- Custom css  -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/phone.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tablet.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
  </head>
  <body>
      @include('templates/header')
    <main>
        @include('templates/navbar')
        @yield('content')
        @include('templates/footer')
    </main>
    
    <!-- flickity script  -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <!-- Custom js script  -->
    <script src="{{ asset('js/index.js') }}"></script>

    <script>
      let imgs = document.querySelectorAll(".gl img");
      let line3 = document.querySelectorAll(".gl-3 img");
      let line1 = document.querySelectorAll(".gl-1 img");

      let imgArr1 = [];
      imgs.forEach((img) => {
        let src = img.getAttribute("src");
        imgArr1.push(src);
      });

      let btnOne = document.querySelector(".pn-1");

      btnOne.onclick = () => {
        let a = 0;
        imgs.forEach((img) => {
          img.setAttribute("src", imgArr1[a]);
          a++;
        });
        line3.forEach((line3) => {
          line3.classList.remove("allheight");
        });
        line1.forEach((line1) => {
          line1.classList.remove("allheight2");
        });

        document.documentElement.scrollTop = 100;
      };

      let imgArr2 = [
        "https://cdn.pixabay.com/photo/2016/07/15/15/55/dachshund-1519374_960_720.jpg",
        "https://cdn.pixabay.com/photo/2016/01/05/17/51/maltese-1123016_960_720.jpg",
        "https://cdn.pixabay.com/photo/2016/10/15/12/01/dog-1742295_960_720.jpg",
        "https://cdn.pixabay.com/photo/2020/08/15/11/06/hamster-5490235_960_720.jpg",
        "https://cdn.pixabay.com/photo/2019/05/27/19/08/puppy-4233378_960_720.jpg",
        "https://cdn.pixabay.com/photo/2021/07/07/14/40/dog-6394502_960_720.jpg",
        "https://cdn.pixabay.com/photo/2016/11/01/23/38/beach-1790049_960_720.jpg",
        "https://cdn.pixabay.com/photo/2018/06/28/14/12/cat-3504008_960_720.jpg",
        "https://cdn.pixabay.com/photo/2015/11/15/20/21/cat-1044750_960_720.jpg",
        "https://cdn.pixabay.com/photo/2019/09/01/21/56/cat-4446094_960_720.jpg",
        "https://cdn.pixabay.com/photo/2020/02/05/06/24/cat-4820202_960_720.jpg",
        "https://cdn.pixabay.com/photo/2021/07/01/19/00/cat-6380095_960_720.jpg",
      ];

      let btnTwo = document.querySelector(".pn-2");

      btnTwo.onclick = () => {
        let b = 0;
        imgs.forEach((img) => {
          img.setAttribute("src", imgArr2[b]);
          b++;
        });

        line3.forEach((line3) => {
          line3.classList.add("allheight");
        });
        line1.forEach((line1) => {
          line1.classList.add("allheight2");
        });

        document.documentElement.scrollTop = 100;
      };
    </script>
    
  </body>
</html>