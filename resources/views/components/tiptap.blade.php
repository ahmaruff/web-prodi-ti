<div class="min-h-screen"
    x-data="tiptap(@entangle($attributes->wire('model')->value()).defer)" x-init="() => init($refs.editor)"
    wire:ignore {{$attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'editor !w-full !max-w-full'])}}>
    <div class="flex flex-wrap items-center py-2 space-x-1 space-y-1 border-b-2">
        <button class="px-2 py-1 mt-1 ml-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(1)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 1 }, updatedAt) }"
        >
            <x-coolicon-heading-h1 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg "
        @click="toggleHeading(2)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 2 }, updatedAt) }"
        >
            <x-coolicon-heading-h2 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(3)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 3 }, updatedAt) }"
        >
            <x-coolicon-heading-h3 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(4)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 4 }, updatedAt) }"
        >
            <x-coolicon-heading-h4 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBold()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bold', updatedAt) }"
        >
            <x-coolicon-bold class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleItalic()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('italic', updatedAt) }"
        >
            <x-coolicon-italic class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleStrike()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('strike', updatedAt) }"
        >
            <x-coolicon-strikethrough class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBlockquote()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('blockquote', updatedAt) }"
        >
            <x-coolicon-double-quotes-r class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleCode()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('code', updatedAt) }"
        >
            <x-coolicon-code class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleCodeBlock()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('codeBlock', updatedAt) }"
        >
            <x-coolicon-window-code-block class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBulletList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bulletList', updatedAt) }"
        >
            <x-coolicon-list-unordered class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleOrderedList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('orderedList', updatedAt) }"
        >
            <x-coolicon-list-ordered class="w-5" />
        </button>
      </div>
    <div x-ref="editor"></div>
</div>
