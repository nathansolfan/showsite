<x-layout>

    <x-slot name="title">Compare UK Subscriptions Prices and Save Money</x-slot>


    {{--hero--}}
    <section>
        <div>
            <h1>Compare Subscriptions Prices</h1>

            <p>Find the best deals on streaming, music and more</p>

            <div>
                <a href="">View all Services</a>
                <a href="{{ route('subscriptions.compare') }}">Compare Now</a>
                <a href="/subscriptions/compare">Compare Now</a>
            </div>
        </div>
    </section>

    {{--stats--}}
    <section>
        <div>
            <div>
                <div>
                    {{ $subscriptions->flatten()->count() }}
                </div>
                <div>Services Compared</div>
            </div>
        </div>

    </section>
</x-layout>
