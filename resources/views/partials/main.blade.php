<main>
    <div class="content-box jumbo-box">
        <div class="jumbo-box">
            <div>
                CURRENT SERIES
            </div>
        </div>
        <div class="cards-container row-cols-6 ">
            @foreach ($comics as $comic)
                <div class="single-card">
                    <div class="img-box" >
                        <img src="@php echo $comic['thumb'] @endphp" alt="name">
                    </div>
                    <h5>
                        @php echo $comic['title'] @endphp
                    </h5>
                </div>
            @endforeach
        </div>
        <div class="button-container">
            <button>
                LOAD MORE
            </button>
        </div>
    </div>

    <div class="shop-options">
        <div>
            <div class="shop-box" v-for="elem in shopOptions">
                <div class="img-box">
                    <img src="" alt="">
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
</template>

<style lang="scss" scoped>
main {
min-height: 500px;
.content-box {
    min-height: 500px;
    font-size: 25px;
    color: whitesmoke;
    background-color: #303030;
    .jumbo-box {
        height: 45vh;
        background-size: cover;
        background-image: url('https://www.today.it/~shared/images/tv/locandine/teen-titans-go-2led.jpg');

        div {
            position: absolute; bottom: 37vh; left: 10vw;
            background-color: #0282F9;
            padding: 10px 20px;
            font-weight: bold;
        }
    }

    .cards-container {
        margin: 0 auto;
        width: 80vw;
        padding: 30px 0;
        display: flex;
        flex-wrap: wrap;

        .single-card {
        width: (100% / 6);                
        height: 250px;
        padding: 3px;
        cursor: pointer;
        margin-bottom: 20px;

        &:hover {
            background-color: #555555;
        }
        .img-box {
            width: 150px;
            height: 200px;
            overflow: hidden;
            margin: 0 auto;

            img  {
                width: 100%;
        }
    }

    h5 {
        padding: 5px 0;
        font-size: 15px;
        width: 150px;
        margin: 0 auto;
    }

}
    }


    .button-container {
        display: flex;
        justify-content: center;
        padding: 20px;

        button {
            padding: 10px 20px;
            font-size: 15px;
            font-weight: bold;
            background-color: #0282F9;
            border: none;
            cursor: pointer;

            &:hover {
                background-color: #3ca1ff;
            }
        }
    }
}

.shop-options {
    height: 15vh;
    background-color: #0282F9;

    &>div {
        margin: 0 auto;
        width: 80vw;
        height: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;

        .shop-box {
            display: flex;
            align-items: center;
            color: white;
            padding: 5px;

            &:hover {
                cursor: pointer;
                border: 3px solid white;
            }

            .img-box {
                width:50px;
                height: 50px;
                padding-right: 10px;

                img {
                    height: 100%;
                    object-fit: contain;
                }
            }
        }
    }
}


}

</style>

