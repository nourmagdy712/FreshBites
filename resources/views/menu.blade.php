<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" />

    <style>
    * {
        box-sizing: border-box;
        margin: 0;
    }

    body {
        background-image: url(imgs/menu/natural-wooden-background.jpg);
    }

    header {
        background-color: rgb(68 62 62 / 30%);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 20px 50px;
        position: fixed;
        width: 100%;
    }

    #nav-title {
        margin-right: auto;
        font-size: 1.5em;
    }

    header li {
        list-style: none;
        display: inline-block;
        padding: 0 20px;
    }

    header a {
        text-decoration: none;
        color: #fff;
        font-size: 20px;
        transition: all 0.3s ease 0s;
    }

    header a:hover {
        color: #141e30;
    }

    .row {
        margin: 8px -16px;
    }

    .row,
    .row>.column {
        padding: 8px;
    }

    .column {
        float: left;
        margin-left: 50px;
        width: 20%;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .content {
        background-color: rgb(68 62 62 / 30%);
        border-radius: 18px;
        padding: 10px;
        text-align: center;
        color: #fff;
    }

    .add {
        cursor: pointer;
        padding: 8px;
        font-size: 18px;
        color: #fff;
        margin-top: 15px;
        border-radius: 10px;
        background-image: linear-gradient(-60deg, #0c3a20 0%, #245525 100%);
        border: 2px solid #245525;
        border-image-slice: 1;
        outline: none;
    }

    .add:hover {
        opacity: 0.8;
    }

    .bar {
        overflow: hidden;
        margin-top: 30px;
        margin-left: 5%;
    }

    .tablinks {
        border: none;
        border-bottom: 2px solid #c4c7cb;
    }

    .bar button {
        color: #fff;
        font-weight: bold;
        float: left;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 20px;
        background: none;
        font-family: "Calligraffitti";
    }

    #first {
        margin-left: 40%;
    }

    .tablinks:hover {
        color: #243b55;
        background-color: #ddd;
    }

    #vegan.active, #keto.active, #dash.active {
        color: #243b55;
        background-color: #c4c7cb;
    }

    .tab_content {
        padding: 6px 12px;
        border-top: none;
    }

    @media screen and (max-width: 900px) {
        .column {
            width: 40%;
        }
    }

    @media screen and (max-width: 670px) {
        .column {
            width: 80%;
        }

        #first {
            margin-left: 20% !important;
        }
    }

    @media (max-width: 411px) {
        header {
            padding: 20px 10px;
        }

        header li {
            padding: 0 10px;
        }

        header a {
            font-size: 15px;
        }
    }

    @media screen and (max-width: 380px) {
        #first {
            margin-left: 5% !important;
        }

        .bar button {
            font-size: 15px !important;
        }
    }
    </style>
</head>

<body>
    <header>
        <h1 id="nav-title">
            <a href="{{route('home')}}"><img src="" alt="FreshBites Logo" /></a>
        </h1>
        <nav>
            <ul>
               {{--<li>
                    <a href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>--}} 
                <li>
                    <a href="{{route('profile')}}"><i class="fa fa-fw fa-user"></i></a>
                </li>
            </ul>
        </nav>
    </header>
    <h1 style="
        padding-top: 80px;
        text-align: center;
        color: #141e30;
        font-size: 40px;
        font-family: 'Calligraffitti';
      ">
        Our Menu <span style="font-family: 'Font Awesome 5 Free'">🍴</span>
    </h1>

    <div class="bar">
      <form method="get" action="{{route('vegan')}}">
        @csrf 
        <button class="tablinks" id="first" type="submit" id="vegan" onclick="actVegan()">
            Vegan
        </button></form>
       <form method="get" action="{{route('keto')}}">
        @csrf
        <button class="tablinks" type="submit" id="keto" onclick="actKeto()">Keto</button></form>
        <form method="get" action="{{route('dash')}}">
        @csrf
        <button class="tablinks" type="submit" id="dash" onclick="actDash()">Dash</button></form>
    </div>
    <div id="London" class="tab_content">
        <div class="row">
            @isset ($vegans)
            @if($vegans->isNotEmpty())
            @foreach($vegans as $vegan)
            <div class="column">
                <div class="content">
                    <img src="{{asset('products/'.$vegan->image)}}" alt="image" style="width: 100%; max-height:230px;" /><br /><br />
                    <h3 style="border-bottom: 1px #fff dashed">{{$vegan->title}}</h3>
                    <br />
                    <p>{{$vegan->description}}</p>
                    <br />
                    <span>EGP {{$vegan->price}}</span><br />
                    <button class="add">add to cart</button>
                </div>
            </div>
            @endforeach
            @endif
            @endisset

            @isset($ketos)
            @if($ketos->isNotEmpty())
            @foreach($ketos as $keto)
            <div class="column">
                <div class="content">
                    <img src="{{asset('products/'.$keto->image)}}" alt="image" style="width: 100%; max-height:230px;" /><br /><br />
                    <h3 style="border-bottom: 1px #fff dashed">{{$keto->title}}</h3>
                    <br />
                    <p>{{$keto->description}}</p>
                    <br />
                    <span>EGP {{$keto->price}}</span><br />
                    <button class="add">add to cart</button>
                </div>
            </div>
            @endforeach
            @endif
            @endisset

            @isset($dashs)
            @if($dashs->isNotEmpty())
            @foreach($dashs as $dash)
            <div class="column">
                <div class="content">
                    <img src="{{asset('products/'.$dash->image)}}" alt="image" style="width: 100%; max-height:230px;" /><br /><br />
                    <h3 style="border-bottom: 1px #fff dashed">{{$dash->title}}</h3>
                    <br />
                    <p>{{$dash->description}}</p>
                    <br />
                    <span>EGP {{$dash->price}}</span><br />
                    <button class="add">add to cart</button>
                </div>
            </div>
            @endforeach
            @endif
            @endisset
        </div>
    </div>

    <script>
        
    function actVegan(){
    var vegan= document.getElementById('vegan');
    vegan.classList.add("active");
    keto.classList.remove("active");
    dash.classList.remove("active");
    }

    function actKeto(){
    var keto= document.getElementById('keto');
    keto.classList.add("active");
    vegan.classList.remove("active");
    dash.classList.remove("active");
}

    function actDash(){
    var dash= document.getElementById('dash');
    dash.classList.add("active");
    vegan.classList.remove("active");
    keto.classList.remove("active");
}
    </script>
</body>

</html>