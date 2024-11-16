@extends('templates/main')

@section('content')
    <section class="gallery">
        <div class="title-img gallery-title team-title gallery-img">
            <h2>
                Some glimpse of <br />
                <span class="big-font">our gallery</span>
            </h2>
            <img src="{{ asset('img/images/dog2-img.jpg') }}" alt="" />
        </div>

        <div class="gl-imgs">@extends('templates/main')

@section('content')
    <section class="gallery">
        <div class="title-img gallery-title team-title gallery-img">
            <h2>
                Some glimpse of <br />
                <span class="big-font">our gallery</span>
            </h2>
        </div>

        <div class="gl-imgs">
            <div class="gl gl-1">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{ asset('img/baku_jakarta/baku1.jpg') }}" alt="baku" />
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{ asset('img/baku_jakarta/baku2.jpg') }}" alt="baku" />
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{ asset('img/baku_jakarta/baku3.jpg') }}" alt="baku" />
                </button>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
@endsection

            <div class="gl gl-1">
                <img src="https://cdn.pixabay.com/photo/2016/12/13/05/15/puppy-1903313_960_720.jpg" alt="restaurant-1" />
                <img src="https://cdn.pixabay.com/photo/2021/01/09/14/04/australian-shepherd-5902421_960_720.jpg"
                    alt="restaurant-2" />
                <img src="https://cdn.pixabay.com/photo/2019/03/27/15/24/animal-4085255_960_720.jpg" alt="restaurant-3" />
            </div>
            <div class="gl gl-2">
                <img src="https://cdn.pixabay.com/photo/2018/02/17/21/56/cute-3161014_960_720.jpg" alt="dog-1" />
                <img src="https://cdn.pixabay.com/photo/2021/10/13/09/01/corgi-6705821_960_720.jpg" alt="dog-2" />
                <img src="https://cdn.pixabay.com/photo/2019/05/21/05/07/animal-4218265_960_720.jpg" alt="dog-3" />
            </div>
            <div class="gl gl-3">
                <img src="https://cdn.pixabay.com/photo/2017/02/22/03/59/dog-2088424_960_720.jpg" alt="dog-1" />
                <img src="https://cdn.pixabay.com/photo/2015/06/15/23/56/chihuahua-810789_960_720.jpg" alt="dog-2" />
                <img src="https://cdn.pixabay.com/photo/2015/11/16/22/14/cat-1046544_960_720.jpg" alt="dog-3" />
            </div>
            <div class="gl gl-4">
                <img src="https://cdn.pixabay.com/photo/2013/05/17/15/54/cat-111793_960_720.jpg" alt="dog-1" />
                <img src="https://cdn.pixabay.com/photo/2021/10/13/11/50/cat-6706393_960_720.jpg" alt="dog-2" />
                <img class="dog-4" src="https://cdn.pixabay.com/photo/2022/01/18/07/38/cat-6946505_960_720.jpg"
                    alt="dog-3" />
            </div>

            <div class="pagination">
                <div class="pn-1 pn-box">
                    1
                    <span class="bline-1"></span>
                    <span class="bline-2"></span>
                </div>

                <div class="pn-2 pn-box">
                    2
                    <span class="bline-1"></span>
                    <span class="bline-2"></span>
                </div>
            </div>
        </div>
    </section>
@endsection
