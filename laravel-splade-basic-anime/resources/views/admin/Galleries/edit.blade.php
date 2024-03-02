@seoTitle(__('Редактировать карточку'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование карточки') }} "{{ $gallery->name }}"
            </h2>
            <a href="{{ route('galleries.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку galleries') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
            <x-splade-form method="PUT" action="{{ route('galleries.update', $gallery->id) }}" :default="$gallery">
                <x-splade-file name="image" label="{{ __('galleries бибики') }}" />
                <x-splade-select name="isActive"  label="{{ __('Статус rgalleries') }}">
                    <option value="0">{{ __('Не активен') }}</option>
                    <option value="1">{{ __('Активен') }}</option>
                </x-splade-select>

                <x-splade-submit label="Сохранить" />
            </x-splade-form>
        </div>
</x-app-layout>