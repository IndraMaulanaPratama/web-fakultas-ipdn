<div>
    <div class="carousel max-md:max-w-sm max-w-2xl rounded-box lg:max-w-7xl space-x-4 pb-8">

        @foreach ($data as $item)
            <div class="carousel-item max-md:max-w-sm md:w-1/2 lg:w-1/2">
                <div class="card w-full bg-slate-100 bg-opacity-70 shadow-md shadow-gray-400">
                    <div class="card-body p-16">
                        {{-- Title --}}
                        <h1 class="card-title justify-center text-3xl max-lg:text-lg max-lg:mb-6 lg:mb-10">
                            {{ __('Apa yang Praja Katakan Tentang IPDN Kampus ') . $setting->SETTING_REGIONAL }}
                        </h1>

                        {{-- Body --}}
                        <p class="mb-7">
                            “{{ __($item->TESTIMONI_CONTENT) }}”
                        </p>

                        {{-- Profile --}}
                        <div class="card-actions justify-start items-center lg:flex lg:flex-row">
                            <div class="avatar max-lg:w-full max-lg:justify-center">
                                <div class="max-lg:w-24 lg:w-36 rounded-full">
                                    <img
                                        src="https://kalbar.ipdn.ac.id/wp-content/uploads/2022/06/Senapati-scaled-e1654753812578-150x150.jpg" />
                                </div>
                            </div>

                            <div class="max-lg:text-center">
                                <div class="font-semibold max-lg:text-sm lg:text-xl">{{ __($item->TESTIMONI_USERNAME) }},</div>
                                <div class="max-lg:text-sm font-light"> {{ __('Senapati IPDN Kampus Kalbar Angkatan ') . $item->TESTIMONI_BATCH }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
