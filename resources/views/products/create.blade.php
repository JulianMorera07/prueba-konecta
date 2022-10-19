<x-admin-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-validation-error :errors="$errors"></x-validation-error>
            <div class="row">
                <form class="col" method="POST" action="{{route('products.store')}}">
                    @csrf
                    <x-product-form></x-product-form>
                    <br>
                    <button class="btn btn-primary" type="submit" name="action">Crear</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
