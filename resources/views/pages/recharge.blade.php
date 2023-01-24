@extends('layouts.index')
@section('content')
<section class="pricing bg-shape mt-0">
<div class="container-fluid bg-secondary booking mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pbRecarga">
        <div class="row gx-5">
            <div class="col-lg-6 pt-5 "><!--py-5-->
                <div class="py-5 mt-7">
                    <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="color-recarga h-90 d-flex flex-column justify-content-center text-center p-4 wow zoomIn mt-8 border-radius" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Realiza tu Recarga Aquí</h1>
                    <form action="{{route('recharges')}}" method="POST" id="formPago">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Ingresa el número" min="10" max="10" style="height: 55px;" id="numeroTelefono" name="numeroTelefono">
                            </div>
                            <!-- <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div> -->
                            <input type="hidden" value="" id="tipoServicioInput" name="tipoServicioInput">
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;" id="tipoServicio">
                                    <option selected disabled value="0">Tipo de Servicio</option>
                                    <option value="MOVIL">Móvil</option>
                                    <option value="MIFI">MIFI</option>
                                </select>
                            </div>

                            <input type="hidden" value="" id="montoRecargaInput" name="montoRecargaInput">
                            <div class="col-12 col-sm-12">
                               <select class="form-select border-0" style="height: 55px;" id="montoRecarga">
                                   <option selected disabled value="0">Monto a Recargar</option>
                                   <option value="Plan $300 (Internet ilimitado*  Llamadas y SMS ilimitados*  HOT SPOT**, 30D)">Plan $300 (Internet ilimitado*  Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                                   <option value="Plan $200 (Internet ilimitado*  Llamadas y SMS ilimitados*, 30D)">Plan $200 (Internet ilimitado*  Llamadas y SMS ilimitados*, 30D)</option>
                                   <option value="Plan $100 (5,000MB, Llamadas y SMS ilimitados*  HOT SPOT**, 30D)">Plan $100 (5,000MB, Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                               </select>
                            </div>
                            <!-- <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                            </div> -->
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="button" id="formRecargar">Recargar</button>
                                {{-- <button class="btn btn-secondary w-100 py-3" type="submit" id="recargar">Recargar</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    $('#numeroTelefono').inputmask("(999) 999-9999");
</script>

<script>
    $('#formRecargar').click(function() {

        var numeroTelefono = $('#numeroTelefono').val();
        var numeroSinParentesis = numeroTelefono.replace(/\((\w+)\)/g, "$1");
        var numeroSinGuion = numeroSinParentesis.replace("-", " ")
        var numeroSinEspacio = numeroSinGuion.replace(/\s+/g, '');

        var tipoServicio = $('#tipoServicio').val();
        var montoRecarga = $('#montoRecarga').val();
        
        if(numeroSinEspacio == ""){
            return Swal.fire({
                icon: 'error',
                title: 'El número de Teléfono es obligatorio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(tipoServicio == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Servicio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(montoRecarga == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Monto a Recargar.',
                showConfirmButton: false,
                timer: 2000
            });
        } else{
            $('#tipoServicioInput').val(tipoServicio);
            $('#montoRecargaInput').val(montoRecarga);

            Swal.fire({
                title: '¿La recarga seleccionada con número '+ numeroSinEspacio +' es correcto?',
                showCancelButton: true,
                confirmButtonText: 'SI, ES CORRECTO',
                }).then((result) => {

                if (result.isConfirmed) {
                    $('#formPago').submit();
                } else{
                    Swal.fire({
                        icon: 'info',
                        title: 'Operación Cancelada',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

</script>

@endsection