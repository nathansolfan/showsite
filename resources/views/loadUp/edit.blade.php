<x-layout>

    <x-forms.vanForm
        :service="$service"
        :fields="$fields"
        :booking="$booking"
        action="/loadup/booking/{{$booking->id}}"
    >

    </x-forms.vanForm>
</x-layout>
