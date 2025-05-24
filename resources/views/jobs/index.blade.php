@extends('components.layouts.master')

@section('content')
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Mengapa Bekerja Bersama Kami
            </h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                Kami berfokus membangun tempat kerja di mana semua orang dapat berkembang secara profesional dan memberikan dampak nyata.
            </p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Kompensasi Kompetitif Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8c-1.657 0-3 1.343-3 3v0c0 1.657 1.343 3 3 3h3a3 3 0 010 6H9m3-12v2m0 8v2"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Kompensasi Kompetitif</h3>
                <p class="text-gray-500 dark:text-gray-400">Kami menawarkan gaji yang kompetitif, tunjangan lengkap, dan paket kepemilikan saham untuk menghargai kontribusimu.</p>
            </div>

            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Pertumbuhan Profesional Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Pertumbuhan Profesional</h3>
                <p class="text-gray-500 dark:text-gray-400">Kami berinvestasi pada pengembangan dirimu melalui tunjangan pelatihan, program mentorship, dan jalur karier yang jelas.</p>
            </div>

            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Work-life Balance Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 12a9 9 0 0118 0M12 3v9l6 3"></path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Keseimbangan Kerja dan Kehidupan</h3>
                <p class="text-gray-500 dark:text-gray-400">Pengaturan kerja fleksibel, cuti yang memadai, dan program kesehatan untuk menjaga keseimbangan hidupmu.</p>
            </div>

            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Budaya Inklusif Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M15 11a3 3 0 100-6 3 3 0 000 6zM9 11a3 3 0 100-6 3 3 0 000 6z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Budaya Inklusif</h3>
                <p class="text-gray-500 dark:text-gray-400">Kami berkomitmen menciptakan tempat kerja yang beragam dan inklusif, di mana setiap orang dihargai dan dihormati.</p>
            </div>

            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Meaningful Work Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m2-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Pekerjaan yang Bermakna</h3>
                <p class="text-gray-500 dark:text-gray-400">Kerjakan proyek-proyek menantang yang berdampak nyata dan berkontribusi pada misi inovasi dan keunggulan kami.</p>
            </div>

            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <!-- Teknologi Terkini Icon -->
                    <svg class="w-6 h-6 text-primary-600 dark:text-primary-300" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 20h9m-9 0a8 8 0 110-16 8 8 0 010 16zm-4-4h8">
                        </path>
                    </svg>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Teknologi Terkini</h3>
                <p class="text-gray-500 dark:text-gray-400">Gunakan teknologi dan alat mutakhir agar tetap berada di garis depan inovasi di bidangmu.</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Apa Kata Tim Kami</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Dengarkan langsung dari orang-orang hebat yang membuat perusahaan ini luar biasa.</p>
        </div>
        <div class="grid mb-8 lg:mb-12 lg:grid-cols-2 gap-8">
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-lg border border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Pertumbuhan Karier yang Transformatif</h3>
                    <p class="my-4">"Saya telah bekerja di perusahaan ini selama 3 tahun dan berkembang lebih banyak dibandingkan 10 tahun sebelumnya. Mentorship, proyek yang menantang, dan budaya yang mendukung sangat membantu perkembangan saya."</p>
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="Foto Profil">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Sarah Johnson</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Manajer Produk Senior</div>
                    </div>
                </figcaption>    
            </figure>
            <figure class="flex flex-col justify-center items-center p-8 text-center bg-white rounded-lg border border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
                <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Kolaboratif dan Inovatif</h3>
                    <p class="my-4">"Hal yang paling saya sukai dari bekerja di sini adalah lingkungan yang kolaboratif. Semua orang bersemangat dengan pekerjaannya dan ada semangat inovasi yang nyata. Kami didorong untuk bereksperimen dan belajar dari keberhasilan maupun kegagalan."</p>
                </blockquote>
                <figcaption class="flex justify-center items-center space-x-3">
                    <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="Foto Profil">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                        <div>Michael Chen</div>
                        <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer</div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<!-- Bagian CTA -->
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">
                Bergabunglah dengan Tim Kami
            </h2>
            <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">
                Kami selalu mencari individu berbakat untuk menjadi bagian dari tim kami. Lihat lowongan yang tersedia atau kirimkan CV Anda.
            </p>
            <a href="{{ route('jobs-list') }}" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                Lihat Lowongan
            </a>
        </div>
    </div>
</section>

@endsection
