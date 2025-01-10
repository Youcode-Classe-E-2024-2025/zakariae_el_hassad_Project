<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Windmill Dashboard - Forms</title>
  <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
  <script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    defer></script>
  <script src="../../public/JS/init-alpine.js"></script>
  <script src="../../public/JS/charts-lines.js" defer></script>
  <script src="../../public/JS/charts-pie.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside
      class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <a
          class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
          href="#">
          Windmill
        </a>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
              </svg>
              <form action="?action=home" method="POST">
                <button class="ml-4">Dashboard</button>
              </form>
            </a>
          </li>
        </ul>
        <ul>
          <li class="relative px-6 py-3">
            <span
              class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
              aria-hidden="true"></span>
            <a
              class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100">
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
              </svg>
              <form action="?action=forms" method="POST">
                <span class="ml-4">Ton project</span>
              </form>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
              </svg>
              <form action="?action=404" method="POST">
                <button class="ml-4">Cards</button>
              </form>
            </a>
          </li>
          <li class="relative px-6 py-3">
            <a
              class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
              <svg
                class="w-5 h-5"
                aria-hidden="true"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
              </svg>
              <form action="?action=404" method="POST">
                <button class="ml-4">Charts</button>
              </form>
            </a>
          </li>
        </ul>
        <div class="px-6 my-6">
          <form action="?action=login-form" method="POST">
            <button
              class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              <p class="w-full">Login</p>
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </form>
        </div>
        <div class="px-6 my-6">
          <form action="?action=register-form" method="POST">
            <button
              class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
              <p class="w-full">Create account</p>
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </form>
        </div>
      </div>
    </aside>
    <!-- Mobile sidebar -->
    <!-- Backdrop -->

    </aside>
    <div class="flex flex-col flex-1">
      <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
        <div
          class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
          <!-- Mobile hamburger -->
          <button
            class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu"
            aria-label="Menu">
            <svg
              class="w-6 h-6"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20">
              <path
                fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <!-- Search input -->
          <div class="flex justify-center flex-1 lg:mr-32">
            <div
              class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
              <div class="absolute inset-y-0 flex items-center pl-2">
                <svg
                  class="w-4 h-4"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20">
                  <path
                    fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <input
                class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text"
                placeholder="Search for projects"
                aria-label="Search" />
            </div>
          </div>
          <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Theme toggler -->
            <li class="flex">
              <button
                class="rounded-md focus:outline-none focus:shadow-outline-purple"
                @click="toggleTheme"
                aria-label="Toggle color mode">
                <template x-if="!dark">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                      d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                  </svg>
                </template>
                <template x-if="dark">
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                      fill-rule="evenodd"
                      d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                      clip-rule="evenodd"></path>
                  </svg>
                </template>
              </button>
            </li>
            <!-- Notifications menu -->
            <li class="relative">
              <button
                class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                @click="toggleNotificationsMenu"
                @keydown.escape="closeNotificationsMenu"
                aria-label="Notifications"
                aria-haspopup="true">
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="currentColor"
                  viewBox="0 0 20 20">
                  <path
                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
                </svg>
                <!-- Notification badge -->
                <span
                  aria-hidden="true"
                  class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
              </button>
              <template x-if="isNotificationsMenuOpen">
                <ul
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  @click.away="closeNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                  aria-label="submenu">
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Messages</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        13
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Sales</span>
                      <span
                        class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">
                        2
                      </span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <span>Alerts</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
            <!-- Profile menu -->
            <li class="relative">
              <button
                class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                @click="toggleProfileMenu"
                @keydown.escape="closeProfileMenu"
                aria-label="Account"
                aria-haspopup="true">
                <img
                  class="object-cover w-8 h-8 rounded-full"
                  src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                  alt=""
                  aria-hidden="true" />
              </button>
              <template x-if="isProfileMenuOpen">
                <ul
                  x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  @click.away="closeProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                  aria-label="submenu">
                  <li class="flex">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg
                        class="w-4 h-4 mr-3"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg
                        class="w-4 h-4 mr-3"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li class="flex">
                    <a
                      class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                      href="#">
                      <svg
                        class="w-4 h-4 mr-3"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                          d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                      </svg>
                      <span>Log out</span>
                    </a>
                  </li>
                </ul>
              </template>
            </li>
          </ul>
        </div>
      </header>
      <main class="h-full pb-16 overflow-y-auto">
     <div class=" flex items-center justify-between flex-col mb-4 p-4 ">
    <div class="flex items-center justify-between mb-4 p-4 w-[100%]">
      <h1 class="text-3xl font-bold text-gray-500">Task List</h1>
      <nav class="text-sm">
        <a href="?action=home" class="text-blue-400 hover:underline">Dashboard</a>
        <span class="text-white">/</span>   
        <a href="?action=forms" class="text-blue-400 hover:underline">Task List</a>
      </nav>
    </div>
    <div class="bg-gray-800 rounded-lg p-4 w-[100%]">
      <div class="flex items-center justify-between mb-4 ">
        <h2 class="text-lg font-semibold">Tasks</h2>
        <div class="flex items-center space-x-2">
          <div class="flex -space-x-2">
            <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://via.placeholder.com/32" alt="Avatar">
            <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://via.placeholder.com/32" alt="Avatar">
            <img class="w-8 h-8 rounded-full border-2 border-gray-900" src="https://via.placeholder.com/32" alt="Avatar">
            <div class="w-8 h-8 bg-gray-700 rounded-full flex items-center justify-center text-sm text-white border-2 border-gray-900">
              +
            </div>
          </div>
          <button type="button"  onclick="toggleModalTask()" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg text-sm font-semibold">
            + Add task
          </button>
        </div>
      </div>  

      <div>
    <!-- To Do -->
    <h3 class="text-4xl font-semibold mb-2 text-white">To Do</h3>
    <div class="space-y-6 bg-gradient-to-b from-gray-500 to-blue-800 p-6 rounded-lg shadow-lg">
        <?php foreach ($tasks as $task): ?>
            <?php if ($task->getStatus() === 'TODO'): ?>
                <?php 
                    $tag = $task->getTag(); 
                    $circleColor = match ($tag) {
                        'URGENT' => 'bg-red-500', 
                        'MEDIUM-PRIORITY' => 'bg-yellow-500', 
                        'LOW-PRIORITY' => 'bg-green-500', 
                        default => 'bg-gray-400', 
                    };
                ?>
                <div class="task-card bg-opacity-30 backdrop-blur-md bg-gray-700 p-6 rounded-xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:bg-gray-800">
                    <h4 class="text-2xl font-bold text-center text-white mb-4"><?= htmlspecialchars($task->getTitre()) ?></h4>
                    <p class="text-gray-300 text-center mb-4">
                        <?= htmlspecialchars($task->getDescription()) ?>
                    </p>
                    <p class="text-sm text-gray-400 mb-4">
                        <span class="font-semibold text-gray-200">Créé le :</span>
                        <?= htmlspecialchars($task->getCreatedAt()->format('Y-m-d H:i:s')) ?>
                    </p>
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-200">Membre :<?=$task->getMember()?>
                    </p>
                    <div class="mt-6 flex justify-center">
                        <input type="checkbox" class="task-checkbox w-6 h-6 text-blue-500 border-2 border-gray-400 rounded-full focus:ring-4 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between mt-4">
                          <a href=""
                          class="text-white bg-green-500 hover:bg-green-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-edit">edit</i>
                           </a>
                
        
                           <a href="?action=delete_task&task_id=<?= htmlspecialchars($task->getId()) ?>&project_id=<?= htmlspecialchars($projectId) ?>"
                          class="text-white bg-red-500 hover:bg-red-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-trash">delet</i>
                      </a>
                    </div>
                    <div class="floating-decorator absolute top-2 right-2 w-6 h-6 <?= $circleColor ?> rounded-full animate-pulse"></div>
                    <div class="floating-decorator absolute bottom-2 left-2 w-4 h-4 <?= $circleColor ?> rounded-full animate-pulse"></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>


