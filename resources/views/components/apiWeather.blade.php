<div id="quote-board"><p>Carrgegando...</p></div>
<button id="next-quote">Next</button>

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
    let currentIndex = 0

    $(document).ready(function () {          //.ready only works when page is loaded

        $.ajax({ //request
            url: '/quotes',
            method: 'GET',
            success: function (data){        //success when api answer
                quotes = data;
                $('#quote-board').html(`<p>${quotes[0].q} - ${quotes[0].a}</p>`)
            }
        })
    })

    function showQuote(index) {
        const quote = quotes[index];
        $('#quote-board').html(`<p style="text-align:center;">"${quote.q}" - ${quote.q}</p>`)
    }

    $('#next-quote').click(function () {
        currentIndex++

        if (currentIndex >= quotes.length) {
            currentIndex = 0
        }
        showQuote(currentIndex)
    })








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
