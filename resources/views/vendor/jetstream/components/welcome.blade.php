<div class="p-6 sm:px-20 bg-ligth border-b border-gray-200 sm:rounded-lg">

    <div class="mt-6  text-dark">
        <x-jet-validation-errors class="mb-4" />



        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div>
                <a href="{{ route('login.driver', 'google') }}"
                    class="login-driver flex justify-center rounded-full border border-dark w-fit px-2 py-1 m-auto">
                    <img src="{{ config('app.url') }}/src/Google.png" alt="">
                    <span class="ml-2">Iniciar con google</span>
                </a>
            </div>
            <div>
                <a href="{{ route('login.driver', 'facebook') }}"
                    class="login-driver flex justify-center rounded-full border border-dark w-fit px-2 py-1 m-auto">
                    <img src="{{ config('app.url') }}/src/Facebook.png" alt="">
                    <span class="ml-2">Iniciar con facebook</span>
                </a>
            </div>
            <div>
                {{-- <a href="{{config('app.url')}}/login/linkedin" --}}
                <a href="{{ route('login.driver', 'linkedin') }}"
                    class="login-driver flex justify-center rounded-full border border-dark w-fit px-2 py-1 m-auto">
                    <img src="{{ config('app.url') }}/src/LinkedIn.png" alt="">
                    <span class="ml-2">Iniciar con linkedin</span>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-4 ">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                @if (session('user'))
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" value="{{session('user')->name}}" required autofocus autocomplete="name" />
                @else
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                @endif
            </div>
            <div class="col-span-12 md:col-span-4 ">
                <x-jet-label for="documento" value="{{ __('Documento de identidad') }}" />
                <x-jet-input id="documento" class="block mt-1 w-full" type="text" name="documento" :value="old('documento')"
                    required autofocus autocomplete="documento" />
            </div>
            <div class="col-span-12 md:col-span-4 ">
                <x-jet-label for="empresa" value="{{ __('Empresa') }}" />
                <x-jet-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')"
                    required autofocus autocomplete="empresa" />
            </div>

            <div class="col-span-12 md:col-span-3 ">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                @if (session('user'))
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" value="{{session('user')->email}}" required />
                @else
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                @endif
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
                @if (session('driver'))
                    <x-jet-label for="redsocial" value="{{ __('Red Social') }}" />
                    <x-jet-input id="redsocial" class="block mt-1 w-full" type="text" name="redsocial" :value="old('redsocial')" value="{{session('driver')}}" readonly  />
                @else
                    {{-- <x-jet-input id="redsocial" class="block mt-1 w-full" type="text" name="redsocial" :value="old('redsocial')" readonly/> --}}
                @endif
            </div>
        </div>


        {{-- <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>             
            </div> --}}
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-1">
    <div class="py-6">
        <div class="p-6 sm:px-20">
            {{-- <x-jet-label for="name" value="{{ __('¿Cuáles son las áreas de interés a desarrollar?') }}" class="text-ligth" />
            <input type="text" class="block mt-1 w-full bg-dark border-0 border-ligth border-b-2 text-ligth" name="ainteres" :value="old('name')" required autofocus autocomplete="name" > --}}
            {{-- <x-jet-input id="name" class="block mt-1 w-full bg-dark border-0 border-ligth border-b-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
        </div>
    </div>
</div>
