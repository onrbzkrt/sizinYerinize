<!DOCTYPE html>
<html lang="en-US" dir="ltr">

@extends('header')
@section('title')
    Anasayfa
@endsection


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">

    <section id="home">
        <div class="container">
            <div class="row align-items-center g-2">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{ asset('assets/img/gallery/hero-header.gif') }}" alt="hero-header" /></div>
                <div class="col-md-7 col-lg-6 py-6 text-md-start text-center">
{{--                    <h6 class="fs-0 text-uppercase fw-bold text-600">Top Business App</h6>--}}
                    <h1 class="fw-bold fs-4 fs-lg-6 fs-xxl-7 text-primary"> {{ Lang::get('home.foryou') }}<br />{{ Lang::get('home.foryou2') }}</h1>
                    <p class="mb-5 fs-1 fw-medium">{{ Lang::get('home.allthing') }} <br class="d-none d-xl-block" />{{ Lang::get('home.foryou2') }}.</p>
{{--                    <a class="btn hover-top btn-collab" href="#!">--}}
{{--                        <i class="fas fa-download me-2"></i> DOWNLOAD</a>--}}
                    <a class="btn hover-top btn-collab-outline text-gradient ms-2" href="#!">
                        <i class="fas fa-play text-danger me-md-2 me-0"></i> {{ Lang::get('home.howisitwork') }}</a>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

        <div class="container">
            <div class="row flex-center mt-5">
                <div class="col-lg-6">
                    <h4 class="fw-bold">{{ Lang::get('home.subsus') }}</h4>
                    <p class="fs-1">{{ Lang::get('home.subsus2') }}</p>
                </div>
                <div class="col-lg-6 d-flex justify-content-lg-end mb-4">
                    <form class="row row row-cols-lg-auto align-items-center">
                        <div class="col-8 col-sm-9">
                            <label class="visually-hidden" for="colFormLabel">Email</label>
                            <div class="input-group">
                                <input class="form-control" id="colFormLabel" type="email" placeholder="{{ Lang::get('home.enterMail') }}" />
                            </div>
                        </div>
                        <div class="col-4 col-sm-3 text-end">
                            <button class="btn btn-collab" type="submit">{{ Lang::get("home.subscribe") }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->



</body>

</html>