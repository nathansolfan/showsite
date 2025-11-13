<div id="quote-board"></div>

<script type="text/javascript">
    async function loadQuotes() {
        try {
            const response = await fetch('/quotes');
            const data = await response.json();

            const board = document.getElementById('quote-board');
            board.innerHTML = '';

            data.slice(0, 12).forEach(q => {
                const card = document.createElement('div');
                card.innerHTML = `
                <p>"${q.q}"</p>
                <span>— ${q.a}</span>
            `;
                board.appendChild(card);
            });
        } catch (error) {
            console.error('Erro ao carregar as citações:', error);
        }
    }
    loadQuotes();
</script>
