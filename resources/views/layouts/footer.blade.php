<footer class="footer">
    <div class="container-fluid">
        @php
            @$setting = App\Models\Setting::first();
        @endphp
        <div class="row">
            <div class="col-sm-6">
                {!! @$setting->copyright !!}
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    
                </div>
            </div>
        </div>
    </div>
</footer>