@extends('master.master')
@section('title','Homepage')
@section('content')
<!-- trang cua tg nhan -->

    <!-- phần logo -->
    <section class="banner bg-xs">
        <img src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/gateway/ownership/s/gate_ownership_s1_03.jpg"  alt="" class="img-full-width">
        <div class="pop text-uppercase text-center display-flex">
            <div class="vertical-center">
                <h1 class="heading" style="padding-top: 80px; color: wheat;">Models</h1>
                <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/d/df/Lamborghini_Logo.svg/1200px-Lamborghini_Logo.svg.png" alt="Dịch vụ" class="img-responsive center-block" style="max-width: 90px;">
                <p style="color: black;">WE WILL BRING YOU THE BEST QUALITY SERVICES</p>
            </div>
        </div>
    </section>


    <!-- phần đầu tiên -->
    <section class="phandau">
        <div class="container">
        <h1 class="heading" style="color: white;">SOME TYPES OF OUR VEHICLES<span>& LATEST SAMPLES</span></h1>

            <div class="gallery">

                <div class="gallery-item">
                    <img class="gallery-image" src="https://vcdn-vnexpress.vnecdn.net/2020/11/29/Lamborghini-Aventador-S-1-7379-1606647140.jpg" alt="sieu xe">
                </div>

                <div class="gallery-item">
                    <img class="gallery-image" src="https://autopro8.mediacdn.vn/2022/1/24/photo-1-16429933601762136203782.jpg" alt="sieu xe">
                </div>

                <div class="gallery-item">
                    <img class="gallery-image" src="https://image-us.24h.com.vn/upload/2-2022/images/2022-04-12/Ngam-sieu-xe-Lamborghini-Aventador-cuoi-cung-vua-xuat-xuong-l--3--1649751295-224-width660height405.jpg" alt="sieu xe">
                </div>

                <div class="gallery-item">
                    <img class="gallery-image" src="https://media.vov.vn/sites/default/files/styles/large/public/2021-07/lamborghini_aventador_ultimae_4.jpg" alt="sieu xe">
                </div>

                <div class="gallery-item">
                    <img class="gallery-image" src="https://cartimes.vn/images/20/12/17/lamborghini-sc20-squadra-corse-25.jpg" alt="sieu xe">
                </div>

                <div class="gallery-item">
                    <img class="gallery-image" src="https://photo-cms-tpo.zadn.vn/600x315/Uploaded/2022/cvjntckxtiwdpcv/2021_10_23/2021-lamborghini-huracan-sto-6165.jpg" alt="sieu xe">
                </div>

            </div>
        </div>
    </section>


    <!-- phần ảnh 3 -->
    <section class="anh" style="padding-top: 52px; padding-bottom: 18px;">
            
        <figure class="card-templet "><img src="http://lamborghinivietnam.xe360.vn/cache/images/muaban/xehoi/17072/450x300/lamborghini-aventador-2018-coupe-01.jpg" alt="sample93" />
        <figcaption>
            <h3>SUPER TROFEO WORLD FINAL</h3>
            <p>The longest established Lamborghini championship</p>
        </figcaption><i class="ion-ios-personadd-outline"></i>
        <a href="#"></a>
        </figure>

                
        <figure class="alephent-card">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/454262/sample15.jpg" alt="sample108" />
        <figcaption>
            <h3>SUPER TROFEO NORTH AMERICA</h3>
            <p>From the East Coast to California, the Lamborghini Super Trofeo</p>
        </figcaption>
        <a href="#"></a>
        </figure>


        <figure class="card-car">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/454262/sample15.jpg" alt="car" />
        <figcaption>
            <div><i class="bi bi-house-door"></i></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
            </svg>
        </figcaption>
        <a href="#"></a>
        </figure>

    </section>
        

    <!-- phần dòng xe -->
         <!-- dán lại link chữ này lên phần header -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <section class="hero-section">
        <div class="card-grid">

            <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/homepage/slider/05_23_22/aventador_ultimae_rds.jpg)"></div>
            <div class="card__content">
                <h2 class="card__category">SQUADRA CORSE</h2>
                <h3 class="card__heading">Squadra Corse is the name of Automobili Lamborghit's motorsport department.</h3>
            </div>
            </a>

            <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/gateway-family/few-off/hero/countach_hp.jpg)"></div>
            <div class="card__content">
                <h2 class="card__category">SUPER TROFEO</h2>
                <h3 class="card__heading">Passion, performance and innovation. The Lamborghini Super Trofeo has been the pinnacle of the global one-make championship scene since 2009.</h3>
            </div>
            </a>

            <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/homepage/families-gallery/2022/04_12/family_chooser_tecnica.jpg)"></div>
            <div class="card__content">
                <p class="card__category">CUSTOMER RACING</p>
                <h3 class="card__heading">In contrast with the Super Trofeo, GT3 championships are open to a range of constructors.</h3>
            </div>
            </li>

            <a class="card" href="#">
            <div class="card__background" style="background-image: url(https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/facelift_2019/models_gw/img-sx-text-dx/Urus-Giallo-Auge_carbonio_f.jpg)"></div>
            <div class="card__content">
                <p class="card__category">MOTORSPORT MODELS</p>
                <h3 class="card__heading">Lamborghini Squadra Corse’s cars for motorsport customers are designed and produced in-house.</h3>
            </div>
            </a>
            
        <div>
    </section>


    <!-- phần 2 ảnh và chữ -->
    <section>
            <div class="row">
                <div class="col-md-6">
                    <img class="twoimg" src="https://static.carmudi.vn/wp-content/uploads/2019-12/bNmlDu9ptt.jpg" alt="img">
                </div>

                <div class="col-md-6">
                    <div class="gioi">
                        <h1 class="ing1">SUPER TROFEO TEAMS</h1>
                            <p class="ing1a">
                            All of the cars that take part in the Lamborghini Super Trofeo championships are run by private teams, which use their experience to fine-tune them for the drivers. There are both Driver and Team rankings for each of the Lamborghini Super Trofeo continental championships.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="cars">
                        <h1 class="ing2">SUPER TROFEO EUROPE</h1>
                        <p class="ing2a">
                        The longest established Lamborghini championship takes place on the famous circuits of Europe in tandem with five of the races in the GT World Challenge Europe Powered by AWS. The Lamborghini Super Trofeo Europe is one of the most competitive one-make championships in the world. Over the years, some of the top GT racers, gentleman drivers and motorsport champions have battled it out on iconic tracks such as Monza, Silverstone, Paul Ricard and Spa-Francorchamp </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <img class="twoimg" src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2019/6/10/738354/595097.jpg" alt="img">
                </div>
            </div>
    </section>


    <!-- phần ảnh chéo -->
    <section>
        
        <img src="https://media.discordapp.net/attachments/888346515469389857/985766304021622824/LAMBORGHINI_URUS_SCORES_NEW_PRODUCTION_RECORD.png?width=970&height=369"  alt="img" style="height: 100%; width: 100%;">
        
    </section>


    <!-- phần need car -->
    <section>
        
        <img src="https://media.discordapp.net/attachments/888346515469389857/985756850807013437/Liceria__Cac.png?width=656&height=369"  alt="img" style="height: 100%; width: 65%;">
        
    </section>