<div>
    <!-- To Do -->
    <h3 class="text-4xl font-semibold mb-2 text-white">To Do</h3>
    <div class="space-y-6 bg-gradient-to-b from-gray-500 to-blue-800 p-6 rounded-lg shadow-lg">
        <?php foreach ($tasks as $task): ?>
            <?php if ($task->getStatus() === 'DOING'): ?>
                <?php 
                    $tag = $task->getTag(); 
                    $circleColor = match ($tag) {
                      'URGENT' => 'bg-red-500', 
                      'MEDIUM-PRIORITY' => 'bg-yellow-500', 
                      'LOW-PRIORITY' => 'bg-green-500', 
                        default => 'bg-gray-400', 
                    };
                ?>
                <div class="task-card bg-opacity-30 backdrop-blur-md bg-gray-700 p-6 rounded-xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:bg-gray-800">
                    <h4 class="text-2xl font-bold text-center text-white mb-4"><?= htmlspecialchars($task->getTitre()) ?></h4>
                    <p class="text-gray-300 text-center mb-4">
                        <?= htmlspecialchars($task->getDescription()) ?>
                    </p>
                    <p class="text-sm text-gray-400 mb-4">
                        <span class="font-semibold text-gray-200">Créé le :</span>
                        <?= htmlspecialchars($task->getCreatedAt()->format('Y-m-d H:i:s')) ?>
                    </p>
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-200">Membre :<?=$task->getMember()?>
                    </p>
                    <div class="mt-6 flex justify-center">
                        <input type="checkbox" class="task-checkbox w-6 h-6 text-blue-500 border-2 border-gray-400 rounded-full focus:ring-4 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between mt-4">
                          <a href=""
                          class="text-white bg-green-500 hover:bg-green-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-edit">edit</i>
                           </a>
                
        
                           <a href="?action=delete_task&task_id=<?= htmlspecialchars($task->getId()) ?>  &project_id=<?= htmlspecialchars($projectId) ?>"
                          class="text-white bg-red-500 hover:bg-red-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-trash">delet</i>
                      </a>
                    </div>
                    <div class="floating-decorator absolute top-2 right-2 w-6 h-6 <?= $circleColor ?> rounded-full animate-pulse"></div>
                    <div class="floating-decorator absolute bottom-2 left-2 w-4 h-4 <?= $circleColor ?> rounded-full animate-pulse"></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>


