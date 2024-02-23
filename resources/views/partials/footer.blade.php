@php
$footer_links = [
    [
        'url' => 'footer-facebook.png'
    ],
    [
        'url' => 'footer-periscope.png'
    ],
    [
        'url' => 'footer-pinterest.png'
    ],
    [
        'url' => 'footer-twitter.png'
    ],
    [
        'url' => 'footer-youtube.png'
    ],
];
@endphp

<footer>
    <div class="footer-top">
        <div class="container-footer-top">
            <div class="info-container">
                <div class="col">
                    <div class="title">
                        <h3>DC COMICS</h3>
                        <a href="">Characters</a>
                        <a href="">Comics</a>
                        <a href="">Movies</a>
                        <a href="">Tv</a>
                        <a href="">Games</a>
                        <a href="">News</a>
                    </div>
                    <div class="title">
                        <h3>SHOP</h3>
                        <a href="">Shop DC</a>
                        <a href="">Shop DC Collectibles</a>
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h3>DC</h3>
                        <a href="">Term Of Use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Ad Choices</a>
                        <a href="">Advertising</a>
                        <a href="">Jobs</a>
                        <a href="">Subscriptions</a>
                        <a href="">Talent Workshops</a>
                        <a href="">CPSC Certificates</a>
                        <a href="">Ratings</a>
                        <a href="">Shop Help</a>
                        <a href="">Contact Us</a>
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h3>SITES</h3>
                        <a href="">DC</a>
                        <a href="">MAD Magazine</a>
                        <a href="">DC Kids</a>
                        <a href="">DC Universe</a>
                        <a href="">DC Power Visa</a>
                    </div>
                </div>
            </div>
            <div class="logo-box">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="left-side"> 
             <button>SIGN-UP NOW!</button>
        </div>
        <div class="right-side"> 
            <span>
                FOLLOW US
            </span>

            @foreach ($footer_links as $link)
            <div class="logo-box">
                <img src="{{Vite::asset('resources/img/'.$link['url'])}}" alt="">
            </div>
            @endforeach
        </div>
    </div>
</footer>


<style lang="scss" scoped>

    footer {
        height: 61vh;
        background-color: #303030;
    }
    .footer-top{
        height: 75%;
        background-image: url(../../public/img/footer-bg.jpg);
        display: flex;
        justify-content: space-around;
        color: white;
    
        &>div {
                margin: 0 auto;
                width: 80vw;
                display: flex;
                justify-content: space-between;
    
                .info-container {
                    width: 60%;
                    padding: 20px;
                    display: flex;
                    justify-content: space-between;
    
                    .col {
                        display: flex;
                        flex-direction: column;
                        margin: 5px;
                        & .title {
                        margin-bottom: 20px;
    
                        h3 {
                            margin: 5px 0;
                        }
    
                        a {
                            display: block;
                            padding: 3px 0;
                            margin: 5px 0;
                            color: #959595;
                            font-size: 10px;
    
                            &:hover {
                                color: white;
                            }
                        }
                    }
                    }
                }
            }
            .logo-box {
            width: 30%;
            height: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            
            img {
                height: 150%;
                object-fit: contain;
            }
        }
    }
    
    .footer-bottom {
        margin: 0 auto;
        width: 80vw;
        height: 25%;
        background-color: #303030;
        display: flex;
        justify-content: space-between;
    
        .left-side {
            display: flex;
            align-items: center;
            
            button {
                background-color: #303030;
                color: white;
                font-weight: bold;
                font-size: medium;
                padding: 10px;
                border: 3px solid #0282F9;
                cursor: pointer;
    
                &:active {
                    background-color: #555555;
                }
            }
        }
    
        .right-side {
            height: 100%;
            min-width: 30%;
            display: flex;
            align-items: center;
            justify-content: center;
    
            span {
                color: #0282F9;
                padding: 20px;
                font-weight: bold;
                font-size: medium;
            }
    
            .logo-box {
                width: 30px;
                margin: 0 10px;
            }
        }
    }
    </style>
