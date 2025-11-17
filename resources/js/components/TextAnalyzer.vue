<template>
    <div class="p-4 text-white">
        <textarea
            v-model="input"
            class="w-full h-40 bg-gray-800 p-3 rounded"
            placeholder="Type your text"
        ></textarea>

        <button
        @click="analyze"
        class="mt-3 bg-blue-600 px-4 py-2 rounded"

        >Analyze</button>

        <div v-if="result" class="mt-6 bg-gray-900 p-4 rounded">
            <p>Words: {{result.word_count}}</p>
            <p>Characters: {{result.chars}}</p>
            <p>Feeling: {{result.feeling}}</p>
            <p>Feelings Score: {{result.feeling_score}}</p>
            <p>Positive Words: {{result.positive_words}}</p>
            <p>Negative Words: {{result.negative_words}}</p>

            <div>
                <h3>Emotions:</h3>
                <ul>
                    <li v-for="(value, emotion) in result.emotions" :key="emotion" >
                        {{emotion}} : {{value}}
                    </li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            input: '',
            result: null
        }
    },
    methods: {
        async analyze() {
            const response = await fetch('/analyze', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector("meta[name='csrf-token']").content
                },
                body: JSON.stringify({ text: this.input })
            })

            this.result = await  response.json();
        },
        // async analyze() {alert('Vue')}


    }
}
</script>
