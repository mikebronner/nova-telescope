@if (config("telescope.enabled"))
    @can('viewTelescope')
        <router-link tag="h3" :to="{name: 'nova-telescope'}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="sidebar-icon text-grey"
                viewBox="0 0 80 80"
                width="20"
                height="20"
            >
                <path fill="var(--sidebar-icon)" d="M0 40a39.87 39.87 0 0 1 11.72-28.28A40 40 0 1 1 0 40zm34 10a4 4 0 0 1-4-4v-2a2 2 0 1 0-4 0v2a4 4 0 0 1-4 4h-2a2 2 0 1 0 0 4h2a4 4 0 0 1 4 4v2a2 2 0 1 0 4 0v-2a4 4 0 0 1 4-4h2a2 2 0 1 0 0-4h-2zm24-24a6 6 0 0 1-6-6v-3a3 3 0 0 0-6 0v3a6 6 0 0 1-6 6h-3a3 3 0 0 0 0 6h3a6 6 0 0 1 6 6v3a3 3 0 0 0 6 0v-3a6 6 0 0 1 6-6h3a3 3 0 0 0 0-6h-3zm-4 36a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 28a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
            </svg>
            <span class="sidebar-label">
                Telescope
            </span>
        </router-link>
    @endcan
@endif
