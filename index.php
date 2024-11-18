<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>

          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
 
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">

            <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Menu</a>
            <a href="cortes.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cortes</a>
            <a href="admin.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Painel Administrativo</a>
            <a href="login.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Logout</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
          </svg>
        </button>

        <div class="relative ml-3">
          <div>
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="data:image/png;base64,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" alt="">
            </button>
          </div>

          <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-10">
            <a href="perfil.php" block px-4 py-2 text-sm text-gray-700 role="menuitem" tabindex="-1" id="user-menu-item-0">Meu perfil</a>
          
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Menu</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Cortes</a>
            <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Outros Serviços</a>
    </div>
  </div>
</nav>

<section class="bg-gray-100 py-20">
    <div class="mx-auto max-w-7xl text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Bem-vindo à Beautiful Cut</h2>
      <p class="text-lg text-gray-600">
        A Beautiful Cut oferece o melhor atendimento para você, com cortes modernos, um ambiente acolhedor e profissionais experientes prontos para deixar você com um visual impecável. Venha experimentar dos nossos serviços, voçê não vai se arrepender!
      </p>
    </div>
  </section>

  <section class="bg-white py-16">
    <div class="mx-auto max-w-7xl text-center">
      <h3 class="text-2xl font-semibold text-gray-800 mb-6">Beautiful Cut</h3>
      <p class="text-lg text-gray-600">
        Nossa barbearia foi criada com o objetivo de oferecer aos nossos clientes um ambiente confortável, moderno e sofisticado. Aqui, você encontra os melhores serviços de corte, barba e outros cuidados pessoais, sempre com um toque de excelência.
      </p>
    </div>
  </section>
  <section class="container mx-auto p-4">
    <div class="mt-6">
      <h2 class="text-2xl font-bold">Agende seu corte:</h2>
      <div class="mt-6">
        <a href="agendarCorte.php" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 text-center block">Agendar Corte</a>
      </div>
    </div>
  </section>


</body>
</html>
