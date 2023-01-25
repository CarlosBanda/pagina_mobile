@extends('layouts.index')
@section('content')
<section class="our-team mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Tu número {{$numeroTelefono}}</h2>
          <h4>Completa tu pago de {{$montoRecarga}} <br><em>Elige donde quieres recargar:</em></h4>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <div class="naccs">
          <div class="tabs">
            <div class="row">
              <div class="col-lg-12">
                <div class="menu">
                  <div class="active referenceSpot" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{asset('images/oxxo.png')}}" alt="Oxxo">
                    <h4>OXXO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/walmart.png')}}" alt="walmart">
                    <h4>WALMART</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/sams-club.jpg')}}" alt="sams-club">
                    <h4>SAM'S CLUB</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/farmacia-ahorro.png')}}" alt="Farmacia del Ahorro">
                    <h4>FARMACIA DEL AHORRO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                  <div class="referenceSpot">
                    <img src="{{asset('images/tarjeta-debito.jpg')}}" alt="">
                    <h4>TAJETA DE CRÉDITO O DÉBITO</h4>
                    <!-- <span>CEO-FOUNDER</span> -->
                  </div>
                </div>
                <input type="hidden" name="" id="amount" value="30">
                <input type="hidden" name="" id="description" value="Recarga 30 Dias">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button> --}}

    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title p-2" id="exampleModalLabel">Tu número: {{$numeroTelefono}}</h5>
          {{-- <div class="p-4">
            <div>
              <p>1. Visita una de las tiendas afiliadas</p>
              <p>2. Indica en caja que quieres realizar un pago de: OxxoPay</p>
              <p>3. Muestra la referencia de pago o el código de barras para pagar en caja.</p>
              <p>4. Confirma el monto a pagar.</p>
              <p>5. Completa tu pago y recibe tu recarga inmediatamente.</p>
              <p>6. El cajer@ te entregará un comprobante impreso. Consérvalo en caso qué requieras ayuda.</p>
              <p>7. Recibirás un SMS confirmando tu recarga.</p>
            </div>
          </div> --}}
          <button type="button" class="btn-close p-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h5 class="text-center">Total a pagar</h5>
          <h5 class="text-center p-4">Total a pagar: $300.00</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Pagar</button>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <script>
  $('.referenceSpot').click(function(){
    let amount = $('#amount').val()
    let description = $('#description').val()

    $.ajax({
      url: "{{route('references')}}",
      type: 'GET',
      data: {amount, description},
      success: function(response){
        console.log(response)
      }
    })
  })
</script> --}}
@endsection