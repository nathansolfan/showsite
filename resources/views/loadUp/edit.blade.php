<x-layout>

    <x-forms.vanForm
        :service="$service"
        :fields="$fields"
        :booking="$booking"
        action="/loadup/{{$booking->id}}/update"
    >

    </x-forms.vanForm>
</x-layout>
