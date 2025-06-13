 <divc class="card-header">
                <h3 class="card-title">Produk Yang Terjual Tiap Bulan </h3>
            </div>
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="products-table">
            <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
            </tr>
            </thead>
            <tbody>
             @foreach ($month as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->product_name }}</td>
                    @foreach ($bulanList as $bulan)
                        @php
                            $field = 'sales_' . str_replace('-', '_', $bulan);
                        @endphp
                        <td>{{ $p->$field }}</td>
                    @endforeach
                </tr>
            @endforeach
            
            </tbody>
        </table>
    </div>

   
</div>
