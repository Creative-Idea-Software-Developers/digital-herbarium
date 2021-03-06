<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="{{ url('resources','icono.png') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Herbario Digital - Unasam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap">
		<script
		src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
		crossorigin="anonymous"></script>
        
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&display=swap");
:root {
  --card-width: 200px;
  --card-height: 300px;
  --card-transition-duration: 800ms;
  --card-transition-easing: ease;
}

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  width: 100%;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: rgba(0, 0, 0, 0.787);
  overflow: hidden;
}

button {
  border: none;
  background: none;
  cursor: pointer;
}

button:focus {
  outline: none;
  border: none;
}

.app {
  position: relative;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.app__bg {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -5;
  -webkit-filter: blur(8px);
          filter: blur(8px);
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  overflow: hidden;
}

.app__bg::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 1;
  opacity: 0.8;
}

.app__bg__image {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) translateX(var(--image-translate-offset, 0));
          transform: translate(-50%, -50%) translateX(var(--image-translate-offset, 0));
  width: 180%;
  height: 180%;
  -webkit-transition: opacity 1000ms ease, -webkit-transform 1000ms ease;
  transition: opacity 1000ms ease, -webkit-transform 1000ms ease;
  transition: transform 1000ms ease, opacity 1000ms ease;
  transition: transform 1000ms ease, opacity 1000ms ease, -webkit-transform 1000ms ease;
  overflow: hidden;
}

.app__bg__image img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.app__bg__image.current--image {
  opacity: 1;
  --image-translate-offset: 0;
}

.app__bg__image.previous--image, .app__bg__image.next--image {
  opacity: 0;
}

.app__bg__image.previous--image {
  --image-translate-offset: -25%;
}

.app__bg__image.next--image {
  --image-translate-offset: 25%;
}

.cardList {
  position: absolute;
  width: calc(3 * var(--card-width));
  height: auto;
}

.cardList__btn {
  --btn-size: 35px;
  width: var(--btn-size);
  height: var(--btn-size);
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 100;
}

.cardList__btn.btn--left {
  left: -5%;
}

.cardList__btn.btn--right {
  right: -5%;
}

.cardList__btn .icon {
  width: 100%;
  height: 100%;
}

.cardList__btn .icon svg {
  width: 100%;
  height: 100%;
}

.cardList .cards__wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  -webkit-perspective: 1000px;
          perspective: 1000px;
}

.card {
  --card-translateY-offset: 100vh;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) translateX(var(--card-translateX-offset)) translateY(var(--card-translateY-offset)) rotateY(var(--card-rotation-offset)) scale(var(--card-scale-offset));
          transform: translate(-50%, -50%) translateX(var(--card-translateX-offset)) translateY(var(--card-translateY-offset)) rotateY(var(--card-rotation-offset)) scale(var(--card-scale-offset));
  display: inline-block;
  width: var(--card-width);
  height: var(--card-height);
  -webkit-transition: -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
  transition: -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
  transition: transform var(--card-transition-duration) var(--card-transition-easing);
  transition: transform var(--card-transition-duration) var(--card-transition-easing), -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.card::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 1;
  -webkit-transition: opacity var(--card-transition-duration) var(--card-transition-easing);
  transition: opacity var(--card-transition-duration) var(--card-transition-easing);
  opacity: calc(1 - var(--opacity));
}

.card__image {
  position: relative;
  width: 100%;
  height: 100%;
}

