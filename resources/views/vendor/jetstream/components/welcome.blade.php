<div class="p-6 sm:px-20 bg-ligth border-b border-gray-200 sm:rounded-lg">

    <div class="mt-6  text-dark">
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4 ">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />     
                </div>
                <div class="col-span-12 md:col-span-4 ">
                    <x-jet-label for="documento" value="{{ __('Documento de identidad') }}" />
                <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')" required autofocus autocomplete="documento" />
                </div>
                <div class="col-span-12 md:col-span-4 ">
                    <x-jet-label for="empresa" value="{{ __('Empresa') }}" />
                    <x-jet-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" required autofocus autocomplete="empresa" />
                </div>
      
                <div class="col-span-12 md:col-span-3 ">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
                <div class="col-span-12 md:col-span-3 ">
                    <x-jet-label for="cargo" value="{{ __('Cargo') }}" />
                    <x-jet-input id="cargo" class="block mt-1 w-full" type="text" name="cargo" :value="old('cargo')" required />
                </div>
                <div class="col-span-12 md:col-span-3 ">
                    <x-jet-label for="celular" value="{{ __('Celular') }}" />
                    <x-jet-input id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" required />
                </div>
                <div class="col-span-12 md:col-span-3 ">
                    <x-jet-label for="Red Social" value="{{ __('Red Social') }}" />
                    <x-jet-input id="Red Social" class="block mt-1 w-full" type="text" name="Red Social" :value="old('Red Social')" required />
                </div>
              </div>
            <div>
                
            </div>



            {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div> --}}
        </form>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-1">
    <div class="py-6">
        <div class="p-6 sm:px-20">
            <x-jet-label for="name" value="{{ __('¿Cuáles son las áreas de interés a desarrollar?') }}" class="text-ligth" />
            <input type="text" class="block mt-1 w-full bg-dark border-0 border-ligth border-b-2 text-ligth" name="ainteres" :value="old('name')" required autofocus autocomplete="name" >
            {{-- <x-jet-input id="name" class="block mt-1 w-full bg-dark border-0 border-ligth border-b-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />      --}}
        </div>
    </div>
</div>
