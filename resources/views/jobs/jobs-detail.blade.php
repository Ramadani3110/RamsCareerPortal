@extends('components.layouts.master')

@section('content')
    <div class="max-w-screen-xl mx-auto p-4">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Job Details</h1>
        </div>

        <livewire:jobs.job-details :jobId="$jobId">
    </div>
@endsection
