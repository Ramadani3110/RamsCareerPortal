@extends('components.layouts.master')

@section('content')
    <div class="max-w-screen-xl mx-auto p-4">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Cari Pekerjaan Impian Anda</h1>
            <p class="text-gray-600">Telusuri ribuan lowongan pekerjaan</p>
        </div>

        <livewire:jobs.job-list>
    </div>
@endsection
