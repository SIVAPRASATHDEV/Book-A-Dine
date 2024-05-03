<link rel="stylesheet" href="{{asset('/css/categories/show.css')}}">
<x-guest-layout>
    <div class="container">
        <nav class="breadcrumb ">
            <a class="breadcrumb-item" href="/">Home</a>
            <a class="breadcrumb-item" href="{{ route('categories.index')}}">Categories</a> 
            <span class="breadcrumb-item breadcrumb-item-active " aria-current="page">{{$category->name}}</span>
        </nav>
    </div>
    <section class=" bg-black">
        <div class="container w-full px-5 py-6 mx-auto">
            <div class="container menu-title">
                <h1>{{$category->name}} MENU</h1>

            </div>
            <div class="grid lg:grid-cols-3 gap-y-6">
                @foreach ($category->menus as $menu)
                <div class="card-cat-show">
                    <div class="">
                        
                        <img class="menu-img" src="/images/menu_images/{{($menu->image) }}" alt="Image" />
                        <div class="px-6 py-4">
                            <h4 class="menu-name mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                               <span>{{ $category->name}} </span> {{ $menu->name }}</h4>
                        </div>
                        
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
