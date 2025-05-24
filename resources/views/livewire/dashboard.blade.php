<div>
    @if (Auth::user()->role == 'admin')
        <livewire:admin.dashboard>
    @else
        <livewire:applicants.dashboard>
    @endif
</div>
