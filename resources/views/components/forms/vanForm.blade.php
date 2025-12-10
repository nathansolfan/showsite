@props(['service', 'fields' => []])

<div class="max-w-3xl mx-auto py-16 px-6">

    {{-- Title --}}
    <h1 class="text-4xl font-bold text-gray-900 mb-10 text-center">
        {{ $service->name }}
    </h1>

    <form method="POST" action=""
          class="bg-white shadow-xl rounded-xl p-10 border border-gray-200">
        @csrf

        <input type="hidden" name="service_id" value="{{ $service->id }}">

        {{-- Pickup Address --}}
        <div class="mb-6">
            <label class="block text-gray-800 font-semibold mb-2">
                Pickup Address
            </label>
            <input type="text" name="pickup_address"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600"
                   required>
        </div>

        {{-- Pickup Postcode --}}
        <div class="mb-6">
            <label class="block text-gray-800 font-semibold mb-2">
                Pickup Postcode
            </label>
            <input type="text" name="pickup_postcode"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600"
                   required>
        </div>

        {{-- Pickup Date --}}
        <div class="mb-6">
            <label class="block text-gray-800 font-semibold mb-2">
                Pickup Date
            </label>
            <input type="date" name="pickup_date"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600"
                   required>
        </div>

        {{-- Item Description --}}
        <div class="mb-6">
            <label class="block text-gray-800 font-semibold mb-2">
                General Description
            </label>
            <textarea name="item_description" rows="4"
                      class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600"></textarea>
        </div>

        {{-- Dynamic Extra Fields --}}
        <div class="space-y-6">
            @foreach ($fields as $field)
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">
                        {{ $field['label'] }}
                    </label>

                    @if ($field['type'] === 'text')
                        <input type="text" name="extra_fields[{{ $field['name'] }}]"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600">

                    @elseif ($field['type'] === 'number')
                        <input type="number" name="extra_fields[{{ $field['name'] }}]"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600">

                    @elseif ($field['type'] === 'textarea')
                        <textarea name="extra_fields[{{ $field['name'] }}]" rows="4"
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600"></textarea>

                    @elseif ($field['type'] === 'select')
                        <select name="extra_fields[{{ $field['name'] }}]"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-orange-600 focus:border-orange-600">
                            @foreach ($field['options'] as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>
            @endforeach
        </div>

        {{-- Submit --}}
        <div class="mt-10">
            <button type="submit"
                    class="w-full bg-orange-600 text-white font-bold py-4 rounded-lg text-xl shadow-lg hover:bg-orange-700 transition-all">
                Book Now
            </button>
        </div>

    </form>
</div>
