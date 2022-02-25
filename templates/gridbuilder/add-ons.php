<!-- Header -->
<div class="flex items-center bg-white border-b px-12">
  <h1 class="p-3">
    <a href="#">
      <img src="<?php tailwp_url() ?>/img/logo-gridbuilder.svg" alt="Logo" class="w-[156px]">
    </a>
  </h1>
  <code class="font-thin text-slate-500 rounded bg-slate-100 px-2">v1.6.4</code>
  
  <!-- Top Menu -->
  <nav class="flex ml-auto">
    <a href="admin.php?page=tailwp-gridbuilder&tab=dashboard" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Home Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
      </svg>
      <span class="uppercase font-semibold text-xs">Dashboard</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=grids" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Grid+ Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
      </svg>
      <span class="uppercase font-semibold text-xs">Grids</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=cards" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Cards Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
        <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
      </svg>
      <span class="uppercase font-semibold text-xs">Cards</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=facets" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Filter Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
      </svg>
      <span class="uppercase font-semibold text-xs">Facets</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=add-ons" class="flex items-center px-4 py-7 text-blue-600 border-b-2 border-blue-600">
      <!-- Box Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
      <span class="uppercase font-semibold text-xs">Add-ons</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=settings" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Gear Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
      </svg>
      <span class="uppercase font-semibold text-xs">Settings</span>
    </a>

  </nav>
</div>

<!-- Main Content -->
<div class="max-w-[1180px] mx-auto px-12 mt-12">
  
  <!-- Panel -->
  <div class="bg-white p-14 mb-12 shadow-md rounded-md">
    
    <!-- Panel Title -->
    <h2 class="text-2xl tracking-wide font-bold mb-4">Add-ons</h2>
    
    <p class="text-gray-500 text-sm mb-12">
      Easily download and install add-ons for Gridbuilder ᵂᴾ plugin! <br>
      Add-ons allow to extend possibilities of the plugin depending of your needs.
    </p>

    <!-- Add-ons List -->
    <div class="grid grid-cols-3 gap-4">

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-emerald-100 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-emerald-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Map Facet
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Add maps from Google Maps, Mapbox or Leaflet to display markers and to filter.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-violet-900 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-violet-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Caching
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Speed up loading time when filtering grids by caching content and facets.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-slate-100 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          LearnDash
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Add new blocks to the card builder to display courses information.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-blue-900 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Multilingual
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Easily integrate WP Grid Builder with Polylang and WPML plugins.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-rose-900 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-rose-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Elementor
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Integrate WP Grid Builder with Elementor plugin.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-purple-600 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-purple-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Oxygen
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Integrate WP Grid Builder with Oxygen plugin.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

      <!-- Add-on -->
      <div class="rounded flex flex-col overflow-hidden border-2 border-slate-100">
        <div class="bg-slate-100 p-14 text-center">
          <!-- Image Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="inline h-10 w-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>
        <div class="p-3 pb-0 font-semibold text-base text-gray-900">
          Meta Box
        </div>
        <div class="p-3 text-gray-500 flex-1">
          Easily integrate WP Grid Builder with Meta Box plugin.
        </div>
        <div class="p-3">
          <!-- Button -->
          <a href="#" class="block p-3 ml-auto bg-blue-600 text-white rounded uppercase shadow text-sm font-semibold text-center">Install</a>
        </div>
      </div>

    </div>

    <p class="mt-10 text-gray-500 italic">
      <!-- Sun Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="inline h-3 w-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd" />
      </svg>
      Add-ons can also be downloaded on <a href="#" color="text-blue-600">wpgridbuilder.com</a>.
    </p>

</div>