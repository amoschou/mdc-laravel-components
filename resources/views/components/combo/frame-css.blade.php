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

    #{{ str_replace(':', '\:', "top-app-bar::{$id}::root") }} {
        position: absolute;
        @if($subType === 'below-top-app-bar')
            z-index: 7;
        @endif
    }
@endif
