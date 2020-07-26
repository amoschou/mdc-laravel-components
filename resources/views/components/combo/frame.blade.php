@php
  $classFixedAdjust = 'mdc-top-app-bar-'.($dense ? '-dense' : '').($prominent ? '-prominent' : '').'-fixed-adjust';
  $frameContext = [
    'type' => $type,
    'subType' => $subType,
    'id' => 'frame::'.$id,
    'prominent' => $prominent,
    'dense' => $dense,
    'fixed' => $fixed,
  ];
@endphp

@if($type === 'modal')
  @include('components.app.drawer', $frameContext)
  <div class="mdc-drawer-scrim"></div>
  <div id="frame::{{ $id }}::main">
    @include('components.app.top-app-bar', $frameContext)
    <div class="{{ $classFixedAdjust }}"></div>
    <div class="mdc-layout-grid mdc-layout-grid--padding-top-0">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">{{ $slot }}</div>
      </div>
    </div>
  </div>
@endif

@if($type === 'dismissible' && $subType === 'full-height-drawer')
  @include('components.app.drawer', $frameContext)
  <div class="mdc-drawer-app-content">
    @include('components.app.top-app-bar', array_merge($frameContext, ['class' => 'app-bar']))
    <main class="main-content" id="frame::{{ $id }}::main">
      <div class="{{ $classFixedAdjust }}">
        <div class="mdc-layout-grid mdc-layout-grid--padding-top-0">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">{{ $slot }}</div>
          </div>
        </div>
      </div>
    </main>
  </div>
@endif

@if($type === 'dismissible' && $subType === 'below-top-app-bar')
  @include('components.app.top-app-bar', array_merge($frameContext, ['class' => 'app-bar']))
  @include('components.app.drawer', array_merge($frameContext, ['class' => $classFixedAdjust]))
  <div class="mdc-drawer-app-content {{ $classFixedAdjust }}">
    <main class="main-content" id="frame::{{ $id }}::main">
      <div class="mdc-layout-grid mdc-layout-grid--padding-top-0">
        <div class="mdc-layout-grid__inner">
          <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">{{ $slot }}</div>
        </div>
      </div>
    </main>
  </div>
@endif

@if($type === '' || $type === 'standard')
  @include('components.app.drawer', $frameContext)
  @include('components.app.top-app-bar', $frameContext)
  <div class="mdc-layout-grid mdc-layout-grid--padding-top-0">
    <div class="mdc-layout-grid__inner">
      <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop mdc-layout-grid__cell--span-8-tablet mdc-layout-grid__cell--span-4-phone">{{ $slot }}</div>
    </div>
  </div>
@endif


@push('styles')
  <style>
    .mdc-layout-grid--padding-top-0 {
      padding-top: 0px;
    }

    @if($type === 'dismissible')
      body {
        display: flex;
        height: 100vh;
      }

      .mdc-drawer-app-content {
        flex: auto;
        overflow: auto;
        position: relative;
      }

      .main-content {
        overflow: auto;
        height: 100%;
      }

      .app-bar {
        position: absolute;
      }

      @if($subType === 'below-top-app-bar')
        .mdc-top-app-bar {
          z-index: 7;
        }
      @endif
    @endif
  </style>
@endpush





@push('scripts')
    <script type="text/javascript">
        const topAppBarEl = document.getElementById('top-app-bar::frame::{{ $id }}::root');
        const drawerEl = document.getElementById('drawer::frame::{{ $id }}::root');
        const listEl = document.getElementById('list::frame::{{ $id }}::root');
        const mainContentEl = document.getElementById('frame::{{ $id }}::main');
        const topAppBar = topAppBarEl.MDCTopAppBar;
        const drawer = drawerEl.MDCDrawer;
        @if($type === '' || $type === 'standard')
            listEl.MDCList.wrapFocus = true;
        @endif
        const firstInputOrButtonEl = mainContentEl.querySelector('input, button');
        @if($type === 'dismissible')
            if(firstInputOrButtonEl !== null) {
                listEl.addEventListener('click', (event) => {
                    firstInputOrButtonEl.focus();
                });
                document.body.addEventListener('MDCDrawer:closed', () => {
                    firstInputOrButtonEl.focus();
                });
            }
            topAppBar.setScrollTarget(mainContentEl);
            topAppBar.listen('MDCTopAppBar:nav', () => {
                drawer.open = !drawer.open;
            });
        @endif
        @if($type === 'modal')
            listEl.addEventListener('click', (event) => {
                drawer.open = false;
            });
            if(firstInputOrButtonEl !== null) {
                document.body.addEventListener('MDCDrawer:closed', () => {
                  firstInputOrButtonEl.focus();
                });
            }
            topAppBar.listen('MDCTopAppBar:nav', () => {
                drawer.open = !drawer.open;
            });
        @endif
    </script>
@endpush