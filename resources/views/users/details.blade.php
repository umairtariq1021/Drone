@extends('layouts.main')

@section('content')

<style>
    .images-details-sizes {
        padding: 20px 0;
    }
    .S,.M,.L {
        cursor: pointer;
        padding: 10px 15px;
        border: 1px solid darkslategrey;
        border-radius: 5px;
        background-color: darkslategrey;
        color: white;
    }

    .img-details-container {
        /* border: 1px solid; */
        margin: 0 auto;
        width: 75%;
    }
    .img-details-container-first-row .col-md-6{
         padding: 0!important
    }

    .img-details-tags p {
        display: inline;
        margin: 20px 5px!important;
        padding: 5px 20px;
        background-color: wheat;
    }
    .img-details-tags p:first-child {
        margin-left: 0!important
    }
    .img-details-col div {
        margin: 10px 0
    }
    .img-details-col img {
        width: 100%;
        height: 260px!important;
    }
    .img-details-button-row {
        width: 100%;
    }
    .img-details-button-row button {
        margin: 0 auto
    }
</style>

<div class="container-fluid img-details-container">
    <div class="row img-details-container-first-row" style="">
        <div class="col-md-6">
            <img class="" width="90%" src="{{ asset('images/images-sale/1.jpg') }}" alt="Image Detail">
        </div>
        <div class="col-md-6">
            <p class="images-details-sizes">
                <span class="S">S</span>
                <span class="M">M</span>
                <span class="L">L</span>
            </p>
            <p>Large  |  5592 px x 3728 px  |  47.3cm x 31.6cm @ 300 dpi  |  JPEG</p>
            <p>Need a different size? <a href="#">Resize with Editor</a></p>
            <hr>
            Upgrade to Enhanced License TIFF
            <ul>
                <li>Outdoor or Print Advertising with circulation/viewership over 500,000</li>
                <li>Usage in merchandise, clothing, and artwork</li>
                <li>Usage in web or print design templates</li>
            </ul>
            <div class="images-details-button-container">
                <button class="btn btn-danger">Download</button>
                <button class="btn btn-info">Edit</button>
            </div>
        </div>
    </div>

    <div class="img-details-by-user">
        <p>By <a href="#">TTstudio</a></p>
        <p>Royalty-free stock photo ID: 111192200</p>
        <p>Alone tree in Autumn park. - Image</p>
    </div>

    <div class="row img-details-tags">
        <p class="img-tag">fall</p>
        <p class="img-tag">fall</p>
        <p class="img-tag">fall</p>
        <p class="img-tag">fall</p>
    </div>

    <div class="row image-details-container-third-row">
        <div class="row">
            <p>Similar images</p>
        </div>
        <div class="row">
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/2.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/3.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/4.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/5.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/6.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/7.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-4 img-details-col">
                <div>
                    <img src="{{ asset('images/images-sale/8.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="row img-details-button-row">
            <button class="btn btn-primary">See All</button>
        </div>
    </div>

    <div class="row image-details-container-third-row">
            <div class="row">
                <p>Same artist</p>
            </div>
            <div class="row">
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/3.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/6.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-4 img-details-col">
                    <div>
                        <img src="{{ asset('images/images-sale/8.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row img-details-button-row">
                <button class="btn btn-primary">See All</button>
            </div>
        </div>
</div>

@endsection
