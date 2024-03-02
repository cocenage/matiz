@seoTitle(__('Отзывы'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Отзывы') }}
            </h2>
            <a href="{{ route('reviews.create') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новый отзыв') }}</a>
        </div>
   </x-slot>
        <div class="my-4 p-4 bg-white max-w-4xl mx-auto rounded-md">
            <x-splade-table :for="$reviews">
                @cell('image', $review)
                <img class="h-16 w-16" src="{{ Storage::url($review->image) }}" alt="">
                @endcell
                @cell('action', $reviews)
                    <div class="flex gap-2">
                        <Link href="{{ route('reviews.destroy', $reviews->id) }}" class="" confirm="Внимание!" confirm-text="Вы действительно хотите удалить отзыв?" confirm-button="Да" cancel-button="Отмена" method="DELETE">{{ __('Удалить') }}</Link>
                        <Link  href="{{ route('reviews.edit', $reviews->id) }}">Редактировать</Link>
                    </div>
                @endcell
                @cell('rating', $review)
                    @if($review->rating == 1)
                        <span>
                            {{__('⭐️')}}
                        </span>
                @elseif($review->rating == 2)
                    <span>
                            {{__('⭐️⭐️️️️️️')}}
                    </span>
                @elseif($review->rating == 3)
                    <span>
                            {{__('⭐️⭐️️️️️️⭐️')}}
                    </span>
                @elseif($review->rating == 4)
                    <span>
                            {{__('⭐️⭐️⭐️⭐️️️️️️')}}
                    </span>
                @elseif($review->rating == 5)
                    <span>
                            {{__('⭐️⭐️⭐️⭐️⭐️️️️️️')}}
                    </span>
                @endif
                @endcell

            </x-splade-table>
        </div>
</x-app-layout>
