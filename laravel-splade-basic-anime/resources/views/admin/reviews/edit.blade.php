@seoTitle(__('Редактировать услугу'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование услуги') }} "{{ $review->name }}"
            </h2>
            <a href="{{ route('reviews.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку отзывов') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
            <x-splade-form method="PUT" action="{{ route('reviews.update', $review->id) }}" :default="$review">
                <x-splade-input name="name"  label="{{ __('фио') }}" placeholder="{{ __('Иван Мельничук') }}"/>
                <x-splade-textarea name="text" label="{{ __('Отзыв') }}" placeholder="{{ __('Всем привет, меня зовут иван мельничук и я расскажу как меня') }}" />
                <x-splade-input name="order" label="{{ __('Скока заказов') }}" />
                <x-splade-select name="rating"  label="{{ __('Рейтнг') }}">
                    <option value="1">{{ __('⭐') }}</option>
                    <option value="2">{{ __('⭐️⭐️') }}</option>
                    <option value="3">{{ __('⭐⭐️⭐️') }}</option>
                    <option value="4">{{ __('⭐️⭐⭐⭐️') }}</option>
                    <option value="5">{{ __('⭐️⭐⭐⭐⭐️') }}</option>
                </x-splade-select>
                <x-splade-select name="isActive"  label="{{ __('Статус услуги') }}">
                    <option value="0">{{ __('Не активен') }}</option>
                    <option value="1">{{ __('Активен') }}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" />
            </x-splade-form>
        </div>
</x-app-layout>
