<nav class="sidebar">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('images/logowithbluebg.png')}}" alt="profile-image">
            </span>

            <div class="text header-text">
                <span class="name">iQuiz</span>
                <span class="profession">by Inventive Media</span>
            </div>
        </div>
    </header>

    <div class="menu-bar" x-data="{ openDropdown: null }">
        <div class="menu">
            <ul class="menu links">
                <!-- STUDENT SIDE BAR -->
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-calendar-days icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li x-data="{ open: false }" class="nav-link relative">
                    <a href="#" @click="open = !open" class="flex items-center">
                        <i class='fa-solid fa-gauge icon'></i>
                        <span class="text nav-text">Category</span>
                        <svg x-bind:class="{ 'rotate-180': open }" class="mr-4 w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="open" class="absolute top-0 left-full mt-0 ml-2 bg-white p-4 rounded shadow-lg w-48 space-y-2" x-cloak>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded">Join an exam</a>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded">Available Exams</a>
                    </div>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-history icon'></i>
                        <span class="text nav-text">History</span>
                    </a>
                </li>

                <!-- TRAINER SIDE BAR -->
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-house icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li x-data="{ open: false }" class="nav-link relative">
                    <a href="#" @click="open = !open" class="flex items-center">
                        <i class='fa-solid fa-gauge icon'></i>
                        <span class="text nav-text">Categories</span>
                        <svg x-bind:class="{ 'rotate-180': open }" class="mr-4 w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="open" class="absolute top-0 left-full mt-0 ml-2 bg-white p-4 rounded shadow-lg w-48 space-y-2" x-cloak>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded">Add a Questionnaire</a>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded">View All Categories</a>
                    </div>
                </li>

                <!-- ADMIN SIDE BAR -->
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-house icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='fa-solid fa-user-circle icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>

                <li x-data="{ open: false }" class="nav-link relative">
                    <a href="#" @click="open = !open" class="flex items-center">
                        <i class='fa-solid fa-gauge icon'></i>
                        <span class="text nav-text">Categories</span>
                        <svg x-bind:class="{ 'rotate-180': open }" class="mr-4 w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="open" class="absolute top-0 left-full mt-0 ml-2 bg-white p-4 rounded shadow-lg w-48 space-y-2" x-cloak>
                        <div class="flex items-center justify-between">
                            <a href="#" class="flex-grow block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 text-left rounded-l">
                                Questionnaires
                            </a>
                            <a href="#" class="p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded-r">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#" class="flex-grow block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 text-left rounded-l">
                                Categories
                            </a>
                            <a href="#" class="p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded-r">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>

                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-gray-700 rounded ease-in-out duration-200 relative">
                            <span>Exam Requests</span>
                            <!-- Red dot for notification -->
                            <span class="absolute top-0 right-0 mt-2 mr-2 flex items-center justify-center w-5 h-5 bg-red-600 text-white text-xs rounded-full">
                                3
                            </span>
                        </a>
                    </div>
                </li>

                <li x-data="{ openDropdown: false }" class="nav-link relative">
                    <a href="#" @click="openDropdown = !openDropdown" class="flex items-center">
                        <i class="fa-solid fa-user-gear icon"></i>
                        <span class="text nav-text">Manage Users</span>
                        <svg x-bind:class="{ 'rotate-180': openDropdown }" class="mr-4 w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="openDropdown" class="absolute top-0 left-full mt-0 ml-2 bg-white p-4 rounded shadow-lg w-64 space-y-2" x-cloak>
                        <div class="flex items-center justify-between">
                            <button href="#" class="flex-grow block p-2 text-sm text-sidebar-menu hover:bg-[#695CFE] hover:text-white ease-in-out duration-200 text-left rounded-l">
                                Trainers
                            </button>
                            <button href="#" class="p-2 text-sm text-sidebar-menu hover:bg-[#695CFE] hover:text-white ease-in-out duration-200 rounded-r">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-[#695CFE] ease-in-out duration-200 rounded">Students</a>

                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-white hover:bg-gray-700 rounded ease-in-out duration-200 relative">
                            <span>Student Requests</span>
                            <!-- Red dot for notification -->
                            <span class="absolute top-0 right-0 mt-2 mr-2 flex items-center justify-center w-5 h-5 bg-red-600 text-white text-xs rounded-full">
                                3
                            </span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <form method="POST" action="#">
                @csrf
                <button type="submit" class="block w-full rounded h-12 p-2 space-x-5 bg-red-400 text-white hover:bg-red-600 text-left">
                    <i class='ml-2 bx bx-log-out text-[#707070] text-[20px]'></i>
                    <span class="text nav-text">Logout</span>
                </button>
            </form>

            <li class="mode">
                <div class="sidebar-toggle">
                    <span class="switch"></span>
                </div>
                <span class="mode-text text">Toggle Sidebar</span>
            </li>
        </div>
    </div>
</nav>