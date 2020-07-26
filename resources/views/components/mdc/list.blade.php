<nav class="mdc-list" @isset($id) id="list::{{ $id }}::root" @endisset>
  {{ $slot }}
</nav>
