<div>
    <div class="hero bg-base-100 max-xs:max-w-xs max-sm:max-w-sm max-md:max-w-md">
        <div class="hero-content flex-col lg:flex-row">
            <img src="{{ asset('image/director') . '/' . $setting->SETTING_DIRECTOR_IMAGE }}"
                alt="{{ $setting->SETTING_DIRECTOR_NAME }}" />
            <div>

                <div class="flex max-xl:justify-center mb-2">
                    <img src="https://ipdn.ac.id/assets/img/ipdn.png" class="mr-4 w-[10%] h-[100%]">

                    <div class="grid grid-rows-2">
                        <div class="md:text-2xl max-sm:text-sm font-semibold">
                            {{ $setting->SETTING_DIRECTOR_NAME }}
                        </div>

                        <div class="font-light max-sm:text-xs">
                            {{ __('Direktur IPDN Kampus Daerah ') . $setting->SETTING_REGIONAL }}
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <p class="max-lg:justify-center text-justify indent-5 ">
                    {{ __($setting->SETTING_DIRECTOR_MESSAGE) }}
                </p>
            </div>
        </div>
    </div>
</div>
