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
        #{{ str_replace(':', '\:', "top-app-bar::{$id}::root") }} {
            z-index: 7;
        }
    @endif
@endif
