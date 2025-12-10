@props(['service', 'fields' => []])

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-white to-orange-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">

        {{-- Header --}}
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl shadow-lg mb-6">
                <span class="text-4xl">📦</span>
            </div>
            <h1 class="text-5xl font-bold bg-gradient-to-r from-orange-600 to-orange-500 bg-clip-text text-transparent mb-3">
                {{ $service->name }}
            </h1>
            <p class="text-gray-600 text-lg">Fill in the details below to complete your booking</p>
        </div>

        <form method="POST" action="" class="relative">
            @csrf
            <input type="hidden" name="service_id" value="{{ $service->id }}">

            {{-- Main Card --}}
            <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden">

                {{-- Decorative bar --}}
                <div class="h-2 bg-gradient-to-r from-orange-500 via-orange-600 to-orange-500"></div>

                <div class="p-8 sm:p-12">

                    {{-- Pickup Section --}}
                    <div class="mb-10">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Pickup Details</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            {{-- Pickup Address --}}
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Pickup Address
                                </label>
                                <input type="text" name="pickup_address"
                                       class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                                       placeholder="Enter your pickup address"
                                       required>
                            </div>

                            {{-- Pickup Postcode --}}
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Postcode
                                </label>
                                <input type="text" name="pickup_postcode"
                                       class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                                       placeholder="Enter postcode"
                                       required>
                            </div>

                            {{-- Pickup Date --}}
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    Pickup Date
                                </label>
                                <input type="date" name="pickup_date"
                                       class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200"
                                       required>
                            </div>
                        </div>
                    </div>

                    {{-- Divider --}}
                    <div class="relative mb-10">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t-2 border-gray-200"></div>
                        </div>
                    </div>

                    {{-- Item Description --}}
                    <div class="mb-10">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Item Description</h2>

                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            General Description
                        </label>
                        <textarea name="item_description" rows="4"
                                  class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200 resize-none"
                                  placeholder="Describe the items to be collected..."></textarea>
                    </div>

                    {{-- Dynamic Extra Fields --}}
                    @if (count($fields) > 0)
                        <div class="relative mb-10">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t-2 border-gray-200"></div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Additional Information</h2>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                @foreach ($fields as $field)
                                    <div class="{{ in_array($field['type'], ['textarea']) ? 'md:col-span-2' : '' }}">
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                                            {{ $field['label'] }}
                                        </label>

                                        @if ($field['type'] === 'text')
                                            <input type="text" name="extra_fields[{{ $field['name'] }}]"
                                                   class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200">

                                        @elseif ($field['type'] === 'number')
                                            <input type="number" name="extra_fields[{{ $field['name'] }}]"
                                                   class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200">

                                        @elseif ($field['type'] === 'textarea')
                                            <textarea name="extra_fields[{{ $field['name'] }}]" rows="4"
                                                      class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200 resize-none"></textarea>

                                        @elseif ($field['type'] === 'select')
                                            <select name="extra_fields[{{ $field['name'] }}]"
                                                    class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200 bg-white">
                                                @foreach ($field['options'] as $option)
                                                    <option value="{{ $option }}">{{ $option }}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    {{-- Submit Button --}}
                    <div class="mt-10">
                        <button type="submit"
                                class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-bold py-5 rounded-xl text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-200">
                            Book Now
                        </button>
                    </div>

                </div>
            </div>

            {{-- Info Footer --}}
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-500">
                    🔒 Your information is secure and protected
                </p>
            </div>

        </form>
    </div>
</div>