<style>
    /* phan logo */
    .banner {
        position: relative;
        -webkit-box-shadow: 0 3px 7px 0 rgb(0 0 0 / 40%);
        box-shadow: 0 3px 7px 0 rgb(0 0 0 / 40%);
        overflow: hidden;
    }

    section {
        display: block;
    }

    .img-full-width {
        display: block;
        width: 100%;
        height: auto;
    }

    .banner > .pop {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        color: #fff;
        width: 25rem;
        height: 25rem;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .flex-box, .display-flex {
        display: -webkit-box;
        display: flex;
    }

    .text-center {
        text-align: center;
    }

    .banner .vertical-center {
        padding: 0 2rem;
        width: 100%;
    }

    .banner .vertical-center > h1 {
        margin: 1rem 0;
    }

    .heading {
        font: 2.8125rem/3.375rem "MergeBlack", sans-serif;
        text-transform: uppercase;
    }

    h1 {
        font-size: 36px;
    }

    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
    }

    .img-responsive {
        display: block;
        max-width: 100%;
        height: auto;
    }

    .banner .vertical-center > p {
        font-size: 15px;
        font-weight: 700;
        margin: 2rem 0;
    }

    p {
        margin-bottom: 10px;
    }

    .banner .vertical-center > .scroll-down {
        padding: 0.5rem;
        cursor: pointer;
    }

    .banner .vertical-center > .scroll-down > .fa {
        -webkit-animation: bounce 0.7s linear infinite;
        animation: bounce 0.7s linear infinite;
    }
    .fa-2x {
        font-size: 2em;
    }
    .fa {
        display: inline-block;
        font-family: 'fontastic';
        font-size: inherit;
        font-weight: normal;
        font-style: normal;
        line-height: 1;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .fa-angle-double-down:before {
        content: "\e002";
    }
    :before {
        box-sizing: border-box;
    }
    

    /* phan dau tien */

    :root {
    /* Kích thước phông chữ */
        font-size: 10px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background-color: #fafafa;
    }

    .container {
        max-width: 100rem;
        margin: 0 auto;
        padding: 0 2rem 2rem;
    }

    .heading {
        font-family: "Montserrat", Arial, sans-serif;
        font-size: 4rem;
        font-weight: 500;
        line-height: 1.5;
        text-align: center;
        padding: 3.5rem 0;
        color: #1a1a1a;
    }

    .heading span {
        display: block;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        margin: -1rem -1rem;
    }

    .gallery-item {
        /* Chiều rộng tối thiểu của 24rem để phù hợp với không gian có sẵn */
        flex: 1 0 24rem;
        margin: 1rem;
        box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
        overflow: hidden;
    }

    .gallery-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 400ms ease-out;
    }

    .gallery-image:hover {
        transform: scale(1.15);
    }

    @supports (display: grid) {
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
            grid-gap: 2rem;
        }

        .gallery,
        .gallery-item {
            margin: 0;
        }
    }


    /* phan anh */
          /* phan link chu va logo */
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
    @import url(https://fonts.googleapis.com/css?family=Teko:700);
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    @import url(https://fonts.googleapis.com/css?family=Playfair+Display:400,800);

    body {
        background-color: #212121;
    }

    .card-templet {
        font-family: 'Playfair Display', Arial, sans-serif;
        position: relative;
        float: left;
        overflow: hidden;
        margin: 10px 1%;
        min-width: 230px;
        max-width: 315px;
        max-height: 220px;
        width: 100%;
        color: #000000;
        text-align: right;
        font-size: 16px;
        background-color: #000000;
    }
    .card-templet * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.35s ease;
        transition: all 0.35s ease;
    }
    .card-templet img {
        max-width: 100%;
        backface-visibility: hidden;
    }
    .card-templet figcaption {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 1;
        opacity: 1;
        padding: 30px 0 30px 10px;
        background-color: #ffffff;
        width: 40%;
        -webkit-transform: translateX(150%);
        transform: translateX(150%);
    }
    .card-templet figcaption:before {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    right: 100%;
    content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 120px 120px 120px 0;
    border-color: transparent #ffffff transparent transparent;
    }
    .card-templet:after {
    position: absolute;
    bottom: 50%;
    right: 40%;
    content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 120px 120px 0 120px;
    border-color: rgba(255, 255, 255, 0.5) transparent transparent transparent;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: all 0.35s ease;
    transition: all 0.35s ease;
    }
    .card-templet h3,
    .card-templet p {
    line-height: 1.5em;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px);
    margin: 0;
    }
    .card-templet h3 {
    margin: 0 0 5px;
    line-height: 1.1em;
    font-weight: 900;
    font-size: 1.4em;
    opacity: 0.75;
    }
    .card-templet p {
    font-size: 0.8em;
    }
    .card-templet i {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 20px 30px;
    font-size: 44px;
    color: #ffffff;
    opacity: 0;
    }

    .card-templet a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    }

    .card-templet:hover img,
    .card-templet.active img {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    opacity: 0.5;
    }

    .card-templet:hover:after,
    .card-templet.active:after,
    .card-templet:hover figcaption,
    .card-templet.active figcaption,
    .card-templet:hover i,
    .card-templet.active i {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
    }
        
    .alephent-card {
    background-color: #fff;
    color: #ffffff;
    display: inline-block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 16px;
    margin: 0px 5px;
    max-width: 315px;
    min-width: 230px;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 100%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    }

    .alephent-card *,
    .alephent-card *:before,
    .alephent-card *:after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.45s ease;
    transition: all 0.45s ease;
    }

    .alephent-card img {
    backface-visibility: hidden;
    max-width: 100%;
    vertical-align: top;
    }

    .alephent-card:before
    {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background-color: #090d77;
    opacity: 0.5;
    -webkit-transition: all 0.45s ease;
    transition: all 0.45s ease;
    }
    .alephent-card:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    content: '';
    background-color: #031f46;
    opacity: 0.5;
    -webkit-transition: all 0.45s ease;
    transition: all 0.45s ease;
    }

    .alephent-card:before {
    -webkit-transform: skew(30deg) translateX(-80%);
    transform: skew(30deg) translateX(-80%);
    }

    .alephent-card:after {
    -webkit-transform: skew(-30deg) translateX(-70%);
    transform: skew(-30deg) translateX(-70%);
    }

    .alephent-card figcaption {
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: 1;
    bottom: 0;
    padding: 25px 40% 25px 20px;
    }

    .alephent-card figcaption:before,
    .alephent-card figcaption:after {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #b81212;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
    content: '';
    opacity: 0.5;
    z-index: -1;
    }

    .alephent-card figcaption:before {
    -webkit-transform: skew(30deg) translateX(-100%);
    transform: skew(30deg) translateX(-100%);
    }

    .alephent-card figcaption:after {
    -webkit-transform: skew(-30deg) translateX(-90%);
    transform: skew(-30deg) translateX(-90%);
    }

    .alephent-card h3,
    .alephent-card p {
    margin: 0;
    opacity: 0;
    letter-spacing: 1px;
    }

    .alephent-card h3 {
    font-family: 'Teko', sans-serif;
    font-size: 28px;
    font-weight: 700;
    line-height: 1em;
    text-transform: uppercase;
    }

    .alephent-card p {
    font-size: 0.6em;
    }

    .alephent-card a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    }

    .alephent-card:hover h3,
    .alephent-card.hover h3,
    .alephent-card:hover p,
    .alephent-card.hover p {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 0.9;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
    }

    .alephent-card:hover:before,
    .alephent-card.hover:before {
    -webkit-transform: skew(30deg) translateX(-20%);
    transform: skew(30deg) translateX(-20%);
    -webkit-transition-delay: 0.05s;
    transition-delay: 0.05s;
    }

    .alephent-card:hover:after,
    .alephent-card.hover:after {
    -webkit-transform: skew(-30deg) translateX(-10%);
    transform: skew(-30deg) translateX(-10%);
    }

    .alephent-card:hover figcaption:before,
    .alephent-card.hover figcaption:before {
    -webkit-transform: skew(30deg) translateX(-40%);
    transform: skew(30deg) translateX(-40%);
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
    }

    .alephent-card:hover figcaption:after,
    .alephent-card.hover figcaption:after {
    -webkit-transform: skew(-30deg) translateX(-30%);
    transform: skew(-30deg) translateX(-30%);
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
    }

    .card-car {
    color: #ffffff;
    display: inline-block;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 16px;
    margin: 0px 5px;
    max-width: 315px;
    min-width: 230px;
    overflow: hidden;
    position: relative;
    text-align: left;
    width: 100%;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    }
        
    .card-car * 
    {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    }
    .card-car *:before 
    {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    }

    .card-car img {
    max-width: 100%;
    backface-visibility: hidden;
    vertical-align: top;
    }
    .card-car figcaption {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    }

    .card-car i {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 4em;
    z-index: 1;
    opacity: 0;
    }
    .card-car a {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
    }
    .card-car:hover img,
    .card-car.hover img {
    zoom: 1;
    filter: alpha(opacity=50);
    -webkit-opacity: 0.5;
    opacity: 0.5;
    background-color:#00800;
    }
    .card-car:hover i,
    .card-car.hover i {
    opacity: 0.7;
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
    }

    .myName{
        position: absolute;
        top: 16em;
        left: 1em;
        padding: 5px 15px;
        color: #FFF;
        font-family: arial;
        width: 30%;
        overflow: hidden;
    
    }
    .myName a{
        color: #FFF; 
        text-decoration: none;
        font-size: 1.3em;
        font-weight: normal;
        float: left;
        margin-top: 3%;
        margin-left: 3%;
    }
    .myName a:hover{text-decoration: underline;}
    .myName img{
        width: 50px; 
        border-radius: 50%;
        float: left;
    }


    /* phan dong xe */
    :root{
        --background-dark: #2d3548;
        --text-light: rgba(255,255,255,0.6);
        --text-lighter: rgba(255,255,255,0.9);
        --spacing-s: 8px;
        --spacing-m: 16px;
        --spacing-l: 24px;
        --spacing-xl: 32px;
        --spacing-xxl: 64px;
        --width-container: 1200px;
    }

    *{
        border: 0;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html{
        height: 100%;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
    }

    body{
        height: 100%;
    }

    .hero-section{
        align-items: flex-start;
        display: flex;
        min-height: 100%;
        justify-content: center;
        padding: var(--spacing-xxl) var(--spacing-l);
    }

    .card-grid{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-column-gap: var(--spacing-l);
        grid-row-gap: var(--spacing-l);
        max-width: var(--width-container);
        width: 100%;
    }

    @media(min-width: 540px){
    .card-grid{
        grid-template-columns: repeat(2, 1fr); 
    }
    }

    @media(min-width: 960px){
    .card-grid{
        grid-template-columns: repeat(4, 1fr); 
    }
    }

    .card{
        list-style: none;
        position: relative;
    }

    .card:before{
        content: '';
        display: block;
        padding-bottom: 150%;
        width: 100%;
    }

    .card__background{
        background-size: cover;
        background-position: center;
        bottom: 0;
        filter: brightness(0.75) saturate(1.2) contrast(0.85);
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        transform-origin: center;
        trsnsform: scale(1) translateZ(0);
        transition: 
            filter 200ms linear,
            transform 200ms linear;
    }

    .card:hover .card__background{
        transform: scale(1.05) translateZ(0);
    }

    .card-grid:hover > .card:not(:hover) .card__background{
        filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
    }

    .card__content{
        left: 0;
        padding: var(--spacing-l);
        position: absolute;
        top: 0;
    }

    .card__category{
        color: var(--text-light);
        font-size: 2rem;
        margin-bottom: var(--spacing-s);
        text-transform: uppercase;
    }

    .card__heading{
        color: var(--text-lighter);
        font-size: 1.9rem;
        text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
        line-height: 1.4;
    }


    /* phan 2 anh va chu */
    .twoimg{
        max-width: 100%; 
        padding-top: 20px; 
        padding-left: 125px;
    }

    .ing1{
        color: white;
        text-align: center; 
        padding-top: 55px;
        padding-bottom: 30px;
    }

    .ing1a{
        font-size: 19px; 
        color: white;
    }

    .ing2{
        color: white; 
        text-align: center; 
        padding-top: 55px; 
        padding-left: 99px; 
        padding-bottom: 30px;
    }

    .ing2a{
        font-size: 19px; 
        text-align: center; 
        color: white; 
        padding-left: 75px;
    }


</style>

<script>
    $(".hover").mouseleave(
    function () {
        $(this).removeClass("hover");
    }
    );
        
                
    $(".active").mouseleave(
    function () {
        $(this).removeClass("active");
    }
    );
</script>
@endsection