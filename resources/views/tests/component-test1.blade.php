<x-tests.app>
    <x-slot name="header">
        header1
    </x-slot>
    component-test1

    <x-tests.card title="タイトル1" content="本文" :message="$goku_dialogue"/>
    <x-tests.card title="タイトル2"/>
    <x-tests.card title="CSSを適用したい" class="bg-red-200"/>
</x-tests.app>