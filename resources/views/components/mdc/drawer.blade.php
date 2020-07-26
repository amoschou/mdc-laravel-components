@php
  if($type === 'dismissible') {
    $dismissibleVariant = $attributes['dismissible-variant'] ?? 'full-height-drawer';
    // Allowable values are 'full-height-drawer' (default) and 'below-top-app-bar'.
  } else {
    $dismissibleVariant = NULL;
  }
@endphp
<aside class="
    mdc-drawer
    @if(in_array($type, ['dismissible', 'modal'])) mdc-drawer--{{ $type }} @endif
    @isset($attributes['class']) {{ $attributes['class'] }} @endisset
  "
  @if(in_array($type, ['dismissible', 'modal'])) data-mdc-auto-init="MDCDrawer" @endif
  @isset($id) id="drawer::{{ $id }}::root" @endisset
>
  @if($hasHeader)
    <div class="mdc-drawer__header">
      <h3 class="mdc-drawer__title">{{ $title }}</h3>
      <h6 class="mdc-drawer__subtitle">{{ $subtitle }}</h6>
      {{ $header }}
    </div>
  @endif
  <div class="mdc-drawer__content">
    {{ $slot }}
  </div>
</aside>