.card__image img {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.card.current--card {
  --current-card-rotation-offset: 0;
  --card-translateX-offset: 0;
  --card-rotation-offset: var(--current-card-rotation-offset);
  --card-scale-offset: 1.2;
  --opacity: 0.8;
}

.card.previous--card {
  --card-translateX-offset: calc(-1 * var(--card-width) * 1.1);
  --card-rotation-offset: 25deg;
}

.card.next--card {
  --card-translateX-offset: calc(var(--card-width) * 1.1);
  --card-rotation-offset: -25deg;
}

.card.previous--card, .card.next--card {
  --card-scale-offset: 0.9;
  --opacity: 0.4;
}

.infoList {
  position: absolute;
  width: calc(3 * var(--card-width));
  height: var(--card-height);
  pointer-events: none;
}

.infoList .info__wrapper {
  position: relative;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-perspective: 1000px;
          perspective: 1000px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.info {
  margin-bottom: calc(var(--card-height) / 8);
  margin-left: calc(var(--card-width) / 1.5);
  -webkit-transform: translateZ(2rem);
          transform: translateZ(2rem);
  -webkit-transition: -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
  transition: -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
  transition: transform var(--card-transition-duration) var(--card-transition-easing);
  transition: transform var(--card-transition-duration) var(--card-transition-easing), -webkit-transform var(--card-transition-duration) var(--card-transition-easing);
}

.info .text {
  position: relative;
  font-family: "Montserrat";
  font-size: calc(var(--card-width) * var(--text-size-offset, 0.2));
  white-space: nowrap;
  color: #fff;
  width: -webkit-fit-content;
  width: -moz-fit-content;
  width: fit-content;
}

.info .name,
.info .location {
  text-transform: uppercase;
}

.info .location {
  font-weight: 800;
}

.info .location {
  --mg-left: 40px;
  --text-size-offset: 0.12;
  font-weight: 600;
  margin-left: var(--mg-left);
  margin-bottom: calc(var(--mg-left) / 2);
  padding-bottom: 0.8rem;
}

.info .location::before, .info .location::after {
  content: "";
  position: absolute;
  background: #fff;
  left: 0%;
  -webkit-transform: translate(calc(-1 * var(--mg-left)), -50%);
          transform: translate(calc(-1 * var(--mg-left)), -50%);
}

.info .location::before {
  top: 50%;
  width: 20px;
  height: 5px;
}

.info .location::after {
  bottom: 0;
  width: 60px;
  height: 2px;
}

.info .description {
  --text-size-offset: 0.065;
  font-weight: 500;
}

.info.current--info {
  opacity: 1;
  display: block;
}

.info.previous--info, .info.next--info {
  opacity: 0;
  display: none;
}

.loading__wrapper {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #000;
  z-index: 200;
}

.loading__wrapper .loader--text {
  color: #fff;
  font-family: "Montserrat";
  font-weight: 500;
  margin-bottom: 1.4rem;
}

.loading__wrapper .loader {
  position: relative;
  width: 200px;
  height: 2px;
  background: rgba(255, 255, 255, 0.25);
}

.loading__wrapper .loader span {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: red;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  -webkit-transform-origin: left;
          transform-origin: left;
}

@media only screen and (min-width: 800px) {
  :root {
    --card-width: 250px;
    --card-height: 400px;
  }
}

.support {
  position: absolute;
  right: 10px;
  bottom: 10px;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.menuxD {
  position: absolute;
  right: 50%-15px;
  top: 10px;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background-color: #059669;
  color: #fff;
  border-radius: 5px;
}

.menuxD:hover{
  background-color: #047857;
  color: #fff;
}

.support a {
  margin: 0 10px;
  color: #fff;
  font-size: 1.8rem;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: all 150ms ease;
  transition: all 150ms ease;
}

.support a:hover {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/*# sourceMappingURL=index.css.map */
        </style>
    </head>
    <body>
		<button class="menuxD btn--menu" onclick="abrirMenu()">Abrir Men??</button>
		@include('modal')
			<div class="cardList">
		<button class="cardList__btn btn btn--left">
			<div class="icon">
				<svg>
					<use xlink:href="#arrow-left"></use>
				</svg>
			</div>
		</button>

		<div class="cards__wrapper">
			@if (count($plantas)>=3)
			<div class="card current--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[0]->image}}" alt="" />
				</div>
			</div>

			<div class="card next--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[1]->image}}" alt="" />
				</div>
			</div>

			<div class="card previous--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[count($plantas)-1]->image}}" alt="" />
				</div>
			</div>
			@endif
			@if (count($plantas)==2)
			<div class="card current--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[0]->image}}" alt="" />
				</div>
			</div>

			<div class="card next--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[1]->image}}" alt="" />
				</div>
			</div>

			<div class="card previous--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[1]->image}}" alt="" />
				</div>
			</div>
			@endif
			@if (count($plantas)==1)
			<div class="card current--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[0]->image}}" alt="" />
				</div>
			</div>

			<div class="card next--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[0]->image}}" alt="" />
				</div>
			</div>

			<div class="card previous--card">
				<div class="card__image">
					<img src="/resources/{{$plantas[0]->image}}" alt="" />
				</div>
			</div>
			@endif
		</div>

		<button class="cardList__btn btn btn--right">
			<div class="icon">
				<svg>
					<use xlink:href="#arrow-right"></use>
				</svg>
			</div>
		</button>
	</div>

	<div class="infoList">
		<div class="info__wrapper">
			@if (count($plantas)>=3)
			<div class="info current--info">
				<h1 class="text name name_actual">{{$plantas[0]->name}}</h1>
				<h4 class="text location location_actual">BY GRUPO 02</h4>
				<p class="text description description_actual" style = "white-space: normal">{{$plantas[0]->description}}</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">{{$plantas[1]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[1]->description}}</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name">{{$plantas[count($plantas)-1]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[count($plantas)-1]->description}}</p>
			</div>
			@endif
			@if (count($plantas)==2)
			<div class="info current--info">
				<h1 class="text name name_actual">{{$plantas[0]->name}}</h1>
				<h4 class="text location location_actual">BY GRUPO 02</h4>
				<p class="text description description_actual" style = "white-space: normal">{{$plantas[0]->description}}</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">{{$plantas[1]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[1]->description}}</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name">{{$plantas[1]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[1]->description}}</p>
			</div>
			@endif
			@if (count($plantas)==1)
			<div class="info current--info">
				<h1 class="text name name_actual">{{$plantas[0]->name}}</h1>
				<h4 class="text location location_actual">BY GRUPO 02</h4>
				<p class="text description description_actual" style = "white-space: normal">{{$plantas[0]->description}}</p>
			</div>

			<div class="info next--info">
				<h1 class="text name">{{$plantas[0]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[0]->description}}</p>
			</div>

			<div class="info previous--info">
				<h1 class="text name">{{$plantas[0]->name}}</h1>
				<h4 class="text location">BY GRUPO 02</h4>
				<p class="text description">{{$plantas[0]->description}}</p>
			</div>
			@endif
		</div>
	</div>

	@if (count($plantas)>=3)
	<div class="app__bg">
		<div class="app__bg__image current--image">
			<img src="/resources/{{$plantas[0]->image}}" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
		</div>
	</div>
	@endif
	@if (count($plantas)==2)
	<div class="app__bg">
		<div class="app__bg__image current--image">
			<img src="/resources/{{$plantas[0]->image}}" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
		</div>
	</div>
	@endif
	@if (count($plantas)==1)
	<div class="app__bg">
		<div class="app__bg__image current--image">
			<img src="/resources/{{$plantas[0]->image}}" alt="" />
		</div>
		<div class="app__bg__image next--image">
			<img src="https://source.unsplash.com/9dmycbFE7mQ" alt="" />
		</div>
		<div class="app__bg__image previous--image">
			<img src="https://source.unsplash.com/m7K4KzL5aQ8" alt="" />
		</div>
	</div>
	@endif
</div>

<div class="loading__wrapper">
	<div class="loader--text">Cargando...</div>
	<div class="loader">
		<span></span>
	</div>
</div>


<svg class="icons" style="display: none;">
	<symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='328 112 184 256 328 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
	<symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
		<polyline points='184 112 328 256 184 400'
					 style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
	</symbol>
</svg>
<div class="support">
			@if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Iniciar Sesi??n</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
</div>
<script>
	console.clear();

	function cambiarPlanta(id){
		while(index!=id){
			swapCards("right");
		}
		cerrarMenu();
	}

	let datos = [];
	let index = 0;
	let desc;
	let arra = [];
	let aux
	@foreach ($plantas as $planta)
	 desc = `{{$planta->description}}`;
	arra = desc.split('/\n/g');
	arra = arra.map(x=>{
		if(x.length>=80){
			aux = x.substring(0,80)+'\n';
			for(let i=80;i<x.length;i+=80){
				aux+=x.substring(i,i+80)+'\n';
			}
			x=aux
		}
		return x
	})
	desc = arra.join('')
	desc = desc.replace(/\n/g, "<br>");
		datos.push({
			id: {{ $planta->id }},
			name: `{{ $planta->name }}`,
			description: desc,
			image: `{{ $planta->image }}`,
			property: `BY GRUPO 02`
		});
	@endforeach

const { gsap, imagesLoaded } = window;

const buttons = {
	prev: document.querySelector(".btn--left"),
	next: document.querySelector(".btn--right"),
};
const cardsContainerEl = document.querySelector(".cards__wrapper");
const appBgContainerEl = document.querySelector(".app__bg");

const cardInfosContainerEl = document.querySelector(".info__wrapper");

buttons.next.addEventListener("click", () => swapCards("right"));

buttons.prev.addEventListener("click", () => swapCards("left"));

function abrirMenu(){
	document.querySelector(".btn--menu").style.display = 'none';
	document.querySelector("#myModal").style.display = "block";
}

function cerrarMenu(){
	document.querySelector(".btn--menu").style.display = '';
	document.querySelector("#myModal").style.display = "none";
}

function swapCards(direction) {
	const currentCardEl = cardsContainerEl.querySelector(".current--card");
	const previousCardEl = cardsContainerEl.querySelector(".previous--card");
	const nextCardEl = cardsContainerEl.querySelector(".next--card");

	const currentBgImageEl = appBgContainerEl.querySelector(".current--image");
	const previousBgImageEl = appBgContainerEl.querySelector(".previous--image");
	const nextBgImageEl = appBgContainerEl.querySelector(".next--image");

	changeInfo(direction);
	swapCardsClass();

	removeCardEvents(currentCardEl);

	function swapCardsClass() {
		currentCardEl.classList.remove("current--card");
		previousCardEl.classList.remove("previous--card");
		nextCardEl.classList.remove("next--card");

		currentBgImageEl.classList.remove("current--image");
		previousBgImageEl.classList.remove("previous--image");
		nextBgImageEl.classList.remove("next--image");

		currentCardEl.style.zIndex = "50";
		currentBgImageEl.style.zIndex = "-2";

		if (direction === "right") {
			previousCardEl.style.zIndex = "20";
			nextCardEl.style.zIndex = "30";

			nextBgImageEl.style.zIndex = "-1";

			currentCardEl.classList.add("previous--card");
			previousCardEl.classList.add("next--card");
			nextCardEl.classList.add("current--card");

			currentBgImageEl.classList.add("previous--image");
			previousBgImageEl.classList.add("next--image");
			nextBgImageEl.classList.add("current--image");
		} else if (direction === "left") {
			previousCardEl.style.zIndex = "30";
			nextCardEl.style.zIndex = "20";

			previousBgImageEl.style.zIndex = "-1";

			currentCardEl.classList.add("next--card");
			previousCardEl.classList.add("current--card");
			nextCardEl.classList.add("previous--card");

			currentBgImageEl.classList.add("next--image");
			previousBgImageEl.classList.add("current--image");
			nextBgImageEl.classList.add("previous--image");
		}
	}
	let data = document.querySelector(".current--card");
	let data2 = document.querySelector(".next--info");
	let data4 = document.querySelector(".previous--info");
	let data3 = document.querySelector(".current--image");
	if(direction==="right"){
		if(index>=datos.length-1){
			index=0;
			document.querySelector(".next--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[index+1].image+"\" alt=\"\">\n\t\t\t\t"
		} else {
			index++;
			if(index+1==datos.length){
				document.querySelector(".next--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[0].image+"\" alt=\"\">\n\t\t\t\t"
			} else {
				document.querySelector(".next--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[index+1].image+"\" alt=\"\">\n\t\t\t\t"
			}
		}
	} else if(direction==="left"){
		console.log("Entra"+index)
		if(index==0){
			index=datos.length-1;
			document.querySelector(".previous--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[index-1].image+"\" alt=\"\">\n\t\t\t\t"
		} else {
			if(index-1==0){
				document.querySelector(".previous--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[datos.length-1].image+"\" alt=\"\">\n\t\t\t\t"
				index--;
			} else {
				index--
				document.querySelector(".previous--card").children[0].innerHTML="\n\t\t\t\t\t<img src=\"resources/"+datos[index-1].image+"\" alt=\"\">\n\t\t\t\t"
			}
		}
		console.log("Sale"+index)
	}
	data.children[0].innerHTML = "\n\t\t\t\t\t<img src=\"resources/"+datos[index].image+"\" alt=\"\">\n\t\t\t\t"
	data2.children[0].innerHTML = datos[index].name;
	data2.children[1].innerHTML = "By "+datos[index].property;
	data2.children[2].innerHTML = datos[index].description;
	data4.children[0].innerHTML = datos[index].name;
	data4.children[1].innerHTML = "By "+datos[index].property;
	data4.children[2].innerHTML = datos[index].description;
	data3.children[0].src = "resources/"+datos[index].image;
}

function changeInfo(direction) {
	let currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	let previousInfoEl = cardInfosContainerEl.querySelector(".previous--info");
	let nextInfoEl = cardInfosContainerEl.querySelector(".next--info");

	gsap.timeline()
		.to([buttons.prev, buttons.next], {
		duration: 0.2,
		opacity: 0.5,
		pointerEvents: "none",
	})
		.to(
		currentInfoEl.querySelectorAll(".text"),
		{
			duration: 0.4,
			stagger: 0.1,
			translateY: "-120px",
			opacity: 0,
		},
		"-="
	)
		.call(() => {
		swapInfosClass(direction);
	})
		.call(() => initCardEvents())
		.fromTo(
		direction === "right"
		? nextInfoEl.querySelectorAll(".text")
		: previousInfoEl.querySelectorAll(".text"),
		{
			opacity: 0,
			translateY: "40px",
		},
		{
			duration: 0.4,
			stagger: 0.1,
			translateY: "0px",
			opacity: 1,
		}
	)
		.to([buttons.prev, buttons.next], {
		duration: 0.2,
		opacity: 1,
		pointerEvents: "all",
	});

	function swapInfosClass() {
		currentInfoEl.classList.remove("current--info");
		previousInfoEl.classList.remove("previous--info");
		nextInfoEl.classList.remove("next--info");

		if (direction === "right") {
			currentInfoEl.classList.add("previous--info");
			nextInfoEl.classList.add("current--info");
			previousInfoEl.classList.add("next--info");
		} else if (direction === "left") {
			currentInfoEl.classList.add("next--info");
			nextInfoEl.classList.add("previous--info");
			previousInfoEl.classList.add("current--info");
		}
	}
}

function updateCard(e) {
	const card = e.currentTarget;
	const box = card.getBoundingClientRect();
	const centerPosition = {
		x: box.left + box.width / 2,
		y: box.top + box.height / 2,
	};
	let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
	gsap.set(card, {
		"--current-card-rotation-offset": `${angle}deg`,
	});
	const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	gsap.set(currentInfoEl, {
		rotateY: `${angle}deg`,
	});
}

function resetCardTransforms(e) {
	const card = e.currentTarget;
	const currentInfoEl = cardInfosContainerEl.querySelector(".current--info");
	gsap.set(card, {
		"--current-card-rotation-offset": 0,
	});
	gsap.set(currentInfoEl, {
		rotateY: 0,
	});
}

function initCardEvents() {
	const currentCardEl = cardsContainerEl.querySelector(".current--card");
	currentCardEl.addEventListener("pointermove", updateCard);
	currentCardEl.addEventListener("pointerout", (e) => {
		resetCardTransforms(e);
	});
}

initCardEvents();

function removeCardEvents(card) {
	card.removeEventListener("pointermove", updateCard);
}

function init() {

	let tl = gsap.timeline();

	tl.to(cardsContainerEl.children, {
		delay: 0.15,
		duration: 0.5,
		stagger: {
			ease: "power4.inOut",
			from: "right",
			amount: 0.1,
		},
		"--card-translateY-offset": "0%",
	})
		.to(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
		delay: 0.5,
		duration: 0.4,
		stagger: 0.1,
		opacity: 1,
		translateY: 0,
	})
		.to(
		[buttons.prev, buttons.next],
		{
			duration: 0.4,
			opacity: 1,
			pointerEvents: "all",
		},
		"-=0.4"
	);
}

const waitForImages = () => {
	const images = [...document.querySelectorAll("img")];
	const totalImages = images.length;
	let loadedImages = 0;
	const loaderEl = document.querySelector(".loader span");

	gsap.set(cardsContainerEl.children, {
		"--card-translateY-offset": "100vh",
	});
	gsap.set(cardInfosContainerEl.querySelector(".current--info").querySelectorAll(".text"), {
		translateY: "40px",
		opacity: 0,
	});
	gsap.set([buttons.prev, buttons.next], {
		pointerEvents: "none",
		opacity: "0",
	});

	images.forEach((image) => {
		imagesLoaded(image, (instance) => {
			if (instance.isComplete) {
				loadedImages++;
				let loadProgress = loadedImages / totalImages;

				gsap.to(loaderEl, {
					duration: 1,
					scaleX: loadProgress,
					backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
				});

				if (totalImages == loadedImages) {
					gsap.timeline()
						.to(".loading__wrapper", {
						duration: 0.8,
						opacity: 0,
						pointerEvents: "none",
					})
						.call(() => init());
				}
			}
		});
	});
};

waitForImages();
</script>
        
    </body>
</html>
