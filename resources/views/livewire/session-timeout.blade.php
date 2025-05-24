<div>
    @if($showModal)
    <!-- Modal backdrop -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <!-- Modal -->
        <div class="bg-white rounded-lg shadow-xl dark:bg-gray-800 max-w-md w-full mx-4">
            <div class="p-6">
                <!-- Modal header -->
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Modal body -->
                <div class="text-center mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                        Session akan berakhir
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Anda tidak aktif selama beberapa waktu. Session akan berakhir dalam:
                    </p>
                    <div class="text-2xl font-bold text-red-600 dark:text-red-400" id="countdown">
                        <span x-data="{ time: @entangle('timeLeft') }" 
                              x-init="
                                let interval = setInterval(() => {
                                    time--;
                                    if (time <= 0) {
                                        clearInterval(interval);
                                        $wire.logout();
                                    }
                                }, 1000)
                              "
                              x-text="Math.floor(time / 60) + ':' + (time % 60).toString().padStart(2, '0')">
                        </span>
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="flex space-x-3">
                    <button wire:click="logout" 
                            class="flex-1 px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                        Logout
                    </button>
                    <button wire:click="stayLoggedIn" 
                            class="flex-1 px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Tetap Login
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        let inactivityTimer;
        let warningTimer;
        const INACTIVITY_TIME = 1 * 60 * 1000; // 5 menit dalam milliseconds
        
        function resetInactivityTimer() {
            clearTimeout(inactivityTimer);
            clearTimeout(warningTimer);
            
            inactivityTimer = setTimeout(() => {
                // Dispatch event ke Livewire untuk menampilkan modal
                @this.call('showTimeoutModal');
            }, INACTIVITY_TIME);
        }

        // Event listeners untuk aktivitas user
        const events = ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'];
        
        events.forEach(event => {
            document.addEventListener(event, resetInactivityTimer, true);
        });

        // Listener untuk reset timer dari Livewire
        window.addEventListener('resetTimer', () => {
            resetInactivityTimer();
        });

        // Initialize timer saat halaman dimuat
        resetInactivityTimer();
    </script>
</div>