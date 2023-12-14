@extends('plantilla')

@section('content')
    <!-- inicio del cuerpo -->
    <main class="page project-page">
        <section class="portfolio-block project">
            <div class="container">
                <div class="heading">
                    <h2>Object Recognition</h2>
                </div>
                <div class="image" style="background-image: url(&quot;assets/img/nature/Py.png&quot;);"></div>
                <div class="row">
                    <div class="col-12 col-md-6 offset-md-1 info">
                        <h3>Description</h3>
                        <p>This Python project uses OpenCV to detect contours in real-time from a webcam feed. It identifies contours based on their area size, sorts them, calculates centroid coordinates, and labels them by size in the video stream. The resulting output displays the labeled contours in a window while continuously processing the live feed from the webcam. Users can exit the program by pressing the 'q' key.</p>
                    </div>
                    <div class="col-12 col-md-3 offset-md-1 meta">
                        <div class="tags"><span class="meta-heading">Tags</span><a href="#">Python</a><a href="#">objects</a><span class="meta-heading">Date</span><span>20-11-2023</span></div>
                    </div>
                </div>
                <div class="more-projects">
                    <h3 class="text-center">More Projects</h3>
                    <div class="row gallery">
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="assets/img/nature/Gcloud.png"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="assets/img/nature/zumoBot.jpg"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"><img class="img-fluid scale-on-hover" src="assets/img/nature/alura_web.png"></a></div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="item"><a href="#"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- fin del cuerpo -->
@stop
