<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-error :errors="$errors"></x-validation-error>
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('products.update', $product) }}">
                    @csrf
                    @method('PUT')
                    <x-product-form :product="$product"></x-product-form>
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Editar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

