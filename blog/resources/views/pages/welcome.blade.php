@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website build with Laravel. Please read my popular post!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div> <!-- end of header .row -->

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt deserunt, molestias sequi praesentium soluta nemo atque earum quod sapiente ipsum? Architecto tenetur libero, possimus modi ipsum laudantium quis? Nesciunt, earum?</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt deserunt, molestias sequi praesentium soluta nemo atque earum quod sapiente ipsum? Architecto tenetur libero, possimus modi ipsum laudantium quis? Nesciunt, earum?</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt deserunt, molestias sequi praesentium soluta nemo atque earum quod sapiente ipsum? Architecto tenetur libero, possimus modi ipsum laudantium quis? Nesciunt, earum?</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt deserunt, molestias sequi praesentium soluta nemo atque earum quod sapiente ipsum? Architecto tenetur libero, possimus modi ipsum laudantium quis? Nesciunt, earum?</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection