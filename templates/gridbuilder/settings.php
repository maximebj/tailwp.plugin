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

    <a href="admin.php?page=tailwp-gridbuilder&tab=add-ons" class="flex items-center px-4 py-7 text-slate-600">
      <!-- Box Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
        <path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd" />
      </svg>
      <span class="uppercase font-semibold text-xs">Add-ons</span>
    </a>

    <a href="admin.php?page=tailwp-gridbuilder&tab=settings" class="flex items-center px-4 py-7 text-blue-600 border-b-2 border-blue-600">
      <!-- Gear Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
      </svg>
      <span class="uppercase font-semibold text-xs">Settings</span>
    </a>

  </nav>
</div>

<!-- Main Content -->
<div class="mx-auto px-12 mt-12">
  
  <!-- Panel -->
  <div class="bg-white shadow-md rounded-md sticky top-[32px]">
    
    <!-- Panel Top bar -->
    <div class="flex p-3 border-b-2 border-b-slate-100">
      <div class="px-3 bg-slate-100 rounded leading-[44px] font-semibold">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
        </svg>
      </div>

      <!-- Icon Button -->
      <a href="#" class="inline-flex items-center p-3 ml-auto bg-red-500 text-white rounded uppercase shadow">
        <!-- Reset Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
        </svg>
        <span class="flex-auto text-sm font-semibold">Reset</span>
      </a>

      <!-- Icon Button -->
      <a href="#" class="inline-flex items-center p-3 ml-3 bg-blue-600 text-white rounded uppercase shadow">
        <!-- Download Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
        </svg>
        <span class="flex-auto text-sm font-semibold">Export</span>
      </a>

      <!-- Icon Button -->
      <a href="#" class="inline-flex items-center p-3 ml-3 bg-emerald-400 text-white rounded uppercase shadow">
        <!-- Save Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
          <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z" />
        </svg>
        <span class="flex-auto text-sm font-semibold">Save Changes</span>
      </a>
    </div>

    <div class="flex">
      <!-- Panel Sidebar -->
      <div class="bg-slate-100 w-[244px]">
        <ul>
          <!-- Tab -->
          <li class="flex items-center border-l-2 border-blue-600 py-4 px-6 bg-white text-blue-600 cursor-pointer">
            <!-- Settings Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <span class="uppercase text-xs font-semibold">General</span>
          </li>
          
          <!-- Tab -->
          <li class="flex items-center border-l-2 border-transparent py-4 px-6 text-slate-600 cursor-pointer transition-all duration-200 hover:text-slate-900 hover:translate-x-2">
            <!-- Color Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd" />
            </svg>
            <span class="uppercase text-xs font-semibold">Color Schemes</span>
          </li>

          <!-- Tab -->
          <li class="flex items-center border-l-2 border-transparent py-4 px-6 text-slate-600 cursor-pointer transition-all duration-200 hover:text-slate-900 hover:translate-x-2">
            <!-- Image Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="uppercase text-xs font-semibold">Images Sizes</span>
          </li>

          <!-- Tab -->
          <li class="flex items-center border-l-2 border-transparent py-4 px-6 text-slate-600 cursor-pointer transition-all duration-200 hover:text-slate-900 hover:translate-x-2">
            <!-- Arrows Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
            </svg>
            <span class="uppercase text-xs font-semibold">LightBox</span>
          </li>
        </ul>
      </div>

      <!-- Panel Content -->
      <div class="px-10 py-6">
        <!-- Title -->
        <h2 class="text-2xl tracking-wide font-bold mb-4">General Settings</h2>

        <!-- Paragraph -->
        <p class="text-gray-500 text-sm mb-12">
          Easily download and install add-ons for Gridbuilder ᵂᴾ plugin! <br>
          Add-ons allow to extend possibilities of the plugin depending of your needs.
        </p>

        <!-- Title 3 -->
        <h3 class="text-base tracking-wide font-bold mb-4">Plugin Settings</h3>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="delete-uninstall" class="text-sm w-[226px]">Delete Data on Uninstall</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="delete-uninstall">
            <label for="delete-uninstall" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="post-format-support" class="text-sm w-[226px]">Post Formats Support</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="post-format-support">
            <label for="post-format-support" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="display-post-options" class="text-sm w-[226px]">Display Post Options</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="display-post-options">
            <label for="display-post-options" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="display-term-options" class="text-sm w-[226px]">Display Term Options</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="display-term-options" checked>
            <label for="display-term-options" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Title 3 -->
        <h3 class="text-base tracking-wide font-bold mt-12 mb-4">Gutenberg Editor</h3>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="render-blocks" class="text-sm w-[226px]">Render Blocks in Editor</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="render-blocks">
            <label for="render-blocks" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Title 3 -->
        <h3 class="text-base tracking-wide font-bold mt-12 mb-4">Facet & Indexer</h3>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Filter Custom Content</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="filter-custom-content">
            <label for="filter-custom-content" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Browser's history</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="filter-custom-content" checked>
            <label for="filter-custom-content" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Auto indexing</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="filter-custom-content" checked>
            <label for="filter-custom-content" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Stop indexer</label>
          
          <!-- Icon Button -->
          <a href="#" class="flex items-center p-2 bg-purple-600 text-white rounded uppercase shadow">
            <!-- Stop Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
            </svg>
            <span class="flex-auto text-xs font-semibold">Stop indexer</span>
          </a>
        </div>

        <!-- Settings section (special) -->
        <div class="flex py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px] py-2">Clear index table</label>
          
          <div>
            <!-- Icon Button -->
            <a href="#" class="inline-flex items-center p-2 bg-red-500 text-white rounded uppercase shadow">
              <!-- Trash Icon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
              <span class="flex-auto text-xs font-semibold">Clear index</span>   
            </a>
            <p class="text-xs italic mt-2">Index table: ~0 row (~0.06MB)</p>
          </div>
        </div>

        <!-- Title 3 -->
        <h3 class="text-base tracking-wide font-bold mt-12 mb-4">Assets & Cache</h3>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Load Polyfills</label>
          
          <!-- Toggle -->
          <div class="toggle-checkbox w-12 select-none">
            <input type="checkbox" id="filter-custom-content" checked>
            <label for="filter-custom-content" class="block overflow-hidden h-6 rounded bg-slate-100 cursor-pointer after:block after:w-6 after:h-6 after:rounded after:bg-white after:border-4 after:border-slate-100 after:transition after:duration-200 after:ease-in"></label>
          </div>
          
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>        
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Plugin cache</label>
          
          <!-- Icon Button -->
          <a href="#" class="inline-flex items-center p-2 bg-red-500 text-white rounded uppercase shadow">
            <!-- Trash Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="flex-auto text-xs font-semibold">Clear cache</span>   
          </a>
        </div>

        <!-- Settings section -->
        <div class="flex items-center py-2 text-gray-500">
          <label for="filter-custom-content" class="text-sm w-[226px]">Plugin Style Sheets</label>
          
          <!-- Icon Button -->
          <a href="#" class="inline-flex items-center p-2 bg-red-500 text-white rounded uppercase shadow">
            <!-- Trash Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
            <span class="flex-auto text-xs font-semibold">Delete style sheets</span>   
          </a>
        </div>
        
        <!-- Alert Block -->
        <div class="relative text-gray-500 p-4 mt-6 border-blue-600 border-2">
          <!-- Info Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="absolute -top-3 -left-3 h-5 w-5 text-blue-600 bg-white" viewBox="0 0 18 18" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
          </svg>

          <p><strong class="text-gray-900">If you use a cache plugin</strong>, and made change to your grids or facets, you may need to clear Gridbuilder ᵂᴾ cache before caching.</p>
          <p><strong class="text-gray-900">If you use an optimization plugin</strong> which concatenates style sheets (CSS) you may need to delete Gridbuilder ᵂᴾ style sheets before concatenation.</p>
        </div>

      </div>
    </div>
  </div>
</div>