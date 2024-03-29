@php
    $links = [
        [
            "label"=> 'CHARACTERS',
            "url"=> '/characters' ,  
        ],
        [
            "label"=> 'COMICS',
            "url"=> '/comics' ,  
        ],
        [
            "label"=> 'MOVIES',
            "url"=> '/movies' ,  
        ],
        [
            "label"=> 'TV',
            "url"=> '/tv' ,  
        ],
        [
            "label"=> 'GAMES',
            "url"=> '/games' ,  
        ],
        [
            "label"=> 'COLLECTIBLES',
            "url"=> '/collectibles' ,  
        ],
        [
            "label"=> 'VIDEOS',
            "url"=> '/videos' ,  
        ],
        [
            "label"=> 'FANS',
            "url"=> '/fans' ,  
        ],
        [
            "label"=> 'NEWS',
            "url"=> '/news' ,  
        ],
        [
            "label"=> 'SHOP',
            "url"=> '/shop' ,  
        ],
    ];
@endphp

<header>
    <div class="bg-primary">
        <div class="container-top text-light d-flex justify-content-end ">
            <span class="pe-4">DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>
    <div class="container-header">
        <a class="logo-box" href="/">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </a>
        
        <nav class="navbar">
            @foreach ($links as $link)
            <div class="navbar-link" >
                <a href="{{$link['url']}}">
                    {{$link['label']}}
                </a>
            </div>
            @endforeach
        </nav>
    
        <form class="d-flex search-bar" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div>
</header>

<style lang="scss" scoped>
.container-top {
    padding: 5px 0;
    width: 80vw;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 10px;
}
.container-header {
    height: 12vh;
    width: 80vw;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;

    .logo-box {
        height: 50px;
        width: 50px;
        &:hover {
            filter: grayscale(100%);
            transition:0.3s;
        }
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-width: 70%;
        font-size: small;
        height: 100%;
        padding: 0;

        .navbar-link {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 50px;
            height: 100%;

            &:hover {
                border-bottom: 5px solid #0282F9;
                transition: 0.3s;
                a {
                    color: #0282F9;
                }
            }

            a {
                text-decoration: none;
                height: 100%;
                color: rgb(90, 89, 89);
                padding: 0 10px;
                display: flex;
                align-items: center;
            }
        }
        
    }

    .search-bar {
        max-width: 200px;
    }
}
</style>
