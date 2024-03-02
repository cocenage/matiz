@seoTitle(__('Новый товар'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новый отзыв') }}
            </h2>
            <a href="{{ route('reviews.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку отзывов') }}</a>
        </div>
   </x-slot>
       <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
           <x-splade-form action="{{ route('reviews.store') }}">
               <x-splade-input name="name" label="{{ __('Фио') }}" placeholder="{{ __('ФИО') }}"/>
               <x-splade-textarea name="text" label="{{ __('ОТЗЫВ') }}" placeholder="{{ __('ОТЗЫВ') }}" />
               <x-splade-input name="order" label="{{ __('3 заказа') }}" />
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
