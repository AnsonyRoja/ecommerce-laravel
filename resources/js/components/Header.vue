<template>
    <header id="myHeader">
		<!-- <div class="top-header color-white">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="top-info">
							<a href="mailto:contacto@biomercado.com">contacto@biomercado.com</a>
							<a href="tel:584241234567">+58 424 123 4567</a>
						</div>
					</div>
					<div class="col-md-6">
						<ul class="social-nav">
							<li><a href="#"><img src="/assets/img/icono-facebook-bio.svg" alt="Facebook"></a></li>
							<li><a href="#"><img src="/assets/img/icono-instagram-bio.svg" alt="Instagram"></a></li>
							<li><a href="#"><img src="/assets/img/icono-twitter-bio.svg" alt="Twitter"></a></li>
							<li><a href="#"><img src="/assets/img/icono-linkedin-bio.svg" alt="LinkedIn"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div> -->
		<div class="middle-header">
			<div class="container-fluid container-movil">
				<div class="row align-items-center-md">
					<div id="toggler-header" class="col-3">
						<button class="navbar-toggler toggle-menu" type="button">
							<img src="/assets/img/menu-movil-bio.png" alt="Menu Bars">
						</button>
					</div>
					<div id="brand-header" class="col-lg-2 col-4">
						<a  href="/" class="navbar-brand"><img  src="/img/logo_bio.png" alt="Bio Mercados" style="width: 100%; height: auto"></a>
					</div>

					<div id="search-header" class="col-lg-6 col-md-12">
						<form class="form-inline" v-on:submit="search()">
							<input class="form-control" id="bio-search" type="text" placeholder="Busque aquí..." aria-label="Search" v-on:input="SearchProducts($event)" v-model="searchText" autocomplete="off">
							<button class="btn btn-search" type="button" @click="search()"><img src="/assets/img/visualizar-producto-bio.svg"></button>
							<div class="keyup_search" :style="{ display: dSearch }">
								<span  :style="{display: gifSearch}">Cargando.....</span>
								<ol>
									<li v-for="ser in searched" :key="ser.id" @click="goToCatalog(ser.id)">
										<img v-if="ser.photo" :style="{ width: '6%' }" :src="ser.photo">
										{{ ser.name }}
									</li>

								</ol>
							</div>

						</form>
					</div>
					
					<div id="nav-header" class="col-lg-4 col-5">
						<ul>
							<!-- no loggeado-->
							<li id="nav-login" class="dropdown">
								<a href="#" v-if="!userlogged" id="navbarLogin" class="navbarLogin" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="link-text">Entrar / Registrarse</span> <img src="/assets/img/login-bio.png" alt="Login">
								</a>
				
								<!-- el login-->
								<div class="dropdown-menu  login_navbar" aria-labelledby="navbarLogin">
									<form action="#">
										<h3>Acceder a la cuenta</h3>
										<div class="form-group">
											<label>Correo electrónico</label>
											<input type="text" class="form-control" name="email" v-model="user.email">
										</div>
										<div class="form-group">
											<label>Contraseña</label>
											<input type="password" class="form-control" name="password" v-model="user.pass" @keypress="enterLogin($event)">
										</div>
										<div class="form-group">
											<input type="checkbox"> Recordar Contraseñas
										</div>
										<div class="form-group">
											<button type="button" @click="login()" class="btn">Entrar</button>
										</div>
										<div class="form-group form-group-register">
											<small>¿No tienes cuenta? <a  href="/join" class="white">Registrate aquí</a></small>
											<small><a href="/recover" class="white">Olvidó su Contraseña?</a></small>
										</div>
									</form>
								</div>
							</li>
							<!-- no loggeado -->
							<!-- loggeado -->
							<li id="nav-logged" v-if="!!userlogged">
								<a href="/profile"><img :src="userlogged.avatar" alt="User" style="margin-left:15px !important;"><span class="link-text" v-if="!!userlogged"> {{userlogged.name}}</span></a> 
								<a href="javascript:void(0)" @click="logout()" class="logout">
									<img src="/assets/img/icono-salir-bio.png">
								</a>
							</li>
							<!-- loggeado -->
							
							<li id="nav-cart" data-toggle="tooltip" data-placement="bottom" title="Haga click para ver el carrito">
								<a href="/cart"><img src="/assets/img/carrito-de-compras-bio.png" alt="Cart"><span class="quantity-span">{{ cant_cart }}</span></a>
							</li>

							<li id="nav-fav" v-if="userlogged" data-toggle="tooltip" data-placement="bottom" title="Haga click para ver sus favoritos">
								<a href="/profile?tab=my-favorites"><img src="/assets/img/favoritos-bio.png" alt="Favorites"><span class="quantity-span">{{cant_favorite}}</span></a>
							</li>
							<li id="nav-fav" data-toggle="tooltip" data-placement="bottom"  v-if="!!userlogged">
								<a href="#" style="background: #ED3928; border-radius: 8px; padding-right: 8px;"><img src="/assets/img/icono-puntos-bio.svg" style="width: 25px !important; height: 25px !important; padding: 5px;" alt="Bio Wallet"><span class="quantity-span">{{saldo}}</span></a>
							</li>

							<!-- loggeado -->
							<!--<li id="nav-logout"><a href="javascript:void(0)" @click="logout()"><img src="/assets/img/icono-salir-bio.png"></a></li>-->
							<!-- loggeado -->
						</ul>

					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-light color-white navbar-custom">
			<div class="container-fluid">
				<div id="mainNavbar">
					<div id="top-info" class="w-100 align-items-center">
						<div class="col-md-12 text-right">
							<button class="navbar-toggler toggle-menu" type="button">
								<img src="/assets/img/x.svg" alt="Menu Bars">
							</button>
						</div>
						<!---->
						<div class="col-md-12">
							<ul class="social-nav">
								<li><a href="https://www.facebook.com/BioMercadosVe/" target="_blank"><img src="/assets/img/icono-facebook-bio.svg" alt="Facebook"></a></li>
								<li><a href="https://www.instagram.com/biomercadosVE/" target="_blank"><img src="/assets/img/icono-instagram-bio.svg" alt="Instagram"></a></li>
								<li><a href="https://twitter.com/BioMercadosVe/" target="_blank"><img src="/assets/img/icono-twitter-bio.svg" alt="Twitter"></a></li>
								<!--<li><a href="#"><img src="/assets/img/icono-youtube-bio.svg" alt="LinkedIn"></a></li>-->
							</ul>
						</div>
						<div class="col-md-12">
							<!-- no loggeado -->
							<div class="top-info-nav" v-if="userlogged">
								<a href="#" class="bio-points">Bio Wallet<span class="quantity-span">{{saldo}}<img src="/assets/img/icono-puntos-bio.svg" alt="Bio Points"></span></a>
								<a href="#"><img src="/assets/img/favoritos-bio.svg" alt="Favorites"><span class="quantity-span">{{cant_favorite}}</span></a>
							</div>
							<!-- no loggeado -->
						</div>
					</div>
					<ul class="navbar-nav">
						<li class="nav-item" v-for="cat in categories.slice(0,5)" :key="cat.id">

							<a class="nav-link" :href="'/catalog?cat=' + cat.id">{{ cat.name }}</a>

					<!-- <template v-if="cat.name === 'VIVERES II'">
						<div class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								{{ cat.name }}
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="#">Arroz</a>
								<a class="dropdown-item" href="#">Arroz</a>
							</div>
						</div>
						</template>
						<template v-else>

							<a class="nav-link" :href="'/catalog?cat=' + cat.id">{{ cat.name }}</a>

						</template> -->

						</li>
						<!-- <li id="nav-categories" class="nav-item dropdown">
							
							<a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Viveres</a>
							<div class="dropdown-menu" aria-labelledby="navbarCategories">
								<a v-for="cat in categories.slice(5)" :key="cat.id" class="dropdown-item" :href="'/catalog?cat='+cat.id">{{cat.name}}</a>
							</div>
						</li> -->
						<li id="nav-categories" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Más Categorías
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarCategories">
								<a v-for="cat in categories.slice(5)" :key="cat.id" class="dropdown-item" :href="'/catalog?cat='+cat.id">{{cat.name}}</a>
							</div>
						</li> 
						<li id="nav-all-categories" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarCategories" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="dropdown-uppercase">Categorías</span>
								<img src="/assets/img/flecha-izquierda-bio.svg">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarCategories">
								<a v-for="cat in categories" :key="cat.id" class="dropdown-item" :href="'/catalog?cat='+cat.id" >{{cat.name}}</a>
							</div>
						</li>
						<li id="nav-bios" class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarBios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Conozca a bio mercados
								<img src="/assets/img/abajo-blanco-bio.svg">
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarBios">
								<a class="dropdown-item" href="/culture">Cultura bio</a>
								<a class="dropdown-item" href="/sucursal">Sucursales</a>
								<a class="dropdown-item" target="_blank" href="http://portalproveedores.biomercados.com.ve:18880/webui/">Proveedores</a>
								<a class="dropdown-item" href="/contact">Contacto</a>
							</div>
						</li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>
