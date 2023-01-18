@extends('layouts.index')
@section('content')
<div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                    <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="color-recarga h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Realiza tu Recarga Aquí</h1>
                    <form action="commerce.html" method="post">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Ingresa el número" min="10" max="10" style="height: 55px;">
                            </div>
                            <!-- <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div> -->
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected disabled>Tipo de Servicio</option>
                                    <option value="1">Móvil</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-12">
                               <select class="form-select border-0" style="height: 55px;">
                                   <option selected disabled>Monto a Recargar</option>
                                   <option value="1">Plan $300 (Internet ilimitado*  Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                                   <option value="2">Plan $200 (Internet ilimitado*  Llamadas y SMS ilimitados*, 30D)</option>
                                   <option value="3">Plan $100 (5,000MB, Llamadas y SMS ilimitados*  HOT SPOT**, 30D)</option>
                               </select>
                            </div>
                            <!-- <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                            </div> -->
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" type="submit">Recargar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection