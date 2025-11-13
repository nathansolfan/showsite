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
    async function loadQuotes() {
        const response = await fetch('/quotes');
        const data = await response.json();

        const board = document.getElementById('quote-board');
        board.innerHTML = '';

        data.slice(0, 5).forEach(q => {
            const card = document.createElement('div');
            card.innerHTML = `
                <p style="font-size: 18px; font-style: italic;">"${q.q}"</p>
                <p style="text-align: right; font-weight: bold;">— ${q.a}</p>
            `;

            card.style.marginBottom = '30px';
            card.style.padding = '20px';
            card.style.background = '#f9f9f9';
            card.style.borderLeft = '5px solid #ccc';
            board.appendChild(card);
        });
    }
    loadQuotes();
</script>
