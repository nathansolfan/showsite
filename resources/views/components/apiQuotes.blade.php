<div class="max-w-4xl w-full mx-auto px-4 py-8">

    <!-- API -->
    <div id="api-info" class="p-5 bg-gray-100 rounded-xl border border-gray-200 shadow-sm mb-6 text-center">
        <h2 class="text-xl font-bold font-merriweather text-gray-900">Quote Generator</h2>
        <p class="text-gray-600 mt-1 text-sm tracking-wide">
            This module retrieves inspirational quotes from an external REST API.
        </p>
    </div>

    <div class="p-4 bg-white rounded-xl shadow-xl border border-gray-100">

        <!-- QUOTE - Hidden at start -->
        <div id="quote-board"
             class="hidden opacity-0 flex flex-col items-center justify-center text-center transition-all duration-500">
        </div>

        <div class="my-4 border-t border-gray-200 w-1/3 mx-auto"></div>

        <button id="next-quote"
                class="mt-4 w-full bg-black font-merriweather text-white font-semibold py-3 rounded-lg transition-all hover:bg-gray-800 hover:shadow-lg hover:-translate-y-0.5 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:outline-none uppercase tracking-widest">
            Start / Next Quote
            <i class="fas fa-arrow-right ml-2"></i>
        </button>
    </div>
</div>


<style>
    .fade-hide {
        opacity: 0;
        transition: opacity 0.4s ease;
        pointer-events: none;
    }

    .quote-visible {
        opacity: 1;
        transform: translateY(0);
    }

    #quote-board {
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

</style>





<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     $.ajax({
    //         url: '/quotes',
    //         method: 'GET',
    //         success: function (data) {
    //
    //             const board = $('#quote-board')
    //             board.empty()
    //
    //             data.slice(0,1).forEach(function (quote) {
    //                 board.append(
    //                     `
    //                  <div style="margin-bottom: 30px; padding: 20px; background: #f9f9f9; border-left: 5px solid #ccc;">
    //                     <p style="font-size: 18px; font-style: italic; text-align: center ">"${quote.q}"</p>
    //                     <p style="text-align: right; font-weight: bold;">— ${quote.a}</p>
    //                 </div>
    //                 `
    //                 )
    //             })
    //         },
    //         error: function (xhr) {
    //             $('#quote-board').html('<p style="color:red;">Erro ao carregar frases.</p>');
    //             console.error(xhr);
    //         }
    //     })
    // })


    let quotes = [];
    let currentIndex = 0;
    let initialized = false;

    $(document).ready(function () {
        $.ajax({
            url: '/quotes',
            method: 'GET',
            success: function (data){
                quotes = data;
            }
        });
    });

    function showQuote(index) {
        const quote = quotes[index];
        $('#quote-board').html(
            `<p class="text-xl italic text-gray-800 font-serif">
            "${quote.q}"
        </p>
        <p class="text-sm text-gray-600 mt-2">— ${quote.a}</p>`
        );
    }

    $('#next-quote').click(function () {

        if (!initialized) {

            // fade
            $('#api-info').addClass('fade-hide');

            // show quote
            $('#quote-board').removeClass('hidden');
            setTimeout(() => {
                $('#quote-board').addClass('quote-visible');
            }, 10);

            initialized = true;
        }

        if (quotes.length === 0) return;

        currentIndex++;
        if (currentIndex >= quotes.length) currentIndex = 0;

        showQuote(currentIndex);
    });










</script>


{{--Vanilla JS--}}
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
