<footer>
    <div class="container">
        <div class="row">
            @for ($i = 1; $i <= 4; $i++)
                <div class="col-12 col-sm-6 col-md-3">
                    Footer {{ $i }}
                </div>
            @endfor
        </div>
    </div>
</footer>
