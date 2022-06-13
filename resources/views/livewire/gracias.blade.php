<div>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            <h3 class="text-center">
                <img src="{{config('app.url')}}/src/favicon.png" class="m-auto" width="20%" alt="">
            </h3>
            <h3 class="leading-tight text-center text-ligth mt-10">
                 Muchas gracias 
            </h3>
        </x-slot>
        <x-slot name="content">
            <h1 class="text-ligth font-bold text-center text-2xl mb-10">SKF Chilena agradece tu asistencia a
                <br>
                <div class="mt-8 text-ligth" style="font-size: 2rem;">
                    <b>EXPO</b>NOR 2022
                </div>
            </h1>
        </x-slot>
        <x-slot name="footer">
            <div class="text-center mb-10">
                <a href="https://cl.promo.skf.com/acton/media/23866/exponor-chile-2022" target="_blank"
                    class=" bg-ligth text-dark rounded-full text-center py-4 px-8 m-auto">
                   <b> Descarga brochures SKF</b>
                </a>
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>
