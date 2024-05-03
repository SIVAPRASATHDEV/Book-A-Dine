<link rel="stylesheet" href="{{asset('/css/categories/index.css')}}">
<x-guest-layout>
    
    <div class="container">

        <nav class="breadcrumb ">
            <a class="breadcrumb-item" href="/">Home</a> 
            <span class="breadcrumb-item breadcrumb-item-active " aria-current="page">Categories</span>
        </nav>

        <section class=" bg-black">
            <div class="container w-full ml-10 py-6 ">
                <div class="mt-4 text-center">
                    <h3 class="text-2xl font-bold " style="color: #ffffff" >Our Category</h3>
                    <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        TODAY'S SPECIALITY</h2> 
                    </div>
                    <div class="grid lg:grid-cols-4 md:grid-cols-4 mt-5">
                        @foreach ($categories as $category)
                        <div class="card-cat">
                            <a href="{{ route('categories.show', $category->id) }}">
                                <div class=" ">
                                    <img class="w-full h-48" src="/images/categoriesimage/{{ $category->image }}" alt="Image" />
                                        <div class="px-6 py-4">
                                            <h4
                                                class="mb-3 text-xl font-semibold tracking-tight text-green-600 hover:text-green-400 uppercase">
                                                {{ $category->name }}</h4>
                                        </div>
                                </div>
                            </a>

                        </div>
                        @endforeach
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
