<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Cocina de Mamá</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilos para el fondo con imagen difuminada */
        .bg-image-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/backend/dist/img/welcome/landing.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            opacity: 0.4;
            filter: blur(5px);
            z-index: -1;
        }

        .dark .bg-image-overlay {
            opacity: 0.2;
            filter: blur(5px) brightness(0.6);
        }

        /* Estilos para la imagen vertical */
        .vertical-image {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .vertical-image:hover {
            transform: scale(1.02);
        }

        /* Estilos para las tarjetas */
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            color: #000;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dark .card {
            background-color: rgba(24, 24, 27, 0.9);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        /* Estilos para el botón de registro */
        .register-btn {
            background-color: #E6A15C;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .register-btn:hover {
            background-color: #8B4513;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        /* Animaciones sutiles */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-zinc-900 text-gray-800 dark:text-white/80">
    <!-- Imagen de fondo con difuminado -->
    <div class="bg-image-overlay"></div>

    <div class="relative min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header con navegación -->
            <header class="py-6 flex justify-between items-center">
                <div class="text-3xl font-bold text-[#8B4513] dark:text-[#E6A15C]">La Cocina de Mamá</div>

                @if (Route::has('login'))
                    <nav class="flex space-x-4">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-gray-700 hover:text-[#8B4513] dark:text-white/80 dark:hover:text-[#E6A15C] transition-colors"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-gray-700 hover:text-[#8B4513] dark:text-white/80 dark:hover:text-[#E6A15C] transition-colors"
                            >
                                Acceder
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-gray-700 hover:text-[#8B4513] dark:text-white/80 dark:hover:text-[#E6A15C] transition-colors"
                                >
                                    Registro
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <!-- Contenido principal -->
            <main class="py-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Tarjeta principal con imagen y bienvenida -->
                    <div class="card p-6 shadow-lg animate-fade-in">
                        <div class="flex flex-col">
                            <img
                                src="/backend/dist/img/welcome/verticaimage.jpg"
                                alt="Restaurante La Cocina de Mamá"
                                class="w-full h-80 object-cover rounded-lg mb-6"
                            />

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-[#8B4513]/10">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8B4513">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2 class="text-2xl font-semibold text-[#8B4513] dark:text-[#E6A15C]">Bienvenidos a La Cocina de Mamá</h2>

                                    <div class="mt-4 space-y-4">
                                        <p>
                                            Disfruta de la auténtica comida casera como la que preparaba tu mamá. Nuestros platos están hechos con ingredientes frescos y recetas tradicionales que te transportarán a los sabores de tu infancia.
                                        </p>

                                        <p>
                                            En La Cocina de Mamá, nos esforzamos por crear un ambiente acogedor donde cada cliente se sienta como en casa. Nuestro equipo de chefs prepara cada plato con dedicación y amor, asegurando que cada bocado sea una experiencia memorable.
                                        </p>

                                        <p>
                                            Te invitamos a registrarte para recibir notificaciones sobre nuestro menú diario y promociones especiales.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna derecha con tarjetas de información -->
                    <div class="space-y-8">
                        <!-- Tarjeta de Nuestro Menú -->
                        <div class="card p-6 shadow-lg animate-fade-in delay-100">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-[#8B4513]/10">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8B4513">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2 class="text-xl font-semibold text-[#8B4513] dark:text-[#E6A15C]">Nuestro Menú</h2>

                                    <p class="mt-4">
                                        Ofrecemos un menú variado de almuerzos caseros que cambia diariamente. Desde sopas y guisos tradicionales hasta platos principales abundantes y postres caseros que te harán sentir como en casa.
                                    </p>

                                    <p class="mt-2">
                                        Todos nuestros platos están preparados con ingredientes frescos y de temporada, seleccionados cuidadosamente para garantizar el mejor sabor y calidad.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta de Ubicación y Horarios -->
                        <div class="card p-6 shadow-lg animate-fade-in delay-200">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-[#8B4513]/10">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8B4513">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2 class="text-xl font-semibold text-[#8B4513] dark:text-[#E6A15C]">Ubicación y Horarios</h2>

                                    <p class="mt-4">
                                        Estamos ubicados en la calle 7 # 16 A 57 Barrio el Llano, Abiertos de lunes a viernes de 11:30 AM a 3:00 PM. ¡Ven a disfrutar de nuestros deliciosos almuerzos!
                                    </p>

                                    <p class="mt-2">
                                        Contamos con un ambiente acogedor y familiar, perfecto para disfrutar de una comida tranquila o para reuniones de negocios.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta de Experiencia -->
                        <div class="card p-6 shadow-lg animate-fade-in delay-300">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 flex items-center justify-center w-12 h-12 rounded-full bg-[#8B4513]/10">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#8B4513">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2 class="text-xl font-semibold text-[#8B4513] dark:text-[#E6A15C]">Nuestra Experiencia</h2>

                                    <p class="mt-4">
                                        Con más de X años de experiencia, La Cocina de Mamá se ha convertido en un referente de la comida casera en la ciudad. Nuestros clientes nos eligen por el sabor auténtico, la calidad de nuestros ingredientes y el servicio cálido y familiar.
                                    </p>

                                    <p class="mt-2">
                                        Cada plato cuenta una historia y está preparado con las recetas tradicionales que han pasado de generación en generación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-20 text-center">
                <div class="flex flex-col items-center justify-center space-y-4">
                    <div class="text-2xl font-bold text-[#8B4513] dark:text-[#E6A15C]">La Cocina de Mamá</div>
                    <p>El sabor de la comida casera, como la que preparaba mamá</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-[#8B4513] dark:text-[#E6A15C] hover:text-[#6d3710] dark:hover:text-[#c88a4e] transition-all duration-300">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-[#8B4513] dark:text-[#E6A15C] hover:text-[#6d3710] dark:hover:text-[#c88a4e] transition-all duration-300">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-[#8B4513] dark:text-[#E6A15C] hover:text-[#6d3710] dark:hover:text-[#c88a4e] transition-all duration-300">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M21.105 4.893C18.928 2.715 16.022 1.5 12.9 1.5c-6.284 0-11.4 5.116-11.4 11.4 0 2.005.523 3.963 1.516 5.684L1.5 24l5.493-1.441c1.665.908 3.544 1.385 5.465 1.385h.005c6.284 0 11.4-5.116 11.4-11.4 0-3.045-1.183-5.907-3.329-8.06l.571.409zm-8.205 17.507h-.004c-1.7 0-3.366-.457-4.819-1.32l-.345-.205-3.582.939.957-3.494-.225-.358c-.95-1.514-1.45-3.26-1.45-5.062 0-5.234 4.257-9.491 9.5-9.491 2.537 0 4.922.989 6.713 2.781 1.79 1.792 2.776 4.177 2.775 6.714 0 5.235-4.257 9.491-9.5 9.491l-.02.005zm5.214-7.12c-.286-.143-1.688-.833-1.95-.927-.262-.094-.453-.143-.644.143-.19.286-.736.927-.901 1.118-.166.19-.332.214-.618.071-.286-.143-1.207-.445-2.299-1.417-.85-.757-1.424-1.692-1.59-1.978-.166-.286-.018-.44.125-.582.128-.128.286-.334.429-.5.143-.167.19-.286.286-.477.095-.19.048-.358-.024-.5-.071-.143-.644-1.55-.882-2.12-.232-.558-.468-.482-.644-.49-.166-.008-.358-.01-.549-.01-.19 0-.5.071-.762.358-.262.286-.999.976-.999 2.383 0 1.406 1.023 2.765 1.166 2.956.143.19 2.008 3.067 4.863 4.3.68.293 1.21.468 1.624.599.682.217 1.304.186 1.795.113.547-.082 1.688-.69 1.926-1.357.237-.667.237-1.239.166-1.357-.071-.119-.262-.19-.548-.334z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-4">&copy; {{ date('Y') }} La Cocina de Mamá. Todos los derechos reservados.</p>
                </div>
            </footer>
        </div>
    </div>

    <!-- Script para efectos adicionales -->
    <script>
        // Detectar scroll para efectos en la navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
            } else {
                header.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>