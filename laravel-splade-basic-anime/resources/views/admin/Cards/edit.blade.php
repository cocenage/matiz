@seoTitle(__('Редактировать карточку'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование карточки') }} "{{ $card->name }}"
            </h2>
            <a href="{{ route('cards.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку карточки') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
            <x-splade-form method="PUT" action="{{ route('cards.update', $card->id) }}" :default="$card">
                <x-splade-input name="name" label="{{ __('Название бибика') }}" />
                <x-splade-input name="rent" label="{{ __('аренда') }}" />
                <x-splade-input name="volume" label="{{ __('объем') }}" />
                <x-splade-input name="power" label="{{ __('мощность') }}" />
                <x-splade-input name="box" label="{{ __('коробка передач') }}" />
                <x-splade-input name="fuel" label="{{ __('топливо') }}" />
                <x-splade-input name="drive" label="{{ __('привод') }}" />

                <x-splade-file name="image" label="{{ __('Изображение бибики') }}" />
                <x-splade-select name="isActive"  label="{{ __('Статус карточки') }}">
                    <option value="0">{{ __('Не активен') }}</option>
                    <option value="1">{{ __('Активен') }}</option>
                </x-splade-select>

                <x-splade-submit label="Сохранить" />
            </x-splade-form>
        </div>
</x-app-layout>
