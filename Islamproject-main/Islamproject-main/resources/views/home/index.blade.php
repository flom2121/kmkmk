<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home - Flom </title>
    <div class="Flom">
    </div>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- for rating --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/rate.css') }}">
    {{-- / for rating --}}

    {{-- for review stars --}}
    <link rel="stylesheet" href="{{ asset('assets/css/review_stars.css') }}">
    {{-- / for review stars --}}


    {{-- <style>
        video {
            width: 30%;
            height: auto;
        }
    </style> --}}
</head>

<body>
    <div class="ads">
        </head>

        <body>
            {{-- <video width="50" controls>
                <source src="1.mp4" type="video/mp4">

                Your browser does not support HTML5 video.
            </video> --}}
            <header>
                <nav>
                    <P ALIGN="center">
                        <img src="{{ asset('assets/images/flomlogo-2.png') }}"alt="flom" widtth="50" height=50>
                </nav>

            </header>



            <style>
                body {
                    height: 200px;
                    background-image: linear-gradient(to right, #696262, #e7e7e7);
                }
            </style>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    * {
                        box-sizing: border-box;
                    }

                    .navbar {
                        overflow: hidden;
                        background-color: #333;
                    }

                    /* Style the navigation bar links */
                    .navbar a {
                        float: left;
                        display: block;
                        color: white;
                        text-align: center;
                        padding: 14px 20px;
                        text-decoration: none;
                    }

                    /* Right-aligned link */
                    .navbar a.right {
                        float: right;
                    }

                    /* Change color on hover */
                    .navbar a:hover {
                        background-color: #ddd;
                        color: black;
                    }

                    /* Column container */
                    .row {
                        display: -ms-flexbox;
                        /* IE10 */
                        display: flex;
                        -ms-flex-wrap: wrap;
                        /* IE10 */
                        flex-wrap: wrap;
                    }

                    /* Create two unequal columns that sits next to each other */
                    /* Sidebar/left column */
                    .side {
                        -ms-flex: 30%;
                        /* IE10 */
                        flex: 30%;
                        background-color: #f1f1f1;
                        padding: 20px;
                    }

                    /* Main column */
                    .main {
                        -ms-flex: 70%;
                        /* IE10 */
                        flex: 70%;
                        background-color: white;
                        padding: 20px;
                    }

                    /* Fake image, just for this example */
                    .fakeimg {
                        background-color: #aaa;
                        width: 100%;
                        padding: 20px;
                    }

                    /* Footer */
                    .footer {
                        padding: 20px;
                        text-align: center;
                        background: #ddd;
                    }

                    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
                    @media screen and (max-width: 700px) {
                        .row {
                            flex-direction: column;
                        }
                    }

                    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
                    @media screen and (max-width: 400px) {
                        .navbar a {
                            float: none;
                            width: 100%;
                        }
                    }
                </style>
            </head>

            <body>

                <div class="header">

                </div>

                <div class="navbar">
                    <a href="{{ route('home') }}">Home</a>
                    @if (auth()->check())
                        <a href="{{ route('logout') }}">(Welcome {{ auth()->user()->first_name }}) logout</a>
                    @else
                        <a href="{{ route('register') }}">Sign Up</a>
                        <a href="{{ route('login') }}">login</a>
                    @endif
                    <a href="mailto:floomm10@gmail.com">Contact Us</a>
                    <a href="{{ route('cart') }}" class="right">Cart</a>
                </div>
            </body>

            </html>



            <main>
                <h2></h2>
                <div class="products">
                    @foreach ($products as $product)
                        <div class="product">
                            <img src="{{ asset('assets/images/' . $product->image) }}" alt="Hoodie1">
                            <h3>{{ $product->name }}</h3>
                            <p>${{ $product->price }}</p>
                            <a href="hoodi1.html">
                                <a href="{{ route('product', $product->id) }}"><button>View</button></a>
                            </a>
                        </div>
                    @endforeach

                </div>
            </main>
            <footer>

            </footer>
            <div class="ads">
                <p>Get 40% off on selected items. Limited time only!</p>
                <img src="https://mailbakery.s3.amazonaws.com/wp-content/uploads/2015/06/26160320/neiman_marcus.gif"
                    alt="Sale Ad">
            </div>



            <div class="reviews">
                <h3>Customer Reviews:</h3>

                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                    * {
                        box-sizing: border-box
                    }

                    body {
                        font-family: Verdana, sans-serif;
                        margin: 0
                    }

                    < !DOCTYPE html><html><head><meta name="viewport" content="width=device-width, initial-scale=1"><style>* {
                        box-sizing: border-box
                    }

                    body {
                        font-family: Verdana, sans-serif;
                        margin: 0
                    }

                    /* Slideshow container */
                    .slideshow-container {
                        position: relative;
                        background: #f1f1f1f1;
                    }

                    /* Slides */
                    .mySlides {
                        display: none;
                        padding: 80px;
                        text-align: center;
                    }

                    /* Next & previous buttons */
                    .prev,
                    .next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        margin-top: -15px;
                        /* updated */
                        padding: 8px;
                        /* updated */
                        color: #888;
                        font-weight: bold;
                        font-size: 16px;
                        /* updated */
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                    }

                    /* Position the "next button" to the right */
                    .next {
                        position: absolute;
                        right: 0;
                        border-radius: 3px 0 0 3px;
                    }


                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover,
                    .next:hover {
                        background-color: rgba(0, 0, 0, 0.8);
                        color: white;
                    }

                    /* The dot/bullet/indicator container */
                    .dot-container {
                        text-align: center;
                        padding: 20px;
                        background: #ddd;
                    }

                    /* The dots/bullets/indicators */
                    .dot {
                        cursor: pointer;
                        height: 15px;
                        width: 15px;
                        margin: 0 2px;
                        background-color: #bbb;
                        border-radius: 50%;
                        display: inline-block;
                        transition: background-color 0.6s ease;
                    }

                    /* Add a background color to the active dot/circle */
                    .active,
                    .dot:hover {
                        background-color: #717171;
                    }

                    /* Add an italic font style to all quotes */
                    q {
                        font-style: italic;
                    }

                    /* Add a blue color to the author */
                    .author {
                        color: cornflowerblue;
                    }

                    /* Updated CSS */
                    .prev,
                    .next {
                        width: 30px;
                    }

                    .prev {
                        left: 0;
                        border-radius: 3px 0 0 3px;
                    }

                    .dot-container {
                        margin-top: 20px;
                    }
                </style>
                </head>

                <body>
                    {{-- review  --}}
                    <div>
                        <div class="stars__container">
                            <div class="rating__box">
                                <header>How Was Your Experience?</header>
                                <form action="{{ route('home.storeUserReview') }}" method="get">
                                    <textarea name="review_text" id="" cols="35" rows="4" placeholder="write a review"
                                        style="resize:none; margin:10px; border-radius:5px; border:1px solid gray;padding:5px">{{ auth()->check() ? auth()->user()->review : null }}</textarea>
                                    @if (auth()->check())
                                        <div class="stars" id="rate-div">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if (auth()->user()->review_rate >= $i)
                                                    <i class="fa-solid fa-star active"><input type="hidden"
                                                            value="{{ $i }}"></i>
                                                @else
                                                    <i class="fa-solid fa-star"><input type="hidden"
                                                            value="{{ $i }}"></i>
                                                @endif
                                            @endfor
                                            <input type="hidden" id="rate-value" name="rate" value="1">
                                            <input type="submit" value="submit" onclick="rates()">
                                        </div>
                                    @else
                                        <div class="stars" id="rate-div">
                                            <i class="fa-solid fa-star active"><input type="hidden" value='1'></i>
                                            <i class="fa-solid fa-star"><input type="hidden" value='2'></i>
                                            <i class="fa-solid fa-star"><input type="hidden" value='3'></i>
                                            <i class="fa-solid fa-star"><input type="hidden" value='4'></i>
                                            <i class="fa-solid fa-star"><input type="hidden" value='5'></i>
                                            <input type="hidden" id="rate-value" name="rate" value="1">
                                            <h4><a href="{{ route('login') }}">Login</a> to write a review</h4>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>

                    </div>
                    {{-- / review  --}}
                    <div class="slideshow-container">
                        @foreach ($users as $user)
                            <div class="mySlides">
                                <P>
                                <div class="ratings">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($user->review_rate >= $i)
                                            <i class="fa fa-star rating-color"></i>
                                        @else
                                            <i class="fa fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                                </P>
                                <q>{{ $user->review }}</q>
                                <p class="author">- {{ $user->first_name }} {{ $user->last_name }}</p>
                            </div>
                        @endforeach

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>

                    </div>
                    <div class="dot-container">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>





</html>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
{{-- for rating --}}
<script src="{{ asset('assets/js/rate.js') }}"></script>
{{-- /for rating --}}

</body>

</html>
</body>
