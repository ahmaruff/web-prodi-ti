<div class="min-h-[30rem] p-4"
    x-data="tiptap(content)" x-init="() => init($refs.editor)"
    {{-- wire:ignore {{$attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'editor !w-full !max-w-full'])}} --}}
    >
    <div class="flex flex-wrap items-center py-2 space-x-1 space-y-1 border-b-2">
    <!-- hide H1 button
        <button class="px-2 py-1 mt-1 ml-1 border-2 border-gray-700 rounded-lg"
        title="Heading 1"
        @click="toggleHeading(1)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 1 }, updatedAt) }"
        >
            <x-coolicon-heading-h1 class="w-5" />
        </button>
    -->
        <button class="px-2 py-1 mt-1 border-2 border-gray-700 rounded-lg "
        title="Heading 2"
        @click.prevent="toggleHeading(2)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 2 }, updatedAt) }"
        >
            <x-coolicon-heading-h2 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Heading 3"
        @click.prevent="toggleHeading(3)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 3 }, updatedAt) }"
        >
            <x-coolicon-heading-h3 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Heading 4"
        @click.prevent="toggleHeading(4)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 4 }, updatedAt) }"
        >
            <x-coolicon-heading-h4 class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Bold"
        @click.prevent="toggleBold()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bold', updatedAt) }"
        >
            <x-coolicon-bold class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Italic"
        @click.prevent="toggleItalic()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('italic', updatedAt) }"
        >
            <x-coolicon-italic class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Strikethrough"
        @click.prevent="toggleStrike()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('strike', updatedAt) }"
        >
            <x-coolicon-strikethrough class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Blockquote"
        @click.prevent="toggleBlockquote()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('blockquote', updatedAt) }"
        >
            <x-coolicon-double-quotes-l class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Inline Code"
        @click.prevent="toggleCode()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('code', updatedAt) }"
        >
            <x-coolicon-code class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Code Block"
        @click.prevent="toggleCodeBlock()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('codeBlock', updatedAt) }"
        >
            <x-coolicon-window-code-block class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Bullet List"
        @click.prevent="toggleBulletList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bulletList', updatedAt) }"
        >
            <x-coolicon-list-unordered class="w-5" />
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        title="Ordered List"
        @click.prevent="toggleOrderedList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('orderedList', updatedAt) }"
        >
            <x-coolicon-list-ordered class="w-5" />
        </button>
      </div>
    <div x-ref="editor"></div>
</div>
