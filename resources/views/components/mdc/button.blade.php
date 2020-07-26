@if($touch && $touchTargetWrapper) <div class="mdc-touch-target-wrapper"> @endif
  <button
    @isset($id) id="button::{{ $id }}::root" @endisset
    class="
      mdc-button
      @if($raised) mdc-button--raised @endif
      @if($unelevated )mdc-button--unelevated @endif
      @if($outlined) mdc-button--outlined @endif
      @if($touch) mdc-button--touch @endif
    "
    @if($disabled) disabled @endif
    data-mdc-auto-init="MDCRipple"
  >
    <div class="mdc-button__ripple"></div>
    @if($icon !== '' && !$trailingIcon)
      <i class="material-icons mdc-button__icon" aria-hidden="true">{{ $icon }}</i>
    @endif
    <span class="mdc-button__label">{{ $label }}</span>
    @if($icon !== '' && $trailingIcon)
      <i class="material-icons mdc-button__icon" aria-hidden="true">{{ $icon }}</i>
    @endif
  </button>
@if($touch && $touchTargetWrapper) </div> @endif

