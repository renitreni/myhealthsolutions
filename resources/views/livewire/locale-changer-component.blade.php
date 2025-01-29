<div>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Translate
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#" wire:click='changeTo("ar")'>{{ __('arabic') }}</a>
            <a class="dropdown-item" href="#" wire:click='changeTo("en")'>{{ __('english') }}</a>
        </div>
    </li>
</div>
