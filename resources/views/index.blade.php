@extends('layouts.main')

@section('content')

<div class="page-section" id="page-two">
  <section id="servicesWrap">
    <div class="container-fluid">
      <div class="row">
        <aside class="col-sm-2 no-mar-pad">
          <nav id="servNav" class="servNav navbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#serv-one"><span>01 VR | AR</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#serv-two""><span>02 Design</span></a>
                  </li>
                  <li class=" nav-item">
                  <a class="nav-link js-scroll-trigger" href="#serv-three"><span>03 Development
                    </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#serv-four"><span>04 Marketing</span></a>
              </li>
            </ul>
          </nav>
        </aside>
        <div class="col-12 col-md-12 col-lg-10 service">
          <div class="service-section" id="serv-one">
            <div class="row">
              <div class="col-sm-6 servImg">
                <img src="resources/images/nature-2.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-sm-6 servText">
                <h2 data-num="01">VR | AR</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the industry's standard dummy text ever since the 1500s.</p>
                <a href="./readMore.html" class="btn viewBtn">
                  Read More <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="service-section" id="serv-two">
            <div class="row">
              <div class="col-sm-6 servImg">
                <img src="images/nature-3.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-sm-6 servText">
                <h2 data-num="02">Design</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the industry's standard dummy text ever since the 1500s.</p>
                <a href="./readMore.html" class="btn viewBtn">
                  Read More <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="service-section" id="serv-three">
            <div class="row">
              <div class="col-sm-6 servImg">
                <img src="images/nature-5.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-sm-6 servText">
                <h2 data-num="03">Development</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="btn viewBtn">
                  Read More <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="service-section" id="serv-four">
            <div class="row">
              <div class="col-sm-6 servImg">
                <img src="images/nature-7.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-sm-6 servText">
                <h2 data-num="04">Marketing</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the industry's standard dummy text ever since the 1500s.</p>
                <a href="#" class="btn viewBtn">
                  Read More <i class="fas fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection