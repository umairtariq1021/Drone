@extends('layouts.main')

@section('content')

<div class="parent-container-fluid">
    <div class="container-fluid " style="display: none">
        <div class="user-welcome-message">
            <h3>Good afternoon,</h3>
            <p>Access the largest library of royalty-free images on the web, with 182,800 new images added every day.</p>
            <p>
                <button class="btn btn-danger">See pricing</button>
            </p>
        </div>

        <div id="top-user-images">
            <div class="row">
                <div class="col top-user-image-outer-container">
                    <div class="top-user-image-inner-container">
                        <img src="{{ asset('images/1.jpeg') }}" alt="">
                        <img src="{{ asset('images/thumbnails/dark.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col top-user-image-outer-container">
                    <div class="top-user-image-inner-container">
                        <img src="{{ asset('images/2.jpeg') }}" alt="">
                        <img src="{{ asset('images/thumbnails/1.jpeg') }}" alt="">

                    </div>
                </div>
                <div class="col top-user-image-outer-container">
                    <div class="top-user-image-inner-container">
                        <img src="{{ asset('images/3.jpeg') }}" alt="">
                        <img src="{{ asset('images/thumbnails/2.jpeg') }}" alt="">

                    </div>
                </div>
                <div class="col top-user-image-outer-container">
                    <div class="top-user-image-inner-container">
                        <img src="{{ asset('images/4.jpeg') }}" alt="">
                        <img src="{{ asset('images/thumbnails/3.jpeg') }}" alt="">

                    </div>
                </div>
                <div class="col top-user-image-outer-container">
                    <div class="top-user-image-inner-container">
                        <img src="{{ asset('images/5.jpeg') }}" alt="">
                        <img src="{{ asset('images/thumbnails/4.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="curated-collections">
            <div class="row">
                <h3 class="curated-collections-heading">
                    Curated collections
                </h3>
            </div>
            <div class="row curated-collections-image-outside-container">
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>People Power</p>
                        <img src="{{ asset('images/curated-collections/1.jpeg') }}" alt="">
                    </div>

                </div>
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>October Fresh</p>
                        <img src="{{ asset('images/curated-collections/2.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>Green</p>
                        <img src="{{ asset('images/curated-collections/3.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>Video Games Vector</p>
                        <img src="{{ asset('images/curated-collections/4.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>Sci-Fi Vectors</p>
                        <img src="{{ asset('images/curated-collections/5.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 curated-collections-image-inside-container">
                    <div>
                        <p>Graphic Vectors</p>
                        <img src="{{ asset('images/curated-collections/6.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="popular-searches">
                <div class="row">
                    <h3 class="popular-searches-heading">
                        Popular searches
                    </h3>
                </div>
                <div class="row popular-searches-image-outside-container">
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Halloween Images</p>
                            <img src="{{ asset('images/popular-searches/1.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Sugar skulls</p>
                            <img src="{{ asset('images/popular-searches/2.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Cartoon pumpkins</p>
                            <img src="{{ asset('images/popular-searches/3.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Gender symbols</p>
                            <img src="{{ asset('images/popular-searches/4.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Futuristic fonts</p>
                            <img src="{{ asset('images/popular-searches/5.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 popular-searches-image-inside-container">
                        <div>
                            <p>Unicorn drawings</p>
                            <img src="{{ asset('images/popular-searches/6.jpeg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div id="login-form" class="login-sign-up-modal">
        <div class="login-sign-up-modal-header">
            <p class="float-right login-close">Close</p>
            <div class="clearfix"></div>
            <h1 class="float-left">Log in</h1>
            <div class="clearfix"></div>
        </div>
        <div class="login-sign-up-modal-body">
            <div class="form-group login-fields">
                <input type="text" class="login-sign-up-email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="login-sign-up-password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="login-sign-up-submit" value="Log in">
            </div>
            <div class="form-group">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
        <div class="login-sign-up-modal-footer">
            <p>Don't have a free account yet?</p>
            <div class="form-group">
                <input type="submit" class="login-sign-up-create-account" value="Create your account">
            </div>
        </div>
    </div>

    <div id="signup-form" class="login-sign-up-modal">
    <div class="row">

        <div class="col-md-6 left-col">
            <h1>Access exclusive features with a free account</h1>
            <p><span class="icon fa fa-save"></span> Save and sort your favorite assets with Collections</p>
            <p><span class="icon fa fa-upload"></span>Share Collections with anyone, anywhere</p>
            <p><span class="icon fa fa-download"></span>Try before you purchase with downloadable comps</p>
            <p><span class="icon fa fa-eye"></span>Easily keep track of your download and browsing history</p>
        </div>

        <div class="col-md-6">
            <div class="">
                <div class="login-sign-up-modal-header">
                    <p class="float-right register-close">Close</p>
                    <div class="clearfix"></div>
                    <h1 class="float-left">Sign up</h1>
                    <div class="clearfix"></div>
                </div>
                <div class="login-sign-up-modal-body">
                    <div class="form-group login-fields">
                        <input type="text" class="login-sign-up-email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="login-sign-up-password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="login-sign-up-submit" value="Continue">
                    </div>
                    <div class="form-group">
                        By creating an account, I agree to Shutterstock's <a href="#">Website terms</a>, <a href="#">Privacy policy</a> and <a href="#">Licensing terms</a>.
                    </div>
                </div>
                <div class="login-sign-up-modal-footer">
                    <p>Already have an account? <a href="#">Log in</a></p>
                </div>
            </div>

        </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

    <script>
        new Vue({
            el: '.parent-container-fluid',
            data: {
                showLogInModal: false,
                showSignUpModal: false,
            },
            methods: {

            },
            mounted: function() {
            }
        })
    </script>

@endsection
