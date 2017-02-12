<script src="/js/momo.sitter_detail.js"></script>

<script>

    $(document).ready(function () {

        @if ($sitter->rates
        && count($sitter->rates) > 0)

            $("#review_main").rateYo({
                rating: '{{ $sitter->avgRate }}',
                starWidth: "28px",
                ratedFill: "#ffe200",
                normalFill: "#cccccc",
                readOnly: true
            });

            @foreach($sitter->rates as $index => $rate)
                setRating('{{$index}}', '{{ $rate->rate }}');
            @endforeach
        @endif



        sitter_detail_vue.id = {{ $sitter->getKey() }};
        sitter_detail_vue.workdays = {!! $sitter->work_days !!};
    })

    function setRating(id,rate) {

        $("#review_" + id).rateYo({
            rating: rate,
            starWidth: "11px",
            ratedFill: "#ffe200",
            normalFill: "#cccccc",
            readOnly: true
        });
    }

</script>