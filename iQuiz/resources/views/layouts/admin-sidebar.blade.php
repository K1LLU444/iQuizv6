<div x-data="{ openDropdown: null }" class="w-64 bg-custombg-gray text-custom-gray min-h-screen font-satoshi w-custom-sidebar-width flex flex-col">
    <div class="flex-grow">
        <div class="flex items-center justify-center mt-4 px-6 py-5.5 lg:py-6.5">
            <img src="{{asset('/images/whitelogo2.png')}}" width="150" height="150" alt="logo">
        </div>
        <nav class="px-8 py-4 mt-8">
            <h3 class="mb-6 text-sm font-medium text-sidebar-menu">MENU</h3>
            <ul>
                <li class="py-2">
                    <a href="{{route('admin.dashboard')}}" class="block rounded p-2 space-x-2 hover:bg-gray-700 ease-in-out duration-200">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="py-2">
                    <a href="#" @click="openDropdown === 1 ? openDropdown = null : openDropdown = 1" class="block rounded flex items-center space-x-2 hover:bg-gray-700 p-2 ease-in-out duration-200">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Category</span>
                        <svg x-bind:class="{ 'rotate-180': openDropdown === 1 }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="openDropdown === 1" class="ml-4 my-4 space-y-2" x-cloak>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">Add a questionnaire</a>
                        <a href="{{route('admin.add-category')}}" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">Add a category</a>
                        <a href="{{route('admin.all-category')}}" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">View all category</a>
                    </div>
                </li>
                <li class="py-2">
                    <a href="#" @click="openDropdown === 2 ? openDropdown = null : openDropdown = 2" class="block rounded flex items-center space-x-2 hover:bg-gray-700 p-2 ease-in-out duration-200">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Manage Users</span>
                        <svg x-bind:class="{ 'rotate-180': openDropdown === 2 }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="margin-left:auto">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    <div x-show="openDropdown === 2" class="ml-4 my-4 space-y-2" x-cloak>
                        <a href="{{route('admin.add-trainer')}}" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">Add a trainer</a>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">View all trainers</a>
                        <a href="#" class="block p-2 text-sm text-sidebar-menu hover:text-gray-300 hover:bg-gray-700 rounded ease-in-out duration-200">View all students</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <div class="w-64 bg-custombg-gray text-custom-gray py-4 shadow-md fixed bottom-0 left-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full rounded p-2 space-x-2 bg-red-400 text-white hover:bg-red-600 ease-in-out duration-200">
                <i class="fa-solid fa-sign-out-alt"></i>
                <span>Logout</span>
            </button>
        </form>
    </div>
</div>
