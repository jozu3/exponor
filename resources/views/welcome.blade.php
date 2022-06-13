<x-app-layout>
    <x-slot name="header">
        <h1 class="leading-tight">
            <div class="mt-8 text-ligth" style="font-size: 4rem;">
                <b>EXPO</b>NOR 2022
            </div>
        </h1>
    </x-slot>
    <form method="POST" action="{{ route('register') }}">
        @csrf


        <div class="py-12" style="margin-top: -230px">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <x-jet-welcome />
                </div>
            </div>
        </div>

        @if (session('user'))
            <input type="hidden" value="{{session('user')->id}}" name="driver_id" readonly>
        @endif
        @auth
            
        @endauth
        {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
        
        <div class="flex justify-center items-center bg-section">
            <!--actual component start-->
            <div x-data="setup()" class="w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
                <ul class="flex justify-center items-center my-4">
                    <template x-for="(tab, index) in tabs" :key="index">
                        <li class="cursor-pointer xs:py-1 md:py-2 xs:px-2 md:px-4 bg-ligth text-dark border-0 rounded-full m-4 xs:text-xs"
                            :class="activeTab === index ? 'bg-dark text-ligth border-0' : ''" @click="activeTab = index"
                            x-text="tab"></li>
                    </template>
                </ul>

                <div class="w-full p-16 text-left mx-auto">
                    <div x-show="activeTab===0" class="w-100">
                        <h2 class="font-bold text-ligth text-2xl mb-4">CUENTANOS SOBRE TU EMPRESA</h2>
                        <div class="mb-8">
                            <b>
                                <li class="text-dark mb-6">Desplaza la barra para el nivel de planta</li>
                                <div class="div-range-input">
                                    <input type="range" name="nivel_planta" class="range-input" min="1" max="3">
                                </div>
                                <div>
                                    <div class="flex justify-between m-auto text-ligth font-bold" style="width:75%; ">
                                        <div>Bajo</div>
                                        <div>Medio</div>
                                        <div>Alto</div>
                                    </div>
                                </div>
                            </b>
                            <br>
                        </div>
                        <div class="mb-8">
                            <b>
                                <li class="text-dark mb-6">Desplaza la barra para identificar cuál es el nivel de
                                    tecnificación mantenimiento predictivo</li>
                            </b>
                            <div class="div-range-input">
                                <input type="range" name="nivel_mantenimiento" class="range-input" min="1" max="3">
                            </div>
                            <div>
                                <div class="flex justify-between m-auto text-ligth font-bold" style="width:75%; ">
                                    <div>Bajo</div>
                                    <div>Medio</div>
                                    <div>Alto</div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="mb-8">
                            <b>
                                <li class="text-dark mb-4">¿Cuáles son las áreas de interes a desarrollar?</li>
                            </b>
                            <div class="text-center">
                                <textarea class="textarea-exponor mt-2" placeholder="Escribe algo..." name="areas_interes" id="p3" cols="100%" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="mb-8">
                            <b>
                                <li class="text-dark mb-6">Selecciona el rango estimado de presupuesto de mantenimiento
                                </li>
                            </b>
                            <div>
                                <div class="md:flex md:justify-between m-auto text-ligth" style="width:80%; ">
                                    <div>
                                        <label for="r1">
                                            <img id="p4r1" src="{{ config('app.url') }}/src/IMG/p4r1.png"
                                                class="img-radio-p4 cursor-pointer" alt="">
                                        </label>
                                        <input id="r1" type="radio" name="presupuesto" class="hidden" value="1">
                                    </div>
                                    <div>
                                        <label for="r2">
                                            <img id="p4r2" src="{{ config('app.url') }}/src/IMG/p4r2.png"
                                                class="img-radio-p4 cursor-pointer" alt="">
                                        </label>
                                        <input id="r2" type="radio" name="presupuesto" class="hidden" value="2">
                                    </div>
                                    <div>
                                        <label for="r3">
                                            <img id="p4r3" src="{{ config('app.url') }}/src/IMG/p4r3.png"
                                                class="img-radio-p4 cursor-pointer" alt="">
                                        </label>
                                        <input id="r3" type="radio" name="presupuesto" class="hidden" value="3">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="mb-8">
                            <b>
                                <li class="text-dark mb-6">Comercialmente como se relaciona con SKF</li>
                            </b>
                            <div>
                                <div class="md:flex md:justify-between m-auto text-ligth" style="width:80%; ">
                                    <div>
                                        <label for="p5r1">
                                            <div id="dp5r1"
                                                class="p-4 dp5 bg-ligth text-dark rounded-lg cursor-pointer">
                                                Ventas Spot</div>
                                        </label>
                                        <input id="p5r1" type="radio" class="hidden" name="relacionskf"
                                            value="1">
                                    </div>
                                    <div>
                                        <label for="p5r2">
                                            <div id="dp5r2"
                                                class="p-4 dp5 bg-ligth text-dark rounded-lg cursor-pointer">
                                                Contratos de suministro</div>
                                        </label>
                                        <input id="p5r2" type="radio" class="hidden" name="relacionskf"
                                            value="2">
                                    </div>
                                    <div>
                                        <label for="p5r3">
                                            <div id="dp5r3"
                                                class="p-4 dp5 bg-ligth text-dark rounded-lg cursor-pointer">
                                                Compra de reposición</div>
                                        </label>
                                        <input id="p5r3" type="radio" class="hidden" name="relacionskf"
                                            value="3">
                                    </div>
                                    <div>
                                        <label for="p5r4">
                                            <div id="dp5r4"
                                                class="p-4 dp5 bg-ligth text-dark rounded-lg cursor-pointer">Soy
                                                un nuevo cliente</div>
                                        </label>
                                        <input id="p5r4" type="radio" class="hidden" name="relacionskf"
                                            value="4">
                                    </div>

                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div x-show="activeTab===1" class="w-100">
                        <h2 class="font-bold text-2xl mb-16">SOBRE LOS PRODUCTO EN FERIA DE INTERES</h2>
                        {{-- <div class="grid grid-rows-5 md:grid-rows-2 grid-flow-col gap-4"> --}}
                        <div class="md:flex md:justify-around">
                            <div class="mb-10">
                                <label for="productosferia_servicio">
                                    <div style="" id="div-productosferia_servicio"
                                        class="dp6 cursor-pointer flex items-center justify-end bg-ligth font-bold text-dark rounded-full m-auto">
                                        <span>Servicio</span>
                                        <span class="bg-dark rounded-full float-right span-img-p6">
                                            <img id="img-productosferia_servicio"
                                                src="{{ config('app.url') }}/src/icons/Servicio.png" alt=""
                                                class="inline-block img-p6">
                                        </span>
                                    </div>
                                    <input id="productosferia_servicio" type="checkbox" class="productos_feria hidden"
                                        name="productosferia_servicio" value="Servicio">
                                </label>
                            </div>
                            <div class="mb-10">
                                <label for="productosferia_tecnologia">
                                    <div style="" id="div-productosferia_tecnologia"
                                        class="dp6 cursor-pointer flex items-center justify-end bg-ligth font-bold text-dark rounded-full m-auto">
                                        <span>Tecnología</span>
                                        <span class="bg-dark rounded-full float-right span-img-p6">
                                            <img id="img-productosferia_tecnologia"
                                                src="{{ config('app.url') }}/src/icons/Tecnologia.png" alt=""
                                                class="inline-block img-p6">
                                        </span>
                                    </div>
                                    <input id="productosferia_tecnologia" type="checkbox" class="productos_feria hidden"
                                        name="productosferia_tecnologia" value="Tecnología">
                                </label>
                            </div>
                            <div class="mb-10">
                                <label for="productosferia_remanufac">
                                    <div style="" id="div-productosferia_remanufac"
                                        class="dp6 cursor-pointer flex items-center justify-end bg-ligth font-bold text-dark rounded-full m-auto">
                                        <span>Remanufactura</span>
                                        <span class="bg-dark rounded-full float-right span-img-p6">
                                            <img id="img-productosferia_remanufac"
                                                src="{{ config('app.url') }}/src/icons/Remanufactura.png" alt=""
                                                class="inline-block img-p6">
                                        </span>
                                    </div>
                                    <input id="productosferia_remanufac" type="checkbox" class="productos_feria hidden"
                                        name="productosferia_remanufac" value="Remanufactura">
                                </label>
                            </div>
                        </div>
                        <div class="md:flex md:justify-around">
                            <div class="mb-10">
                                <label for="productosferia_recondoil">
                                    <div style="" id="div-productosferia_recondoil"
                                        class="dp6 cursor-pointer flex items-center justify-end bg-ligth font-bold text-dark rounded-full m-auto">
                                        <span>Recondoil</span>
                                        <span class="bg-dark rounded-full float-right span-img-p6">
                                            <img id="img-productosferia_recondoil"
                                                src="{{ config('app.url') }}/src/icons/Recondoil.png" alt=""
                                                class="inline-block img-p6">
                                        </span>
                                    </div>
                                    <input id="productosferia_recondoil" type="checkbox" class="productos_feria hidden"
                                        name="productosferia_recondoil" value="Recondoil">
                                </label>
                            </div>
                            <div class="mb-10">
                                <label for="productosferia_sis_lubrica">
                                    <div style="" id="div-productosferia_sis_lubrica"
                                        class="dp6 cursor-pointer flex items-center justify-end bg-ligth font-bold text-dark rounded-full m-auto">
                                        <span>Sistemas de lubricación</span>
                                        <span class="bg-dark rounded-full float-right span-img-p6">
                                            <img id="img-productosferia_sis_lubrica"
                                                src="{{ config('app.url') }}/src/icons/lubricacion.png" alt=""
                                                class="inline-block img-p6">
                                        </span>
                                    </div>
                                    <input id="productosferia_sis_lubrica" type="checkbox" class="productos_feria hidden"
                                        name="productosferia_sis_lubrica" value="Sistemas de lubricación">
                                </label>
                            </div>

                        </div>
                    </div>
                    <div x-show="activeTab===2" class="w-100">
                        <h2 class="font-black text-ligth text-2xl mb-20">FINALMENTE QUEREMOS SABER COMO CONTACTARNOS
                            CONTIGO</h2>
                        <div class="grid grid-rows-3 md:grid-rows-2 grid-flow-col gap-4">
                            <div>
                                <label for="llamada">
                                    <div id="div-llamada" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/llamada.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Llamada</div>
                                    <input id="llamada" type="radio" class="hidden" name="tipocontacto"
                                        value="Llamada">
                                </label>
                            </div>
                            <div>
                                <label for="mail">
                                    <div id="div-mail" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/Mail.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Mail</div>
                                    <input id="mail" type="radio" class="hidden" name="tipocontacto" value="Mail">
                                </label>
                            </div>
                            <div>
                                <label for="videollamada">
                                    <div id="div-videollamada" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/Videollamada.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Videollamada</div>
                                    <input id="videollamada" type="radio" class="hidden" name="tipocontacto"
                                        value="Videollamada">
                                </label>
                            </div>
                            <div>
                                <label for="wasap">
                                    <div id="div-wasap" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/Wsp.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Whatsapp</div>
                                    <input id="wasap" type="radio" class="hidden" name="tipocontacto"
                                        value="Whatsapp">
                                </label>
                            </div>
                            <div>
                                <label for="presencial">
                                    <div id="div-presencial" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/Presencial.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Reunión presencial
                                    </div>
                                    <input id="presencial" type="radio" class="hidden" name="tipocontacto"
                                        value="Reunión presencial">
                                </label>
                            </div>
                            <div>
                                <label for="todas">
                                    <div id="div-todas" class="div-contacto cursor-pointer rounded-full bg-dark p-6 m-auto max-w-fit">
                                        <img width="150px" class=""
                                            src="{{ config('app.url') }}/src/icons/TA.png" alt="">
                                    </div>
                                    <div class="text-center text-ligth text-lg font-bold rob-Bold">Todas las anteriores
                                    </div>
                                    <input id="todas" type="radio" class="hidden" name="tipocontacto"
                                        value="Todas las anteriores">
                                </label>
                            </div>
                        </div>

                        <div class="mt-20 text-center">
                            <x-jet-button class="ml-4">
                                {{ __('Register') }}
                            </x-jet-button>

                        </div>
                    </div>
                </div>

                <div class="flex gap-4 justify-center border-t p-4">
                    <button type="button"
                        class="py-2 px-4 border rounded-full border-dark text-dark cursor-pointer uppercase text-sm font-bold hover:bg-dark hover:text-white "
                        @click="activeTab--" x-show="activeTab>0">Atrás</button>
                    <button type="button"
                        class="py-2 px-4 border rounded-full border-dark text-dark cursor-pointer uppercase text-sm font-bold hover:bg-dark hover:text-white "
                        @click="activeTab++" x-show="activeTab<tabs.length-1">Siguiente</button>
                </div>
            </div>
            <!--actual component end-->
        </div>

    </form>
    <script>
        function setup() {
            return {
                activeTab: 0,
                tabs: [
                    "EMPRESA",
                    "PRODUCTOS",
                    "CONTACTO",
                ]
            };
        };
    </script>

</x-app-layout>
