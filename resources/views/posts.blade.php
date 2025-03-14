<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("TO DO: form posts") }} --}}
                    {{-- @dump($errors->get('message')) --}}
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <textarea name="message" 
                            class="block w-full rounded-md border-white-300 bg-transparent shadow-sm
                                @error('message') dark:border-red-300 @enderror
                                focus:border-indigo-200 focus:ring focus:ring-indigo-300 focus:ring-opacity-500
                                dark:border-gray-600 dark:bg-gray-800 dark:text-white
                                dark:focus:border-indigo-300 dark:focus:ring dark:focus:ring-indigo-200 dark:focus:ring-opacity-50"
                            placeholder="{{__('What\'s do you think?')}}" 
                            > {{old('message')}}</textarea>
                            {{-- <input type="text" value="{{old('nombredelcampo')}}">
                            Método para ver errores con blade
                            <div class="mt-3">@error('message') {{$message}}@enderror</div> 
                            Método para ver errores con TAILWIND--}}
                            <x-input-error :message="$errors->get('message')"/>
                        <x-primary-button class="mt-6">
                            {{__("posting")}}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