</template>
<script>
export default {
    data() {
        return {
			cant_cart: 0,
			cant_favorite: 0,
			saldo: 0,
			categories: [],
			products: [],
			searched: {},
			dSearch: 'none',
			gifSearch:'none',
			searchText: '',
			user: {
				name: '',
				email: '',
				pass: ''
			},
			logged: false
        }
	},
	props: {
		userlogged: Object,
	},
    methods: {
    	getAmountBW: function(){
    		if(this.userlogged){
    			axios.get(URLHOME+'api/getAmountBW/'+this.userlogged.id).then( datos => {
	    			this.saldo = datos.data;
	    		});
    		}
    	},
		search() {
			const route = "/catalog?search="+this.searchText;
			window.location.href = route;
			event.preventDefault();
		},
		goToCatalog(id) {
			const route = "/catalog?id="+id;
			window.location.href = route;
			event.preventDefault();
		},
        async getCategories() {
			const response = await axios.get(URLSERVER+"api/categories");
			this.categories = response.data.data;
		},
		async SearchProducts(e) {
			const len = e.target.value.length;
			let loader = this.gifSearch;
			const val = e.target.value;
			this.searched = {};
			if(len >= 3) {
				this.gifSearch = 'block';
				const response = await axios.get(URLSERVER+"api/products/search/"+val);
				this.searched = response.data.data;
				this.dSearch = 'block';
				this.gifSearch = 'none';

			} else {
				this.dSearch = 'none';
				this.gifSearch = 'none';
				
			}
		},
		async getFavorites() {
			const response = await axios.get(URLSERVER+"api/favorites");
			if(response.data.data.length > 0) {
				this.cant_favorite = response.data.data.length;
			}else {
				this.cant_favorite = 0;
			}
		},
		enterLogin(event) {
			//13 es igual a enter
			if(event.keyCode == 13 || event.key=="Enter") {
				this.login();
			}
		},
		login() {
    // Asegurémonos de que el usuario haya proporcionado un correo electrónico y una contraseña
    if (!this.user.email || !this.user.pass) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Por favor, ingrese su correo electrónico y contraseña',
        });
        return; // Detener la ejecución si falta el correo electrónico o la contraseña
    }

    // Realizar la solicitud GET al servidor para iniciar sesión
    axios.get(`${URLSERVER}api_rapida.php?evento=login&email=${this.user.email}&password=${this.user.pass}`)
        .then(response => {
            // Verificar si la solicitud fue exitosa
            if (response.data.success === false) {
                // Si la solicitud fue exitosa pero hubo un error de inicio de sesión
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: response.data.msj_general || 'Error al iniciar sesión',
                });
            } else {
                // Si el inicio de sesión fue exitoso, redirigir al usuario a la página principal
                location.href = window.location.href;
            }
        })
        .catch(error => {
            // Si hubo un error en la solicitud (por ejemplo, error de red o servidor no disponible)
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al comunicarse con el servidor. Por favor, inténtelo de nuevo más tarde.',
            });
            console.error('Error en la solicitud:', error);
        });



},

		logout()
		{
			localStorage.clear();
			localStorage.setItem('ModalPrincipal','visto');
			axios.get(URLSERVER+"api_rapida.php?evento=logout").then( () => {
				location.href = URLSERVER;
			});
		}
    },
    created() {
        EventBus.$on('update_cantCart', data => {
            this.cant_cart = data;
		});
		
		EventBus.$on('update_cantFavorite', data => {
            this.cant_favorite = data;
        });
    },
    mounted() {
		console.log("esto es la cantidad de cant_cart", this.cant_cart);
		this.getCategories();
		this.getFavorites();
		this.getAmountBW();
		if( window.localStorage.getItem("cartNew") ){
			const _this = this;
			JSON.parse(window.localStorage.getItem("cartNew")).forEach ( (a) => {
				_this.cant_cart += parseInt(a.cant);
			});
		}else{
			this.cant_cart = 0;
		}
    }
}
</script>
