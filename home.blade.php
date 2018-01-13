@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                    Your Profile
                <div class="panel-heading">
                <a href="#"><i class="pull-right glyphicon glyphicon-edit"></i></a>
                </div>

                <div class="panel-body">
                    <div class="text-center">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jaredfitch/73.jpg" class="img-circle" alt="">
                    </div>
                    <strong>&nbsp; &nbsp; &nbsp; {{ Auth()->user()->name }}</strong>
                    <hr>
                    <div id="component-nav">
                        <p><a href="#"><i class="glyphicon glyphicon-map-marker"></i> Nearby</a></p>
                        <p><a href="#"><i class="glyphicon glyphicon-facetime-video"></i> Videos</a></p>
                        <p><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Marketplace</a></p>
                    </div>
                    <hr>
                    <div id="component-groups">
                        <h5>
                            <strong>Groups</strong>
                            <a href="#"><i class="glyphicon glyphicon-list pull-right"></i></a>
                        </h5>
                            <p><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/iannnnn/24.jpg" alt="Garage Band"> <a href="#"> Garage Band</a></p>
                            <p><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/robertovivancos/24.jpg" alt="Rooh"> <a href="#"> Rooh</a></p>
                            <p><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/iconfinder/24.jpg" alt="Lemon Juice"> <a href="#"> Lemon Juice</a></p>
                            <p><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/24.jpg" alt="Maroon 5"> <a href="#"> Maroon 5</a></p>
                        <p><img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/polovecn/24.jpg" alt="Linkin Park"> <a href="#"> Linkin Park</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">

            {{-- Status Update --}}

            <div class="panel panel-default">
                <div class="panel-heading">Status Update</div>

                <div class="panel-body">
                    <form action="#" role="form">
                        <div class="form-group">
                            <textarea name="status" title="Status" class="form-control" rows="4"></textarea>
                        </div>

                        <input type="submit" value="Post" class="btn btn-primary pull-right">
                        <button class="btn btn-info">Upload Video</button>
                    </form>
                </div>
            </div>


            {{-- News Feeds --}}
            @foreach(range(1, 5) as $feed)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/iconfinder/48.jpg" alt="Lemon Juice">
                            <strong>&nbsp;&nbsp;&nbsp; Lemon Juice</strong>
                        </p>
                        <hr>
                        <p>{{ collect([
                            'Everybody is welcome to the launch party of Zeplin Evo, tomorrow at 9 PM. See you at Hilton Sq',
                            'My friend thinks Siri is a copy of Cortana...haha...RIP humanity',
                            'Launching JAARA 2.0 tomorrow',
                            'My friend thinks Siri is a copy of Cortana...haha...RIP humanity',
                        ])->random() }}</p>
                        <br>
                        <p>
                            <a href="#"> <i class="glyphicon glyphicon-thumbs-up"></i> Like</a>
                            <a class="pull-right" href="#"><small>{{ rand(0, 100) }} Like</small></a>
                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-lg-1 text-center"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jaredfitch/24.jpg" class="img-circle" alt=""></div>
                            <div class="col-lg-11">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
</div>
    +