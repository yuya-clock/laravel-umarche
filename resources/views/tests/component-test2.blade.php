<x-tests.app>
    <x-slot name="header">
        header2
    </x-slot>
    component-test2
    <x-test-class-base classBaseMessage="クラスベースメッセージだよ？"/>
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="クラスベースメッセージだよ？" defaultMessage="初期値から変更したメッセージだぞ？"/>
</x-tests.app>