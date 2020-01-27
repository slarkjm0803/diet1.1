@extends('masters.master')

@section('content')
<section class="ls s-pt-60 s-pb-20 s-pt-md-75 s-py-lg-100 blog">

    <div class="container" id="show_recipe">
        <h2>{{$diet_image[0]->name}}</h2>
        <div class="row one-recipe">
            <div class="mb-5">
                <img src="{{ $diet_image[0]->image_url }}" alt="" class="recipe-width">
            </div>

            <div class="entry-content">
                <header class="entry-header">
                    <h4 class="blog-title">
                        @lang('app.products')
                    </h4>
                </header>
                @foreach( $diet_ingredients as $diet_ingredient)
                <h6 class="light-color">
                    {{ $diet_ingredient->value}} &nbsp;&nbsp;{{$diet_ingredient->unit}}
                    &nbsp;&nbsp;{{$diet_ingredient->ingredient_name}}
                </h6>
                @endforeach
            </div>
        </div>
        <div class="row">
            @foreach( $diet_recipes as $diet_recipe)
            <article class="post content-padding bordered detailed-recipe">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-6">
                        <div class="item-content">
                            <p class="light-color">
                                {{ $diet_recipe->recipe_description}}
                            </p>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('ExtraJavascript')
<script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