<div>
    <!-- To Do -->
    <h3 class="text-4xl font-semibold mb-2 text-white">To Do</h3>
    <div class="space-y-6 bg-gradient-to-b from-gray-500 to-blue-800 p-6 rounded-lg shadow-lg">
        <?php foreach ($tasks as $task): ?>
            <?php if ($task->getStatus() === 'DONE'): ?>
                <?php 
                    $tag = $task->getTag(); 
                    $circleColor = match ($tag) {
                      'URGENT' => 'bg-red-500', 
                      'MEDIUM-PRIORITY' => 'bg-yellow-500', 
                      'LOW-PRIORITY' => 'bg-green-500', 
                        default => 'bg-gray-400', 
                    };
                ?>
                <div class="task-card bg-opacity-30 backdrop-blur-md bg-gray-700 p-6 rounded-xl shadow-xl transform transition-all duration-500 hover:scale-105 hover:bg-gray-800">
                    <h4 class="text-2xl font-bold text-center text-white mb-4"><?= htmlspecialchars($task->getTitre()) ?></h4>
                    <p class="text-gray-300 text-center mb-4">
                        <?= htmlspecialchars($task->getDescription()) ?>
                    </p>
                    <p class="text-sm text-gray-400 mb-4">
                        <span class="font-semibold text-gray-200">Créé le :</span>
                        <?= htmlspecialchars($task->getCreatedAt()->format('Y-m-d H:i:s')) ?>
                    </p>
                    <p class="text-sm text-gray-400">
                        <span class="font-semibold text-gray-200">Membre : <?=$task->getMember()?>
                    </p>
                    <div class="mt-6 flex justify-center">
                        <input type="checkbox" class="task-checkbox w-6 h-6 text-blue-500 border-2 border-gray-400 rounded-full focus:ring-4 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-between mt-4">
                          <a href=""
                          class="text-white bg-green-500 hover:bg-green-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-edit">edit</i>
                           </a>
                
        
                           <a href="?action=delete_task&task_id=<?= htmlspecialchars($task->getId()) ?>  &project_id=<?= htmlspecialchars($projectId) ?>"
                          class="text-white bg-red-500 hover:bg-red-600 p-2 rounded-full transition text-xs">
                          <i class="fas fa-trash">delet</i>
                      </a>
                    </div>
                    <div class="floating-decorator absolute top-2 right-2 w-6 h-6 <?= $circleColor ?> rounded-full animate-pulse"></div>
                    <div class="floating-decorator absolute bottom-2 left-2 w-4 h-4 <?= $circleColor ?> rounded-full animate-pulse"></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

   
    
      
    </div>
  </div>
    </div>
    
      
    </div>
  </div>
