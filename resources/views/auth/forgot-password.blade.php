<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">

            {{--Adaptações feitas na tela ------------------------------------------------------------------------------}}
            <link rel="stylesheet" href="css/style.css">
            <img src="img/login.png" class="img-login" alt="">
            {{--Fim das adaptações feitas na tela ----------------------------------------------------------------------}}

            {{--<x-jet-authentication-card-logo />--}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Não há problema. Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha um novo.
            ') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Link de redefinição de senha') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
