{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Brands" icon="la la-question" :link="backpack_url('brand')" />
<x-backpack::menu-item title="Categories" icon="la la-question" :link="backpack_url('category')" />
<x-backpack::menu-item title="Products" icon="la la-question" :link="backpack_url('product')" />
<x-backpack::menu-item title="Attributes" icon="la la-question" :link="backpack_url('attribute')" />
<x-backpack::menu-item title="Attribute values" icon="la la-question" :link="backpack_url('attribute-value')" />
<x-backpack::menu-item title="Attribute value color images" icon="la la-question" :link="backpack_url('attribute-value-color-image')" />
<x-backpack::menu-item title="Variant groups" icon="la la-question" :link="backpack_url('variant-group')" />
<x-backpack::menu-item title="Variant prices" icon="la la-question" :link="backpack_url('variant-price')" />
<x-backpack::menu-item title="Sku lists" icon="la la-question" :link="backpack_url('sku-list')" />

<x-backpack::menu-dropdown title="Authentication" icon="la la-puzzle-piece">
    {{--<x-backpack::menu-dropdown-header title="Authentication" />--}}
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>

@if(isShellAdminOrSuperAdmin())
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('route-list') }}'><i class='nav-icon la la-route'></i> Route lists</a></li>

    <!-- Backup -->
    <x-backpack::menu-dropdown title="Backup & restore" icon="la la-hdd">
        {{--<a class="nav-link nav-group-toggle" href="#"><i class="nav-icon la la-hdd"></i> Backup &amp; restore</a>--}}
        <ul class="nav-dropdown-items nav-group-items">
            {{--<li class='nav-item'><a class='nav-link' href='{{ backpack_url('backup') }}'><i class='nav-icon la la-download'></i> Backups</a></li>--}}
            {{--<li class='nav-item'><a class='nav-link' href='{{ route('backup.table') }}'><i class='nav-icon la la-cloud-download'></i> Backup to seed</a></li>--}}
            @include("partials.menu-item-confirmation", [
                "text" => "Restore from seed",
                "icon" => "la la-cloud-upload",
                "url" => route("shell.command.artisan.migrate.fresh.seed"),
                "confirmation" => "Are you sure you want to restore from seed?"
            ])
            @include("partials.menu-item-confirmation", [
                "text" => "Backup to seed",
                "icon" => "la la-cloud-download",
                "url" => route("backup.table"),
                "confirmation" => "Are you sure you want to backup to seed?"
            ])
            @include("partials.menu-item-confirmation", [
                "text" => "Remove seed",
                "icon" => "la la-cloud-meatball",
                "url" => route("remove.seed"),
                "confirmation" => "Are you sure you want to remove seed from the database?"
            ])
        </ul>
    </x-backpack::menu-dropdown>
@endif

<x-backpack::menu-item :title="trans('backpack::crud.file_manager')" icon="la la-files-o" :link="backpack_url('elfinder')" />
<x-backpack::menu-item title='Logs' icon='la la-terminal' :link="backpack_url('log')" />
