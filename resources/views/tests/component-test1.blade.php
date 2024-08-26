<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
  test1

  <x-tests.card title="たいとる" content="本文" :message="$message"/>
  <x-tests.card title="たいとる2" />
  <x-tests.card title="たいとる３" class="bg-red-300"/>
</x-tests.app>
