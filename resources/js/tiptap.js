import {Editor} from '@tiptap/core'
import StarterKit from '@tiptap/starter-kit'
import Link from '@tiptap/extension-link';

export default (data_content) => {
    let editor;

    return {
        data_content : data_content,
        isLoaded() {
            return this.editor
        },
        isActive(type, opts = {}, updatedAt) {
            return editor.isActive(type, opts);
        },
        toggleBold() {
            editor.chain().toggleBold().focus().run();
        },
        toggleHeading(level) {
            editor.chain().toggleHeading({ level: level }).focus().run();
        },
        toggleItalic() {
            editor.chain().toggleItalic().focus().run()
        },
        toggleStrike() {
            editor.chain().toggleStrike().focus().run()
        },
        toggleLink(){
            editor.chain().toggleLink().focus().run()
        },
        toggleCode() {
            editor.chain().toggleCode().focus().run()
        },
        toggleBlockquote() {
            editor.chain().toggleBlockquote().focus().run()
        },
        toggleCodeBlock() {
            editor.chain().toggleCodeBlock().focus().run()
        },
        toggleBulletList() {
            editor.chain().toggleBulletList().focus().run()
        },
        toggleOrderedList() {
            editor.chain().toggleOrderedList().focus().run()
        },
        updatedAt : Date.now(),
        init(element) {
            const _this = this;
            console.log(data_content);
            editor = new Editor({
                element : element,
                extensions : [
                    StarterKit.configure({
                        heading: {
                            levels : [1,2,3,4,5]
                        }
                    }),
                    Link.configure({
                        protocols: ['mailto'],
                        HTMLAttributes: {
                            // Change rel to different value
                            // Allow search engines to follow links(remove nofollow)
                            rel: 'noopener noreferrer',
                          },
                    }),
                ],
                editorProps : {
                    attributes : {
                        // class : "min-h-[8rem] max-h-[100vh] pt-2 prose prose-dark overflow-y-auto focus:outline-none !w-full !max-w-full dark:prose-light resize-y"
                        class : "min-h-[10rem] max-h-screen overflow-y-auto focus:outline-none resize-y prose prose-slate xl:prose-lg dark:prose-invert"
                    }
                },
                content : _this.data_content.html,
                // content: this.data_content === "" ? '' : "<p>Hola</p>",
                onCreate({ editor }) {
                    _this.updatedAt = Date.now();
                },
                onUpdate({ editor }) {
                    _this.updatedAt = Date.now();
                    _this.data_content.html = editor.getHTML();
                    _this.data_content.json = editor.getJSON();
                    console.log(_this.data_content);
                },
                onSelectionUpdate({ editor }) {
                    _this.updatedAt = Date.now();
                },
                onBlur: ({ editor }) => {
                    console.log('editorUpdated');
                    // Livewire.emit('editorUpdated');
                },
            });
        },
    }
}
