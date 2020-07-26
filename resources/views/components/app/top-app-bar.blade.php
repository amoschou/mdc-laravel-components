<x-top-app-bar :id="$id" :dense="$dense" :fixed="$fixed" :prominent="$prominent" :class="$class ?? ''">
  <x-slot name="title">Title</x-slot>
  <x-slot name="navigationIcon">
      <x-top-app-bar__navigation-icon>
          <x-slot name="icon">menu</x-slot>
      </x-top-app-bar__navigation-icon>
  </x-slot>
  <x-slot name="actionItems">
      <x-top-app-bar__action-item>
          <x-slot name="icon">file_download</x-slot>
          <x-slot name="ariaLabel">Download</x-slot>
      </x-top-app-bar__action-item>
      <x-top-app-bar__action-item>
          <x-slot name="icon">print</x-slot>
          <x-slot name="ariaLabel">Print</x-slot>
      </x-top-app-bar__action-item>
      <x-top-app-bar__action-item>
          <x-slot name="icon">favorite</x-slot>
          <x-slot name="ariaLabel">Favourite</x-slot>
      </x-top-app-bar__action-item>
  </x-slot>
</x-top-app-bar>
