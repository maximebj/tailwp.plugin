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
    <a href="admin.php?page=tailwp-gridbuilder&tab=dashboard" class="flex items-center px-4 py-7 text-blue-600 border-b-2 border-blue-600">
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

    <a href="admin.php?page=tailwp-gridbuilder&tab=add-ons" class="flex items-center px-4 py-7 text-slate-600">
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
    
    <!-- Panel Title With Button -->
    <div class="flex mb-4">
      <h2 class="text-2xl tracking-wide font-bold">Plugin Licence</h2>
      
      <!-- Icon Button -->
      <a href="#" class="flex items-center p-2 ml-auto bg-emerald-400 text-white rounded uppercase shadow">
        <!-- Refresh Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg>
        <span class="flex-auto text-xs font-medium">Refresh Info</span>
      </a>
    </div>
    
    <p class="text-gray-500 text-sm mb-12">
      You can refresh information at any time to view change from your account.
    </p>

    <!-- Table -->
    <ul class="text-slate-600 font-semibold text-sm">
      <li class="flex rounded odd:bg-slate-100">
        <div class="px-2 py-3">
          <!-- Clipboard Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
          </svg>
        </div>
        <div class="px-2 py-3 w-auto flex-1 max-w-[220px]">Licence Type</div>
        <div class="px-2 py-3">Ultimate</div>
      </li>

      <li class="flex odd:bg-slate-100">
        <div class="px-2 py-3">
          <!-- Open Lock Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z" />
          </svg>
        </div>
        <div class="px-2 py-3 w-auto flex-1 max-w-[220px]">Activations</div>
        <div class="px-2 py-3 w-auto flex-1 max-w-[220px]">12 on 100</div>
        <div class="px-2 py-3">(Dev. Environment)</div>
      </li>

      <li class="flex odd:bg-slate-100">
        <div class="px-2 py-3">
          <!-- Inbox Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="px-2 py-3 w-auto flex-1 max-w-[220px]">Last Version</div>
        <div class="px-2 py-3 text-red-500">v1.6.4</div>
      </li>

      <li class="flex odd:bg-slate-100">
        <div class="px-2 py-3">
          <!-- Calendar Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="px-2 py-3 w-auto flex-1 max-w-[220px]">Expiration Date</div>
        <div class="px-2 py-3">March 23, 2022</div>
      </li>

    </ul>

    <p class="mt-10">
      <!-- Icon Button -->
      <a href="#" class="inline-flex items-center p-3 bg-red-500 text-white rounded uppercase shadow">
        <!-- Lock Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <span class="flex-auto text-md font-semibold">Deactivate</span>
      </a>

      <!-- Icon Button -->
      <a href="#" class="inline-flex items-center p-3 ml-2 bg-blue-600 text-white rounded uppercase shadow">
        <!-- User Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
        </svg>
        <span class="flex-auto text-md font-semibold">My Account</span>
      </a>
    </p>
  </div>

  <!-- Panel -->
  <div class="bg-white p-14 mb-12 shadow-md rounded-md">
    
    <!-- Panel Title -->
    <h2 class="text-2xl tracking-wide font-bold mb-4">Export Content</h2>
    
    <p class="text-gray-500 text-sm mb-12">
      Export your grids, cards, facets, or settings for this site as a .json file. <br>
      This allows you to easily save/backup your current data and import them into another site.
    </p>

    <!-- Select with Button -->
    <div class="flex">
      <select id="export" class="min-w-[200px]">
        <option value="grids">Content Type</option>
        <option value="grids">All Grids</option>
        <option value="cards">All Cards</option>
        <option value="facets">All Facets</option>
        <option value="settings">Settings</option>
      </select>
      
      <a href="#" class="flex items-center p-3 bg-blue-600 text-white rounded-r uppercase shadow">
        <!-- Export Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
        </svg>
        <span class="flex-auto text-sm font-medium">Export</span>
      </a>
    </div>

  </div>

  <!-- Panel -->
  <div class="bg-white p-14 mb-12 shadow-md rounded-md">
    
    <!-- Panel Title -->
    <h2 class="text-2xl tracking-wide font-bold mb-4">Import Content</h2>
    
    <p class="text-gray-500 text-sm mb-12">
      Import your grids, cards, facets or settings from a .json file. <br>
      This file can be obtained by exporting your content using the form above.
    </p>

    <!-- Icon Button -->
    <a href="#" class="inline-flex items-center p-2 bg-blue-600 text-white rounded uppercase shadow">
      <!-- Duplicate Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
        <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
        <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
      </svg>
      <span class="flex-auto text-xs font-medium">Browse demos</span>
    </a>

    <!-- Import Field -->
    <div class="mt-6 rounded cursor-pointer border-gray-200 hover:border-gray-300 border border-dashed">
      <div class="m-1 py-20 bg-slate-50 hover:bg-slate-200 transition-200 transition-all text-center">
        <p class="mb-2">
          <!-- Import Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 inline text-blue-600" viewBox="0 0 20 20" fill="currentColor">
          <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
          <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
        </svg>
        </p>
        <p class="text-base text-gray-500">Choose a file or drag it here.</p>
      </div>
    </div>

  </div>


  <!-- Panel -->
  <div class="bg-white p-14 mb-12 shadow-md rounded-md">
    
    <!-- Panel Title -->
    <h2 class="text-2xl tracking-wide font-bold mb-4">System Status</h2>
    
    <p class="text-gray-500 text-sm mb-12">
      The System Status report can be useful for troubleshooting issues with your site. <br>
      Gridbuilder ᵂᴾ requires WordPress 4.7 and PHP 5.6.0 at minium.
    </p>

    <!-- 2 Columns Grid -->
    <div class="grid grid-cols-2 gap-8">
      <div>

        <h3 class="font-semibold text-base mb-4">WordPress Environment</h3>

        <!-- Table -->
        <ul class="text-slate-500 font-semibold text-sm">
          <li class="flex rounded odd:bg-slate-100">
            <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">WP Version</div>
            <div class="px-2 py-3">
              <!-- Info Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              <span class="text-green-500">v5.9</span>
            </div>
          </li>

          <li class="flex odd:bg-slate-100">
            <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">WP Active Plugins</div>
            <div class="px-2 py-3">
              <!-- Info Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              16
            </div>
          </li>

          <li class="flex odd:bg-slate-100">
            <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">WP Debug Mode</div>
            <div class="px-2 py-3">
              <!-- Info Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              <span class="text-red-500">No</span>
            </div>
          </li>

          <li class="flex odd:bg-slate-100">
            <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">WP Memory Usage</div>
            <div class="px-2 py-3">
              <!-- Info Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              7 MB / 256 MB
            </div>
          </li>

          <li class="flex odd:bg-slate-100">
            <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">WP Max Upload Size</div>
            <div class="px-2 py-3">
              <!-- Info Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              512 MB
            </div>
          </li>

        </ul>
       
      </div>
      <div>
        
        <h3 class="font-semibold text-base mb-4">Server Environment</h3>

        <!-- Table -->
          <ul class="text-slate-500 font-semibold text-sm">
            <li class="flex rounded odd:bg-slate-100">
              <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">Server Info</div>
              <div class="px-2 py-3">
                <!-- Info Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                nginx/1.16.0
              </div>
            </li>

            <li class="flex odd:bg-slate-100">
              <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">PHP Version</div>
              <div class="px-2 py-3">
                <!-- Info Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                <span class="text-green-500">v8.0.0</span>
              </div>
            </li>

            <li class="flex odd:bg-slate-100">
              <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">PHP Post Max Size</div>
              <div class="px-2 py-3">
                <!-- Info Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                1,000 MB
              </div>
            </li>

            <li class="flex odd:bg-slate-100">
              <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">PHP Execution Time</div>
              <div class="px-2 py-3">
                <!-- Info Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                1200
              </div>
            </li>

            <li class="flex odd:bg-slate-100">
              <div class="px-2 py-3 w-auto flex-1 max-w-[200px]">PHP Max Input Vars</div>
              <div class="px-2 py-3">
                <!-- Info Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                4000
              </div>
            </li>

          </ul>
      </div>
    </div>
  </div>
</div>