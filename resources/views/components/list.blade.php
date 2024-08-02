<div class="bg-white" id="product">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our products</h2>
      {{-- <span class="flex lg:ml-auto w-max -space-x-px overflow-hidden rounded-md border bg-white shadow-sm my-4">
        @foreach ($categories as $category)
          <button
          class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
          >
            {{ $category }}
          </button>
        @endforeach
      </span> --}}
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product)
          <div class="group relative">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:scale-95 duration-500 lg:h-80">
              <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm font-bold text-gray-700">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $product->name }}
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ $product->category->name }}</p>
              </div>
              <p class="text-sm font-medium text-gray-900">Rp{{ number_format($product->price) }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
</div>