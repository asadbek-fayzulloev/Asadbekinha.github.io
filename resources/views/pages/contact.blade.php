@extends('layouts.app')
@section('main')
    <main class="page contact-page">
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>Contact me</h2>
                </div>
                <form>
                    <div class="form-group"><label for="name">Your Name</label><input class="form-control item" type="text" id="name"></div>
                    <div class="form-group"><label for="subject">Subject</label><input class="form-control item" type="text" id="subject"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                    <div class="form-group"><label for="message">Message</label><textarea class="form-control item" id="message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit">Submit Form</button></div>
                </form>
            </div>
        </section>
    </main>
@endsection
