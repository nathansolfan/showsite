<div id="quote-board">

    <div id="quote-board">
        @foreach(array_slice($quotes, 0, 5) as $quote)
            <div style="margin-bottom: 30px; padding: 20px; background: #f9f9f9; border-left: 5px solid #ccc;">
                <p style="font-size: 18px; font-style: italic;">"{{ $quote['q'] }}"</p>
                <p style="text-align: right; font-weight: bold;">— {{ $quote['a'] }}</p>
            </div>
        @endforeach
    </div>


</div>

<script>
    $.ajax()



</script>




{{--<script>--}}
{{--    fetch('/quotes')--}}
{{--        .then(res => res.json())--}}
{{--        .then(data => {--}}
{{--            const board = document.getElementById('quote-board');--}}
{{--            board.innerHTML = ''; //clean to get new quotes--}}

{{--            data.slice(0, 5).forEach(quote => {--}}
{{--                board.innerHTML += `--}}
{{--                    <div style="margin-bottom: 30px; padding: 20px; background: #f9f9f9; border-left: 5px solid #ccc;">--}}
{{--                        <p style="font-size: 18px; font-style: italic;">"${quote.q}"</p>--}}
{{--                        <p style="text-align: right; font-weight: bold;">— ${quote.a}</p>--}}
{{--                    </div>--}}
{{--                `;--}}
{{--            });--}}
{{--        });--}}
{{--</script>--}}
