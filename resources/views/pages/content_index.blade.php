@extends('layouts.index')
@section('content')


  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <img src="{{asset('images/index.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="{{asset('images/index3.jpg')}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <img src="{{asset('images/index2.jpg')}}" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<section class="pricing bg-shape ">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <div class="header-text">
            <h2>Disfruta la mejor experiencia en <em>internet y telefonía</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#courses">Join Us Now!</a></div>
            </div>
          </div>
        </div>
      </div>     

      <div class="col-lg-4">
          <div class="thumb">
            <img src="{{asset('images/nave-unscreen.gif')}}" alt="" style="width: 50%;">
          </div>
      </div> 
      <div class="col-lg-11" style="text-align: center;">
        <div id="video" style="margin-top: -9.3rem;">
          <div class="thumb">
            <img src="{{asset('images/diviertete-unscreen.gif')}}" alt="" style="width: 9%;">
          </div>
        </div>
      </div>
      <div class="col-lg-11" style="margin-left: 15rem;">
        <div id="video" style="margin-top: -15.3rem;">
          <div class="thumb">
            <img src="{{asset('images/diviertete-unscreen.gif')}}" alt="" style="width: 5%;">
          </div>
        </div>
      </div>
      <div class="col-lg-4" style="text-align: right;">
          <div style="margin-top: 1rem;">
            <img src="{{asset('images/nave-unscreen.gif')}}" alt="" style="width: 37%;">
          </div>
      </div> 
      <div class="col-lg-4" style="text-align: right;">
            <div style="margin-top: 1rem;">
              <img src="{{asset('images/nave-unscreen.gif')}}" alt="" style="width: 37%;">
            </div>
        </div> 
        <div class="col-lg-11" style="text-align: right;">
          <div id="video" style="margin-top: -22.3rem;">
            <div class="thumb">
              <img src="{{asset('images/diviertete-unscreen.gif')}}" alt="" style="width: 50%;">
            </div>
          </div>
        </div>
        <div class="col-lg-12" style="text-align: right;">
            <div style="margin-top: -24rem;">
              <img src="{{asset('images/nave-unscreen.gif')}}" alt="" style="width: 21%;">
            </div>
        </div>
        <div class="col-lg-11" style="text-align: right;">
          <div id="video" style="margin-top: -9.3rem;">
            <div class="thumb">
              <img src="{{asset('images/diviertete-unscreen.gif')}}" alt="" style="width: 9%;">
            </div>
          </div>
        </div> 
      </div>
  </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2 class="mb-3">Los mejores <span>planes</span> que tenemos para ti</h2>
            <h4>Ven Y descubre los mejores <em>planes para ti en los mejores precios.</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="pricing-table text-center feature_item">
                <div class="title">
                  <h5>Basico</h5>
                </div>
                <div class="price">
                  <p>$280<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>1 Mb Subida</li>
                  <li>5 Mb Bajada</li>
                  <li>Instalación GRATIS</li>
                  <li class="resticciones">* aplican restricciones</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="pricing-table featured text-center">
                <div class="title">
                  <h5>Ideal</h5>
                </div>
                <div class="price">
                  <p>$320<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>A2 Mb Subida</li>
                  <li>10 Mb Bajada</li>
                  <li>Instalación GRATIS</li>
                  <li class="resticciones">* aplican restricciones</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>
            
            {{--  <div class="item">
              <div class="pricing-table text-center">
                <div class="title">
                  <h5>Ideal</h5>
                </div>
                <div class="price">
                  <p>$320<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>A2 Mb Subida</li>
                  <li>10 Mb Bajada</li>
                  <li>Instalación GRATIS</li>
                  <li class="resticciones">* aplican restricciones</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>  --}}

            <div class="item">
              <div class="pricing-table text-center feature_item">
                <div class="title">
                  <h5>Plus</h5>
                </div>
                <div class="price">
                  <p>$360<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>5 Mb Subida</li>
                  <li>15 Mb Bajada</li>
                  <li>Instalación GRATIS</li>
                  <li class="resticciones">* aplican restricciones</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>

            {{--  <div class="item">
              <div class="pricing-table featured text-center">
                <div class="title">
                  <h5>Basico</h5>
                </div>
                <div class="price">
                  <p>$19<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>Aplicación Android</li>
                  <li>Pago línea</li>
                  <li>Build & Publish</li>
                  <li>Soporte de por vidat</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="pricing-table text-center">
                <div class="title">
                  <h5>Avanzado</h5>
                </div>
                <div class="price">
                  <p>$99<span>/ Mes</span></p>
                </div>
                <ul class="feature-list">
                  <li>Aplicación Android</li>
                  <li>Pago línea</li>
                  <li>Build & Publish</li>
                  <li>Soporte de por vidat</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>  --}}

            {{--  <div class="item">
              <div class="pricing-table text-center feature_item">
                <div class="title">
                  <h5>30 días</h5>
                </div>
                <div class="price">
                  <p>$0<span>/month</span></p>
                </div>
                <ul class="feature-list">
                  <li>Android App</li>
                  <li>One time payment</li>
                  <li>Build & Publish</li>
                  <li>Life time support</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="pricing-table featured text-center">
                <div class="title">
                  <h5>Basic</h5>
                </div>
                <div class="price">
                  <p>$19<span>/month</span></p>
                </div>
                <ul class="feature-list">
                  <li>Android App</li>
                  <li>One time payment</li>
                  <li>Build & Publish</li>
                  <li>Life time support</li>
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded">Start Now</a>
                </div>
              </div>
            </div>   --}}

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta mb-5">
  </section> 

@endsection