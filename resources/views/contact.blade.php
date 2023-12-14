@extends('plantilla')

@section('content')
    <!-- inicio del cuerpo -->

    <main class="page contact-page">
        <section style="background: linear-gradient(120deg, #7f70f5, #0ea0ff);
        color: #fff;" class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>Contact me</h2>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger mt-3 ">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>

                            @endforeach

                        </ul>

                    </div>
                
                @endif



                <form class="shadow-lg" data-bs-theme="light" method="post" action = "{{route('submit.form')}}" >
                    @csrf
                    <div class="mb-3"><label class="form-label" for="name">Your Name</label><input class="form-control item" type="name" name="name" id="name"></div>
                    <div class="mb-3"><label class="form-label" for="subject">Subject</label><input class="form-control item" type="text" name="Subject" id="subject"></div>
                    <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control item" type="email" name="email" id="email"></div>
                    <div class="mb-3"><label class="form-label" for="message">Message</label><textarea class="form-control item" name="message" id="message"></textarea></div>
                    <div class="mb-3 mt-4">
                        <button class="btn btn-primary btn-lg d-block w-100" type="submit">Submit Form</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@stop