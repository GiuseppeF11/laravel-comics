@php
$footer_icons = [
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

$footer_links = [
    [
        'Dc Comics' => [
            [
                'name' => 'Characters'
            ],
            [
                'name' => 'Comics'
            ],
            [
                'name' => 'Movies'
            ],
            [
                'name' => 'Tv'
            ],
            [
                'name' => 'Games'
            ],
            [
                'name' => 'News'
            ],
        ],
        'Shop' => [
            [
                'name' => 'Shop DC'
            ],
            [
                'name' => 'Shop DC Collectibles'
            ],
        ],
        'Dc' => [
            [
                'name' => 'Term Of Use'
            ],
            [
                'name' => 'Privacy policy (New)'
            ],
            [
                'name' => 'Ad Choices'
            ],
            [
                'name' => 'Advertising'
            ],
            [
                'name' => 'Jobs'
            ],
            [
                'name' => 'Subscriptions'
            ],
            [
                'name' => 'Talent Workshops'
            ],
            [
                'name' => 'CPSC Certificates'
            ],
            [
                'name' => 'Ratings'
            ],
            [
                'name' => 'Shop Help'
            ],
            [
                'name' => 'Contact Us'
            ],

        ],
        'Sites' => [
            [
                'name' => 'DC'
            ],
            [
                'name' => 'MAD Magazine'
            ],
            [
                'name' => 'DC Kids'
            ],
            [
                'name' => 'DC Universe'
            ],
            [
                'name' => 'DC Power Visa'
            ],
        ]
    ]
];
@endphp

<footer>
    <div class="footer-top">
        <div class="container-footer-top">
            <div class="info-container">
                <div class="col">
                    <div class="title">
                        <h3>{{ array_keys($footer_links[0])[0]}}</h3>
                        @foreach ($footer_links[0]['Dc Comics'] as $link)
                        <a href="">
                            @php echo $link['name'] @endphp
                        </a>
                        @endforeach
                        
                    </div>
                    <div class="title">
                        <h3>{{ array_keys($footer_links[0])[1] }}</h3>
                        @foreach ($footer_links[0]['Shop'] as $link)
                        <a href="">
                            @php echo $link['name'] @endphp
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h3>{{ array_keys($footer_links[0])[2] }}</h3>
                        @foreach ($footer_links[0]['Dc'] as $link)
                        <a href="">
                            @php echo $link['name'] @endphp
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h3>{{ array_keys($footer_links[0])[3] }}</h3>
                        @foreach ($footer_links[0]['Sites'] as $link)
                        <a href="">
                            @php echo $link['name'] @endphp
                        </a>
                        @endforeach
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

            @foreach ($footer_icons as $link)
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
