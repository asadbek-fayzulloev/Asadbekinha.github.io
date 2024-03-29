@extends('layouts.app')
@section('main')
<main class="page lanidng-page">
    <section class="portfolio-block block-intro">
        <div class="container">
            <div class="avatar" style="background: url(&quot;assets/img/avatars/image.jpg&quot;) center / cover;"></div>
            <div class="about-me">
                <p>Hello! I am Asadbek Fayzullaev.&nbsp;I work as full stack developer. I have passion for responsive and automated web technologies.</p><a class="btn btn-outline-primary" role="button" href="#">Hire me</a>
            </div>
        </div>
    </section>
    <section class="portfolio-block photography">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/image5.jpg"></a></div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/nature/image2.jpg"></a></div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"><img class="img-fluid image" src="assets/img/tech/image4.jpg"></a></div>
            </div>
        </div>
    </section>
    <section class="portfolio-block call-to-action border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center content">
                <h3>Like what you see?</h3><button class="btn btn-outline-primary btn-lg" type="button">Hire me</button>
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
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Web Design</h3>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Bot</h3>
                            <p class="card-text" style="width: 245px;">I develop AI bot for<br></p>
                            <p class="card-text" style="width: 245px;margin-bottom: 5px;">&nbsp;-Telegram<br></p>
                            <p class="card-text" style="width: 245px;margin-bottom: 5px;">- Gmail</p>
                            <p class="card-text" style="width: 245px;">other services using API</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">Web platform</h3>
                            <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efr nunc, vivamus vel accumsan dui. Quisque ac dolor cursus, volutpat nisl vel, porttitor eros.</p>
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
@endsection
    @stack('brain')
</body>

</html>
