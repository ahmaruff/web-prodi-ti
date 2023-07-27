<div class="min-h-screen"
    x-data="tiptap(@entangle($attributes->wire('model')->value()).defer)" x-init="() => init($refs.editor)"
    wire:ignore {{$attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'editor !w-full !max-w-full'])}}>
    <div class="flex flex-wrap items-center py-2 space-x-1 space-y-1 border-b-2">
    <!-- hide H1 button
        <button class="px-2 py-1 mt-1 ml-1 border-2 border-gray-700 rounded-lg"
        title="Heading 1"
        @click="toggleHeading(1)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 1 }, updatedAt) }"
        >
            <x-lucide-heading-1 class="w-5" />
        </button>
    -->
        <button class="px-2 py-1 mt-1 border-2 border-gray-700 rounded-lg "
        title="Heading 2"
        @click="toggleHeading(2)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 2 }, updatedAt) }"
        >
            <x-lucide-heading-2 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Heading 3"
        @click="toggleHeading(3)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 3 }, updatedAt) }"
        >
            <x-lucide-heading-3 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Heading 4"
        @click="toggleHeading(4)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 4 }, updatedAt) }"
        >
            <x-lucide-heading-4 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Bold"
        @click="toggleBold()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bold', updatedAt) }"
        >
            <x-lucide-bold class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Italic"
        @click="toggleItalic()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('italic', updatedAt) }"
        >
            <x-lucide-italic class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Strikethrough"
        @click="toggleStrike()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('strike', updatedAt) }"
        >
            <x-lucide-strikethrough class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Blockquote"
        @click="toggleBlockquote()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('blockquote', updatedAt) }"
        >
            <x-lucide-quotes class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Inline Code"
        @click="toggleCode()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('code', updatedAt) }"
        >
            <x-lucide-code class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Code Block"
        @click="toggleCodeBlock()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('codeBlock', updatedAt) }"
        >
            <x-lucide-curly-braces class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Bullet List"
        @click="toggleBulletList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bulletList', updatedAt) }"
        >
            <x-lucide-list class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Ordered List"
        @click="toggleOrderedList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('orderedList', updatedAt) }"
        >
            <x-lucide-list-ordered class="w-5" />
        </button>
      </div>
    <div x-ref="editor"></div>
</div>
