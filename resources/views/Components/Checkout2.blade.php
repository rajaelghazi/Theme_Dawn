<div class="bg-gray-50">
    <!--
      Mobile menu
  
      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
        Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-black/25" aria-hidden="true"></div>
  
      <div class="fixed inset-0 z-40 flex">
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.
  
          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
          <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
              <span class="sr-only">Close menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
  
          <!-- Links -->
          <div class="mt-2">
            <div class="border-b border-gray-200">
              <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
              </div>
            </div>
  
            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="space-y-12 px-4 py-6" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Basic Tees
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Accessories
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Carry
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
              </div>
            </div>
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-2" class="space-y-12 px-4 py-6" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
              <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    New Arrivals
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Basic Tees
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Accessories
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
                <div class="group relative">
                  <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                  <a href="#" class="mt-6 block text-sm font-medium text-gray-900">
                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                    Carry
                  </a>
                  <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                </div>
              </div>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create an account</a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
            </div>
          </div>
  
          <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <!-- Currency selector -->
            <form>
              <div class="-ml-2 inline-grid grid-cols-1">
                <select id="mobile-currency" name="currency" aria-label="Currency" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-0.5 pl-2 pr-7 text-base font-medium text-gray-700 focus:outline focus:outline-2 group-hover:text-gray-800 sm:text-sm/6">
                  <option>CAD</option>
                  <option>USD</option>
                  <option>AUD</option>
                  <option>EUR</option>
                  <option>GBP</option>
                </select>
                <svg class="pointer-events-none col-start-1 row-start-1 mr-1 size-5 self-center justify-self-end fill-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  
    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="mx-auto flex h-10 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form>
              <div class="-ml-2 inline-grid grid-cols-1">
                <select id="desktop-currency" name="currency" aria-label="Currency" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-gray-900 py-0.5 pl-2 pr-7 text-left text-base font-medium text-white focus:outline focus:outline-2 focus:-outline-offset-1 focus:outline-white sm:text-sm/6">
                  <option>CAD</option>
                  <option>USD</option>
                  <option>AUD</option>
                  <option>EUR</option>
                  <option>GBP</option>
                </select>
                <svg class="pointer-events-none col-start-1 row-start-1 mr-1 size-5 self-center justify-self-end fill-gray-300" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </div>
            </form>
  
            <div class="flex items-center space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
            </div>
          </div>
        </div>
  
        <!-- Secondary navigation -->
        <div class="bg-white shadow-sm">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex lg:flex-1 lg:items-center">
                <a href="#">
                  <span class="sr-only">Your Company</span>
                  <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>
  
              <div class="hidden h-full lg:flex">
                <!-- Flyout menus -->
                <div class="inset-x-0 bottom-0 px-4">
                  <div class="flex h-full justify-center space-x-8">
                    <div class="flex">
                      <div class="relative flex">
                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                        <button type="button" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800" aria-expanded="false">Women</button>
                      </div>
  
                      <!--
                        'Women' flyout menu, show/hide based on flyout menu state.
  
                        Entering: "transition ease-out duration-200"
                          From: "opacity-0"
                          To: "opacity-100"
                        Leaving: "transition ease-in duration-150"
                          From: "opacity-100"
                          To: "opacity-0"
                      -->
                      <div class="absolute inset-x-0 top-full bg-white text-sm text-gray-500">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                          <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                          <div class="h-px w-full bg-transparent transition-colors duration-200 ease-out"></div>
                        </div>
  
                        <div class="relative">
                          <div class="mx-auto max-w-7xl px-8">
                            <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-category-04.jpg" alt="Model opening tan leather long wallet with credit card pockets and cash pouch." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Carry
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex">
                      <div class="relative flex">
                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                        <button type="button" class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800" aria-expanded="false">Men</button>
                      </div>
  
                      <!--
                        'Women' flyout menu, show/hide based on flyout menu state.
  
                        Entering: "transition ease-out duration-200"
                          From: "opacity-0"
                          To: "opacity-100"
                        Leaving: "transition ease-in duration-150"
                          From: "opacity-100"
                          To: "opacity-0"
                      -->
                      <div class="absolute inset-x-0 top-full bg-white text-sm text-gray-500">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 mx-auto h-px max-w-7xl px-8" aria-hidden="true">
                          <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                          <div class="h-px w-full bg-transparent transition-colors duration-200 ease-out"></div>
                        </div>
  
                        <div class="relative">
                          <div class="mx-auto max-w-7xl px-8">
                            <div class="grid grid-cols-4 gap-x-8 gap-y-10 py-16">
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-01.jpg" alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-02.jpg" alt="Model wearing light heather gray t-shirt." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-03.jpg" alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                              <div class="group relative">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/mega-menu-01-men-category-04.jpg" alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching." class="aspect-square w-full rounded-md bg-gray-100 object-cover group-hover:opacity-75">
                                <a href="#" class="mt-4 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                  Carry
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                  </div>
                </div>
              </div>
  
              <!-- Mobile menu and search (lg-) -->
              <div class="flex flex-1 items-center lg:hidden">
                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                  <span class="sr-only">Open menu</span>
                  <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                </button>
  
                <!-- Search -->
                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
                </a>
              </div>
  
              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
              </a>
  
              <div class="flex flex-1 items-center justify-end">
                <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Search</a>
  
                <div class="flex items-center lg:ml-8">
                  <!-- Help -->
                  <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">
                    <span class="sr-only">Help</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                  </a>
                  <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>
  
                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-8">
                    <a href="#" class="group -m-2 flex items-center p-2">
                      <svg class="size-6 shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                      </svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
  
    <main class="mx-auto max-w-7xl px-4 pb-24 pt-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:max-w-none">
        <h1 class="sr-only">Checkout</h1>
  
        <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
          <div>
            <div>
              <h2 class="text-lg font-medium text-gray-900">Contact information</h2>
  
              <div class="mt-4">
                <label for="email-address" class="block text-sm/6 font-medium text-gray-700">Email address</label>
                <div class="mt-2">
                  <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
              </div>
            </div>
  
            <div class="mt-10 border-t border-gray-200 pt-10">
              <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>
  
              <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                <div>
                  <label for="first-name" class="block text-sm/6 font-medium text-gray-700">First name</label>
                  <div class="mt-2">
                    <input type="text" id="first-name" name="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div>
                  <label for="last-name" class="block text-sm/6 font-medium text-gray-700">Last name</label>
                  <div class="mt-2">
                    <input type="text" id="last-name" name="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="sm:col-span-2">
                  <label for="company" class="block text-sm/6 font-medium text-gray-700">Company</label>
                  <div class="mt-2">
                    <input type="text" name="company" id="company" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="sm:col-span-2">
                  <label for="address" class="block text-sm/6 font-medium text-gray-700">Address</label>
                  <div class="mt-2">
                    <input type="text" name="address" id="address" autocomplete="street-address" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="sm:col-span-2">
                  <label for="apartment" class="block text-sm/6 font-medium text-gray-700">Apartment, suite, etc.</label>
                  <div class="mt-2">
                    <input type="text" name="apartment" id="apartment" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div>
                  <label for="city" class="block text-sm/6 font-medium text-gray-700">City</label>
                  <div class="mt-2">
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div>
                  <label for="country" class="block text-sm/6 font-medium text-gray-700">Country</label>
                  <div class="mt-2 grid grid-cols-1">
                    <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-2 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                      <option>United States</option>
                      <option>Canada</option>
                      <option>Mexico</option>
                    </select>
                    <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end fill-gray-500 sm:size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                  </div>
                </div>
  
                <div>
                  <label for="region" class="block text-sm/6 font-medium text-gray-700">State / Province</label>
                  <div class="mt-2">
                    <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div>
                  <label for="postal-code" class="block text-sm/6 font-medium text-gray-700">Postal code</label>
                  <div class="mt-2">
                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="sm:col-span-2">
                  <label for="phone" class="block text-sm/6 font-medium text-gray-700">Phone</label>
                  <div class="mt-2">
                    <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
              </div>
            </div>
  
            <div class="mt-10 border-t border-gray-200 pt-10">
              <h2 class="text-lg font-medium text-gray-900">Delivery method</h2>
  
              <fieldset aria-label="Delivery method" class="mt-4">
                <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                  <!--
                    Checked: "border-transparent", Not Checked: "border-gray-300"
                    Active: "ring-2 ring-indigo-500"
                  -->
                  <label aria-label="Standard" aria-description="4–10 business days for $5.00" class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
                    <input type="radio" name="delivery-method" value="Standard" class="sr-only">
                    <span class="flex flex-1">
                      <span class="flex flex-col">
                        <span class="block text-sm font-medium text-gray-900">Standard</span>
                        <span class="mt-1 flex items-center text-sm text-gray-500">4–10 business days</span>
                        <span class="mt-6 text-sm font-medium text-gray-900">$5.00</span>
                      </span>
                    </span>
                    <!-- Not Checked: "hidden" -->
                    <svg class="size-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                    </svg>
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                  </label>
                  <!--
                    Checked: "border-transparent", Not Checked: "border-gray-300"
                    Active: "ring-2 ring-indigo-500"
                  -->
                  <label aria-label="Express" aria-description="2–5 business days for $16.00" class="relative flex cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none">
                    <input type="radio" name="delivery-method" value="Express" class="sr-only">
                    <span class="flex flex-1">
                      <span class="flex flex-col">
                        <span class="block text-sm font-medium text-gray-900">Express</span>
                        <span class="mt-1 flex items-center text-sm text-gray-500">2–5 business days</span>
                        <span class="mt-6 text-sm font-medium text-gray-900">$16.00</span>
                      </span>
                    </span>
                    <!-- Not Checked: "hidden" -->
                    <svg class="size-5 text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                    </svg>
                    <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                    <span class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></span>
                  </label>
                </div>
              </fieldset>
            </div>
  
            <!-- Payment -->
            <div class="mt-10 border-t border-gray-200 pt-10">
              <h2 class="text-lg font-medium text-gray-900">Payment</h2>
  
              <fieldset class="mt-4">
                <legend class="sr-only">Payment type</legend>
                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                  <div class="flex items-center">
                    <input id="credit-card" name="payment-type" type="radio" checked class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                    <label for="credit-card" class="ml-3 block text-sm/6 font-medium text-gray-700">Credit card</label>
                  </div>
                  <div class="flex items-center">
                    <input id="paypal" name="payment-type" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                    <label for="paypal" class="ml-3 block text-sm/6 font-medium text-gray-700">PayPal</label>
                  </div>
                  <div class="flex items-center">
                    <input id="etransfer" name="payment-type" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
                    <label for="etransfer" class="ml-3 block text-sm/6 font-medium text-gray-700">eTransfer</label>
                  </div>
                </div>
              </fieldset>
  
              <div class="mt-6 grid grid-cols-4 gap-x-4 gap-y-6">
                <div class="col-span-4">
                  <label for="card-number" class="block text-sm/6 font-medium text-gray-700">Card number</label>
                  <div class="mt-2">
                    <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="col-span-4">
                  <label for="name-on-card" class="block text-sm/6 font-medium text-gray-700">Name on card</label>
                  <div class="mt-2">
                    <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div class="col-span-3">
                  <label for="expiration-date" class="block text-sm/6 font-medium text-gray-700">Expiration date (MM/YY)</label>
                  <div class="mt-2">
                    <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
  
                <div>
                  <label for="cvc" class="block text-sm/6 font-medium text-gray-700">CVC</label>
                  <div class="mt-2">
                    <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Order summary -->
          <div class="mt-10 lg:mt-0">
            <h2 class="text-lg font-medium text-gray-900">Order summary</h2>
  
            <div class="mt-4 rounded-lg border border-gray-200 bg-white shadow-sm">
              <h3 class="sr-only">Items in your cart</h3>
              <ul role="list" class="divide-y divide-gray-200">
                <li class="flex px-4 py-6 sm:px-6">
                  <div class="shrink-0">
                    <img src="https://tailwindui.com/plus/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                  </div>
  
                  <div class="ml-6 flex flex-1 flex-col">
                    <div class="flex">
                      <div class="min-w-0 flex-1">
                        <h4 class="text-sm">
                          <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Basic Tee</a>
                        </h4>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                        <p class="mt-1 text-sm text-gray-500">Large</p>
                      </div>
  
                      <div class="ml-4 flow-root shrink-0">
                        <button type="button" class="-m-2.5 flex items-center justify-center bg-white p-2.5 text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Remove</span>
                          <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>
  
                    <div class="flex flex-1 items-end justify-between pt-2">
                      <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>
  
                      <div class="ml-4 grid grid-cols-1">
                        <select id="quantity" name="quantity" aria-label="Quantity" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-2 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                        <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end fill-gray-500 sm:size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                          <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                      </div>
                    </div>
                  </div>
                </li>
  
                <!-- More products... -->
              </ul>
              <dl class="space-y-6 border-t border-gray-200 px-4 py-6 sm:px-6">
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Subtotal</dt>
                  <dd class="text-sm font-medium text-gray-900">$64.00</dd>
                </div>
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Shipping</dt>
                  <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                </div>
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Taxes</dt>
                  <dd class="text-sm font-medium text-gray-900">$5.52</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                  <dt class="text-base font-medium">Total</dt>
                  <dd class="text-base font-medium text-gray-900">$75.52</dd>
                </div>
              </dl>
  
              <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Confirm order</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
  
    <footer aria-labelledby="footer-heading" class="border-t border-gray-200 bg-white">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="py-20">
          <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">
            <!-- Image section -->
            <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">
              <img src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
            </div>
  
            <!-- Sitemap sections -->
            <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">
              <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Products</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                    </li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Company</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                    </li>
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                <ul role="list" class="mt-6 space-y-6">
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>
                  </li>
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>
                  </li>
                </ul>
              </div>
            </div>
  
            <!-- Newsletter section -->
            <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">
              <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
              <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
              <form class="mt-2 flex sm:max-w-md">
                <input id="email-address" type="text" autocomplete="email" required aria-label="Email address" class="block w-full rounded-md bg-white px-4 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                <div class="ml-4 shrink-0">
                  <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
  
        <div class="border-t border-gray-100 py-10 text-center">
          <p class="text-sm text-gray-500">&copy; 2021 Your Company, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
  