<header class="
        mdc-top-app-bar
        @if($fixed) mdc-top-app-bar--fixed @endif
        @if($prominent) mdc-top-app-bar--prominent @endif
        @if($dense) mdc-top-app-bar--dense @endif
        @isset($attributes['class']) {{ $attributes['class'] }} @endisset
    "
    @isset($attributes['id']) id="top-app-bar::{{ $attributes['id'] }}::root" @endisset
    data-mdc-auto-init="MDCTopAppBar"
>
  <div class="mdc-top-app-bar__row">
    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
      {{ $navigationIcon }}
      <span class="mdc-top-app-bar__title">{{ $title }}</span>
    </section>
    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
      {{ $actionItems }}
    </section>
  </div>
</header>