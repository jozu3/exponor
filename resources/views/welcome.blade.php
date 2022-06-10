<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="mt-8 text-4xl text-ligth">
                <b>EXPO</b>NOR 2022
            </div>
        </h1>
    </x-slot>

    <div class="py-12" style="margin-top: -230px">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden ">
                <x-jet-welcome />
            </div>
        </div>
    </div>



    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}

    <div class="flex justify-center items-center bg-section">
        <!--actual component start-->
        <div x-data="setup()" class="w-full max-w-7xl mx-auto sm:px-6 lg:px-8">
            <ul class="flex justify-center items-center my-4">
                <template x-for="(tab, index) in tabs" :key="index">
                    <li class="cursor-pointer py-2 px-4 bg-ligth text-dark border-0 rounded-full m-4"
                        :class="activeTab === index ? 'bg-dark text-ligth border-0' : ''" @click="activeTab = index"
                        x-text="tab"></li>
                </template>
            </ul>

            <div class="w-full p-16 text-left mx-auto">
                <div x-show="activeTab===0" class="w-100">
                    <h2 class="font-bold text-ligth text-2xl mb-4">CUENTANOS SOBRE TU EMPRESA</h2>
                    <div>
                        <b>
                            <li class="text-dark">Desplaza la barra para el nivel de planta</li>
                            <div class="div-range-input">
                                <input type="range" class="range-input" min="1" max="3">
                            </div>
                            <div>
                                <div class="flex justify-between m-auto text-ligth" style="width:80%; ">
                                    <div>Bajo</div>
                                    <div>Medio</div>
                                    <div>Alto</div>
                                </div>
                            </div>
                        </b>
                        <br>
                    </div>
                    <div>
                        <b>
                            <li class="text-dark">Desplaza la barra para identificar cuál es el nivel de
                                tecnificación mantenimiento predictivo</li>
                        </b>
                        <div class="div-range-input">
                            <input type="range" class="range-input" min="1" max="3">
                        </div>
                        <div>
                            <div class="flex justify-between m-auto text-ligth" style="width:80%; ">
                                <div>Bajo</div>
                                <div>Medio</div>
                                <div>Alto</div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div>
                        <b>
                            <li class="text-dark">¿Cuáles son las áreas de interes a desarrollar?</li>
                        </b>
                        <div class="text-center">
                            <textarea class="textarea-exponor mt-2" placeholder="Escribe algo..." name="p3" id="p3" cols="100%" rows="5" ></textarea>
                        </div>
                    </div>
                    <div>
                        <b>
                            <li class="text-dark">Selecciona el rango estimado de presupuesto de mantenimiento</li>
                        </b>
                        <div>
                            <div class="flex justify-between m-auto text-ligth" style="width:80%; ">
                                <div>
                                    <label for="">
                                        <input type="radio" name="p4">
                                        <img src="{{config('app.url')}}/src/icons/Mail.png" alt="">
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div>
                        <b>
                            <li class="text-dark">Comercialmente como se relaciona con SKF</li>
                        </b>
                        <div>
                            <div class="flex justify-between m-auto text-ligth" style="width:80%; ">
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                                <div>
                                    <input type="radio" name="p4">
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div x-show="activeTab===1" class="w-100">
                    <h2 class="font-bold text-2xl">SOBRE LOS PRODUCTO EN FERIA DE INTERES</h2>

                </div>
                <div x-show="activeTab===2" class="w-100">
                    <h2 class="font-bold text-2xl">FINALMENTE QUEREMOS SABER COMO CONTACTARNOS CONTIGO</h2>
                </div>
            </div>

            <div class="flex gap-4 justify-center border-t p-4">
                <button
                    class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                    @click="activeTab--" x-show="activeTab>0">Back</button>
                <button
                    class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
                    @click="activeTab++" x-show="activeTab<tabs.length-1">Next</button>
            </div>
        </div>
        <!--actual component end-->
    </div>

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
    @livewire('section-form')

</x-app-layout>
