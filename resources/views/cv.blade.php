@extends('plantilla')


@section('content')

    <!-- inicio del cuerpo -->
    <main class="page cv-page">
        <section style="background: linear-gradient(120deg, #7f70f5, #0ea0ff);
        color: #fff;" class="portfolio-block block-intro border-bottom">
            <div class="container">
                <div class="avatar" style="background-image: url(&quot;assets/img/avatars/Yo_cv.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Empowering Innovation: Harnessing Energy and Skills to Overcome Challenges</p><a class="btn btn-outline-primary" role="button" href="#">Contact Me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block cv">
            <div class="container">
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center">Education</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>High School</h3><span class="badge rounded-pill bg-success">UPAM</span>
                            </div>
                            <div class="col-6"><span class="text-muted period">07/2022- 12/2025</span></div>
                        </div>
                        <p>I'm studing Software Enginer in the "Universidad Politecnica de Amozoc"</p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Applied Physics</h3><span class="badge rounded-pill bg-success">INROADS MEXICO</span>
                            </div>
                            <div class="col-md-6"><span class="text-muted period">06/2023 - in curses</span></div>
                        </div>
                        <p>i was studing with inroads for carrera certifications and skills in cloud</p>
                        <a href="https://www.cloudskillsboost.google/public_profiles/4cdb3c83-bdff-4a82-872a-8e6876a1a5aa">My Certifications from Google</a>
                    </div>
                </div>
                <div class="group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="border rounded border-0 skills portfolio-info-card">
                                <h2>Skills</h2>
                                <h3>Python</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="visually-hidden">100%</span></div>
                                </div>
                                <h3>Java</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="visually-hidden">90%</span></div>
                                </div>
                                <h3>Cloud</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="visually-hidden">80%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded border-0 contact-info portfolio-info-card">
                                <h2>Contact Info</h2>
                                <div class="row">
                                    <div class="col-auto"><i class="icon ion-android-calendar icon"></i></div>
                                    <div class="col-9"><span>31/10/2001</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-auto"><i class="icon ion-person icon"></i></div>
                                    <div class="col-9"><span>Alexis Guzaman</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-auto"><i class="icon ion-ios-telephone icon"></i></div>
                                    <div class="col-9"><span>+52 2228038495</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-auto"><i class="icon ion-at icon"></i></div>
                                    <div class="col-9"><span>graalex649@gmail.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbies group">
                    <div class="heading">
                        <h2 class="text-center">Hobbies</h2>
                    </div>
                    <p class="text-center text-muted">In my free time, I have a keen interest in continuous learning, relishing the opportunity to explore new things. I particularly enjoy building various projects, whether it's DIY crafts or small constructions. Taking leisurely walks outdoors is another passion of mine; it allows me to unwind and appreciate the beauty of nature. Spending quality time with my family holds immense value to me, as their company brings joy and fulfillment. Above all, I strive to make the most of every moment, cherishing and maximizing every second that life offers.</p>
                    
                </div>
            </div>
        </section>
    </main>

    <!-- fin del cuerpo -->

@stop