</main>
</div>
</div>

<section id="addModalTask" class="hidden fixed inset-0 flex items-start justify-center bg-black bg-opacity-50">
    <div class="bg-white px-4 py-3 mb-8 rounded-lg shadow-md dark:bg-gray-800 w-[30%] h-[80%] mt-10 overflow-y-auto">
        <div class="flex items-center justify-between my-6">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Add task</h2>
            <button type="button" onclick="returnPage2()" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Close</button>
        </div>
        <form action="?action=save_task&project_id=<?=$_GET['project_id']?>" method="POST">
            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Titre</label>
                <input name="titre" 
                       class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" 
                       placeholder="Jane Doe" />
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Description</label>
                <textarea name="description" 
                          class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                          rows="3" placeholder="Enter some long form content."></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Date Start</label>
                <input name="start_at" type="date" 
                       class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" />
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Date Complete</label>
                <input name="complete_at" type="date" 
                       class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" />
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Date Created</label>
                <input name="created_at" type="date" 
                       class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input" />
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Category</label>
                <select name="isCategory" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-select">
                    <?php foreach ($categorys as $category): ?>
                        <option value="<?= htmlspecialchars($category->getId()) ?>">
                            <?= htmlspecialchars($category->getName()) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-sm text-gray-700 dark:text-gray-400">Member</label>
                <select name="member_id" class="block w-full mt-1 text-sm dark:text-gray-300 dark:bg-gray-700 focus:outline-none form-select">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= htmlspecialchars($user['id']); ?>">
                            <?= htmlspecialchars($user['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <span class="block text-sm text-gray-700 dark:text-gray-400">Task Status</span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="todo" value="TODO" />
                        <span class="ml-2">To Do</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="todo" value="DOING" />
                        <span class="ml-2">Doing</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="todo" value="DONE" />
                        <span class="ml-2">Done</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <span class="block text-sm text-gray-700 dark:text-gray-400">Priority</span>
                <div class="mt-2">
                    <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="MEDIUM-PRIORITY" value="URGENT" />
                        <span class="ml-2">Urgent</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="MEDIUM-PRIORITY" value="MEDIUM-PRIORITY" />
                        <span class="ml-2">MEDIUM-PRIORITY</span>
                    </label>
                    <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                        <input type="radio" 
                               class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                               name="MEDIUM-PRIORITY" value="LOW-PRIORITY" />
                        <span class="ml-2">LOW-PRIORITY</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-center mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    Add
                </button>
            </div>
        </form>
    </div>
</section>




 <script src="./public/JS/froms.js"></script>
 <script>
  // Selection of all the checkboxes
  const checkboxes = document.querySelectorAll('.task-checkbox');

  checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', function () {
      const text = this.nextElementSibling; // Gets the span next to the checkbox
      if (this.checked) {
        text.classList.add('line-through', 'text-gray-400'); // Add line-through class
      } else {
        text.classList.remove('line-through', 'text-gray-400'); // Remove line-through class
      }
    });
  });
</script>
</body>

</html>
