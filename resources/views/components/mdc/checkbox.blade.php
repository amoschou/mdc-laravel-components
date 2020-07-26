@if($touch && $touchTargetWrapper) <div class="mdc-touch-target-wrapper"> @endif
  @if($label !== '') <div class="mdc-form-field" data-mdc-auto-init="MDCFormField"> @endif
    <div
      @isset($id) id="checkbox::{{ $id }}::root" @endisset
      class="
        mdc-checkbox
        @if($touch) mdc-checkbox--touch @endif
        @if($checked) mdc-checkbox--checked @endif
        @if($indeterminate) mdc-checkbox--indeterminate @endif
        @if($disabled) mdc-checkbox--disabled @endif
      "
      data-mdc-auto-init="MDCCheckbox"
    >
      <input
        type="checkbox"
        class="mdc-checkbox__native-control"
        id="checkbox::{{ $id }}::input"
        @if($checked) checked @endif
        @if($disabled) disabled @endif
        @if($indeterminate) data-indeterminate="true" @endif
      />
      <div class="mdc-checkbox__background">
        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
          <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
        </svg>
        <div class="mdc-checkbox__mixedmark"></div>
      </div>
      <div class="mdc-checkbox__ripple"></div>
    </div>
  @if($label !== '') <label for="checkbox::{{ $id }}::input">{{ $label }}</label></div> @endif
@if($touch && $touchTargetWrapper) </div> @endif

