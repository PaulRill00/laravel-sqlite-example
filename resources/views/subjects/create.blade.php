<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ceate Subject') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-10 py-8">
                <form method="POST" action="{{ route('subjects.store') }}">
                  @csrf

                  <!-- Subject name -->
                  <div>
                      <x-label for="name" :value="__('Subject Name')" />

                      <x-input id="name" class="block mt-1 w-full"
                        type="text"
                        name="name"
                        required />
                  </div>

                  <!-- Subject code -->
                  <div>
                      <x-label for="code" :value="__('Subject Code')" />

                      <x-input id="code" class="block mt-1 w-full"
                        type="text"
                        name="code"
                        required />
                  </div>

                  <!-- Subject name -->
                  <div>
                      <x-label for="description" :value="__('Subject Description')" />

                      <x-input id="description" class="block mt-1 w-full"
                        type="text"
                        name="description"
                        required />
                  </div>

                  <!-- Subject name -->
                  <div>
                      <x-label for="points" :value="__('Subject Points')" />

                      <x-input id="points" class="block mt-1 w-full"
                        type="number"
                        name="points"
                        min="0"
                        step="1"
                        required />
                  </div>

                  <div class="flex justify-end mt-4">
                      <x-button>
                          {{ __('Confirm') }}
                      </x-button>
                  </div>
              </form>

            </div>
        </div>
    </div>
</x-app-layout>