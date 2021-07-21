@extends('layouts.app')
@section('main')
    <main class="page cv-page">
        <section class="portfolio-block block-intro border-bottom">
            <div class="container">
                <div class="avatar" style="background: url(&quot;assets/img/avatars/image.jpg&quot;) center / contain;"></div>
                <div class="about-me">
                    <p>Hello! I am Asadbek Fayzullaev.&nbsp;I work as full stack developer. I have passion for responsive and automated web technologies.<br></p><a class="btn btn-outline-primary" role="button" href="#">Hire me</a>
                </div>
            </div>
        </section>
        <section class="portfolio-block cv">
            <div class="container">
                <div class="work-experience group">
                    <div class="heading">
                        <h2 class="text-center">Work Experience</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Backend developer</h3>
                                <h4 class="organization">Lalu Health</h4>
                            </div>
                            <div class="col-md-6"><span class="period">10/2020 - Present</span></div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                </div>
                <div class="education group">
                    <div class="heading">
                        <h2 class="text-center">Education</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>University</h3>
                                <h4 class="organization">INHA University in Tashkent</h4>
                            </div>
                            <div class="col-6"><span class="period">09/2019 - 06/2023</span></div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>High School</h3>
                                <h4 class="organization">NSPI Academic Lyceum</h4>
                            </div>
                            <div class="col-md-6"><span class="period">09/2017 - 06/2019</span></div>
                        </div>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efficitur nunc, vivamus vel accumsan dui.</p>
                    </div>
                </div>
                <div class="group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skills portfolio-info-card">
                                <h2>Skills</h2>
                                <h3>Bootstrap</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                                </div>
                                <h3>PHP</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span class="sr-only">90%</span></div>
                                </div>
                                <h3>Laravel</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="sr-only">70%</span></div>
                                </div>
                                <h3>VUE.js</h3>
                                <div class="progress">
                                    <div class="progress-bar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info portfolio-info-card">
                                <h2>Contact Info</h2>
                                <div class="row">
                                    <div class="col-1"><i class="icon ion-android-calendar icon"></i></div>
                                    <div class="col-9"><span>25/07/2001</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1"><i class="icon ion-person icon"></i></div>
                                    <div class="col-9"><span>Asadbek Fayzullayev</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1"><i class="icon ion-ios-telephone icon"></i></div>
                                    <div class="col-9"><span>+998996755576</span></div>
                                </div>
                                <div class="row">
                                    <div class="col-1"><i class="icon ion-at icon"></i></div>
                                    <div class="col-9"><span>fayzulloevasadbek@gmail.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hobbies group">
                    <div class="heading">
                        <h2 class="text-center">Hobbies</h2>
                    </div>
                    <p class="text-center text-muted">I am found of reading fiction books and play chess on the Internet in my spare times.&nbsp; Moreover, I regularly do physical activities.&nbsp;</p>
                </div>
            </div>
        </section>
    </main>
@endsection
