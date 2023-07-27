<div class="flex justify-around space-x-1">
    <x-button
    href="{{ route('artikel.show', [$id]) }}"
    icon-only variant="primary" size="sm" pill
    >
        <x-coolicon-search-magnifying-glass class="w-4 h-4" />
    </x-button>

    <x-button
    href="{{ route('artikel.edit', [$id]) }}"
    icon-only variant="warning" size="sm" pill
    >
        <x-coolicon-note-edit class="w-4 h-4" />
    </x-button>

    <x-button
    href="{{ route('artikel.destroy', [$id]) }}"
    icon-only variant="danger" size="sm" pill
    >
        <x-coolicon-trash-empty class="w-4 h-4" />
    </x-button>

</div>
