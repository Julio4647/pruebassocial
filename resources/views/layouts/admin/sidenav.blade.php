<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                    aria-controls="logo-sidebar" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('dashboard')}}" class="flex ml-2 md:mr-24">
                    <img src="{{asset('img/Recurso 5@2x.png')}}" class="h-8 mr-3" alt="Social Conecta Logo" />
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <div class="relative w-8 h-8 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                                <svg class="absolute w-10 h-10 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                            </div>
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        @if(Auth::guard('admin')->check())
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{ auth('admin')->user()->name }} {{ auth('admin')->user()->last_name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{ auth('admin')->user()->email }}
                            </p>
                        </div>
                            @elseif(Auth::guard('coordinador')->check())
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        {{ auth('coordinador')->user()->name }} {{ auth('coordinador')->user()->last_name }}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        {{ auth('coordinador')->user()->email }}
                                    </p>
                                </div>
                            @elseif(Auth::guard('community')->check())
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        {{ auth('community')->user()->name }} {{ auth('community')->user()->last_name }}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        {{ auth('community')->user()->email }}
                                    </p>
                                </div>
                            @endif

                        <ul class="py-1" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Inicio</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Earnings</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Cerrar Seción</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-purple-600">
        <ul class="space-y-2 font-medium">
            <li>


                @if(Auth::guard('admin')->check())
                <a href="{{ route('dashboard')}}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="34" viewBox="0 0 24 24">
                    <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"></path>
                </svg>
                <span class="ml-3">Inicio</span>
                </a>
                @elseif(Auth::guard('community')->check())
                <a href="{{ route('/dashboard/community')}}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="34" viewBox="0 0 24 24">
                    <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"></path>
                </svg>
                <span class="ml-3">Inicio</span>
                </a>
                @elseif (Auth::guard('coordinador')->check())
                <a href="{{ route('/dashboard/coordinador')}}"
                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="34" viewBox="0 0 24 24">
                    <path d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 11 21 L 11 15 L 13 15 L 13 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z M 12 4.7910156 L 18 10.191406 L 18 11 L 18 19 L 15 19 L 15 13 L 9 13 L 9 19 L 6 19 L 6 10.191406 L 12 4.7910156 z"></path>
                </svg>
                <span class="ml-3">Inicio</span>
                </a>
                @endif

            </li>
            <li>
                <a href="{{ route('product')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="34" viewBox="0 0 128 128">
                        <path d="M63,14.2l-48,17c-1.2,0.4-2,1.6-2,2.8v60c0,1.3,0.8,2.4,2,2.8l48,17c0.3,0.1,0.7,0.2,1,0.2c0.2,0,0.3,0,0.5,0 c0,0,0.1,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1c0,0,0,0,0,0l48-17c1.2-0.4,2-1.6,2-2.8V34c0,0,0-0.1,0-0.1c0-0.1,0-0.3,0-0.4 c0,0,0-0.1,0-0.1c-0.2-1-0.9-1.9-1.9-2.2l-24-8.5c0,0-0.1,0-0.1,0c-0.6-0.2-1.4-0.3-2.1,0L40,39.2c-1.2,0.4-2,1.6-2,2.8v11 c0,1.7,1.3,3,3,3s3-1.3,3-3v-8.9l43.8-15.5L103,34L63,48.2c-1.2,0.4-2,1.5-2,2.8c0,0,0,0,0,0.1v55.8L19,91.9V36.1l46-16.3 c1.6-0.6,2.4-2.3,1.8-3.8C66.3,14.4,64.6,13.6,63,14.2z M67,53.1l42-14.9v53.6l-42,14.9V53.1z"></path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Productos y Servicios</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                    <img src="{{asset('img/tools.svg')}}" alt="">
                    <span class="flex-1 ml-3 whitespace-nowrap">Herramientas</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                    <img src="{{asset('img/blog.svg')}}" alt="">
                    <span class="flex-1 ml-3 whitespace-nowrap">Blog Social Conecta</span>
                </a>
            </li>
            @if(Auth::guard('admin')->check())
            <li>
                <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-purple-600 dark:text-white dark:hover:bg-purple-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                      <img src="{{asset('img/team.svg')}}" alt="">
                      <span class="flex-1 ml-3 text-left whitespace-nowrap">Mi Equipo</span></span>
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">

                @if(Auth::guard('admin')->check())
                <li>
                    <a href="{{ route('administradores')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Administradores</a>
                 </li>
                  <li>
                     <a href="{{ route('cordinador')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Coordinadores</a>
                  </li>
                  <li>
                     <a href="{{ route('communitys')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Community Managers</a>
                  </li>
                @elseif(Auth::guard('community')->check())

                @elseif (Auth::guard('coordinador')->check())

                  <li>
                     <a href="{{ route('communitys')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Community Managers</a>
                  </li>
                @endif


                </ul>
             </li>
            @elseif(Auth::guard('community')->check())
            <li>
                <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-purple-600 dark:text-white dark:hover:bg-purple-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                      <img src="{{asset('img/team.svg')}}" alt="">
                      <span class="flex-1 ml-3 text-left whitespace-nowrap">Mi Equipo</span></span>
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">

                @if(Auth::guard('admin')->check())
                <li>
                    <a href="{{ route('administradores')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Administradores</a>
                 </li>
                  <li>
                     <a href="{{ route('cordinador')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Coordinadores</a>
                  </li>
                  <li>
                     <a href="{{ route('communitys')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Community Managers</a>
                  </li>
                @elseif(Auth::guard('community')->check())

                @elseif (Auth::guard('coordinador')->check())

                  <li>
                     <a href="{{ route('communitys')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-purple-600 dark:text-white dark:hover:bg-gray-700">Community Managers</a>
                  </li>
                @endif


                </ul>
             </li>
            @elseif (Auth::guard('coordinador')->check())


            @endif

            <li>
                <a href="{{ route('clientes')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-purple-600 dark:hover:bg-gray-700">
                    <img src="{{asset('img/customers.svg')}}" alt="">
                    <span class="flex-1 ml-3 whitespace-nowrap">Mis clientes</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
