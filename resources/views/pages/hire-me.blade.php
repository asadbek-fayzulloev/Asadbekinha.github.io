@extends('layouts.app')
@section('main')
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Hire Me</h2>
                </div>
                <form>
                    <div class="form-group"><label for="subject">Subject</label><select class="form-control" id="subject">
                            <option value="" selected="">Choose Subject</option>
                            <option value="1">Subject 1</option>
                            <option value="2">Subject 2</option>
                            <option value="3">Subject 3</option>
                        </select></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control" type="email" id="email"></div>
                    <div class="form-group"><label for="message">Message</label><textarea class="form-control" id="message"></textarea></div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6"><label for="hire-date">Date</label><input class="form-control" id="hire-date" type="date"></div>
                            <div class="col-md-6 button"><button class="btn btn-primary btn-block" type="submit">Hire Me</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
 @endsection
