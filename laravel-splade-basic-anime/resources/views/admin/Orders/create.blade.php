@seoTitle(__('Новая категория'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Новая товар') }}
            </h2>
            <a href="{{ route('orders.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку товаров') }}</a>
        </div>
   </x-slot>
       <div class="my-4 p-4 bg-white max-w-3xl mx-auto rounded-md">
           <x-splade-form action="{{ route('orders.store') }}">

               <x-splade-input name="name" label="{{ __('имя') }}" />
               <x-splade-input name="surname" label="{{ __('фамилия') }}" />
               <x-splade-input name="number" label="{{ __('номер тела') }}" />
               <x-splade-input name="date_start" label="{{ __('старт дата') }}" date/>
               <x-splade-input name="date_end" label="{{ __('конец старта') }}" date/>

               <x-splade-input name="drive" label="{{ __('привод') }}" />

               <x-splade-select label=" бибикус " name="card_id" :options="$cards"/>

               <x-splade-select name="isActive"  label="{{ __('Статус карточки') }}">
                   <option value="0">{{ __('Не активен') }}</option>
                   <option value="1">{{ __('Активен') }}</option>
               </x-splade-select>
               <x-splade-submit label="Сохранить" />
           </x-splade-form>
       </div>
</x-app-layout>
