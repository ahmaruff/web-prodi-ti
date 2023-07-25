<div class="min-h-screen"
    x-data="tiptap(@entangle($attributes->wire('model')->value()).defer)" x-init="() => init($refs.editor)"
    wire:ignore {{$attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'editor !w-full !max-w-full'])}}>
    <div class="flex flex-wrap items-center py-2 space-x-1 space-y-1 border-b-2">
        <button class="px-2 py-1 mt-1 ml-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(1)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 1 }, updatedAt) }"
        >
        H1
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg "
        @click="toggleHeading(2)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 2 }, updatedAt) }"
        >
        H2
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(3)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 3 }, updatedAt) }"
        >
        H3
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleHeading(4)"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('heading', { level: 3 }, updatedAt) }"
        >
        H4
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBold()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bold', updatedAt) }"
        >
        bold
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleItalic()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('italic', updatedAt) }"
        >
        italic
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleStrike()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('strike', updatedAt) }"
        >
        strike
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBlockquote()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('blockquote', updatedAt) }"
        >
        quotes
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleCode()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('code', updatedAt) }"
        >
        inline code
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleCodeBlock()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('codeBlock', updatedAt) }"
        >
        code block
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleBulletList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('bulletList', updatedAt) }"
        >
        bullet list
        </button>
        <button class="px-2 py-1 border-2 border-gray-700 rounded-lg"
        @click="toggleOrderedList()"
        :class="{ 'bg-gray-700 text-gray-50' : isActive('orderedList', updatedAt) }"
        >
        ordered list
        </button>
      </div>
    <div x-ref="editor"></div>
</div>
@pushOnce('styles')
<style>
.editor-menu-fixed button {
  border: 1px solid grey;
  border-radius: 3px;
  background: #e9e9e9;
}

.editor-menu-fixed button.is-active {
  font-weight: bold;
  background: #bfbfbf;
  border-color: #333;
}

h1,
h2,
h3 {
  font-weight: 400;
}

</style>
@endPushOnce
