@extends('components.layouts.master')

@section('content')
<section
    class="min-h-screen relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 dark:from-primary-800 dark:via-primary-900 dark:to-gray-900 overflow-hidden">

    <!-- Background Pattern -->
    <div
        class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Ccircle cx=\'7\' cy=\'7\' r=\'1\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] bg-repeat">
    </div>

    <div class="relative py-20 px-4 mx-auto max-w-screen-xl sm:py-28 lg:px-6">
        <div class="max-w-screen-md text-center mx-auto">

            <!-- Badge -->
            <div
                class="inline-flex items-center px-5 py-2.5 mb-6 text-sm font-medium text-primary-100 bg-primary-800/30 rounded-full backdrop-blur-sm border border-primary-400/20">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                        clip-rule="evenodd" />
                </svg>
                Karier Terbaik Menanti Anda
            </div>

            <!-- Title -->
            <h1 class="mb-6 text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight">
                Mengapa Bekerja
                <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                    Bersama Kami
                </span>
            </h1>

            <!-- Subtext -->
            <p class="text-lg sm:text-xl text-primary-100 font-light leading-relaxed max-w-2xl mx-auto">
                Kami berfokus membangun tempat kerja di mana semua orang dapat berkembang secara profesional dan
                memberikan dampak nyata bagi dunia.
            </p>
        </div>
    </div>
</section>


