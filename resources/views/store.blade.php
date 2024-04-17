@extends('layouts.app')

@section('content')
    <div class="top_main">
        <div class="container pb-3">
            <h3>CURRENT SERIES</h3>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}">
                            <h2>{{ $comic['title'] }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center p-2">
            <button class="btn btn-primary">Load More</button>
        </div>
    </div>
    </div>
    <!-- /.top_main -->
    <div class="bottom_main">
        <div class="container p-3">
            <div class="row">
                <div class="icon_nav">
                    <div>
                        <span>icon</span>
                    </div>
                    <div>
                        <span>title</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.bottom_main -->
@endsection





<style scoped>
    .top_main {
        background-color: var(--dc-dark);

        & .jumbotron {
            background-image: url(../assets/img/jumbotron.jpg);
            background-size: cover;
            height: 18rem;
        }

        & h3 {
            display: inline-block;
            color: var(--dc-light);
            background-color: var(--dc-primary);
            padding: 1rem 2rem;
            margin: -2rem -0.5rem 1.5rem;
        }
    }

    .bottom_main {
        background-color: var(--dc-primary);
        color: var(--dc-light);

        & .icon_nav {
            width: calc((100% / 5) - 2rem);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin: 1rem;
            cursor: pointer;
        }

    }

    .card {
        color: var(--dc-light);
    }

    .card img {
        width: 100%;
        aspect-ratio: 1;
        object-fit: cover;
        object-position: top;
    }
</style>
