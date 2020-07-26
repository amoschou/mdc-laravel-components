<x-drawer has-header open="true" :type="$type" :id="$id" :class="$class ?? ''">
  <x-slot name="title">Drawer title</x-slot>
  <x-slot name="subtitle">Subtitle</x-slot>
  <x-slot name="header">Header</x-slot>
  @include('components.app.drawer__content', $frameContext)
</x-drawer>