<!-- Benefits Sections -->
<section class="bg-gray-50 dark:bg-gray-800 py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                Kenapa Bergabung dengan Kami?
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                Kami percaya bahwa tim hebat dimulai dari budaya kerja yang sehat, dukungan penuh, dan peluang
                bertumbuh.
            </p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3 xl:gap-12">
            <!-- Kompensasi Kompetitif -->
            <div
                class="group relative bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700 overflow-hidden">
                <!-- Background Gradient -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div
                        class="flex justify-center items-center mb-6 w-16 h-16 rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8c-1.657 0-3 1.343-3 3v0c0 1.657 1.343 3 3 3h3a3 3 0 010 6H9m3-12v2m0 8v2">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="mb-4 text-2xl font-bold text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors duration-300">
                        Kompensasi Kompetitif
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Kami menawarkan gaji yang kompetitif, tunjangan lengkap, dan paket kepemilikan saham untuk
                        menghargai kontribusimu.
                    </p>

                    <!-- Benefits List -->
                    <div class="mt-6 space-y-2">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-violet-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Latest cloud technologies
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-violet-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            AI/ML tools & frameworks
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-violet-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Premium development tools
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pertumbuhan Profesional -->
            <div
                class="group relative bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div
                        class="flex justify-center items-center mb-6 w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                        </svg>
                    </div>
                    <h3
                        class="mb-4 text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                        Pertumbuhan Profesional
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Dapatkan tunjangan belajar, sertifikasi, dan mentoring dari profesional terbaik di industri.
                    </p>
                    <div class="mt-6 space-y-2">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Budget pelatihan tahunan
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Akses kursus & bootcamp premium
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Mentoring dari senior engineer
                        </div>
                    </div>
                </div>
            </div>

            <!-- Keseimbangan Hidup -->
            <div
                class="group relative bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div
                    class="absolute inset-0 bg-gradient-to-br from-pink-50 to-fuchsia-50 dark:from-pink-900/20 dark:to-fuchsia-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                </div>

                <div class="relative z-10">
                    <div
                        class="flex justify-center items-center mb-6 w-16 h-16 rounded-2xl bg-gradient-to-br from-pink-500 to-fuchsia-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.29.534 6.121 1.477M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3
                        class="mb-4 text-2xl font-bold text-gray-900 dark:text-white group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors duration-300">
                        Keseimbangan Hidup
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Kami percaya performa terbaik lahir dari hidup yang seimbang. Waktu kerja fleksibel dan cuti
                        yang mendukung.
                    </p>
                    <div class="mt-6 space-y-2">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Waktu kerja fleksibel
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Cuti tahunan yang memadai
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg class="w-4 h-4 mr-2 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Dukungan kesehatan mental
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Stats Section -->
        <div class="mt-20">
            <div
                class="bg-white dark:bg-gray-900 rounded-3xl shadow-xl p-8 lg:p-12 border border-gray-200 dark:border-gray-700">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="space-y-2">
                        <div
                            class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-primary-600 to-primary-800 bg-clip-text text-transparent">
                            100+
                        </div>
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wide">
                            Tim Profesional
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div
                            class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-green-600 to-emerald-800 bg-clip-text text-transparent">
                            95%
                        </div>
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wide">
                            Employee Satisfaction
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div
                            class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-blue-600 to-indigo-800 bg-clip-text text-transparent">
                            15+
                        </div>
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wide">
                            Negara
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div
                            class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-purple-600 to-pink-800 bg-clip-text text-transparent">
                            4.8/5
                        </div>
                        <div class="text-sm font-medium text-gray-600 dark:text-gray-400 uppercase tracking-wide">
                            Glassdoor Rating
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900 py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-12 lg:mb-16">
            <div
                class="inline-flex items-center px-4 py-2 mb-6 text-sm font-medium text-primary-700 bg-primary-100 rounded-full dark:bg-primary-900 dark:text-primary-300">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                Testimoni Tim Kami
            </div>
            <h2 class="mb-6 text-4xl lg:text-5xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Apa Kata Tim Kami
            </h2>
            <p class="text-xl font-light text-gray-500 dark:text-gray-400 leading-relaxed">
                Dengarkan langsung dari orang-orang hebat yang membuat perusahaan ini luar biasa.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            <!-- Testimonial 1 -->
            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                </div>
                <div
                    class="relative bg-white dark:bg-gray-800 p-8 lg:p-12 rounded-2xl border border-gray-200 dark:border-gray-700">
                    <!-- Quote Icon -->
                    <div class="absolute top-8 right-8 opacity-10">
                        <svg class="w-16 h-16 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z">
                            </path>
                        </svg>
                    </div>

                    <div class="relative">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            Pertumbuhan Karier yang Transformatif
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                            "Saya telah bekerja di perusahaan ini selama 3 tahun dan berkembang lebih banyak
                            dibandingkan 10 tahun sebelumnya. Mentorship, proyek yang menantang, dan budaya yang
                            mendukung sangat membantu perkembangan saya."
                        </p>

                        <!-- Rating -->
                        <div class="flex items-center mb-6">
                            <div class="flex space-x-1">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">5.0</span>
                        </div>

                        <div class="flex items-center">
                            <div class="relative">
                                <img class="w-14 h-14 rounded-full border-4 border-white dark:border-gray-800 shadow-lg"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                                    alt="Sarah Johnson">
                                <div class="absolute -bottom-1 -right-1 bg-green-500 rounded-full p-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-lg font-semibold text-gray-900 dark:text-white">Sarah Johnson</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Manajer Produk Senior</div>
                                <div class="text-xs text-green-600 dark:text-green-400 font-medium">3 tahun bergabung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="relative group">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                </div>
                <div
                    class="relative bg-white dark:bg-gray-800 p-8 lg:p-12 rounded-2xl border border-gray-200 dark:border-gray-700">
                    <!-- Quote Icon -->
                    <div class="absolute top-8 right-8 opacity-10">
                        <svg class="w-16 h-16 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z">
                            </path>
                        </svg>
                    </div>

                    <div class="relative">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            Kolaboratif dan Inovatif
                        </h3>
                        <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed mb-8">
                            "Hal yang paling saya sukai dari bekerja di sini adalah lingkungan yang kolaboratif. Semua
                            orang bersemangat dengan pekerjaannya dan ada semangat inovasi yang nyata. Kami didorong
                            untuk bereksperimen dan belajar dari keberhasilan maupun kegagalan."
                        </p>

                        <!-- Rating -->
                        <div class="flex items-center mb-6">
                            <div class="flex space-x-1">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="ml-2 text-sm text-gray-500 dark:text-gray-400">5.0</span>
                        </div>

                        <div class="flex items-center">
                            <div class="relative">
                                <img class="w-14 h-14 rounded-full border-4 border-white dark:border-gray-800 shadow-lg"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                    alt="Michael Chen">
                                <div class="absolute -bottom-1 -right-1 bg-blue-500 rounded-full p-1">
                                    <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="text-lg font-semibold text-gray-900 dark:text-white">Michael Chen</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Software Engineer</div>
                                <div class="text-xs text-blue-600 dark:text-blue-400 font-medium">2 tahun bergabung
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary-700">
    <div class="py-16 px-4 mx-auto max-w-screen-md text-center text-white">
        <h2 class="text-4xl font-bold mb-4">Bergabunglah dengan Tim Kami</h2>
        <p class="mb-6 text-lg font-light">
            Kami selalu mencari individu berbakat untuk bergabung. Lihat lowongan atau kirim CV Anda sekarang.
        </p>
        <a href="{{ route('jobs-list') }}"
            class="bg-white text-primary-700 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
            Lihat Lowongan
        </a>
    </div>
</section>

@endsection