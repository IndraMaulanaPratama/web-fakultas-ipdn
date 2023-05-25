<div class="grid lg:mx-20 max-lg:grid-cols-1 lg:grid-cols-4 gap-5">

    {{-- Berita --}}
    <div class="bg-base-100 grid lg:col-span-3 mx-5 max-lg:mx-4 justify-center rounded-md shadow-md">

        {{-- Image Header --}}
        <figure>
            <img src="{{ asset('image/berita/berita-papua-1.JPG') }}" alt="" class="rounded-md">
        </figure>

        <div class="p-8">
            {{-- Title --}}
            <p class="font-bold text-xl my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            {{-- Berita --}}
            {{-- Paragraf 1 --}}
            <p class="text-justify indent-5 my-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur impedit repellat esse quasi
                fuga harum officia placeat accusamus a quos, laudantium aliquid numquam delectus expedita maxime! Alias,
                dolore possimus.
                Alias eaque deserunt pariatur? Quam provident earum accusantium ut suscipit saepe est eum? Laborum, non?
                Quos labore voluptatum in, culpa repellendus incidunt aut, veniam consequuntur atque sed obcaecati,
                tenetur laborum.
                Soluta tempore repellendus ea eum aut quae minima! Veniam hic iure rerum assumenda obcaecati voluptates,
                cupiditate eos sequi optio nisi minima molestiae sit exercitationem. Amet aperiam sed magnam. Aliquid,
                iusto.
                Repudiandae temporibus ut repellat doloribus accusamus optio aperiam quisquam cumque dolores placeat,
                fugit, ad maiores explicabo aspernatur? Quisquam, laudantium commodi assumenda corrupti, inventore dicta
                aliquam corporis aspernatur ratione sed esse.
                Laboriosam magnam dolores perferendis. Voluptates voluptatem odio doloremque sapiente dicta mollitia
                iusto nihil ut harum assumenda nemo alias, ea velit recusandae a sit dolorem! Quidem nihil aspernatur
                reprehenderit aliquid debitis.
                Soluta possimus ullam quo officiis, fuga ratione ipsam autem rem ex veniam similique nihil? Amet, vitae
                fugit. Repellendus, unde reiciendis. Totam magni hic recusandae consequuntur officia a quod deleniti
                temporibus!
                Neque dolor distinctio consequatur aut beatae eligendi voluptatibus nulla expedita! Recusandae doloribus
                repellendus corporis placeat voluptatem, tenetur totam pariatur minima aperiam debitis asperiores harum
                quos cum voluptas eveniet! Quae, repellat!
                Ducimus est, impedit quae ullam earum repellat incidunt quaerat, perferendis eum sint similique.
                Accusamus eos hic ex quidem asperiores ratione tenetur necessitatibus, excepturi nisi itaque. Recusandae
                quae dignissimos ipsum similique?
                Corporis sit magni animi cumque eius, error ipsa, et amet aliquid cum nesciunt reiciendis assumenda
                ullam fugiat rem inventore eveniet autem unde atque harum veniam quas sapiente facilis. Ex, animi.
                Eaque ipsum explicabo numquam dolor at dignissimos officiis a fugiat nisi reprehenderit pariatur omnis
                tenetur accusantium inventore delectus eos accusamus nihil, beatae nobis blanditiis. Ratione vel vitae
                debitis ducimus dolores?
            </p>

            {{-- Paragraf 2 --}}
            <p class="text-justify indent-5 my-3">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur impedit repellat esse quasi
                fuga harum officia placeat accusamus a quos, laudantium aliquid numquam delectus expedita maxime! Alias,
                dolore possimus.
                Alias eaque deserunt pariatur? Quam provident earum accusantium ut suscipit saepe est eum? Laborum, non?
                Quos labore voluptatum in, culpa repellendus incidunt aut, veniam consequuntur atque sed obcaecati,
                tenetur laborum.
                Soluta tempore repellendus ea eum aut quae minima! Veniam hic iure rerum assumenda obcaecati voluptates,
                cupiditate eos sequi optio nisi minima molestiae sit exercitationem. Amet aperiam sed magnam. Aliquid,
                iusto.
                Repudiandae temporibus ut repellat doloribus accusamus optio aperiam quisquam cumque dolores placeat,
                fugit, ad maiores explicabo aspernatur? Quisquam, laudantium commodi assumenda corrupti, inventore dicta
                aliquam corporis aspernatur ratione sed esse.
                Laboriosam magnam dolores perferendis. Voluptates voluptatem odio doloremque sapiente dicta mollitia
                iusto nihil ut harum assumenda nemo alias, ea velit recusandae a sit dolorem! Quidem nihil aspernatur
                reprehenderit aliquid debitis.
                Soluta possimus ullam quo officiis, fuga ratione ipsam autem rem ex veniam similique nihil? Amet, vitae
                fugit. Repellendus, unde reiciendis. Totam magni hic recusandae consequuntur officia a quod deleniti
                temporibus!
                Neque dolor distinctio consequatur aut beatae eligendi voluptatibus nulla expedita! Recusandae doloribus
                repellendus corporis placeat voluptatem, tenetur totam pariatur minima aperiam debitis asperiores harum
                quos cum voluptas eveniet! Quae, repellat!
                Ducimus est, impedit quae ullam earum repellat incidunt quaerat, perferendis eum sint similique.
                Accusamus eos hic ex quidem asperiores ratione tenetur necessitatibus, excepturi nisi itaque. Recusandae
                quae dignissimos ipsum similique?
                Corporis sit magni animi cumque eius, error ipsa, et amet aliquid cum nesciunt reiciendis assumenda
                ullam fugiat rem inventore eveniet autem unde atque harum veniam quas sapiente facilis. Ex, animi.
                Eaque ipsum explicabo numquam dolor at dignissimos officiis a fugiat nisi reprehenderit pariatur omnis
                tenetur accusantium inventore delectus eos accusamus nihil, beatae nobis blanditiis. Ratione vel vitae
                debitis ducimus dolores?
            </p>

        </div>

    </div>

    {{-- Sidebar --}}
    <div class=" rounded-md mx-5 max-lg:my-3">
        {{-- <div class="divider mb-7">
            <p class="font-thin">Category</p>
        </div> --}}

        {{-- List Category --}}
        <div class="flex flex-col border border-base-200 border-opacity-75 shadow-md rounded-md p-5">
            <p class="flex justify-center font-medium">Daftar Kategori</p>

            <div class="divider"></div>

            <ul class="list">
                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-pertama') }}" class="link link-hover link-neutral">kategori
                        Pertama</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-kedua') }}" class="link link-hover link-neutral">kategori
                        Kedua</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-ketiga') }}" class="link link-hover link-neutral">kategori
                        Ketiga</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-keempat') }}" class="link link-hover link-neutral">kategori
                        Keempat</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-kelima') }}" class="link link-hover link-neutral">kategori
                        Kelima</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-keenam') }}" class="link link-hover link-neutral">kategori
                        Keenam</a>
                </li>

                <li class="mb-2">
                    <a href="{{ URL::to('kategori/kategori-ketujuh') }}" class="link link-hover link-neutral">kategori
                        Ketujuh</a>
                </li>

                <li class="mb-2 mt-5">
                    <a href="{{ URL::to('kategori/') }}" class="link link-hover link-neutral">Lihat semua Kategori</a>
                </li>


            </ul>
        </div>

        <div class="divider mb-7 mt-14">
            <p class="font-thin">Berita Terkait</p>
        </div>

        {{-- Berita Terkait --}}
        <ul class="list list-disc list-outside">
            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-pertama') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    pertama</a>
            </li>

            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-kedua') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    kedua</a>
            </li>

            <li class="mb-4">
                <a href="{{ URL::to('berita/Berita-ketiga') }}" class="link link-hover link-neutral">Ini Adalah Berita
                    Terkait yang
                    ketiga</a>

            </li>
        </ul>
        {{-- End Berita Terbaru --}}

    </div>

</div>
