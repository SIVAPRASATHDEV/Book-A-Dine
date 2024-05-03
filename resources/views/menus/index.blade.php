<link rel="stylesheet" href="{{asset('/css/menu/index.css')}}">
<x-guest-layout>
    <nav class="breadcrumb text-white" >
        <a class="breadcrumb-item" href="/">Home</a> 
        <span class="breadcrumb-item  breadcrumb-item-active " aria-current="page">Menus</span>
    </nav>
    <section class="mt-8 bg-black">
        <div class="container w-full px-5 py-6 mx-auto">



            <div class="mt-4 text-center">
                <h3 class="text-2xl font-bold" style="color: hsl(0, 0%, 100%)">Our Menu</h3>
                <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                    TODAY'S MENU'S</h2>
            </div>
            <div class="grid lg:grid-cols-3 gap-y-6 mt-10">
                @foreach ($menus as $menu)
                <div class="card-menu">
                    <div class="rounded-lg shadow-lg">
                        <img class="menu-img" src="/images/menu_images/{{($menu->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="menu-name mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                                {{ $menu->name }}</h4>
                        </div>
            
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
