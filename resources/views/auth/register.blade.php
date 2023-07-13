<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="h-screen fixed top-0">
        <div class="container mx-auto h-full">
          <div class="flex flex-row h-full">
            <div class="hidden sm:block sm:w-1/2">
              <div class="relative h-full">
                <img src="https://lirp.cdn-website.com/bae3e0e8/dms3rep/multi/opt/ShtLas8RKGMj17JHxvDg_Oficina+-+69952.v2.0000000-1920w.jpg" alt="Imagen de fondo" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-purple-800 opacity-70 flex items-center justify-center">
                  <img src="{{asset('img/Recurso 1@2x.png')}}" alt="Imagen overlay" class="w-1/2 h-auto">
                </div>
              </div>
            </div>
            <div class="w-full sm:w-1/2 bg-white">
              <div class="flex items-center justify-center h-full px-5 sm:px-0">
                <form class="w-80" action="{{ route('register.save') }}" method="POST">
                  @csrf
                  <div class="text-left">
                    <h5 class="font-normal mt-8 mb-2 text-sm">¡Hola, que bueno verte de nuevo!</h5>
                    <h5 class="font-bold mb-8">Iniciar sesión</h5>
                  </div>
                  <div class="mb-4">
                    <input name="name" type="text" id="inputName" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Name">
                  </div>
                  <div class="mb-4">
                    <input name="last_name" type="text" id="inputLast_name" class="form-input w-full px-4 py-3 rounded-lg" placeholder="LastName">
                  </div>
                  <div class="mb-4">
                    <input name="email" type="email" id="inputEmail" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Email">
                  </div>
                  <div class="mb-4">
                    <input name="password" type="password" id="inputPassword" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Contraseña">
                  </div>
                  <div class="mb-4">
                    <input name="password_confirmation" type="password" id="inputRepeatPassword" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Repeat Password">
                  </div>
                  <div class="mt-6 mb-4">
                    <button type="submit" class="w-full  text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Registrar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>
