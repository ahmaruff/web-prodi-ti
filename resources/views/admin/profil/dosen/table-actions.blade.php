<div class="flex justify-around space-x-1">
    <x-button
    href="{{ route('admin.dosen.show', [$id]) }}"
    icon-only variant="primary" size="sm" pill
    >
        <x-lucide-view class="w-4 h-4" />
    </x-button>

    <x-button
    href="{{ route('admin.dosen.edit', [$id]) }}"
    icon-only variant="warning" size="sm" pill
    >
        <x-lucide-edit class="w-4 h-4" />
    </x-button>

    <form action="{{ route('admin.dosen.destroy', [$id]) }}" method="post">
        @method('DELETE')
        @csrf
        <x-button
        type="submit"
        icon-only variant="danger" size="sm" pill
        >
            <x-lucide-trash-2 class="w-4 h-4" />
        </x-button>
    </form>
</div>
