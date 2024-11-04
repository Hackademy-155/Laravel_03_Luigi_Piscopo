<x-layout>
    <div class=" container-fluid">
        <div class="row headerCostum justify-content-center align-items-center ">
            @foreach ($prodotti as $prodotto)
                <div class="col-3">
                    <x-card :prodotto=$prodotto />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
