@extends('plantilla')


@section('content')
    <main class="page lanidng-page">
        <section style="background: linear-gradient(120deg, #7f70f5, #0ea0ff);
        color: #fff;" class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background-image: url(&quot;assets/img/avatars/Yo_cv.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Hi world! I am Alexis Guzman. I am a Software Enginer and developer with Cloud .</p><a class="btn btn-outline-primary" role="button" href="{{ asset('contact')}}">Contact Me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/Gcloud.png"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/Gcloud_NW.png"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/zumoBot.jpg"></a></div>
                </div>
            </div>
        </section>
        <section class="portfolio-block call-to-action border-bottom">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center content">
                    <h3>Like what you see?</h3><button class="btn btn-outline-primary btn-lg" type="button"  href="{{ asset('contact')}}">Contact me</button>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>Special Skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-edit"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">English</h3>
                                <p class="card-text">I can speak, write and listening english, i have certificate from Oxford in English with level B1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-android-cloud-done"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Cloud</h3>
                                <p class="card-text">i have experience making services from google cloud with clusters, kubernets , serveless, virtuals machines, groups,&nbsp;&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-social-github"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Colaboration</h3>
                                <p class="card-text">Experienced in Git version control and GitHub collaboration, adept at managing code repositories and facilitating seamless team workflows.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="portfolio-block website gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <h3>Website Project</h3>
                    <p>I worked with diferents tecnologis in my websites, HTML5, CSS, JavaScript implementations with others lenguages.</p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="portfolio-laptop-mockup">
                        <div class="screen">
                            <div class="screen-content" style="background-image:url(&quot;assets/img/tech/image6.png&quot;);"></div>
                        </div>
                        <div class="keyboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
