<x-list :id="$id ?? NULL">
  <a class="mdc-list-item mdc-list-item--activated" href="#" aria-current="page" @if($type === 'modal') tabindex="0" @endif>
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">inbox</i>
    <span class="mdc-list-item__text">Inbox</span>
  </a>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">star</i>
    <span class="mdc-list-item__text">Star</span>
  </a>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">send</i>
    <span class="mdc-list-item__text">Sent Mail</span>
  </a>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">drafts</i>
    <span class="mdc-list-item__text">Drafts</span>
  </a>

  <hr class="mdc-list-divider">
  <h6 class="mdc-list-group__subheader">Labels</h6>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
    <span class="mdc-list-item__text">Family</span>
  </a>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
    <span class="mdc-list-item__text">Friends</span>
  </a>
  <a class="mdc-list-item" href="#">
    <span class="mdc-list-item__ripple"></span>
    <i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>
    <span class="mdc-list-item__text">Work</span>
  </a>
</x-list>
