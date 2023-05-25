<div>
    {{-- Be like water. --}}


    {{-- Div Form Login --}}

    <div class="flex justify-center">
        <img src="{{ asset('image/logo/logo-ipdn.png') }}" alt="logo-ipdn" class="w-[200px] ">
    </div>

    {{-- Div Title Form --}}
    <div class=" flex justify-center">
        <p class="text-xl text-gray-700 font-medium">IPDN Kampus Daerah</p>
    </div>

    <form wire:submit.prevent="login">
        <form-control class="flex flex-col justify-center gap-4">
            {{-- Input Email --}}
            <input class="input input-bordered input-secondary w-full max-w-xl" type="email" placeholder="Nama Pengguna"
                wire:model.lazy="email" required>
            @error('email')
                <div class="text-error font-medium">{{ $message }}</div>
            @enderror

            {{-- Input Password --}}
            <input class="input input-bordered input-secondary w-full max-w-xl" type="password"
                wire:model.lazy="password" placeholder="Kata Sandi" required>
            @error('password')
                <div class="text-error font-medium">{{ $message }}</div>
            @enderror

            {{-- Button Submit --}}
            {{-- <input type="submit" class="btn btn-secondary btn-sm max-w-xl" value="Masuk"> --}}
            <button class="btn btn-secondary btn-sm max-w-xl"> Masuk </button>

            {{-- Error Message --}}
            {{-- @if ($errorMessage)
                            <div class="mb-4 text-sm font-medium text-red-600">
                                {{ $errorMessage }}
                            </div>
                        @endif --}}

        </form-control>
    </form>

    <div class="divider"></div>

    {{-- Forgot Password --}}
    <div class="font-light">
        <p>Terkendala dalam proses login?</p>
        <a href="" class="link link-hover link-secondary hover:link-error hover:font-normal">Minta
            Bantuan Admin Kami</a>
    </div>

</div>
