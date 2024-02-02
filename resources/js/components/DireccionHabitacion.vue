<template>
    <div>
            <div class="col-lg-12">
                    <h3 class="profile-title">Dirección de Habitación</h3>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="address-1-state">Estado:</label>
                        <select class="form-control"
                            @change="loadMunicipioHab($event)"
                            v-model="userData.habDirection.state_id"
                            :disabled="!userData.habDirection.state_id">
                            <option value="">Seleccione</option>
                            <option v-for="state in Allstates" :key="state.id" :value="state.id">{{ state.name }}</option>
                        </select>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="address-prov">Municipio:</label>
                        <select class="form-control"
                            @change="loadParroquiaHab($event)"
                            v-model="userData.habDirection.region_id">
                            <option value="">Seleccione</option>
                            <option v-for="region in Allregions" :key="region.id"
                                :value="region.id">{{ region.name }}</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="address-prov">Parroquia:</label>
                        <select class="form-control"
                            v-model="userData.habDirection.city_id">
                            <option value="">Seleccione</option>
                            <option v-for="city in Allcities" :key="city.id"
                                :value="city.id">{{ city.name }}</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address-urb">Urbanización / Empresa:</label>
                        <input type="text" class="form-control" id="address-urb"
                            name="address-urb" v-model="userData.habDirection.urb">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address-av">Sector, Avenida, calles,
                            veredas:</label>
                        <input type="text" class="form-control" id="address-av"
                            name="address-av"
                            v-model="userData.habDirection.sector">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address-num">Número de casa / Local / Apto /
                            Piso:</label>
                        <input type="text" class="form-control" id="address-num"
                            name="address-num"
                            v-model="userData.habDirection.nro_home">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address-post">Código postal:</label>
                        <input type="text" class="form-control" id="address-post"
                            name="address-post"
                            v-model="userData.habDirection.zip_code">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="address-ref">Punto de Referencia
                            (opcional):</label>
                        <input type="text" class="form-control" id="address-ref"
                            name="address-ref"
                            v-model="userData.habDirection.reference_point">
                    </div>
                </div>
            </div>
</template>

<script>
export default {
  data() {
    return {
      userData: {
        habDirection: {
          state_id: '',
          region_id: '',
          city_id: '',
          urb: '',
          sector: '',
          nro_home: '',
          zip_code: '',
          reference_point: ''
        }
      },
      Allstates: [], // Asegúrate de inicializar estas variables si no lo has hecho en otro lugar
      Allregions: [],
      Allcities: []
    };
  },
  methods: {
    async loadMunicipioHab(event) {
    try {
        const state_id = event.target.value;

        // Verificar si state_id es un valor válido
        if (!state_id) {
            console.error('State ID no es válido');
            return;
        }

        const response = await axios.get(URLSERVER + "api/regions/state/" + state_id);

        // Verificar si la solicitud fue exitosa y si hay datos en la respuesta
        if (response && response.status === 200 && response.data && response.data.data) {
            this.Allregions = response.data.data;
        } else {
            console.error('Error al cargar las regiones o la respuesta está incompleta.');
        }
    } catch (error) {
        // Capturar y manejar errores
        console.error('Error al cargar las regiones:', error.message);
    }
},

async loadParroquiaHab(event) {
			try {
				const region_id = event.target.value;

				// Verificar si region_id es un valor válido
				if (!region_id) {
					console.error('Region ID no es válido');
					return;
				}

				const response = await axios.get(URLSERVER + "api/cities/region/" + region_id);

				// Verificar si la solicitud fue exitosa y si hay datos en la respuesta
				if (response && response.status === 200 && response.data && response.data.data) {
					this.Allcities = response.data.data;
				} else {
					console.error('Error al cargar las ciudades o la respuesta está incompleta.');
				}
			} catch (error) {
				// Capturar y manejar errores
				console.error('Error al cargar las ciudades:', error.message);
			}
		},
        update_profile(user)
			{
				const that = this;
				console.log(user);

				const user_data = {
					...user,
					habDirection: {
						state_id: user.habDirection.state_id,
						region_id: user.habDirection.region_id,
						city_id: user.habDirection.city_id,
						urb: user.habDirection.urb,
						sector: user.habDirection.sector,
						nro_home: user.habDirection.nro_home,
						zip_code: user.habDirection.zip_code,
						reference_point: user.habDirection?.reference_point
							}
					};
					console.log("esto es user_data",user_data);
				axios.post(URLSERVER+'api/update_profile', {
                    user_data: user_data ,
                })
                .then(function (response) {
                	console.log(response.data);
					that.userData = response?.data;
					fetch(URLHOME + "api_rapida.php?evento=obtenerTodo");
					Swal.fire(
						'Perfil',
						'Tus datos han sido guardado exitosamente',
						'success'
					);
                })
                .catch(function (error) {
                	console.log("esto es el error",error);
                });
			},
  }
};
</script>
