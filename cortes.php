<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cortes - Barbearia</title>
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>
<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
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

            <a href="index.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Home</a>
            <a href="cortes.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Cortes</a>
            <a href="outros_servicos.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Outros Serviços</a>
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
              <img class="h-8 w-8 rounded-full" src="data:image/png;base64,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">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<main class="mt-10">
<section class="container mx-auto p-4">
    <h1 class="text-3xl font-bold text-center">Cortes de Cabelo</h1>
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/corteclassico.png" alt="Corte Clássico" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Corte Clássico</h2>
        <p class="mt-2 text-gray-600">O corte clássico é atemporal e oferece um visual limpo e elegante. Ideal para quem busca praticidade e sofisticação.</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/undercut.png" alt="Corte Undercut" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Corte Undercut</h2>
        <p class="mt-2 text-gray-600">O undercut é um corte moderno, com as laterais raspadas e o topo mais volumoso. Perfeito para quem busca estilo e ousadia.</p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/fade.png" alt="Corte Fade" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Corte Fade</h2>
        <p class="mt-2 text-gray-600">O fade cria um desvanecimento sutil nas laterais, sendo ideal para um visual mais clean e moderno.</p>
      </div>

    </div>
  </div>
  </section>
  <section class="container mx-auto p-4">
    <h1 class="text-3xl font-bold text-center">Outros Serviços</h1>
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

    <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/barba.png" alt="Corte Clássico" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Barba</h2>
        <p class="mt-2 text-gray-600">Oferecemos serviços completos para a manutenção e cuidado da sua barba, garantindo um visual alinhado e estiloso.</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/sobrancelha.png" alt="Corte Undercut" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Sobrancelha</h2>
        <p class="mt-2 text-gray-600">Cuide da sua sobrancelha com um design preciso, que realça os traços do seu rosto e proporciona um look mais harmonioso.</p>
    </div>


      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="./imgs/tintura.png" alt="Corte Fade" class="w-full h-48 object-cover rounded-t-lg">
        <h2 class="mt-4 text-xl font-semibold text-gray-800">Tintura</h2>
        <p class="mt-2 text-gray-600">Temos uma variedade de cores e estilos para enfeitar o cabelo, afinal quem nunca chegou naquele final de ano e pensou em fazer o famoso "nevou"?</p>
      </div>

    </div>
  </div>
  </section>
  <div class="mt-6">
        <a href="agendarCorte.php" class="w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 text-center block">Agendar Corte</a>
      </div>

</main>

</body>
</html>
